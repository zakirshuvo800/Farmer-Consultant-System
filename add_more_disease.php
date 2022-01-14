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
            <h1>Add Disease and Crop Name</h1>
        </div>
        <form action="add_more_disease.php" method="post">
            <div class="form-group row">
                <label for="crop" class="col-sm-2 col-form-label">Crop Name : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Crop Name" name="crop_name" id="crop" >
                </div>
            </div>
           
           <div class="form-group row">
            <label for="hn" class="col-sm-2 col-form-label">Disease Name: </label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="hn" name="disease_name">
                    <option selected>Disease</option>
                    <?php
        $sql_1="SELECT disease_name FROM disease";

        $result_1 = $conn->query($sql_1);
        if($result_1->num_rows>0)
        {
            while($row = $result_1->fetch_assoc())
            {
               ?>
                    <option value="<?php echo $row['disease_name'];   ?>"><?php echo $row['disease_name'];   ?></option>

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
            $crop_name = $_POST['crop_name'];
            $disease_name = $_POST['disease_name'];
            
           
            
            $sql_1 = "SELECT * FROM disease_discrip WHERE  disease_name='$disease_name'";
            $result = $conn->query($sql_1);
            if($result->num_rows==0)
            {
                 $sql = "INSERT INTO disease_discrip(crop_name,disease_name) VALUES('$crop_name','$disease_name')"; 
                if($conn->query($sql)== TRUE){
                echo "New record created successfully<br>";       
                   }
                ?>
            <a href="add_medicine.php" class="btn custom_btn pad_btn">Medicine</a>

  

            
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








  


</body>

</html>