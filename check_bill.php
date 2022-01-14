<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Document</title>


    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/new_style.css">





</head>
<body style="margin-top:20px;">
   <div class="container">
    <?php

include('connection.php');

session_start();


?>
    <h1 style="margin-bottom:20px; text-align:center;">User Appointment and Bill Details</h1>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

    </style>
    <table class="table table-striped table-dark">
        <tr>
            <th class="red">Disease Name</th>
            <th class="red">Medicine Name</th>
            <th class="red">Medicine Cost</th>
            <th class="red">Consultant Fee</th>
            
            

           
        </tr>
        <?php
                $sql = "SELECT disease_name,medi_name,medi_cost,consul_fee FROM treatment";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
        <tr>
            <td><?php echo $row['disease_name']; ?></td>
            <td><?php echo $row['medi_name']; ?></td>
            <td><?php echo $row['medi_cost']; ?></td>
            <td><?php echo $row['consul_fee']; ?></td>
            
            
            
        </tr>
        <?php } }
        else
        {
            echo "there is not any appointment or bill<br>";
        }?>
    </table>

<br><br>

    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

    </style>
    <table class="table table-striped table-dark">
        <tr>
           
            

            <th class="red">Medicine Cost</th>
            <th class="red">Consultant Fee</th>

            <th class="red">Total Bill</th>

            
        </tr>
        <?php
                $sql = "SELECT medi_cost,consul_fee,tot_bill FROM farmer_bill";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
        <tr>
           
           <td><?php echo $row['medi_cost']; ?></td>
           <td><?php echo $row['consul_fee']; ?></td>
           <td><?php echo $row['tot_bill']; ?></td>
        </tr>
        <?php } }
        else
        {
            echo "there is not any appointment or bill<br>";
        }?>
    </table>
</div>
</body>

</html>
