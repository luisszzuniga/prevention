# Prevention

Le projet ayant le nom de code ACP consiste en le développement d'un service SaaS pour la formation des professionnels de la conduite.


## Première installation du projet


### installation LARAVEL

`composer create-project laravel/laravel`  

### installation BREEZE

`php artisan breeze:install`

### installation VUE

`npm install vue@latest vue-router@4`

### installation DEBUGBAR

`composer require barryvdh/laravel-debugbar --dev`

du projet : https://github.com/barryvdh/laravel-debugbar.git

### installation LARAVEL IDE HELPER GENERATOR  

`composer require --dev barryvdh/laravel-ide-helper`

du projet : https://github.com/barryvdh/laravel-ide-helper.git



## Installation du projet en environnement de développement

1. Cloner le projet 

`git clone git@gitlab.com:maxime22440/acprevention.git`

2. Basculer vers la branche develop 

`git checkout develop`

3. Installer les dépendances composer

`composer install`

4. Créer le fichier .env et configurer l'accès à la base de données mariadb

`DB_CONNECTION=mysql`  
`DB_HOST=127.0.0.1`  
`DB_PORT=3306`  
`DB_DATABASE=ACPreventionDB`  
`DB_USERNAME=`  
`DB_PASSWORD=`

5. Créer la base de donnée `ACPreventionDB` en exécutant la commande sql 

`CREATE DATABASE ACPreventionDB;`

6. Lancer les migrations pour créer les tables de la base de données

`php artisan migrate`

7. Lancer les seeders 

`php artisan db:seed`

8. Générer des objets de test 

`php artisan create:objects numberOfObject` 

Avec l'un des paramètres suivants : `vehicles`, `users`, `themes`, `roles`, `progress`, `offers`, `evaluations`, `criteria`, `courses`, `companies`.

9. Générer une clé d'application unique 

`php artisan key:generate`

10. Installer Vite

`npm install -g vite`

11. Lancer le projet en mode développement

`npm run dev`

12.  lancer le serveur local

`php artisan serve`





