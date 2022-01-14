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
            <h1>Disease Information</h1>
            
        </div>
    </div>

   
   
   
   
   
   
   
   
    <table class="table table-border">
        <tr>
            <th>Disease Name</th>
            <th>Disease Image</th>
        </tr>
        <?php
        $sql = "SELECT * FROM disease";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

        <tr>
            <td> <h3><?php echo $row['disease_name']; ?></h3></td>
            <td>
                <img src="image/<?php echo $row['disease_img']; ?>" height="200" width="350" style="border-radius: 8px;" >
            </td>
        </tr>

        <?php
            
        }
        }
        ?>
    </table>
    </div>
</body>

</html>
