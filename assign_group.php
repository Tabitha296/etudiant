<?php
require_once "connexion.php";
    //var_dump($_POST);
    if(!empty($_POST['etudiant_id']) && !empty($_POST['id_groupes'])){
       
            $etudiant_id=$_POST['etudiant_id'];
            $id_groupes= $_POST['id_groupes'];
            
            $chaine="UPDATE  etudiant SET id_groupes= :id_groupes WHERE id = :id ";
            try{
                $requete=$pdo->prepare($chaine);//prepare la requete
                $requete->execute( [
                       ':id_groupes' => $id_groupes,
                       ':id' => $etudiant_id
                ]);//execute la requete avec les parametres
                echo "ok";
            header("Location:student_list.php");//redirection vers la page afficheretudiant.php
            }
            catch(PDOException $ex){// en cas d'erreur on affiche le message d'erreur
               
                die('impossible'.$ex->getMessage());
            }
           
         } 
    
?>