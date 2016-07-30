<?php require 'functions.php';

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$conn = makeConnection();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $link = login($_POST["username"],$_POST["password"], $conn);
  echo $link;
  header($link);
  die();

}else{
  echo "something went wrong pls don't do this.";
}
 ?>
