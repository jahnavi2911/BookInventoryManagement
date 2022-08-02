<?php
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  include '../connect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];

  //echo "success";
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    header("location: userHome.php");
  } else {
    $showError = "Invalid Credentials";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Sign In</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    .card {
      margin-top: 100px;
      margin-left: 200px;
      margin-right: 200px;
    }
  </style>
</head>

<body>
  <div>
    <?php
    if ($login) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success! Looged in</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
    }
    if ($showError) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Something is wrong!</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
    }

    ?>

    <div class="container">
      <div class="card text-center">
        <div class="card-header">
          USER LOGIN
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="username">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
              </div>
            </div>

            <div class="row mb-4 text-center">
              <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
              <div class="text-center">
                <p>Not a member? <a href="userSignup.php">Register</a></p>
              </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>