<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body style="background:Linen;">


<div style=" padding: 16px" class="container">

    <header>
        <a style="color:black; text-decoration:none" href="/"><h2>Sitename</h2></a>
        <nav class="menu">
            <a href="/index.php" title="Home">Home</a> |
<?php
                if (isset($_SESSION["user"]) && isset($_SESSION["userid"])) {
                  echo '<a href="/index.php?page=logout.php">Logout</a>';
                }
                else {
                  echo '<a href="/index.php?page=registration.html">registration</a> |
                        <a href="/index.php?page=login.html">Login</a>';
                }
?>
<?php
                if (isset($_SESSION["user"]) && isset($_SESSION["userid"])) {
                  echo '<a href="/index.php?page=userdetails.php" class="pull-right">' . $_SESSION["user"] . '</a>';
                }
?>
        </nav>
    </header>
    <br>

    <?php
    if (isset($_REQUEST["ERROR"])) {
        echo '<div id="errorAlert" class="alert alert-danger" >' . $_REQUEST["ERROR"] . '</div>';
    }
    if (isset($_REQUEST["SUCCESS"])) {
        echo '<div id="succesAlert" class="alert alert-success" >' . $_REQUEST["SUCCESS"] . '</div>';
    }

    // $_REQUEST['page'] = 'content/' . $_REQUEST['page'];
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'home.html';
    $page = 'content/' . $page;
    if (file_exists($page)) {
        echo '<div style="background: white; padding: 16px" class="container">';
        include $page;
        echo "</div>";
    } else {
        //  include 'pages/404.php';
        echo "404 : Page not found";
    }
    // include "login.html";

    ?>

</div>

</body>
</html>
