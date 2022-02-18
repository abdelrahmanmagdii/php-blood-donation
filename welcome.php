<?php

// Start the session
session_start();

    if(!isset($_SESSION["uid"]))
    {
        $errorMsg="Please Login";
        header('Location:login.php?errorMsg='.$errorMsg);
    }
    $id = $_SESSION["uid"];
    if(isset($_SESSION["name"]))
    {
        $name = $_SESSION["name"];
    }
    else{
        $name = "";
    }

if(isset($_SESSION["roleId"]))
{
    $role = $_SESSION["roleId"];
}
else{
    $role = 0;
}

    ?>
<html>
<style>

    a{
        font-size: 14pt;
    }
    h1{
        font-size: 20pt;

    }
    body{
        background-image: url('donation.jpg');
        background-size: cover;
        /*background-repeat: no-repeat;*/
        background-position: center center;

    }
</style>
<body>
<h1> <center> Welcome Admin</center> </h1>
<br/>
<?php
// if($role == 1)
// {
     print("<a href='view_appointment_requests.php'> <center>View Appointment Request</a></center>");
// }
// if($role == 2)
// {
//     print("<a href='request_appointment.php'> <center>Make an appointment</a></center>");
//     print("<a href='view_appointment_requests.php'>View My Appointments</a>)");
// }
//?>


<a href="index.html"> <br><br> Log out </a>
</body>
</html>
