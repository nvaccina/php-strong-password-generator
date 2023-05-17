<?php


//controllo numero inserito nel form
$error_msg = '';

if(isset($_GET['inputNumberCaracter']) && !empty($_GET['inputNumberCaracter']) && ($_GET['inputNumberCaracter'] >= 5) && ($_GET['inputNumberCaracter'] <= 20) && is_numeric($_GET['inputNumberCaracter'])){
  //var_dump("Numero accettato");
}else{
  //var_dump("Numero non accettato");
  $error_msg = "Inserire un numero valido compreso tra 5 e 20!";
}

$maxLengthPassword = $_GET['inputNumberCaracter'];

function generatePassword($maxLengthPassword){
  $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!?~@#-_+<>[]{}';
  $passwordArray = [];
  $password='';
  for ($i=0; $i < $maxLengthPassword - 1; $i++) { 
    $carattereEstratto = rand(0,strlen($caratteri) - 1);
    $passwordArray[] = $caratteri[$carattereEstratto];
    //var_dump($passwordArray);
    //var_dump($caratteri[$carattereEstratto]);
  };
  $password = implode($passwordArray);
  //var_dump($password);
  return $password;
};


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