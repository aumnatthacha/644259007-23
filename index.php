<!-- controller -->
<?php
include_once "model/functionJSON.php";
$filename = 'model/co.json';
$obj_name = new mobile();
$result = $obj_name->GETFN($filename);
// print_r ($result);
?>
<?php
foreach ($result as $val) {
    ?>
<!-- view -->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>

<div class="w3-container">
  <h2>บัตรนักศึกษา</h2>
  <div class="w3-card-4 " style="width:70%">
    <header class="w3-container w3-light-grey">
    <img src="<?=$val->img;?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:150px"></img>
    <h5> <?=$val->un;?></h5>
    <h5><?=$val->unING;?>
    <h5> ชื่อ-สกุล<?=$val->name;?></h5>
    <h5>รหัสนักศึกษา<?=$val->idIN;?></h5>
    <div><h5><?=$val->IDB;?></div>
    <div><h5><?=$val->VCD;?><?=$val->VALID;?></div>
    <div><h5><?=$val->nameEN;?></div>

    <?php 

//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
echo '<h5></h5>';

$dateOfBirth = '2002-12-31'; //วันเกิด รูปแบบ ปี เดือน วัน
$currentDate  = date('Y-m-d'); //วันที่ปัจจุบัน

echo 'เกิดวันที่ : ' .$dateOfBirth; 
echo '<hr>';
echo 'วันที่ปัจจุบัน ' .$currentDate;
echo '<hr>';

$diff = abs(strtotime($currentDate) - strtotime($dateOfBirth));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

echo '<h5> อายุ : ';
$B = date("Y");
printf("%d ปี ", $years);
printf("%d ปี ", $B-2021);

?>
    <br></br>
  </div>
</div>
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>
<?php
}
?>


