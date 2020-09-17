<?php
require_once('../Config/Autoload.php');
use Models\Item;

session_start();
   
if(empty($_SESSION['item-list'])){
$array = "pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6,
pintura fluor 1L, pintura warner fluo, 400.00, 3,
plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1,
pincel común 1.2, pincel fabber cerda común para tempera, 120.00, 5,
rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95.00, 2,
kit de acuarelas, combo de acuarelas color pastel, 770.00, 2 ";

$nextArray = explode(',
', $array);



foreach($nextArray as $key => $value){
    $_SESSION['item-list'][$key] = explode(',',$value);
}
//var_dump($_SESSION['item-list']);

}else{
   // var_dump($_SESSION['item-list']);
    
   if(empty($_SESSION['sv-items'])){
    foreach($_SESSION['item-list'] as $key => $value){
            
        
                $items[] = new Item($value['0'], $value['1'], $value['2'], $value['3']);    

        }

        foreach($items as $item){
            $_SESSION['sv-items'][] = $item;
        }

        var_dump($items);
    }

    var_dump($_SESSION['sv-items']);
}

 //header("location: ../bill-content.php");
