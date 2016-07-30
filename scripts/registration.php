<?php
require 'functions.php';

$conn = makeConnection();
$username = $_POST['username'];

$sql="SELECT count(*) as count FROM users WHERE username = '" . $username . "' limit 1;";

$result = $conn->query($sql);
$count = -1;
while($row = $result->fetch_assoc()) {
  $count =  $row["count"];
}

$link = "Location: /../index.php";

if($count ==0){
    if(register($_POST["email"], $_POST["username"], $_POST["password"],$_POST["firstname"],$_POST["lastname"],$_POST["adres"],$_POST["postalcode"],$_POST["city"], $conn)){
      $link .="?page=login.html&";
      $link .="SUCCESS=" . "Succesfully registered";
    }else{
      $link .="?page=registration.html&";
      $link .="ERROR=" . "Something went wrong, please try again.";
    }
}else{
  $link .= "ERROR=" . "That account has already been taken, you cheeky bastard.";
}
header($link);
die();
$conn->close();

?>
