<?php include "core/functions_auth.php"; ?>
<?php session_start();
  if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header('LOCATION:index.php'); die();
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $film = array();
    
    if(isset($_POST["input_username"])) {
      $username = $_POST["input_username"];
    }
    
    if(isset($_POST["input_password"])) {
      $password = $_POST["input_password"];
    }
    
    $success = login($username, $password);
    
    if($success) {
      $_SESSION['login'] = true;
      header("Location: films.php");
    } else {
      echo "Wrong username or password";
    }
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

<body>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">

            <div class="card">
              <div class="card-header">
              Kyqu
            </div>

            <div class="card-block">
               <br/>
               <form method="POST">
                  <div class="form-group">
                    <label for="username">Perdoruesi:</label>
                    <input type="text" class="form-control" name="input_username" id="username">
                  </div>
                  <div class="form-group">
                    <label for="password">Fjalkalimi:</label>
                    <input type="password" class="form-control" name="input_password" id="password"/>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <br/>         
            </div>
          </div>           
        </div>
      </div>
    </div>

<?php include "include/scripts.php"; ?>
  </body>

</html>
