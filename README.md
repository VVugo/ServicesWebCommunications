# Services web communication

- Réalisation d'une application client-serveur de recherche client sous **PHP** en PDO en ayant une architecture SOAP ou REST.
- Base de donnée sous **MySqlServer**.
---

## Utilisation de Composer

L'utilisation de composer dans ce projet permet d'utiliser des dépendances dans notre projet, on utilisera les dépendances suivantes.

##### .env :

- Défini un fichier de variables d'environnements dans lequelles on enregistrera les accès à notre base de donnée.

##### PhpStan :
- Outil d'analyse statique, il détecte les problèmes de structure dans le code.

##### PHPMD / PHPCS :
- Dépendance permettant de détecter les sources possibles de bugs provenant de méthodes / expressions trop complexes.
- Garantit le respect des conventions de développement PSR.

##### Prettier :
- Formate le code de façon automatique afin de corriger une partie des problèmes remontés par PHPCS.

##### Bootstrap :
- La mise en forme de notre application web

---
## Installation Composer
Intaller composer dans le répertoire actuel, executé les lignes de commandes suivantes dans votre terminal afin d'installer automatiquement Composer ou suivez le guide d'[installation](https://getcomposer.org/download/).

**Installation** :
```php
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

**Initialisation** :

```php
php composer init
```
----

## Installation des dépendances via composer
---
**Installation | .ENV** :
```php
php composer require symfony/dotenv
```
**Utilisation | .ENV** :
```php
use SymfonyComponentDotenvDotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

// you can also load several files
$dotenv->load(__DIR__.'/.env', __DIR__.'/.env.dev');

// overwrites existing env variables
$dotenv->overload(__DIR__.'/.env');

// loads .env, .env.local, and .env.$APP_ENV.local or .env.$APP_ENV
$dotenv->loadEnv(__DIR__.'/.env');
```
---
**Installation | PHPSTAN** :
```php
php composer require --dev phpstan/phpstan
```
---
**Installation | PHPMD** :
```php
php composer require phpmd/phpmd
```
---
**Installation | PHPCS** :
```php
php composer require squizlabs/php_codesniffer
```
---
**Installation | PRETTIER** :
```npm
npm install --save-dev prettier @plugin-php
```
---
**Installation GIT | NPM** :
```php
git init
git remote add origin https://github.com/VVugo/ServicesWebCommunications.git

npm init
```
---
## Installation de Husky
On utilise Husky dans ce projet afin de créer un hooks (un script qui s'éxécutera avant un commit dans notre projet).
```
npm insall husky --save-dev
```

**Modification de notre fichier package.json :**
Dans package.json il est important d'ajouter les lignes suivantes afin de pouvoir utiliser nos dépendances automatiquement a lancement d'un pre-commit 
```
   "husky": {
        "hooks": {
            "pre-commit": "vendor/bin/phpcs src/ && vendor/bin/phpcbf src/ && vendor/bin/phpstan analyse src/ && vendor/bin/phpmd src/ text cleancode"
        }
    },

```

## Edited By
**Auteur :**
