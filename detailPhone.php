<!-- controller -->
<?php
    include_once("model/functionJSON.php");

    $id = isset($_GET["id"]) ? htmlspecialchars($_GET["id"]) : NULL;
    $filename = 'model/co.json';
    $obj_name = new mobile();
    $rs2 = $obj_name->GETFN($filename);
    $BCode = $id - 1;
?>
<!-- view -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<div class="w3-container w3-center">
<h3>สเปคมือถือ</h3>
  <img src="<?= $rs2[$BCode]->img ?>" alt="Avatar" style width="277.6" height="277.6">
  <h5><?= $rs2[$BCode]->name ?></h5>
  <h5><?= $rs2[$BCode]->idIN ?></h5>
  <h5><?= $rs2[$BCode]->se ?></h5>
  <h5><?= $rs2[$BCode]->IDB ?></h5>
  <h5><?= $rs2[$BCode]->VCD ?>  <?= $rs2[$BCode]->VALID ?></h5>
  <h5><?= $rs2[$BCode]->nameEN?></h5>


</div>
<hr>
<div  class="w3-container w3-center" >

<a href="index.php" class="w3-btn w3-red">Back</a>
</div>
</body>
</html>
