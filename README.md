# Service API Communication WEB

## BREST ADRIEN

## Objectif :

Réaliser une application web service qui utilise un API soit de type REST ou SOAP,

L'application permettra d'afficher une liste de clients, et une barre de recherche devra être disponible pour chercher un client sur tous les champs. (ref client,nom, prenom ...)

 Je voulais tout d’abord développer sous Php Native, mais j’ai remarque que ce n’était pas le choix le plus facile, car il pouvait y avir des problèmes de sécurité. De plus les Framework dont j’ai choisi mon permis de les découvrir, et de me simplifier la tache.

# Utilisation de Symfony :
J’ai choisi le framework Symfony, afin de faire une application web sous PHP, en utilisant la méthode d’API REST afin d’utiliser des méthodes HTTP pour récupérer les informations des Clients.
C’est également un choix personnel, je suis habitué à développer sous le PHP, mais je n’avais jamais de Symfony, c’était un bon moyen d’apprendre un nouveau FrameWork.

# Utilisation de Api PlatForm :
Le FrameWork Symfony n’est pas très reconnue pour faire des applications avec des API, c’est pour cela que du côté API j’ai utilise API PlatForm. Il permet de créer et de personnaliser facilement des API en quelques minutes, dans notre cas nous avons juste besoin de lire des informations depuis l’API. Une fois de plus c’est un Framework qui m’était inconnue.

# Fonctionnement du projet :

Dans le dossier du projet, lancer la commande qui permet d'installer composer ainsi que toutes les
dépendances.

**composer install**

Une fois l'installation de composer, lancer un serveur sous Xampp ou autre et modifier le **.env** et indiquer
les liens / identifiants de connexion à la base de données.

Lancer la commande suivante qui permet de synchroniser la base de données locale avec les informations
pré-enregistrées :

**php bin/console doctrine:migrations:migrate**

Importation des données dans la base de données (cette operation peut durer plusieurs minutes):

## Php bin/console import:csv

L’application peut être lancée :

**symphony serve**

La page est accessible sur **[http://127.0.0.1:8000/](http://127.0.0.1:8000/)**


# Feuille de route :

Utilisation de Api platform

Création du project Symfony

**composer create-project symfony/skeleton service-web**

Installation de APi Platform

**Composer require api**

Création de l’entité Client

**Php bin/console make:Entity**

 Création de la base de donnée :

**Php bin/console doctrine:database:create**

** Php bin/console doctrine:schema:create**

Installation de makerbundle:

**Composer require symphony/maker-bundle**


