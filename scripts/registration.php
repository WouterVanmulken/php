<?php require 'functions.php'; ?>
<?php

$conn = makeConnection();

$username = $_POST['username'];

$sql="SELECT count(*) as count FROM users WHERE username = '" . $username . "' limit 1;";

$result = $conn->query($sql);
$count = -1;
while($row = $result->fetch_assoc()) {
  $count =  $row["count"];
}

$link = "Location: index.php?page=login.html&";

if($count ==0){
    register($_POST["email"], $_POST["username"], $_POST["password"],$_POST["firstname"],$_POST["lastname"],$_POST["adres"],$_POST["postalcode"],$_POST["city"], $conn);
    $link .= "SUCCES=" . "Succesfully registered.";
// login   ("wouter","Password123", $conn);
}else{
  $link .= "ERROR=" . "That account has already been taken, you cheeky bastard.";
}
header($link);
die();
$conn->close();

?>
