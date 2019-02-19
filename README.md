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

phpcs --extensions=php,inc,lib,module,info

apres avoir installer phppc dans le dossier concerner avec:

$ git clone https://github.com/FloeDesignTechnologies/phpcs-security-audit.git
```
$ cd phpcs-security-audit
$ composer install
```


RFI: remote file insertion. Une vilaine faille qui peut vous faire rejoindre un botnet

eval: execution en shell de code. Ça peut potentiellement prendre le contrôle de votre serveur
