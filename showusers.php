<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,username,salt,hash FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
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

   }


echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>
