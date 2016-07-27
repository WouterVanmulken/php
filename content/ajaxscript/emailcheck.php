
<?php
$email = $_REQUEST['email'];

$con = mysqli_connect('localhost','root','','test');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT count(*) as count FROM users WHERE email = '" . $email . "' limit 1;";

$result = $con->query($sql);
$count = -1;
while($row = $result->fetch_assoc()) {
  echo $row["count"];
}
mysqli_close($con);
?>
