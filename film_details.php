<!DOCTYPE html>
<html lang="en">
  <?php include "include/header.php"; ?>
  <?php include "core/functions.php"; ?>

  <body>
    <?php include "include/nav.php"; ?>
    <?php
	
	$selected_film = [];
	if(isset($_GET["id"])) {
		$id = $_GET["id"];
		$selected_film = get_film_by_id($id);
	}

    ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <br/>
          <h2><?php echo $selected_film->getName(); ?></h2>
          
          <?php echo $selected_film->generateSingleView(); ?>

          <a href='film_edit.php?id=<?php echo $selected_film->getId(); ?>'>Edit</a>

        </div>
      </div>
    </div>

    <?php include "include/scripts.php"; ?>
  </body>

</html>
