<!DOCTYPE html>
<html lang="en">
  <?php include "include/header.php"; ?>

  <body>
    <?php include "include/nav.php"; ?>
    <?php
      $films = [
        [
          "name" => "Wonder Woman",
          "description" => "Before she was Wonder Woman (Gal Gadot), she was Diana, princess of the Amazons, trained to be an unconquerable warrior. Raised on a sheltered island paradise...",
          "rating" => "5/5",
          "year" => 2017],
        [
          "name" => "Blade Runner",
          "description" => "Deckard (Harrison Ford) is forced by the police Boss (M. Emmet Walsh) to continue his old job as Replicant Hunter. His assignment: eliminate four escaped Replicants from the colonies who have returned to Earth...",
          "rating" =>  "5/5",
          "year" => 2017],
        [
          "name" => "Justice League",
          "description" => "Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne enlists newfound ally Diana Prince to face an even greater threat...",
          "rating" =>  "5/5",
          "year" => 2017],
        [
          "name" => "Dunkirk",
          "description" => "In May 1940, Germany advanced into France, trapping Allied troops on the beaches of Dunkirk...",
          "rating" =>  "5/5",
          "year" => 2017],

      ];

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
                  <td><a href='film_details.php?name=<?php echo $film["name"]?>'><?php echo $film["name"]?></a></td>
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
