<html>
  <body>
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $apodoBueno = 'bulma';
        $contrasenyaBuena = '123';
        $apodo = isset($_REQUEST['apodo']) ? $_REQUEST['apodo']:null;
        $contrasenya = isset($_REQUEST['contrasenya']) ? $_REQUEST['contrasenya'] : null;
        if($apodoBueno == $apodo &&  $contrasenyaBuena == $contrasenya){
          session_start();
          $_SESSION['apodo'] = $_REQUEST['apodo'];
          header('Location: perfil.php');
          die();
        } else {
          echo '<p style="color: red">El apodo o la contraseña es incorrecta.</p>';
        }
      }
     ?>
     <form method="post">
       <p>
         <input type="text" name="apodo" placeholder="Apodo">
      </p>
      <p>
         <input type="password" name="contrasenya" placeholder="Contraseña">
      </p>
      <p>
         <input type="submit" value="Entrar">
      </p>
    </form>
  </body>
</html>
