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
        <div class="CARD">
        <img src="https://www.npru.ac.th/2019/img/logo.png" width="375">


        <br> <span class="NAME"> ชื่อ-สกุล <?php echo $jsonUser[2]; ?></span>
        <br> <span class="NAME"> รหัสนักศึกษา <?php echo $jsonUser[3]; ?></span>
        <br> <span class="NAME">สาขา <?php echo $jsonUser[4]; ?></span><br></br>
        <span class="NUMBER"><?php echo $jsonUser[5]; ?></span>
        <br> <span class="NAME"><?php echo $rs2 = $obj->years(); ?></span><br></br>

        <span class="IMG-TA"></span>
        <span class="VISA"></span>
        <span class="chipcard"></span>
        <span class="PAYWEVE"></span>
        <span class="NAME">NATTHACHA MUMDAENG</span>
</body>
</html>



