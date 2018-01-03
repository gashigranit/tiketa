<?php
  session_start();
  if(!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('LOCATION:login.php'); 
    die();
  } else {
    
  }
?>
<!DOCTYPE html>
<html>
  <?php include "include/header.php"; ?>

  <body>
    <?php include "include/nav.php"; ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Tiketa</h1>
          <p class="lead">Shit dhe blej bileta online!</p>
          <ul class="list-unstyled">
            <li>Filma</li>
            <li>Shfaqje</li>
            <li>Koncerte</li>
            <li>Ngjarje</li>
          </ul>
        </div>
      </div>
    </div>

    <?php include "include/scripts.php"; ?>
  </body>

</html>
