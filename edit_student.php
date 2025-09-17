<?php
require_once 'connexion.php';
$id=$_GET['id'];
$requete=$pdo->prepare("SELECT * FROM etudiant WHERE id = ?");
$requete->execute ([$id]);
$etudiant =$requete->fetch();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<div class="container w-50 mt-5">
           <div class="card shadow-sm">
             <div class="card-header text-center bg-primary">
                <h2> modifier </h2>
             </div>
               <div class="card-body">
                   <form action="" method="POST" enctype="multipart/form-data">
                       <div class="mb-3">
                           <label for="name" class="form-label">Name</label>
                           <input type="text" class="form-control" id="name" name="name" value="<?=$etudiant["nom"]?>">
                       </div>
                       <div class="mb-3">
                           <label for="surname" class="form-label">Surname</label>
                           <input type="text" class="form-control" id="surname" name="surname"value="<?=$etudiant["prenom"]?>">
                       </div>
                   
                       <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" class="form-control" id="email" name="email" value="<?=$etudiant["email"]?>">
                       </div>
                       <div class="mb-3">
                           <label for="photo" class="form-label">Picture</label>
                           <input type="file" class="form-control" id="photo" name="photo" value="<?=$etudiant["photo"]?>">
                       </div>
                       <button type="submit" name="enregistrer" value="enregistrer" class="btn btn-primary">Register</button>
                   </form>
               </div>
           </div>
      </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>