<!DOCTYPE html>
<html>
<?php
    include('connection.php');
    session_start();
    $farmer_id=$_SESSION[id];
     ?>

<head>
    <title>Register!</title>

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
            <h1>Appointment Information</h1>
            
        </div>
    </div>

   
   
   
   
   
   
   
   
    <table class="table table-border">
        <tr>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>Consultant Name</th>
        </tr>
        <?php
                $sql = "SELECT * FROM appointment";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
            <tr>
                <td><?php echo $row['appoint_date']; ?></td>
                <td><?php echo $row['appoint_time']; ?></td>
                <td><?php echo $row['consul_name']; ?></td>
                 <td> <a href="add_more_disease.php?place=<?php echo $disease; ?>" class="btn">Disease Info</a> </td>
            </tr>
            <?php } } ?>
        </table>
    </div>
</body>

</html>
