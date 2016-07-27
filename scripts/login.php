<?php require 'functions.php';

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$conn = makeConnection();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  login($_POST["username"],$_POST["password"], $conn);
  $_REQUEST["SUCCES"] = "Succesfully logged in.";
}else{
  echo "please only use a post request";
}

header("Location: index.php");
die();
 ?>

<!--
</body>
</html> -->
