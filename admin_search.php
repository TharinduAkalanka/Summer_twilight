<!DOCTYPE html>
<html lang="en">

<head>
    <title>SUMMER TWILIGHT</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
        type="text/javascript"></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
    <link rel="stylesheet" href="css/form.css">

</head>

<body>

<section class="inner-pages py-5">
        <div class="container py-xl-5 py-sm-3">
            <section class="typo-section py-4 border-top border-bottom">
                <div class="container ">

                <form action="searchbyinvoice.php" method="POST" name="login_form" class="well form-horizontal">
                    <fieldset class="fff">
                    <div class="form-group top">
                    <label class="col-md-4 control-label">Search by Invoice Number</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <button type="submit" class="btn btn-info"name="add">Search</button>
                        </div>
                    </div>

                    </fieldset>
                </form>
                <form action="search_fname.php" method="POST" name="login_form" class="well form-horizontal">
                    <fieldset class="fff">
                    <div class="form-group top">
                    <label class="col-md-4 control-label">Search by First Name</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" name="fname">
                            </div>
                            <button type="submit" class="btn btn-info"name="add">Search</button>
                        </div>
                    </div>

                    </fieldset>
                </form>
                <form action="search_date.php" method="POST" name="login_form" class="well form-horizontal">
                    <fieldset class="fff">
                    <div class="form-group top">
                    <label class="col-md-4 control-label">Search by Wedding Date</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input type="date" class="form-control" id="username" name="date">
                            </div>
                            <button type="submit" class="btn btn-info"name="add">Search</button>
                        </div>
                    </div>

                    </fieldset>
                </form>
                    
                    <form class="well form-horizontal" action="" method="POST" id="contact_form">
                        <fieldset class="fff">
                            
                        </fieldset>
                        <button type="submit" class="btn btn-info" name="showall" >Show All List</button>
                    </form>
                    
            </section>

    </section>
    </div>
    </section>



<?php
$host='localhost';
$uname='root';
$pwd='';
$db='contact';
$con=new mysqli($host,$uname,$pwd,$db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

if(isset($_POST["showall"])){
    $sql="SELECT * FROM contact";
    $result = $con->query($sql)or die($con->error);
    
    echo "<table border='2' style='margin-left:50px; background-color:rgb(106, 248, 253);'>
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
    echo "<br>";
}

?>
</body>

</html>