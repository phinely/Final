<?php
$empty = "index";
require_once '_config.php';
if(isset($_GET["r"])){
    $request = $_GET["r"];
    include_once(CLASSES.'Routeur.php');
    $routeur = new Routeur($request);

    $routeur->renderController();
}
else{
    header("location:?r=".$empty);
    //ok
}


 