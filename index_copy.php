<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@700&display=swap" rel="stylesheet"> -->

    <title>Basic Banking System</title>
</head>

<body>
    <?php
  include 'navbar.php';
  ?>
    <div class="main-container">
        <div class="left-container">
            <div class="container-fluid">
                <!-- Introduction section -->
                <div class="row intro py-1">
                    <div class="col-sm-12 col-md">
                        <div class="heading text-center heading-style">
                            <h1>Welcome to THE SPARKS BANK</h1>
                        </div>
                        <div class="desc-text">
                            <span class="description">money looks better in the bank than in your pockets</span>
                        </div>

                    </div>
                </div>

                <!-- Activity section -->
                <div class="row activity text-center activity-style">
                    <div class="col-md act act-style">
                        <img src="img/add_user_home.svg" class="my-img-fluid">
                        <br>
                        <a href="createuser.php"><button>Create a User</button></a>
                    </div>
                    <div class="col-md act act-style">
                        <img src="img/transfer.svg" class="my-img-fluid">
                        <br>
                        <a href="transfermoney.php"><button>Make a Transaction</button></a>
                    </div>
                    <div class="col-md act act-style act-style-history">
                        <img src="img/history.svg" class="my-img-fluid">
                        <br>
                        <a href="transactionhistory.php"><button>Transaction History</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-container">
            <img src="img/bank.png" alt=""
             align ="right">
        </div>
        <footer class="text-center mt-5 py-2 footer">
            <p>Copyright @ 2023 The Sparks Foundation. All Rights Reserved <br />Made by <b> PRAVIN PILODIYA</b></p>
        </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>