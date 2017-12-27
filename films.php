<!DOCTYPE html>
<html lang="en">
  <?php include "include/header.php"; ?>
  <?php include "core/functions.php"; ?>

  <body>
    <?php include "include/nav.php"; ?>
    <?php
		
      $films = get_all_films();

    ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <table class="table">
              <thead>
                <th>Emri</th>
                <th>Pershkrimi</th>
                <th>Vleresimi</th>
                <th>Viti</th>
              </thead>

              <tbody>
			  
				        <?php
                  foreach ($films as $film) {

                    echo $film->generateTableRow();
                  }
                ?>

              </tbody>
          </table>

          <a href="film_edit.php">Add new</a>
        </div>
      </div>
    </div>

    <?php include "include/scripts.php"; ?>
  </body>

</html>
