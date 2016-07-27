
<?php
$username = $_GET['username'];

$con = mysqli_connect('localhost','root','','test');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT count(*) as count FROM users WHERE username = '" . $username . "' limit 1;";

$result = $con->query($sql);
$count = -1;
while($row = $result->fetch_assoc()) {
  echo $row["count"];
}
mysqli_close($con);
?>
