<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
$host='localhost';
$uname='root';
$pwd='';
$db='contact';
$con=new mysqli($host,$uname,$pwd,$db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
if(isset($_POST['add'])) {
    $myusername = $con -> real_escape_string($_POST['username']);
    $sql = "SELECT * FROM contact WHERE invoice = '$myusername' ";
    $count=0; 
    $result = $con->query($sql)or die($con->error);
    echo "<table border='1' style=' background-color:rgb(106, 248, 253); margin-left:20px;'>
    <th>Invoice</th> <th>First Name</th> <th>Last Name</th> <th>E-mail Address</th>  <th>Phone</th> <th>Address_1</th> <th>Address_2</th> <th>city</th>  <th>District</th>   <th>Zip</th> <th>Confirm Address</th> <th>Wedding Date</th> <th>Package Number</th>";
    while($row=$result->fetch_assoc()){
        echo "<tr>
        <td>{$row["invoice"]}</td>
        <td>{$row["first_name"]}</td>
        <td>{$row["last_name"]}</td>
        <td>{$row["email"]}</td>
        <td>{$row["phone"]}</td>
        <td>{$row["address1"]}</td>
        <td>{$row["address2"]}</td>
        <td>{$row["city"]}</td>
        <td>{$row["district"]}</td>
        <td>{$row["zip"]}</td>
        <td>{$row["confirm"]}</td>
        <td>{$row["weddingdate"]}</td>
        <td>{$row["package"]}</td>
        </tr>";
    }

 }
?>
<a class="btn btn-info" href="admin_search.php" role="button" style="float:right">Go Back</a>

</body>
</html>

