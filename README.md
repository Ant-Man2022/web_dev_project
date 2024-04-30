Le projet dépend d'un serveur apache obtenable dans l'application xampp
## Etape 1
### cloner le projet
    git clone https://github.com/Ant-Man2022/web_dev_project
## Etape 2
### placer le dossier cloné 'web_dev_project' dans le répertoire 'htdocs' de xampp
## Etape 3
### taper les commandes suivantes dans le terminal en navigant au préalable vers le repertoire ~/xampp/htdocs/web_dev_project
    composer require stripe/stripe-cli/stripe
    composer require paypal/rest-api-sdk-php:*
## Etape 4
### lancer le serveur apache et le serveur mysql dans l'application xampp
## Etape 5
### Ouvrir un navigateur et taper 
    http://localhost/phpmyadmin
### Dans l'onglet de phpmyadmin, créer un nouveau compte utilisateur en lui assignant
#### nom utilisateur: prject
#### mot de passe: 1223334444

## Etape 6
### Modifier le fichier qui se trouve dans le chemin 'xampp/phpmyadmin/config.inc.php' et changer
    $cfg['Servers'][$i]['auth_type'] = 'config';
### en
    $cfg['Servers'][$i]['auth_type'] = 'cookie';
### puis sauvegarder pour permettre la connection à phpmyadmin avec les infos du compte utilisateur créé

## Etape 7
### Créer un nouveau database dans le compte utilisateur qui vient d'être créeé en appuyant sur 'nouveau' dans le sidebar à guauche
### le nom du database doit être 'web_project'

## Etape 8
### Sélectionner le database 'web_project' puis appuyer sur 'import' qui se trouve parmis les options de la bar du haut
### selectionner ensuite le input qui permet d'importer un fichier
### naviguer dans le répertoire web_dev_project --> public --> database --> tables.sql et appuiyer sur OK pour selectionner ce fichier puis sur import pour créer les tables requis pour le projet

## Etape 8
### taper dans le navigateur
    http://localhost/web_dev_3/pages/Home.php
