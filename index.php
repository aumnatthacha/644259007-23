<!-- controller -->
<?php
include_once 'model/functionJSON.php';

$obj = new functionth();

$rs = $obj->Name();
$json = $rs;
$jsonUser = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>บัตรนักศึกษา</title>
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href=".css" type="text/css"/>
</head>
<body>
        <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Signika:400' rel='stylesheet' type='text/css'>
        <div class="card-holder">
        <div class="card">
        <img src="https://www.npru.ac.th/2019/img/logo.png" width="375">


        <br> <span class="name"> ชื่อ-สกุล <?php echo $jsonUser[2]; ?></span>
        <br> <span class="name"> รหัสนักศึกษา <?php echo $jsonUser[3]; ?></span>
        <br> <span class="name">สาขา <?php echo $jsonUser[4]; ?></span><br></br>
        <span class="number"><?php echo $jsonUser[5]; ?></span>
        <br> <span class="name"><?php echo $rs2 = $obj->years(); ?></span><br></br>

        <span class="img-taaom"></span>
        <span class="VISA"></span>
        <span class="chipcard"></span>
        <span class="payweve"></span>
        <span class="name">NATTHACHA MUMDAENG</span>
</body>
</html>



