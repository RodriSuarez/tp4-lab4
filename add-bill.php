<?php session_start();
     include_once('header.php');
     include_once('nav.php');
    
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Factura</h2>
               

               <form action="process/processBill.php" method="GET"class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Fecha</label>
                                   <input type="date" name="date" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <p>Tipo</p>
                                   <input type="radio" name="type" value="A" class="radioSize">Factura A
                                   <input type="radio" name="type" value="B" class="radioSize">Factura B
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Numero</label>
                                   <input type="number" name="number" class="form-control" min="0">
                              </div>
                         </div>
                        
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
          <div class="container-fluid">
                <div class="row ds-flex justify-content-center">
                              <?php echo $_SESSION['billMessage'];
                              ?>
                         </div>
          </div>
     </section>
</main>
<?php include_once('footer.php');
     $_SESSION['billMessage']="";
     ?>