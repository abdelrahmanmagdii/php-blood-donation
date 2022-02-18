<?php
//    $errorMsg="Bad userName/password";
//    header('Location:login.php?errorMsg='.$errorMsg);
//
?>
<?php
// Start the session
session_start();
?>
<html>
<body>
Testing...
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL*/

$dbConnection = mysqli_connect("peicloud.ca", "u105", "u105", "db105");
// check connection
if ($dbConnection->connect_error) {
    die("Connection failed: " . $dbConnection->connect_error);
}

// Check connection
if($dbConnection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($dbConnection);

if(isset($_POST["uname"]))
{
    $userName = $_POST["uname"];
}
else{
    $userName ="";
}

if(isset($_POST["pass"]))
{
    $password = $_POST["pass"];
}
else{
    $password ="";
}
printf("<br/>");
printf($userName." ".$password);

printf("<br/>");
$stmt = $dbConnection->prepare('SELECT * FROM db105.customer WHERE email = ? AND password = ?');
$stmt->bind_param('ss', $userName, $password); // 's' specifies the variable type => 'string'
printf("<br/> line 47");
$stmt->execute();
printf("<br/> line 49");
$result2 = $stmt->get_result();
printf("<br/> line 51");

if ($row2 = $result2->fetch_assoc()) {
    printf("%s (%s)\n", $row2["id"], $row2["email"]);
    $_SESSION["uid"] = $row2["id"];
    $_SESSION["name"] = $row2["name"];
    $_SESSION["roleId"] = $row2["role_id"];
    printf($_SESSION["uid"] ." ==> ". $_SESSION["name"]);
    header('Location:welcome.php');
}
else{
    $errorMsg="Wrong%20Username or password";
    header('Location:login.php?errorMsg='.$errorMsg);
}

?>
</body>
</html>
