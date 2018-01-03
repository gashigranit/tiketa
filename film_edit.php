<?php
  session_start();
  if(!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('LOCATION:login.php'); 
    die();
  }
?>
<?php include "core/functions.php"; ?>
<?php
  $selected_film = new Film();
  if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $selected_film = get_film_by_id($id);
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $film = array();
    
    if(isset($_POST["input_id"])) {
      $film["id"] = $_POST["input_id"];
    }
    
    if(isset($_POST["input_name"])) {
      $film["name"] = $_POST["input_name"];
    }
    
    if (isset($_POST["input_description"])) {
      $film["description"] = $_POST["input_description"];          
    }

    if (isset($_POST["input_rating"])) {
      $film["rating"] = $_POST["input_rating"];          
      
    }

    if (isset($_POST["input_year"])) {
      $film["year"] = $_POST["input_year"];
      
    }
    
    if(empty($film["id"])) {
      $success = insert_film(new Film($film));
    } else {
      $success = update_film(new Film($film));
    }

    
    if($success) {
      header("Location: films.php");
    }
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
<?php include "include/nav.php"; ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <br/>
          
      <form method="POST">
            <div class="form-group">
              <input type="hidden" class="form-control" name="input_id" id="id" value='<?php echo $selected_film->getId(); ?>'>
              <label for="name">Emri:</label>
              <input type="text" class="form-control" name="input_name" id="name" value='<?php echo $selected_film->getName(); ?>'>
            </div>
            <div class="form-group">
              <label for="description">Pershkrimi:</label>
              <textarea type="text" class="form-control" name="input_description" id="description"><?php echo $selected_film->getDescription(); ?></textarea> 
            </div>
            <div class="form-group">
              <label for="rating">Vleresimi:</label>
              <input type="number" class="form-control" name="input_rating" id="rating" value='<?php echo $selected_film->getRating(); ?>'>
            </div>
            <div class="form-group">
              <label for="year">Viti:</label>
              <input type="number" class="form-control" name="input_year" id="year" value='<?php echo $selected_film->getYear(); ?>'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

<?php include "include/scripts.php"; ?>
  </body>

</html>
