#!/bin/bash

# Attendre que la base de données soit prête avant de lancer les migrations
echo "Waiting for the database to be ready..."
while ! nc -z $DB_HOST $DB_PORT; do
  sleep 1
done

# Exécuter les migrations
php artisan migrate --force

# Lancer PHP-FPM
exec "$@"
