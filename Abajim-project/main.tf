# Fournisseur AWS
provider "aws" {
  region = "us-east-1" 
}

# Créer un VPC
resource "aws_vpc" "main" {
  cidr_block = "10.0.0.0/16"

  tags = {
    Name = "main_vpc"
  }
}

# Créer une sous-réseau public
resource "aws_subnet" "public_subnet" {
  vpc_id            = aws_vpc.main.id
  cidr_block        = "10.0.1.0/24"
  availability_zone = "us-east-1a" # Remplacez par une zone de disponibilité de votre région

  tags = {
    Name = "public_subnet"
  }
}

# Créer une passerelle Internet
resource "aws_internet_gateway" "main" {
  vpc_id = aws_vpc.main.id

  tags = {
    Name = "main_igw"
  }
}

# Créer une table de routage
resource "aws_route_table" "main" {
  vpc_id = aws_vpc.main.id

  route {
    cidr_block = "0.0.0.0/0"
    gateway_id = aws_internet_gateway.main.id
  }

  tags = {
    Name = "main_route_table"
  }
}

# Associer la table de routage à la sous-réseau public
resource "aws_route_table_association" "a" {
  subnet_id      = aws_subnet.public_subnet.id
  route_table_id = aws_route_table.main.id
}
