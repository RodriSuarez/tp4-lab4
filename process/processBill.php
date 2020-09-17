<?php   session_start();
   // use Date as date;
    require_once('../Config/Autoload.php');
    use Models\Bill as Bill;

    $today = date("Y-m-d");
 
    if( ( empty($_GET['date']) || empty($_GET['number']) ||empty($_GET['type']) )){
        $_SESSION['billMessage']
         = '<div class="col-3  p-2 col-xs-4 mt-2 font-weight-bold text-center  align-center text-white bg-danger rounded">Debe completar todos los campos.</div>';
         /*'<div class="alert alert-primary> Debe completar todos los campos. </div>';*/
        /* '<script> alert("Debe completar todos los campos para continuar")</script>';*/

        header('location: ../add-bill.php');
       
    }else if(strcmp($_GET['date'],$today) > 0){
        $_SESSION['billMessage']
        = '<div class="col-3  p-2 col-xs-4 mt-2 font-weight-bold text-center  align-center text-white bg-danger rounded">Debe ingresar una fecha actual o posterior para facturar.</div>';
        
        header('location: ../add-bill.php');
    }else{
        $newBill = new Bill($_GET['date'], $_GET['type'],$_GET['number']);
       
        header('location: ../process/procesar.php');
    }

    

?>