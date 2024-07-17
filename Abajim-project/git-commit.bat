@echo off

REM Ajoute tous les fichiers modifiés ou nouveaux
git add .

REM Crée un message de commit avec la date du jour
set commit_message=Mise à jour du projet le %date:~6,4%-%date:~3,2%-%date:~0,2%

REM Effectue le commit avec le message
git commit -m "%commit_message%"

REM Pousse les modifications vers la branche principale (main)
git push origin main
