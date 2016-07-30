<?php

require 'functions.php';

$conn = makeConnection();
$link = "Location: /../index.php";

    if(updateData($_POST["email"], $_POST["username"],$_POST["firstname"],
                $_POST["lastname"],$_POST["adres"],$_POST["postalcode"],
                $_POST["city"], $conn)){

      $link .="?page=userdetails.php&";
      $link .="SUCCESS=" . "Succesfully changed data";
      $_SESSION["user"] = $_POST["username"];
    }else{
      $link .="?page=userdetails.php&";
      $link .="ERROR=" . "Something went wrong, please try again.";
    }

header($link);
die();
$conn->close();

?>
