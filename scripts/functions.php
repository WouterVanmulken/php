<?php

if (session_status() == PHP_SESSION_NONE) {
session_start();
}


function login($username, $password,$conn) {

  $sql = "SELECT id, salt, hash FROM users where username = '$username'";
  $result = $conn->query($sql);
  $salt = "";
  $hash = "";
  $user_id = -1;
  if ($result->num_rows >0 ) {
   while($row = $result->fetch_assoc()) {

      $salt = $row["salt"];
      $hash = $row["hash"];
      $user_id = $row["id"];
    }
  }

  $link = "Location: /?page=";


 if (password_verify($password . $salt, $hash)) {
      $_SESSION["user"] = $username;
      $_SESSION["userid"] = $user_id;
      $link .= "home.html";
      $link .="&SUCCESS=" . "Succesfully logged in";
  } else {
    $link .= "login.html";
    $link .="&ERROR=" . "Could not be logged in, please make sure your username and passwords match.";
  }
  return $link;
}


function generate_salt(){
  return uniqid(mt_rand(), true);
}



function register($email, $username, $password, $firstname, $lastname, $adres, $postalcode, $city, $conn) {

    $salt = generate_salt();
    $hash = password_hash($password . $salt, PASSWORD_BCRYPT);
    $sql = "insert into users(
                    username,salt,hash,
                    firstname,lastname,adres,
                    postalcode,city,email
                    )
                values(
                    '$username' ,'$salt','$hash',
                    '$firstname','$lastname','$adres',
                    '$postalcode','$city','$email'
                  );";

    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    }
    return $conn->query($sql);
}
function updateData($email, $username, $firstname, $lastname, $adres, $postalcode, $city, $conn) {

    $salt = generate_salt();
    $hash = password_hash($password . $salt, PASSWORD_BCRYPT);
    $sql = "UPDATE users
              SET email='$email' ,username='$username', firstname='$firstname',
              lastname='$lastname' ,adres='$adres',postalcode='$postalcode',city='$city'
              WHERE id='" . $_SESSION['userid'] . "' ";

    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    }
    return $conn->query($sql);
}



function makeConnection(){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

?>
