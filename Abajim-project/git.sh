#!/bin/bash

# Ajoute tous les fichiers modifiés ou nouveaux
git add .

# Crée un message de commit avec la date du jour
commit_message="Mise à jour du projet le $(date +'%Y-%m-%d')"

# Effectue le commit avec le message
git commit -m "$commit_message"

# Pousse les modifications vers la branche principale (main)
git push origin main
