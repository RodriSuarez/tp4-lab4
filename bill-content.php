<?php 
//session_reset();
     session_start();
     require_once('Config/Autoload.php');
     include_once('header.php');
     include_once('nav.php');
    // var_dump($_SESSION['item-list']);
    // $_SESSION['item-list']['3'] = array("pincel comun","pincel fabber cerda común para tempera","120.00",'5');
     use Models\Item as Item;
    
    if(!empty($_SESSION['svv-items'])) {
          foreach($_SESSION['svv-items'] as $value){
               $items[] = unserialize($value);
          }     

        //  var_dump($items);
        $items[] = new Item('Brocha pintor', 'para pinturas complejas', "240.5", 8);
    }
    
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th>
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                     <?php $total = 0;
                          foreach($items as $value)
                          {?><tr>
                              <td> <?php  echo $value->getName();  ?></td>
                              <td> <?php echo $value->getDescription();  ?></td>
                              <td> <?php echo $value->getPrice(); ?></td>
                              <td> <?php echo $value->getQuantity();  ?></td>
                              <td> <?php echo $value->getPrice()*$value->getQuantity(); ?> </td>
                          </tr>
                     <?php $total+=$value->getPrice()*$value->getQuantity();} ?>
                         
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="process/procTotal.php" method="GET" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text" value="<?php if(!empty($_SESSION['total'])) echo $total ;?>" class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>
<?php include_once('footer.php');?>
