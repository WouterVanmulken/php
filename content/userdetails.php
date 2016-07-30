<?php
      require '/../scripts/functions.php';
      if (session_status() == PHP_SESSION_NONE) {
          session_start();
      }


      if (isset($_SESSION["user"]) && isset($_SESSION["userid"]))
      {
        $username=$_SESSION["user"];
        $conn = makeConnection();

        $sql = "SELECT id,username,email,firstname,lastname,adres,postalcode,city FROM users where username = '$username' limit 1";
        $result = $conn->query($sql);
        $user_id = -1;
        if ($result->num_rows >0 ) {
          while($row = $result->fetch_assoc()) {
?>
        <!-- <div style="background: white; padding: 16px"> -->

                <form action="/scripts/changeuserdetails.php" method="POST" enctype="multipart/form-data"
                      class="form-group">
                      <H1>Change userdetails</h1>
                    <br>
                    <ul>
                        <H3>Username</H3>
                        <input name="username" class="form-control" value="<?php echo $row["username"]; ?>"/>
                        <!-- <br/> -->
                        <H3>E-mail</H3>
                        <input name="email" class="form-control" value="<?php echo $row["email"]; ?>"/>
                        <!-- <br/> -->
                        <H3>First name</H3>
                        <input name="firstname" class="form-control" value="<?php echo $row["firstname"]; ?>"/>
                        <!-- <br/> -->
                        <H3>Last name</H3>
                        <input name="lastname" class="form-control" value="<?php echo $row["lastname"]; ?>"/>
                        <!-- <br/> -->
                        <H3>Adres</H3>
                        <input name="adres" class="form-control" value="<?php echo $row["adres"]; ?>"/>
                        <!-- <br/> -->
                        <H3>Postal code</H3>
                        <input name="postalcode" class="form-control" value="<?php echo $row["postalcode"]; ?>"/>
                        <!-- <br/> -->
                        <H3>City</H3>
                        <input name="city" class="form-control" value="<?php echo $row["city"]; ?>"/>
                        <!-- <br/> -->

                    </ul>
                    <!-- <br> -->
                    <!-- <br> -->
                    <br>
                    <br>
                    <!-- <input style="float:left; text-align:right; clear:both; margin-top:5px; margin-left:16px" type="file" name="fileToUpload" id="fileToUpload"> -->

                    <input type="submit" value="Change" class="btn btn-primary" style="float:right;" name="submit"/>
                    <!-- <br/> -->

                </form>
            <!-- <br/> -->
            <!-- <br/> -->
        <!-- </div> -->
<?php
}
}
      }
      else
      {
  ?>
        <p>Please log in.</p>
<?php
      }
  ?>
