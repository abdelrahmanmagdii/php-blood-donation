<?php

// Start the session
session_start();
if(!isset($_SESSION["uid"]))
{
    $errorMsg="Please Login";
    header('Location:login.php?errorMsg='.$errorMsg);
}
$id = $_SESSION["uid"];

$sql1 = "Select * from db105.appointment_request where a_time IS NULL";
//printf("<br/>".$sql1);

$dbConnection = mysqli_connect("peicloud.ca", "u105", "u105", "db105");
$result1 = mysqli_query($dbConnection, $sql1 );
echo "<table border = 1>";
echo "<tr><th>id</th><th>Age</th><th>Email</th><th>Name</th><th>blood Type</th><th>RH</th></tr>";
while ($row1 = $result1->fetch_assoc()) {
    printf("<tr><td><a href='make_appointment.php?id=%d'>%d</a></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row1["id"], $row1["id"], $row1["client_age"], $row1["client_email"], $row1["client_name"], $row1["blood_type"], $row1["rh_factor"]);
}
echo "</table>";

?>
<html>
<style>
    table{
        font-size: 14pt;
        font-weight: bold;
    }
    a{
        font-size: 14pt;
    }
    h1{
        font-size: 20pt;
    }
    body{
        background-image: url('donation.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;

    }
</style>
<body>
<a href="welcome.php"> <br><br> Back </a>
</body>
</html>

