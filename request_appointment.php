<?php

// Start the session
session_start();
//if(!isset($_SESSION["uid"]))
//{
//    $errorMsg="Please Login";
//    header('Location:login.php?errorMsg='.$errorMsg);
//}
//$id = $_SESSION["uid"];
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
<h1>Welcome</h1>
<form action="process_request_appointment.php" method="post">
<table border="0" width='100%'>
    <TR><TH> Full Legal Name</TH><TD><input type ="text" name ='client_name' size="60"/>
    <TR><TH>Email Address</TH><TD><input type="text" name='client_email' size="60" /> </td></TR>
    <TR><TH>Age</TH><TD><input type ="text" name ='client_age' size="10"/>
    <TR><TH>Comments/Special Requests</TH><TD><p><label><textarea name = "comments" rows="4" cols ="36"> </textarea> </label></p></TR>

    <TR><TH>Blood Type</TH>
    <TD> <label> O </label><input name = "blood_type" type = "radio" value = "O">
     <label> A </label><input name = "blood_type" type = "radio" value = "A">
     <label> B </label><input name = "blood_type" type = "radio" value = "B">
     <label> AB </label><input name = "blood_type" type = "radio" value = "AB"></TD>
    <TR><TH>RH Factor</TH>
        <TD> <label> Positive </label><input name = "rh_factor" type = "radio" value = "Positive">
            <label> Negative </label><input name = "rh_factor" type = "radio" value = "Negative"></TD>
         </TR>
    <TR><TD colspan="2"><input type="submit" value='Book Appointment' />
            <a href="index.html"> <br><br> Back </a>
</table>
</form>
</TD></TR>
</table>
</body>
</html>