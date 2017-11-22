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
                    // start iteration
                ?>
                <tr>
                  <td><a href='film_details.php?id=<?php echo $film["id"]?>'><?php echo $film["name"]?></a></td>
                  <td><?php echo $film["description"]?></td>
                  <td><?php echo $film["rating"]?></td>
                  <td><?php echo $film["year"]?></td>
                </tr>
                <?php
                    // end iteration
                  }
                ?>

              </tbody>
          </table>
        </div>
      </div>
    </div>

    <?php include "include/scripts.php"; ?>
  </body>

</html>
