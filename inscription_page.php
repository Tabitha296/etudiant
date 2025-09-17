<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
      <div class="container w-50 mt-5">
           <div class="card shadow-sm">
             <div class="card-header text-center bg-primary">
                <h2>INSCRIPTION PAGE</h2>
             </div>
               <div class="card-body">
                   <form action="inscription.php" method="POST" enctype="multipart/form-data">
                       <div class="mb-3">
                           <label for="name" class="form-label">Name</label>
                           <input type="text" class="form-control" id="name" name="name" >
                       </div>
                       <div class="mb-3">
                           <label for="surname" class="form-label">Surname</label>
                           <input type="text" class="form-control" id="surname" name="surname" required>
                       </div>
                   
                       <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                       </div>
                       <div class="mb-3">
                           <label for="photo" class="form-label">Picture</label>
                           <input type="file" class="form-control" id="photo" name="photo" >
                       </div>
                       <button type="submit" name="enregistrer" value="enregistrer" class="btn btn-primary">Register</button>
                   </form>
               </div>
           </div>
      </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>