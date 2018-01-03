<?php
  session_start();
  if(!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('LOCATION:login.php'); 
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <?php include "include/header.php"; ?>
  <?php include "core/functions.php"; ?>

  <body>
    <?php include "include/nav.php"; ?>    
    <?php include "utils/table_drawer.class.php"; ?>
    <?php
		  
      $films = get_all_films();

    ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

              <?php
                $drawer = new TableDrawer(Film::getTableHeader(), $films);
                echo $drawer->draw();
              ?>

          <a href="film_edit.php">Add new</a>
        </div>
      </div>
    </div>

    <?php include "include/scripts.php"; ?>
  </body>

</html>
