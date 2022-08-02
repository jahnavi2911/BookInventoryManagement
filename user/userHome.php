<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  $username = $_POST['username'];
  header("location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <style>
    .card {
      margin: 40px;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">BOOK INVENTORY SYSTEM</span>
  </nav>
  <div class="container">
    <p>
    <h2 class="text-center">WELCOME USER!</h2>
    </p>
    <p class="text-center">Check for your favorite books in each store! If you cannot find the desired book please send feedback and we will look into it!
    </p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Store 1</h5>
            <p class="card-text">Here you can find all fiction books.</p>
            <a href="storeview1.php" class="btn btn-primary">Check here</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Store 2</h5>
            <p class="card-text">Here you can find all Engineering books.</p>
            <a href="storeview2.php" class="btn btn-primary">Check here</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Store 3</h5>
            <p class="card-text">Here you can find all Adventure books.</p>
            <a href="storeview3.php" class="btn btn-primary">Check here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="text-align:center;">
    <button class="btn btn-primary"><a class="text-light" href="../index.php">LOG OUT</a></button>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>