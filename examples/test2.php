<!DOCTYPE html>
<html>
<body>

<?php
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

function generate_salt(){
  return uniqid(mt_rand(), true);
}
function register($username, $password) {
    $salt = generate_salt();
    $hash = password_hash($password . $salt, PASSWORD_BCRYPT) ;
    $sql = "insert into users(username,salt,hash) values($username,$salt,$hash)";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         echo "Connection failed: " . $conn->connect_error;
    }
    $conn->query($sql);
}

function login($username, $password) {
  $sql = "SELECT salt, hash,FROM users where username = $username";
  $result = $conn->query($sql);
  $salt = "";
  $hash = "";
  if ($result->num_rows =1 ) {
    $row = $result->fetch_assoc();
    $salt = $row["salt"];
    $hash = $row["hash"];
  }

    if (password_verify($salt . $password, $hash)) {
    } else {
        // failure
    }
}
// function loadHashByUsername($username){
//   // $sql = "SELECT id, firstname, lastname FROM MyGuests";
//   $sql = "SELECT salt, hash,FROM users where username = $username";
//   $result = $conn->query($sql);
//   if ($result->num_rows =1 ) {
//     $row = $result->fetch_assoc()
//      return $row["salt"] . $row["hash"];
//    }
//    return "";
//  }

// $sql = "insert into users(username,password) values('testuser','fuckface')";
// $result = $conn->query($sql);

register("wouter","Password123");

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
$sql = "SELECT id,username,salt,hash FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //  // output data of each row
    //  while($row = $result->fetch_assoc()) {
        //  echo "<br> id: ". $row["id"]. " - Name: ". $row["username"]. "; salt : " . $row["salt"] . "; hash : " . $row["hash"] . "<br>";
    //  }
    echo '<table style="width:100%">
  <tr>
  <th>ID</th>
  <th>Username</th>
  <th>salt</th>
  <th>hash</th>
  </tr>';
   while($row = $result->fetch_assoc()) {
     echo "<tr>
       <td>".$row["id"]."</td>
       <td>".$row["username"]."</td>
       <td>".$row["salt"]."</td>
       <td>".$row["hash"]."</td>
     </tr>";
      //  echo "<br> id: ". $row["id"]. " - Name: ". $row["username"]. "; password : " . $row["password"] . "<br>";
   }


echo "</table>";
} else {
     echo "0 results";
}
$sql = "delete from users where password = 'fuckface'";
$result = $conn->query($sql);

$conn->close();
?>

<form method="post" action="<?php register($_POST['username'],$_POST['password']); ?>">
  <input type="text" name="username"  placeholder="username"/>
  <input type="password" name="password"  placeholder="password"/>
  <input value="Add New" type="submit" />
</form>

</body>
</html>
