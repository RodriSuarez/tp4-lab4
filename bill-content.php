<?php 
     session_start();
     include_once('header.php');
     include_once('nav.php');
    // var_dump($_SESSION['item-list']);
    // $_SESSION['item-list']['3'] = array("pincel comun","pincel fabber cerda común para tempera","120.00",'5');
     
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
                     <?php
                          foreach($_SESSION['item-list'] as $value)
                          {?><tr>
                              <td> <?php  echo $value['0'];  ?></td>
                              <td> <?php echo $value['1'];  ?></td>
                              <td> <?php echo $value['2']; ?></td>
                              <td> <?php echo $value['3'];  ?></td>
                              <td> <?php echo $value['2']*$value['3']; ?> </td>
                          </tr>
                     <?php } ?>
                         
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="process/procTotal.php" method="GET" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text" value="<?php if(!empty($_SESSION['total'])) echo $_SESSION['total'] ;?>" class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>
<?php include_once('footer.php');?>
