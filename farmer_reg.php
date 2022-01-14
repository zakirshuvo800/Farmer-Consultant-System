<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>

<head>



    <meta charset="UTF-8">
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style_new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>

<body class="user">
    <form action="farmer_reg.php" method=post>


        <div class="wrapper fadeInDown pad">
            <div id="formContent">


                <div class="fadeIn first txt">
                    <h5>User Sign Up</h5>
                </div>

                <input type="text" id="login" class="fadeIn second" name="farm_name" placeholder="farm_name">
                <input type="password" id="password" class="fadeIn second" name="farm_password" placeholder="farm_password">
                <input type="text" id="login" class="fadeIn second" name="farm_address" placeholder="farm_address">
                <input type="text" id="login" class="fadeIn second" name="farm_phone" placeholder="farm_phone">
                <input type="email" id="login" class="fadeIn third" name="farm_mail" placeholder="farm_mail">
                <input type="submit" class="fadeIn fourth" name="submit" value="Sign Up">

                <p>Already have an Account?<a href="farmer_log.php"> Log In</a></p>
            </div>
        </div>




        </form>
        <?php    
        if(isset($_POST['submit']))
        {
            $farmer_name = $_POST['farm_name'];
            $farmer_password = $_POST['farm_password'];
            $farmer_address = $_POST['farm_address'];
            $farmer_phone = $_POST['farm_phone'];
            $farmer_mail = $_POST['farm_mail'];
            
            $sql_1 = "SELECT * FROM farmer_info WHERE farm_mail = '$farmer_mail'";
            $result = $conn->query($sql_1);
            
            if($result->num_rows==0)
            {
             
                 $sql = "INSERT INTO farmer_info(farm_name,farm_password,farm_address,farm_phone,farm_mail) VALUES ('$farmer_name','$farmer_password','$farmer_address','$farmer_phone','$farmer_mail')";
            
                if ($conn->query($sql) == TRUE) {
                  echo "New record created successfully<br>";       
                   }
                ?>
              <button><a href = "appointment.php">Add disease and Crops Name</a></button>   
             <button><a href = "add_more_disease.php">Add disease and Crops Name</a></button>   
             <?php
               }
             else
             {
                echo "This mail is already taken<br>";
             }
         }
        ?>
     </body>
</html>
