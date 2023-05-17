<?php

require_once __DIR__ . '/partials/functions.php';

//controllo numero inserito nel form
$error_msg = '';
//$_GET['inputNumberCaracter'] = '';
$maxLengthPassword = null;

if(isset($_GET['inputNumberCaracter'])){

  if(checkNumber($_GET['inputNumberCaracter'])){

    //Funzione per generare password random
    $maxLengthPassword = $_GET['inputNumberCaracter'];

    generatePassword($maxLengthPassword);

  }else{
    //var_dump("Numero non accettato");
    $error_msg = "Inserire un numero valido compreso tra 5 e 20!";
  }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <title>Password generator</title>
</head>
<body>
  <div class="container my-5">
    <h1>Password generator</h1>

    <div class="col-6">

      <form action="index.php" method="GET" class="d-flex align-items-center">

        <label for="inputCaracter" class="form-label">Create Password</label>
        <input type="text" id="inputCaracter" name="inputNumberCaracter" class="form-control" placeholder="Scrivi di quanti caratteri vuoi la password">

        <button class="btn btn-success ms-3">Create</button>
      </form>

      <p class="text-danger" > <?php echo $error_msg ?> </p>


      <p>La password generata è => <strong> <?php echo generatePassword($maxLengthPassword) ?> </strong></p>


    </div>


  </div>
  
  
</body>
</html>