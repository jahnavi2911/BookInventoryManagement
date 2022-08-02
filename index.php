<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    .card {

      margin-top: 100px;
    }
  </style>


</head>

<body>
  <div>
    <nav class="navbar">
      <p class="navName">BOOK INVENTORY MANAGEMENT</p>
    </nav>
  </div>

  <div class="middle">

    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">Admin</h4>
              <p class="card-text">If you are admin click on the below link!
              </p>
              <p><a href="admin/adminSignIn.php">Admin Sign in Link</a></p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">User</h4>
              <p class="card-text">If you are user click on the below link!
              </p>
              <p><a href="user/signin.php">User Sign in Link</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>