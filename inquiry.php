
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$con= mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
    echo "connected";
}
else
{
    die("connection failed".mysqli_connect_error());
}


$name = $_post["USERNAME"];
$email = $_post["email"];
$mobile = $_post["mobile"];
$service = $_post["service"];

$query = "INSERT Into inquiry values('$name','$email','$mobile','$service')";
$data = mysqli_query($con,$query);

if($data)
{
echo "data inserted";
}

else
{
    die("failed".mysqli_connect_error());
}




?>