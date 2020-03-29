<?php
$host='localhost';
$uname='root';
$pwd='';
$db='contact';
$con=new mysqli($host,$uname,$pwd,$db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql="SELECT * FROM contact";
$result = $con->query($sql)or die($con->error);
echo "<table border='1'>
<th>First Name</th> <th>Last Name</th> <th>E-mail Address</th>  <th>Phone</th> <th>Address_1</th> <th>Address_2</th> <th>city</th>  <th>District</th>   <th>Zip</th> <th>Confirm Address</th> <th>Wedding Date</th> <th>Package Number</th>";

while($row=$result->fetch_assoc()){
    echo "<tr>
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

?>