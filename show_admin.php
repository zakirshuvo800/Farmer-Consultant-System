<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/new_style.css">

</head>


<body style="margin:50px 0;">
    <div class="container ">

        <div class="row">

            <div class="col-md pad_btn">
                <a href="show_farmer.php">
                    <button class="btn custom_btn">Farmer Info
                    </button>
                </a>
            </div>
            <div class="col-md pad_btn">
                 <a href="show_consultant.php">
                    <button class="btn custom_btn ">Consultant Info
                    </button>
                </a>
            </div>

             <div class="col-md pad_btn">
                 <a href="check_bill.php">
                    <button class="btn custom_btn "> Treatment & Bill 
                    </button>
                </a>
            </div>
            
                
            
            <div class="col-md pad_btn">
               
                <a href="delete_farmer.php">
                    <button class="btn custom_btn ">Delete User
                    </button>
                </a>
            </div>

            
        </div>

    </div>

</body>

</html>
