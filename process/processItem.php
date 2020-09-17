<?php
require_once('../Config/Autoload.php');
use Models\Item;

session_start();

    //$_SESSION['svv-items'][] 
    $varNew = serialize(new Item($_GET['name'],$_GET['desc'],$_GET['price'],$_GET['cant']) );
    
    if(!empty($varNew))
        $_SESSION['svv-items'][] = $varNew;

    header('location: ../bill-content.php');
?>