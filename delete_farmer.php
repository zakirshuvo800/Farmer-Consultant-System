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

<body style="margin-top: 10px;">

    <div class="container">
        <div class="row text-center">
            <h1>Delete Farmer</h1>
        </div>
        <form action="delete_farmer.php" method="post">
            <div class="form-group row">
                <label for="tn" class="col-sm-2 col-form-label">Farmer Name : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Farmer Name" name="farm_name">
                </div>
            </div>
            <button class="btn custom_btn" type="submit" name="delete">Submit</button>
        </form>
         <?php
        if(isset($_POST['delete']))
        {
            $farmer_name=$_POST['farm_name'];
            
            $sql = "SELECT * from farmer_info WHERE farm_name = '$farmer_name'";
            $result = $conn->query($sql);
            if($result->fetch_assoc()==false)
            {
                echo "This username is not exist in database<br>";
            }
            else
            {
                
                $sql_1 = "DELETE FROM farmer_info WHERE farm_name = '$farmer_name'";
                if($result_1=$conn->query($sql_1))
                {
                    echo "User delete successfully<br>";
                }
            }
            
        }
        ?>
    </div>



  
    
    
   
</body>

</html>