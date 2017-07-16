<?php
/**
 * Created by PhpStorm.
 * User: Noureddine
 * Date: 10/07/2017
 * Time: 15:22
 */


if(isset($_GET['latitude'])&&isset($_GET['longitude'])&&isset($_GET['anemID'])&&isset($_GET['type'])) {
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    $anemID = $_GET['anemID'];
    $type = $_GET['type'];
}else{
    $latitude = 123;
    $longitude = 123;
    $anemID = 123;
    $type = 123;
}
$url ="monagence.anem.map://share/args?latitude=".$latitude."&longitude=".$longitude."&anemID=".$anemID."&type=".$type."";



//$url = "https://www.google.com";
header('Location: ' . $url, false, 303);
//die();
?>
<!-- 
<html>
<head>
    <title>Share App</title>
</head>
<body>
    <h1 style="width: 100%">
        <a href="<?=$url?>">Share 9a3 Agilaz</a>
    </h1>
</body>
</html> -->
