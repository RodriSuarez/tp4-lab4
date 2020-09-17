<?php 

    require_once('header.php');
    require_once('nav.php');




?>

<main class="container">
    <div class="container  justify-content-center" >
        <div class="pl-5 row mb-1 mt-1 " >
            <form class="form" action="process/processItem.php" class="bg-light-alpha p-5" method="get">
              <div class="row justify-content-center">
               
              <div class="col-12 form-group">
                  <div class="col-12">
                        <label for="name">
                            Nombre: <br><input type="text" class="form-control" name="name" id="name" required/>
                        </label>
                    
                    </div>
              </div>
                
                      <div class="col-12 form-group">
                      <div class="col-12">
                        <label for="name">
                            Descripcion: <br> 
                             <textarea name="desc" id="desc" class="form-control" cols="21.5" rows="5" required></textarea>
                        </label>
                        </div>
                    </div>
                    <div class="col-12 form-group">
                      <div class="col-12">

                        <label for="name">
                            Cantidad <br> <input type="number" class="form-control" name="cant" id="cant" required/>
                        </label>
                    
                        </div></div>
                      <div class="col-12 form-group">
                      <div class="col-12">
                        <label for="name">
                            Precio <br> <input type="number" class="form-control" name="price" id="price" required/>
                        </label>
                    
                        </div> </div>  
                </div>
            <button type="submit" class="btn btn-success mb-4 p-3">Añadir Item</button>
            
            </form>
        </div>

    </div>
</main>

<?php require_once('footer.php');
?>