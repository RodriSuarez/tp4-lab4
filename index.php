<?php 
     
     session_start();
     
     include_once('header.php');
     require_once('Config/Autoload.php');
     if(!isset($_SESSION['userStatus']))
          $_SESSION['userStatus'] = 'none';
     $_SESSION['billMessage'] = '';
?>
<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center">
               <h2>Practico N° 4</h2>
          </header>
          <form action="process/verify.php" method="POST" class="login-form bg-dark-alpha p-5 text-white">
               <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario">
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="text" name="pass" class="form-control form-control-lg" placeholder="Ingresar constraseña">
               </div>
               <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
               <br>
               <div style="display: <?php echo $_SESSION['userStatus'];?>" class="text-center bg-danger btn-pill rounded">
                 ¡Error! Usuario y/o Contraseña incorrectos.
               </div>
          </form>
         
     </div>
</main>

<?php include_once('footer.php');?>