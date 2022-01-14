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


        <h1 class="text-center table_head">User Details</h1>
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
                <th class="red">Farmer_name</th>
                <th class="red">Farmer_id</th>
                <th class="red">Farmer_password</th>
                <th class="red">Farmer_address</th>
                <th class="red">Farmer_mail</th>
                <th class="red">Farmer_phone</th>
            </tr>
            <?php
                $sql = "SELECT * FROM farmer_info";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
            <tr>
                <td><?php echo $row['farm_name']; ?></td>
                <td><?php echo $row['farm_id']; ?></td>
                <td><?php echo $row['farm_password']; ?></td>
                <td><?php echo $row['farm_address']; ?></td>
                <td><?php echo $row['farm_mail']; ?></td>
                <td><?php echo $row['farm_phone']; ?></td>
            </tr>
            <?php } } ?>
        </table>
    </div>
</body>

</html>