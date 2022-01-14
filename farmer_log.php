<!DOCTYPE html>
<?php
include('connection.php');
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style_new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="user">
    <form action="farmer_log.php" method="post">

        <div class="wrapper fadeInDown pad">
            <div id="formContent">



                <div class="fadeIn first txt">
                    <h5>User Log In</h5>
                </div>



               
                    <input type="email" id="login" class="fadeIn second" name="farm_mail" placeholder="farm_mail">
                    <input type="password" id="password" class="fadeIn third" name="farm_password" placeholder="farm_Password">
                    <input type="submit" class="fadeIn fourth" name="add" value="Log In">
                


            </div>
        </div>

    </form>
    <?php
        if(isset($_POST['add']))
        {   
            $farmer_password = $_POST['farm_password'];
            $farmer_mail = $_POST['farm_mail'];
            
            $sql = "SELECT * FROM farmer_info WHERE farm_mail = '$farmer_mail' AND farm_password ='$farmer_password'";
            $result = $conn->query($sql);
            if($result->num_rows!=0)
            {
                $sql_1 = "SELECT farm_id from farmer_info WHERE farm_mail = '$farmer_mail' AND farm_password = '$farmer_password'";
                
                $result_1 = $conn->query($sql_1);
                
                $row = $result_1->fetch_assoc();
                $_SESSION["id"] = $row['farm_id'];
                 header("Location: appointment.php") ;
                 
                 
            }
            else
            {
                echo "Please register<br>";
            }
        }
        ?>
</body>

</html>
