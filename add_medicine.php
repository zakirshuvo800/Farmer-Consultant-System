<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>

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

<body>


    <div class="container">
        <div class="row">
            <h1>Medicine Information</h1>
        </div>
        <form action="add_medicine.php" method="post">
            <div class="form-group row">
                <label for="mn" class="col-sm-2 col-form-label">Medicine Name : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Medicine Name" name="medi_name" id="mn" >
                </div>
            </div>
            <div class="form-group row">
                <label for="md" class="col-sm-2 col-form-label">Medicine Dose : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Medicine Dose Name" name="medi_dose" id="md">
                </div>
            </div>
            <div class="form-group row">
                <label for="mr" class="col-sm-2 col-form-label">Medicine Apply Time : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Apply Time" name="medi_apply_time" id="mr">
                </div>
            </div>
            
           
            <button class="btn custom_btn" type="submit" name="submit">Submit</button>
        </form>
        
        
          <?php
        if(isset($_POST['submit']))
        {
            $medicine_name = $_POST['medi_name'];
            $medicine_dose = $_POST['medi_dose'];
            $medicine_app_tm = $_POST['medi_apply_time'];
            
            
            
            $sql_1 = "SELECT * FROM medicine WHERE  medi_name='$medicine_name'";
            $result = $conn->query($sql_1);
            if($result->num_rows==0)
            {
                 $sql = "INSERT INTO medicine(medi_name,medi_dose,medi_apply_time) VALUES('$medicine_name','$medicine_dose','$medicine_app_tm')"; 
                if($conn->query($sql)== TRUE){
                    echo "New record created successfully<br>";       
                   }
                ?>
            <a href="treatment.php" class="btn custom_btn pad_btn"> Treatment and Bill</a>

  

            
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
                









  

