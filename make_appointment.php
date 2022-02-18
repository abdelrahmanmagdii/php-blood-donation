<?php

// Start the session
session_start();
if(!isset($_SESSION["uid"]))
{
    $errorMsg="Please Login";
    header('Location:login.php?errorMsg='.$errorMsg);
}
$aid = $_SESSION["uid"];
if(isset($_GET["id"]))
{
    $aid = $_GET["id"];
}
else{
    $aid ="";
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
        background-repeat: no-repeat;
        background-position: center center;

    }
</style>
<body>
<table>
    <form action="process_make_appointment.php" method="post">
        <?php
        printf("<input type='hidden' name='id' value='".$aid."' />");
        ?>
    <TR><TH>Choose a date</TH><TD>
                <input name = "date" type = "date"
            </TD>
    <TR><TH>Choose a time</TH><TD>
            <input name = "time" type = "time"
        </TD>
        </TR>
        <TR><TD colspan="2"><input type="submit" value='Submit Appointment' />
    </form>
</table>
</body>
</html>

