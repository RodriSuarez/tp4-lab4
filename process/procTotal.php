<?php 
    session_start();
    
    $_SESSION['total'] = 0;
    if(empty($_SESSION['total'])){
    foreach($_SESSION['item-list'] as $value){
        $_SESSION['total']+=$value['2']*$value['3'];
    }
   

}
    header('location: ../bill-content.php');
?>