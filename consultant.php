<!DOCTYPE html>
<?php
include('connection.php');
session_start();
?>
<html>

<head>



    <meta charset="UTF-8">
    <title>Consultant</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style_new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>

<body class="user">
    <form action="consultant.php" method=post>


        <div class="wrapper fadeInDown pad">
            <div id="formContent">


                <div class="fadeIn first txt">
                    <h5>Consultant Sign In</h5>
                </div>

                <input type="text" id="login" class="fadeIn second" name="consul_name" placeholder="consul_name">
                <input type="password" id="password" class="fadeIn second" name="consul_password" placeholder="consul_password">
                <input type="text" id="login" class="fadeIn second" name="consul_address" placeholder="consul_address">
                <input type="text" id="login" class="fadeIn second" name="consul_phone" placeholder="consul_phone">
                <input type="email" id="login" class="fadeIn third" name="consul_mail" placeholder="consul_mail">
                <input type="submit" class="fadeIn fourth" name="submit" value="Sign In">
                
                
            </div>
        </div>




        </form>
        <?php    
        if(isset($_POST['submit']))
        {
            $consultant_name = $_POST['consul_name'];
            $consultant_password = $_POST['consul_password'];
            $consultant_address = $_POST['consul_address'];
            $consultant_phone = $_POST['consul_phone'];
            $consultant_mail = $_POST['consul_mail'];
            
            $sql_2 = "SELECT * FROM consultant WHERE consul_mail = '$consultant_mail'";
            $result = $conn->query($sql_2);
            
            if($result->num_rows==0)
            {
             
                 $sql = "INSERT INTO consultant(consul_name,consul_password,consul_address,consul_phone,consul_mail) VALUES ('$consultant_name','$consultant_password','$consultant_address','$consultant_phone','$consultant_mail')";
            
                if ($conn->query($sql) == TRUE) {
                  echo "New record created successfully<br>";       
                   }
                ?>
                
                 
                 <a href="show_appointment.php" class="btn custom_btn pad_btn">Log Out</a>
 

            
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
