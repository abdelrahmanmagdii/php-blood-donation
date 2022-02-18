<?php

// Start the session
session_start();
if(!isset($_SESSION["uid"]))
{
    $errorMsg="Please Login";
    header('Location:login.php?errorMsg='.$errorMsg);
}

$id = $_SESSION["uid"];
$id = $_SESSION["uid"];
if(isset($_POST["id"]))
{
    $aid = $_POST["id"];
}
else {
    $aid = "";
}
if(isset($_POST["date"]))
{
    $date = $_POST["date"];
}
else {
    $date = "";
}
if(isset($_POST["time"]))
{
    $time = $_POST["time"];
}
else {
    $time = "";
}
    echo "Connect Successfully. Host info: ";
    printf("<br/>".$aid);
    printf("<br/>".$date);
    printf("<br/>".$time);


    $dbConnection = mysqli_connect("peicloud.ca", "u105", "u105", "db105");

//        UPDATE table_name
//SET column1=value, column2=value2,...
//WHERE some_column=some_value
$stmt = $dbConnection->prepare("UPDATE `db105`.`appointment_request` set a_date=?,a_time=? WHERE id=?");
$stmt->bind_param('sss', $date, $time, $aid); // 's' specifies the variable type => 'string'
//
$stmt->execute();
header("location:view_appointment_requests.php");
?>
