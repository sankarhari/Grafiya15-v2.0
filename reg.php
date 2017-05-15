<html>
<head>
<META http-equiv="refresh" content="5;URL=http://grafiya15.in/"> 
</head>
<body>
<?php
$servername = "mysql16.000webhost.com";
$username = "a4571836_g";
$password = "root@123";
$dbname = "a4571836_g";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$sql="insert into reg(name,email,phone,college,dept,year) values('".$_REQUEST['name']."', '".$_REQUEST['email']."','".$_REQUEST['phone']."','".$_REQUEST['college']."','".$_REQUEST['dept']."','".$_REQUEST['year']."')";
$result = $conn->query($sql);

If($result)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";

}


?>
</body>
</html>