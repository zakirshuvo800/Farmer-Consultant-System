<!DOCTYPE html>
<?php
include('connection.php');
session_start();
$farmer_id = $_SESSION['id'];
?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Register!</title>
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/new_style.css">

</head>

<body>


    <div class="container">
        <div class="row">
            <h1>Appointment</h1>
        </div>
        <form action="appointment.php" method="post">
            <div class="form-group row">
                <label for="mn" class="col-sm-2 col-form-label">Appointment Date: </label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="Appointment Date" name="appoint_date" id="mn" >
                </div>
            </div>
            <div class="form-group row">
                <label for="md" class="col-sm-2 col-form-label">Appointment time : </label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" placeholder="Appointment Time" name="appoint_time" id="md">
                </div>
            </div>

            <div class="form-group row">
            <label for="dn" class="col-sm-2 col-form-label">Consultant Name : </label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="dn" name="consul_name">
                    <option selected>Consultant Name</option>
                    <?php
        $sql_1="SELECT consul_name FROM consultant";

        $result_1 = $conn->query($sql_1);
        if($result_1->num_rows>0)
        {
            while($row = $result_1->fetch_assoc())
            {
               ?>
                    
                    <option value="<?php echo $row['consul_name'];   ?>"><?php echo $row['consul_name'];   ?></option>

                    <?php
            }
        }
        else
        {
            echo "an error occured<br>";
        }

        ?>

                </select>
            </div>
        </div>

            <button class="btn custom_btn" type="submit" name="submit">Submit</button>
        </form>
        
        
          <?php
        if(isset($_POST['submit']))
        {
            $appoint_date = $_POST['appoint_date'];
            $appoint_time = $_POST['appoint_time'];
            $consultant_name = $_POST['consul_name'];
            
            
            
            $sql_1 = "SELECT * FROM appointment WHERE  consul_name='$consultant_name'";
            $result = $conn->query($sql_1);
            if($result->num_rows==0)
            {
                 $sql = "INSERT INTO appointment(appoint_date,appoint_time,consul_name) VALUES('$appoint_date','$appoint_time','$consultant_name')"; 
              if ($conn->query($sql) == TRUE) {
                  echo "New record created successfully<br>";       
                   }
                ?>
            <a href="add_more_disease.php" class="btn custom_btn pad_btn">Disease Info</a>

  

            
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
