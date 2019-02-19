# 

## installation de symfony et de l'API platform

-Pour créer un nouveau dossier symfony entrer la commande ci dessous:

 $ composer create-project symfony/website-skeleton my-project
 
 puis pour installer l'api dans les fichiers.
 
 $ composer require api
 
 ensuite créer vos entite et la base de donnée.


## commande pour lancé les tests unitaires.

php bin/phpunit

## commande pour lancer la recherche des faille de securité.



apres avoir installer phppc dans le dossier concerner avec:

$ git clone https://github.com/FloeDesignTechnologies/phpcs-security-audit.git
```
$ cd phpcs-security-audit
$ composer install
```
phpcs --extensions=php,inc,lib,module,info

RFI: remote file insertion. Une vilaine faille qui peut vous faire rejoindre un botnet

eval: execution en shell de code. Ça peut potentiellement prendre le contrôle de votre serveur



## Anglais

##Install symfony and the platform API

-To create a new symfony folder enter the command below:

$ composer create-project symfony / website-skeleton my-project

then to install the api in the files.

$ composer require api

then create your entity and the database.

##order to launch the unit tests.

php bin / phpunit

##command to start the search for security vulnerabilities.

after installing phppc in the folder concerned with:
$ git clone https://github.com/FloeDesignTechnologies/phpcs-security-audit.git
```
$ cd phpcs-security-audit
$ composer install
```
phpcs --extensions=php,inc,lib,module,info

RFI: remote file insertion. An ugly flaw that can make you join a botnet

eval: code shell execution. It can potentially take control of your server
