<!DOCTYPE html>
<?php

include('connection.php');

session_start();

if(isset($_GET['disease'])){
    $place_name = $_GET['disease'];
}

$farmer_id = $_SESSION['id'];

?>
<html>


<head>

    <meta charset="UTF-8">
    <title>Document</title>


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
    <link rel="stylesheet" href="assets/css/new_style.css">
    <!--Media CSS-->
    <link rel="stylesheet" href="assets/css/media.css">



</head>

<body style="margin-top:20px;">

<div class="container">
   <h1>Booking Form</h1>
    <form action="" method="post">

        <div class="form-group row">
            <label for="room" class="col-sm-2 col-form-label">Medicine Cost : </label>
            <div class="col-sm-10">
                <input type="number" placeholder="Medicine Cost" name="medi_cost" id="room">
            </div>
        </div>
        <div class="form-group row">
            <label for="seat" class="col-sm-2 col-form-label">Consultant Fee : </label>
            <div class="col-sm-10">
                <input type="number" placeholder="Consultant Fee" name="consul_fee" id="seat">
            </div>
        </div>

        

        <div class="form-group row">
            <label for="hn" class="col-sm-2 col-form-label">Disease Name: </label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="hn" name="disease_name">
                    <option selected>Disease</option>
                    <?php
        $sql_1="SELECT crop_name,disease_name FROM disease_discrip";

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




        <div class="form-group row">
            <label for="tn" class="col-sm-2 col-form-label">Medicine Name : </label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="tn" name="medi_name">
                    <option selected>Medicine Name</option>
                    <?php
    $sql_2 = "SELECT medi_name,medi_dose,medi_apply_time FROM medicine";
    $result_2 = $conn->query($sql_2);
    if($result_2->num_rows>0)
    {
        while($row = $result_2->fetch_assoc())
        {
    ?>
                    <td><?php echo $row['medi_name'];  ?></td>
                    <option value="<?php echo $row['medi_name'];   ?>"><?php echo $row['medi_name'];   ?></option>
                    <?php
        }
    }
    else
    {
        echo "there is an error occur<br>";
    }
    ?>
                </select>
            </div>
        </div>




        <button type="submit" class="btn custom_btn pad_btn " name="submit">submit</button>



    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $medicine_name=$_POST['medi_name'];
            $disease_name=$_POST['disease_name'];
            $medicine_cost=$_POST['medi_cost'];
            $consultant_fee=$_POST['consul_fee'];
            
            
            $sql_3 = "SELECT disease_name FROM disease_discrip";
            $result_3 = $conn->query($sql_3);
            $row_3 = $result_3->fetch_assoc();
            
            
            $sql_4="SELECT medi_name FROM medicine";
            $result_4 = $conn->query($sql_4);
            $row_4=$result_4->fetch_assoc();
            
            if($result_3->num_rows==0||$result_4->num_rows==0)
            {
                echo "entered disease name or medicine name is not exist<br>";
            }
           
            else
            {
                $sql_5 = "INSERT INTO treatment (disease_name,medi_name,medi_cost,consul_fee) VALUES ('$disease_name','$medicine_name','$medicine_cost','$consultant_fee')";
               /* echo "customer id ".$customer_id."<br>";
                echo "place name ".$place_name."<br>";
                echo "hotel name ".$hotel_name."<br>";
                echo "need transport seat ".$need_trans_seat."<br>";
                echo "need room ".$need_room."<br>";
                echo "transport name ".$transport_name."<br>";
                */
                
                if($conn->query($sql_5))
                {
                    echo "new record create successfully<br>";
                }
                else
                {
                    echo "there is an error<br>".$conn->error;
                }
                
                
    
            
            $total_bill = $medicine_cost + $consultant_fee;
            
           
            
            $sql_6 = "INSERT INTO farmer_bill (medi_cost,consul_fee,tot_bill) VALUES ('$medicine_cost','$consultant_fee','$total_bill')";
            
            $conn->query($sql_6);
                
            }
           
            
        }
            
?>

    <style>
        .button {
            background-color: #555555;
            border: black;
            color: white;
            padding: 15px 32px;
            /*text-align: right;*/
            text-decoration: underline;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button_div {
            text-align: center;
        }
    </style>

    <a href="check_bill.php" class="btn custom_btn pad_btn">Check Book & Bill</a>

   
    <style>
        .button {
            background-color: #555555;
            border: black;
            color: white;
            padding: 15px 32px;
            /*text-align: right;*/
            text-decoration: underline;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button_div {
            text-align: center;
        }
    </style>

    
     <a href="logout.php" class="btn custom_btn pad_btn">Log Out</a>



</div>

</body>

</html>