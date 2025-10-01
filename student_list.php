<?php
require_once "connexion.php";
$reponse = $pdo->query('SELECT * FROM etudiant');// on recupere les donnees de la table etudiants
$etudiants= $reponse->fetchAll(PDO::FETCH_ASSOC);
//var_dump($etudiants);//

//on recupere les groupes//
$sql= $pdo->prepare("SELECT *FROM groupes");
$sql->execute();
$groupes= $sql->fetchAll(PDO::FETCH_ASSOC);
//var_dump($groupe);//

 

?>

<form method="get" action="rechercher.php">
     <input type="search" name="rechercher" />
    </form>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>LIST ETUDIANTS</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Photo</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <?php foreach($etudiants as $etudiant) :?>
                            <tr>
                                <td><?= $etudiant['id'] ?></td>
                                <td><?= $etudiant['nom'] ?></td>
                                <td><?= $etudiant['prenom'] ?></td>
                                <td><?= $etudiant['email'] ?></td>
                                <td><img width='90px'height='90px' src="./images/<?php echo $etudiant['photo'];?>" alt="<?php echo $etudiant['photo']?>" class="img img-responsive rounded-circle"></td>
                                <td><button class="btn btn-danger" href="delete_student.php?id=<?=$etudiant['id']?>"onclick="confirm('voulez vous supprimer cet element?')">delete</button></td>
                                
            
                                <td><a class="btn btn-primary"href="edit_student.php?id=<?=$etudiant['id']?>&id_groupes=<?=$etudiant['id_groupes']?> ">edit</a></td>
                                
                                 <td>
        <?php if (!empty($etudiant['id_groupes'])): ?>
            <!-- Si déjà assigné -->
            <?php
            // Trouver le nom du groupe correspondant
            
                
               foreach ($groupes as $groupe){
                if ($groupe['id'] == $etudiant['id_groupes']) {
                    echo $groupe['nom'];
                }
            }
            ?>
       

        <?php else: ?>
            <!-- Sinon afficher select + bouton -->
            <form method="post" action="assign_group.php" class="d-flex">
                <input type="hidden" name="etudiant_id" value="<?= $etudiant['id'] ?>">
                <select name="id_groupes" class="form-select form-select-sm">
                    <option value="">-- Choisir un groupe --</option>
                    <?php foreach ($groupes as $groupe): ?>
                        <option value="<?= $groupe['id'] ?>"><?= $groupe['nom'] ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="btn btn-success btn-sm ms-2">Ajouter</button>
            </form>
        <?php endif; ?>
       </td>
      </tr>
                  
              <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>

