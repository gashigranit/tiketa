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

      $selected_film = [];
      if(isset($_GET["name"])) {
        $name = $_GET["name"];
        foreach($films as $film) {
          if($film["name"] == $name) {
            $selected_film = $film;
          }
        }
      }

    ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <br/>
          <h2><?php echo $selected_film["name"]; ?></h2>
          <table class="table">
              <tbody>
                <tr>
                  <td>Pershkrimi</td>
                  <td><?php echo $selected_film["description"]; ?></td>
                </tr>
                <tr>
                  <td>Vleresimi</td>
                  <td><?php echo $selected_film["rating"]; ?></td>
                </tr>
                <tr>
                  <td>Viti</td>
                  <td><?php echo $selected_film["year"]; ?></td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>

    <?php include "include/scripts.php"; ?>
  </body>

</html>
