<?php

// Start the session
session_start();
if(!isset($_SESSION["uid"]))
{
    $errorMsg="Please Login";
    header('Location:login.php?errorMsg='.$errorMsg);
}
$id = $_SESSION["uid"];

if(isset($_POST["client_name"]))
{
    $client_name = $_POST["client_name"];
}
else{
    $client_name ="";
}

if(isset($_POST["client_age"]))
{
    $client_age = $_POST["client_age"];
}
else{
    $client_age ="";
}

if(isset($_POST["client_email"]))
{
    $client_email = $_POST["client_email"];
}
else{
    $client_email ="";
}
if(isset($_POST["comments"]))
{
    $comment = $_POST["comments"];
}
else{
    $comment ="";
}

if(isset($_POST["blood_type"]))
{
    $bloodType = $_POST["blood_type"];
}
else{
    $bloodType ="";
}

if(isset($_POST["rh_factor"]))
{
    $rhFactor = $_POST["rh_factor"];
}
else{
    $rhFactor ="";
}
echo "Connect Successfully. Host info: ";
printf($rhFactor);
printf($bloodType);
$dbConnection = mysqli_connect("peicloud.ca", "u105", "u105", "db105");

$stmt = $dbConnection->prepare("INSERT INTO `db105`.`appointment_request`(`customer_id`,`client_name`,`client_age`, `client_email`,`comment`,`blood_type`,`rh_factor`) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param('sssssss', $id, $client_name, $client_age, $client_email, $comment, $bloodType, $rhFactor); // 's' specifies the variable type => 'string'

$stmt->execute();
header("location:index.html");
?>
