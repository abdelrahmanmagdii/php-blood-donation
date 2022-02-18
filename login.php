<?php

    if(isset($_GET["errorMsg"]))
    {
        $errorMsg = $_GET["errorMsg"];
    }
    else{
        $errorMsg ="";
    }
?>
<html>
<style>
    a{
        font-size: 14pt;
    }
    h2{
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
<form action="process_login.php" method="post">
    <h1 style="color: darkred"><?php print($errorMsg);?></h1>
<table border="'1'">
    <tr><th>user name</th><td><input type="text" name="uname"/> </td></tr>
    <tr><th>password</th><td><input type="password" name="pass"/> </td></tr>
    <tr><td colspan="2"><input type="submit" value="Send"/> </td></tr>


</table>
</form>
<h2>Username: a <br> password: a</h2>
<a href="index.html"> <br><br> Back </a>
</body>
</html>
