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
//header('Location: ' . $url, false, 303);
//die();
?>

<html>
<head>
    <title>Share App</title>
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="map_bg.png">
    <meta property="og:url" content="">



    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:image" content="map_bg.png">
</head>
<body>
    <h1 style="width: 100%">
        <a href="<?=$url?>">Share 9a3 Agilaz</a>
    </h1>
</body>
</html>
