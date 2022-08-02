<?php
include "../connect.php";



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 20px;
        }

        .buy {
            margin-left: 250px;
            margin-right: 250px;

        }

        .btn-toolbar {
            flex-wrap: nowrap;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h2>STORE 3</h2>
        <hr>
        <div class="container">
            <div class="row text-center">
                <div class="col btn-toolbar">
                    <button class="buy btn btn-primary"> <a class="text-light" href="feedback.php"> BUY </a> </button>
                    <button class="buy btn btn-primary"> <a class="text-light" href="userHome.php"> BACK</a> </button>

                </div>
            </div>
            <hr>
            <div class="row">
                <?php
                $sqlForView = "SELECT * FROM storethree";
                $result2 = mysqli_query($conn, $sqlForView);
                //$no = 1;
                $key = "AIzaSyBCce614Bi3vKvFjm4uvQQAgG_TNuGjH7M";
                $stock = false;
                while ($row = mysqli_fetch_assoc($result2)) {
                    $storeBookName = $row["bookname"];
                    $storeBookId =   $row["bookid"];
                    $storeBookCount = $row["inventory"];
                    $book_name_wos = str_replace(' ', '+', $storeBookName);
                    $books_api = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=' . $book_name_wos . '&key=' . $key);
                    $book_data = json_decode($books_api, true);
                    $cover = $book_data['items'][0]['volumeInfo']['imageLinks']['thumbnail'];

                    if ($storeBookCount == 0 || $storeBookCount == null) {
                        echo '
                        <div class="col-sm-4"><figure class="figure">
                               <img
                                 src=' . $cover . '
                                 class="figure-img img-fluid rounded shadow-3 mb-3"
                                 alt="Book image"
                                />
                               <figcaption class="figure-caption text-end"><b>' . $storeBookName . '.</b> <br>
                               <b style="color:red;">OUT OF STOCK!</b></figcaption>
                                </figure> </div> ';
                    } else {
                        echo '
                        <div class="col-sm-4"><figure class="figure">
                               <img
                                 src=' . $cover . '
                                 class="figure-img img-fluid rounded shadow-3 mb-3"
                                 alt="Book image"
                                />
                               <figcaption class="figure-caption text-end"><b>' . $storeBookName . '.</b> <br>
                               <b>No of copies available : ' . $storeBookCount . '</b></figcaption>
                                </figure> </div> ';
                    }
                }


                ?>
            </div>
        </div>


    </div>









    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>