<?php
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
	header("Location: login.php");
	die();
}
?>
<?php include "core/functions.php"; ?>
<?php include_once "utils/validation_result.class.php"; ?>
<?php
  $selected_film = new Film();
  if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $selected_film = get_film_by_id($id);
  }
  
  // create default validation results
  $nameValid = new ValidationResult("", "", "", true);
  $descriptionValid = new ValidationResult("", "", "", true);
  $ratingValid = new ValidationResult("", "", "", true);
  $yearValid = new ValidationResult("", "", "", true);

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nameValid = ValidationResult::checkParameter("input_name",
                '/^[A-Z]\w*$/',
                'Emri duhet te filloje me shkronje te madhe');
    $descriptionValid = ValidationResult::checkParameter("input_description",
                '/^[A-Z]\w{10,200}$/',
                'Pershkrimi duhet te filloje me shkronje te madhe dhe te jete mes 10 dhe 200 karaktere');
    $ratingValid = ValidationResult::checkParameter("input_rating",
                '/^[1-5]$/',
                'Vleresimi duhet te jete numer mes 1 dhe 5');
    $yearValid = ValidationResult::checkParameter("input_year",
                '/^[1-2][0-9][0-9][0-9]$/',
                'Viti duhet te jete numer mes 1 dhe 2018');
    
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
    
    if($nameValid->isValid() && $descriptionValid->isValid() && $ratingValid->isValid() && $yearValid->isValid()) {
      if(empty($film["id"])) {
        $success = insert_film(new Film($film));
      } else {
        $success = update_film(new Film($film));
      }
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
            <div class="control-group <?php echo $nameValid->getCssClassName(); ?>">
              <input type="hidden" class="form-control" name="input_id" id="id" value='<?php echo $selected_film->getId(); ?>'>
              <label for="name">Emri:</label>
              <input type="text" class="form-control" name="input_name" id="name" value='<?php echo $selected_film->getName(); ?>'>
              <span class="help-inline" id="errorName">
                <?php echo $nameValid->getErrorMessage(); ?>
              </span>
            </div>
            <div class="control-group <?php echo $descriptionValid-> getCssClassName(); ?>">
              <label for="description">Pershkrimi:</label>
              <textarea type="text" class="form-control" name="input_description" id="description"><?php echo $selected_film->getDescription(); ?></textarea>
              <span class="help-inline" id="errorDescription">
                 <?php echo $descriptionValid->getErrorMessage(); ?>
              </span>
            </div>
            <div class="control-group <?php echo $ratingValid-> getCssClassName(); ?>">
              <label for="rating">Vleresimi:</label>
              <input type="number" class="form-control" name="input_rating" id="rating" value='<?php echo $selected_film->getRating(); ?>'>
              <span class="help-inline" id="errorDescription">
                 <?php echo $ratingValid->getErrorMessage(); ?>
              </span>
            </div>
            <div class="control-group <?php echo $yearValid-> getCssClassName(); ?>">
              <label for="year">Viti:</label>
              <input type="number" class="form-control" name="input_year" id="year" value='<?php echo $selected_film->getYear(); ?>'>
              <span class="help-inline" id="errorDescription">
                 <?php echo $yearValid->getErrorMessage(); ?>
              </span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

<?php include "include/scripts.php"; ?>
  </body>

</html>
