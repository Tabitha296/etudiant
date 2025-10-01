<?php
require_once "connexion.php";
    //var_dump($_POST);
    if(!empty($_POST['enregistrer'])){
        if(empty($_POST['name']) or empty($_POST['email']) or empty ($_FILES['photo']))  {
            echo "les champs nom et email et file sont obligatoires";
        }
        else{
            $nom=$_POST['name'];//$nom= $_POST['nom'];recupere la valeur du champ nom dans le formulaire
            $prenom= $_POST['surname'];//$prenom= $_POST['prenom'];recupere la valeur du champ prenom dans le formulaire
            $email=$_POST['email'];//meme chose pour email
            $photo=$_FILES['photo']['name'];//ici on recupere le nom de la photo
            $tmpname=$_FILES['photo']['tmp_name'];// ici on enregistre la photo dans le dossier temporaire tmp_name sous un autre nom definit par php
            move_uploaded_file($tmpname,"./images/$photo");//ici on recupere la photo dans tmp_name et on la deplace dans le dossier images sous le nom de la photo original
            $chaine="INSERT INTO etudiant(nom,prenom,email,photo) VALUES(?,?,?,?)";//creation de la requete sql pour inserer les donnees dans la base de donnees
            try{
                $requete=$pdo->prepare($chaine);//prepare la requete
                $requete->execute(array($nom,$prenom,$email,$photo));//execute la requete avec les parametres
                echo "ok";
            header("Location:student_list.php");//redirection vers la page afficheretudiant.php
            }
            catch(PDOException $ex){// en cas d'erreur on affiche le message d'erreur
               
                die('impossible'.$ex->getMessage());
            }
           
         } 
     }  else{
        echo("erreur");
        var_dump($_POST);
     }

?>