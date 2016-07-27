<?php
      require 'functions.php';

      if (session_status() == PHP_SESSION_NONE) {
          session_start();
      }
$username="";
$email="";
$firstname="";
$lastname="";


$conn = makeConnection();

$sql = "SELECT id,salt, hash FROM users where username = '$username'";
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






      if (isset($_SESSION["user"]) && isset($_SESSION["userid"])) {
?>
        <div style="background: white; padding: 16px">

                <form action="{% url 'profile' profile.username %}" method="POST" enctype="multipart/form-data"
                      class="form-group">
                    <br>
                    <ul>
                        <H3>Username</H3>
                        <input name="username" class="form-control" value="<?php ?>"/>
                        <input name="username" class="form-control" value="{{ user.username }}"/>
                        <br/>
                        <H3>E-mail</H3>
                        <input name="email" class="form-control" value="{{ user.email }}"/>
                        <br/>
                        <H3>First name</H3>
                        <input name="firstname" class="form-control" value="{{ user.first_name }}"/>
                        <br/>
                        <H3>Last name</H3>
                        <input name="lastname" class="form-control" value="{{ user.last_name }}"/>
                        <br/>

                    </ul>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input style="float:left; text-align:right; clear:both; margin-top:5px; margin-left:16px" type="file" name="fileToUpload" id="fileToUpload">

                    <input type="submit" value="Submit" class="btn btn-primary" style="float:right;" name="submit"/>
                    <br/>

                </form>
            <br/>
            <br/>
        </div>
<?php
      }
      else
      {
  ?>
        <p>Please log in.</p>
<?php
      }
  ?>
