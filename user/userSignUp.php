<?php
$showAlert = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  include '../connect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists = false;
  if (($password == $cpassword) && $exists == false) {
    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
    }
  } else {
    $showError = "Passwords do not match";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register </title>
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
  <?php
  if ($showAlert) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> You can login now.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
  }
  if ($showError) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>OOPS!</strong> Passwords do not match please try again.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
  }

  ?>

  <div>

    <div class="container">
      <div class="card text-center">
        <div class="card-header">
          USER REGISTRATION
        </div>
        <div class="card-body">
          <form method="POST" action="userSignUp.php">
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
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Check Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="CheckPassword" name="cpassword">
              </div>
            </div>
            <div class="row mb-4 text-center">
              <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
              <button class="btn btn-primary btn-block mb-4"> <a class="text-light" href="signin.php">Back</a> </button>
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