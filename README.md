# 🎯  Guide de démarrage de la partie backend du projet gestion DES APPARTEMENTS 

Bienvenue dans ce projet Laravel. Ce guide vous aidera à configurer et lancer le projet en local.

## ✅ Prérequis

Assurez-vous d'avoir les éléments suivants installés :

- PHP >= 8.1
- Composer
- MySQL ou PostgreSQL
- Node.js et npm (facultatif pour les assets front-end)
- Laravel CLI (facultatif mais recommandé)

## 🚀 Étapes d'installation

1. **Cloner le dépôt**

éxecuter avec git bash
git clone https://github.com/nom-utilisateur/nom-du-projet.git
cd nom-du-projet

2. Installer les dépendances php

composer install

3. Configurer le projet (après avoir créer avec Mysql la base de données)

cp .env.example .env
php artisan key:generate

4. Modifier le fichier .env
php artisan key:generate
**** fichier .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_la_base
DB_USERNAME=utilisateur
DB_PASSWORD=motdepasse

5. Lancer les migrations

php artisan migrate

6.Lancer le serveur local

php artisan serve



   

