
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$con=mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
    echo "connected";
}
else
{
    die("connection failed".mysqli_connect_error());
}


$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$service=$_POST['service'];

$query="INSERT INTO inquiry VALUES('$name','$email','$mobile','$service')";
$data=mysqli_query($con,$query);

if($data)
{
echo "data inserted";
}

else
{
    die("failed".mysqli_connect_error());
}


?>