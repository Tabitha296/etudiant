<?php
require_once 'connexion.php';

$id=$_GET['id'];
$delete ="DELETE FROM etudiant WHERE id= ?";
    var_dump($_GET);

try{
$sup=$pdo->prepare($delete);
$sup->execute([$id]);
header("Location:student_list.php");
}
catch(PDOException $ex){
    die('imposible' .$ex->getMessage());
}
?>