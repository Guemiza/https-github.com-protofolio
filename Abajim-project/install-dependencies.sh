#!/bin/bash
set -e

# Met à jour les paquets et installe les dépendances nécessaires
apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        libonig-dev \
        libexif-dev \
        libgd-dev \
        iputils-ping \
        default-mysql-client \
        netcat \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Nettoie les caches et les fichiers temporaires
rm -rf /tmp/*

# Exécute le script d'installation des dépendances
/usr/local/bin/install-dependencies.sh
