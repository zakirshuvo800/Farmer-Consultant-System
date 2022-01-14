<!DOCTYPE html>
<html>
<?php
include('connection.php');
?>
<head>
    <title>Hello, world!</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style_new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Media CSS-->
    <link rel="stylesheet" href="assets/css/media.css">


    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 3px solid #20cefa;
            border-radius: 5px;
        }

    </style>
</head>

<body>
   
   
   <div class="container">
       
   
    <div class="col-sm-12">
        <div class="title">
            <h1> Upload Disease Image </h1>
            
        </div>
    </div>


    <body>
        <?php
        if(isset($_POST['uploadfilesub']))
        {
            $disease = $_POST['disease_name'];
            $filename = $_FILES['uploadfile']['name'];
            $filetmpname =  $_FILES['uploadfile']['tmp_name'];
            $folder = 'image/';
            move_uploaded_file($filetmpname,$folder.$filename);
            $sql = "INSERT INTO disease(disease_name,disease_img) VALUES ('$disease','$filename')";
            if ($conn->query($sql) == TRUE) {
                echo "New record created successfully";
            }
        }
        ?>
        <form action = "add_disease.php" method = "post" enctype="multipart/form-data">
            <p>Disease name</p>
            <input type = "text" placeholder ="Disease name" name ="disease_name" />
            <br><br>
            <p>Disease image</p>
            <input type = "file" name = "uploadfile"><br>
            <input type = "submit" name ="uploadfilesub" value ="upload" />
        </form>
    </body>
</html>