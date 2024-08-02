# Projet Protfinder - Documentation

Ce fichier README fournit des instructions pour installer et configurer le projet Protfinder, un projet d'e-commerce réalisé dans le cadre de ma première année d'études en BTS.

## Installation de WAMP

1. Téléchargez la dernière version de WAMP à partir du site officiel.
3. Suivez les instructions de l'assistant d'installation pour configurer WAMP sur votre système.
4. Une fois l'installation terminée, assurez-vous que le serveur Apache et le serveur MySQL sont en cours d'exécution.

## Configuration du projet

Une fois que vous avez installé WAMP et importé la base de données, vous pouvez configurer le projet Protfinder en suivant les étapes ci-dessous :

1. Clonez le projet à partir du référentiel GitHub en utilisant la commande suivante :

    ```
    git clone https://github.com/prosabd/protfinder.git
    ```

2. Déplacez le dossier `protfinder` dans le répertoire `www` de votre installation WAMP.
3. Ouvrez le fichier `config.php` situé à la racine du projet.
4. Modifiez les paramètres de configuration tels que le nom d'utilisateur et le mot de passe de la base de données pour correspondre à votre configuration locale.
5. Enregistrez les modifications apportées au fichier `config.php`.

## Importation de la base de données

Pour importer la base de données, suivez les étapes ci-dessous :

1. Ouvrez phpMyAdmin en accédant à `http://localhost/phpmyadmin` dans votre navigateur.
2. Connectez-vous à votre serveur MySQL en utilisant les informations d'identification ('root', '').
3. Créez une nouvelle base de données appelée `protfinder`.
4. Accédez à l'onglet "Import" dans phpMyAdmin.
5. Sélectionnez le fichier `protfinder.sql` situé dans le répertoire `basedata` du projet (ou bien le fichier `protfinder_stocked_procedures` si vous souhaitez teste la procedure stockee).
6. Cliquez sur le bouton "Go" pour importer le fichier SQL dans la base de données.

## Exécution du projet

Maintenant que vous avez installé WAMP, importé la base de données et configuré le projet, vous pouvez l'exécuter en suivant les étapes ci-dessous :

1. Ouvrez votre navigateur et accédez à l'URL suivante : `http://localhost/protfinder`.
2. Vous devriez voir la page d'accueil du projet Protfinder.
3. Bonne decouverte du projet !

