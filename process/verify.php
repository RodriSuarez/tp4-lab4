<?php
    
    session_start();
    require_once('/../Config/Autoload.php');
    
    
  
    use Models\Client as Client;

    $cliente = new Client("Cosme Fulanito", "strongPassword!");
    if($_POST['user'] == $cliente -> getUsername() && $_POST['pass'] == $cliente -> getPassword()){
      $_SESSION['userStatus'] = 'none';
      header("location: ../bill-content.php");

    }else{
        $_SESSION['userStatus'] = 'block';
        header("location: ../index.php");
        
    }

 

?>