ls
su -u
sudo su
sudo apt-get install wget gpg
wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > packages.microsoft.gpg
sudo install -D -o root -g root -m 644 packages.microsoft.gpg /etc/apt/keyrings/packages.microsoft.gpg
sudo docker ps
sudo apt-get install ca-certificates curl gnupg
ls
ll
wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb 
sudo dpkg -i google-chrome-stable_current_amd64.deb 
sudo apt-get install -f 
sud apt update
sudo apt update
sudo sh -c 'echo "deb [arch=amd64,arm64,armhf signed-by=/etc/apt/keyrings/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main" > /etc/apt/sources.list.d/vscode.list'
rm -f packages.microsoft.gpg
sudo apt install apt-transport-https
sudo apt update
sudo apt install code # or code-insiders
sudo install -m 0755 -d /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
sudo chmod a+r /etc/apt/keyrings/docker.gpg
echo   "deb [arch="$(dpkg --print-architecture)" signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
  "$(. /etc/os-release && echo "$VERSION_CODENAME")" stable" |   sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
sudo apt-get update
sudo apt-get install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
sudo docker run hello-world
docker ps
sudo chmod 666 /var/run/docker.sock 
docker ps
ls
echo "deb http://deb.anydesk.com/ all main" | sudo tee /etc/apt/sources.list.d/anydesk-stable.list
sudo apt update
sudo apt install anydesk
curl -fsSL https://keys.anydesk.com/repos/DEB-GPG-KEY|sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/anydesk.gpg
echo "deb http://deb.anydesk.com/ all main" | sudo tee /etc/apt/sources.list.d/anydesk-stable.list
sudo apt install anydesk
sudo apt -y upgrade
sudo apt install anydesk
sudo apt update
sudo apt install anydesk
anydesk
sudo apt-get install git
git 
git add .*
ls
anydesk
sudo apt install anydesk
anydesk
sudo apt-get install git
gh repo clone Guemiza/https-github.com-protofolio
git repo clone Guemiza/https-github.com-protofolio
git  clone Guemiza/https-github.com-protofolio.git
git clone /https-github.com-Guemiza-Django-python.git
docker build -t python:latest 
git clone /https-github.com-Guemiza-Django-python.git
clear
git remote
git remote -v
sudo git remote -v
git clone https://github.com/Guemiza-Django/python.git
git config --global credential.helper cache
clear
git config --global user.password
git config --global user.
git config --global user .
git config --global user.password
git config --global user.name 
git config --global credential.helper store
git config --global --edit 
gh config --global --edit 
git config --global --edit 
gh config --global --edit *
git pull
git config --name-only 
git clone /https-github.com-Guemiza-Django-python.git-
git clone https://github.com/Guemiza-Django/python.git
I understand that you're still experiencing authentication issues when trying to clone the Git repository. Here are some detailed steps you can follow to troubleshoot and resolve the "Authentication failed" error:

1. **Use Git Credentials Manager:**
   If you're using Windows, you can utilize the Git Credential Manager to manage your credentials securely. Make sure you have it installed, and then try the following steps:
2. **Use Personal Access Token (PAT):**
3. **Check System Time:**
4. **Clear Cached Credentials:**
5. **SSH Authentication:**
