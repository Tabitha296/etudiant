<?php
define('BDD', 'etudiant');
define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');

    try{$pdo=new PDO("mysql:host=".HOST.";dbname=".BDD,USERNAME,PASSWORD);
       // echo ("connexion reussi avec succes");//
    }
    catch(PDOException $e){
        die( "impossible de se connecter a la base de donnée".$e->getMessage());
    }
   ?>