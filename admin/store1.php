<?php
include "../connect.php";


$insert = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  if (isset($_POST['snoEdit'])) {
    $sno = $_POST['snoEdit'];
    $bookid = $_POST['bookidEdit'];
    $bookname = $_POST['booknameEdit'];
    $count = $_POST['countEdit'];



    $sql = "UPDATE storeone SET bookid='$bookid',bookname = '$bookname',inventory = '$count'  WHERE id= $sno";
    $result = mysqli_query($conn, $sql);
    if ($result) {

      $insert = true;
    } else {
      echo "There is some error!!" . mysqli_error($conn);
    }

    header("location: store1.php");

    exit();
  }
} else {
  echo "";
}



?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store 1</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    .searchContainer {
      margin-top: 20px;
      margin-right: 50px;
      margin-left: 150px;
      text-align: center;
    }

    .row {
      margin-top: 20px;

    }

    .submitBtn {
      margin-top: 20px;
    }
  </style>


</head>

<body>



  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">BOOK INVENTORY SYSTEM</span>
  </nav>

  <div class="container searchContainer">

    <form action="store1.php" method="POST">
      <div class="form-group">
        <div>
          <label class="form-label" for="form1">
            <h3>Search for the books here.</h3>
          </label>
          <input type="search" id="form1" class="form-control" name="search" />
          <input class="btn btn-primary submitBtn" type="submit">
          <button class="btn btn-primary submitBtn"><a class="text-light" href="admin.php">Go Back</a></button>

        </div>
      </div>
    </form>
  </div>
  <hr>

  <?php


  $key = "AIzaSyBCce614Bi3vKvFjm4uvQQAgG_TNuGjH7M";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    $book_name = $_POST['search'];

    $book_name_wos = str_replace(' ', '+', $book_name);
    $books_api = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=' . $book_name_wos . '&key=' . $key);
    $book_data = json_decode($books_api, true);


    $bookid = $book_data['items'][0]['id'];
    $bookname = $book_data['items'][0]['volumeInfo']['title'];
    $cover = $book_data['items'][0]['volumeInfo']['imageLinks']['thumbnail'];

    echo ' <h4 class="text-center" > Do you want to add this book? </h4>
            <div class="container"> <div class="row"> <div class="col-sm-4"><figure class="figure">
                    <img
                      src=' . $cover . '
                      class="figure-img img-fluid rounded shadow-3 mb-3"
                      alt="Book image"
                     />
                    <figcaption class="figure-caption text-end"><b>' . $bookname . '.</b></figcaption>
                     </figure> </div> 
                     
                     ';




    echo   '<div class="col-sm-8 form-group">
                         <form action="add.php" method="POST">
                                <div class="row">
                                  <div class="col-sm-6"> Book ID </div> <div class="col-sm-6"> <input class="form-control" type="text" value=' . $bookid . ' name="bookid"> </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">  Book Name </div> <div class="col-sm-6"> 
                                <input class="form-control" type="text" value="' . $bookname . '" name="bookname"></div> </div>

                              <div class="row"> <div class="col-sm-6"> How many copies to add?</div> <div class="col-sm-6"> <input class="form-control" type="text" name="count"><div></div>
                             <div class="row"> <button class="btn btn-primary" type="submit">Add</button> </div>
             </form> </div></div></div>';
  }



  ?>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">BOOKID</th>
          <th scope="col">BOOK NAME</th>
          <th scope="col">INVENTORY COUNT</th>
          <th scope="col">ACTIONS</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sqlForView = "SELECT * FROM storeone";
        $result2 = mysqli_query($conn, $sqlForView);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result2)) {

          echo '
          
          
          
          
          
          
          
          
          ';





          echo '<tr>
     <th scope="row">' . $no . '</th>
     <td>' . $row["bookid"] . '</td>
     <td>' . $row["bookname"] . '</td>
     <td>' . $row["inventory"] . '</td>
     <td>   <button class="edit btn btn-primary"  data-toggle="modal" data-target="#edilModal" id="' . $row["id"] . '" >Update</button>
     <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteBookId=' . $row["id"] . '">Delete</a></button></td>
   </tr>';
          $no = $no + 1;
        }


        ?>

      </tbody>
    </table>
  </div>


  <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit book details.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="store1.php">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="row">
              <div class="col-sm-6"> Book ID </div>
              <div class="col-sm-6"> <input class="form-control" type="text" name="bookidEdit" id="bookidEdit">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6"> Book Name </div>
              <div class="col-sm-6"> <input class="form-control" type="text" name="booknameEdit" id="booknameEdit">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6"> How many copies to add?</div>
              <div class="col-sm-6"> <input class="form-control" type="text" name="countEdit" id="countEdit">
                <div>

                </div>
                <div class="row"> <button class="btn btn-primary" type="submit">Update</button> </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>





  <script>
    edits = document.getElementsByClassName("edit");
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;

        bookid = tr.getElementsByTagName("td")[0].innerText;

        bookname = tr.getElementsByTagName("td")[1].innerText;
        bookcount = tr.getElementsByTagName("td")[2].innerText;

        bookidEdit.value = bookid;
        booknameEdit.value = bookname;
        countEdit.value = bookcount;
        snoEdit.value = e.target.id;
        console.log(e.target.id);
        $('#editModal').modal('toggle');

      })
    })
  </script>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>