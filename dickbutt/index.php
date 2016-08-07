<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>

    <script async="" src="https://www.google-analytics.com/analytics.js"></script><script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-78361957-1', 'auto');
      ga('send', 'pageview');

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--=========================================== bootstrap  =================================================-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--=========================================== bootstrap end ==============================================-->


    <style>
      ul.nav li.dropdown:hover > ul.dropdown-menu {
        display: block;
      }
    </style>
</head>

<body class="container" style="background-color:linen;">

  <header >

    <br>
    <a style="color:black; text-decoration:none" href="?">
      <img style="display:block; margin:auto; " width="25%"src="http://dickbutt.nl/dickbutt.jpg"/>
    </a>
    <br>
      <a href="?" title="Home">Home / Game</a> |
      <a href="?page=hypnotic.html" title="Hypnotic dickbutt">Hypnotic dickbutt</a> |
      <a href="?page=largedickbutt.html" title="ASCII dickbutt">ASCII dickbutt</a>
      <a class="pull-right" href="mailto:admin@dickbutt.nl">Contact</a>
    </nav>

      <!-- <nav class="menu">
          <a href="?" title="Home">Home</a>
          <div class="dropdown pull-right">

            <a  data-toggle="dropdown" class="dropdown-hover">sites<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?page=game.html">Game</a></li>
              <li><a href="?page=largedickbutt.html">ASCII dickbutt</a></li>
              <li><a href="?page=hypnotic.html">Hypnotic dickbutt</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="mailto:woutervanmulken@msn.com">Contact</a></li>
            </ul>
          </div>

      </nav> -->
  </header>
  <br>

    <?php
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'game.html';
    $page = 'content/' . $page;
    if (file_exists($page)) {
        include $page;
    } else {
        echo "404 : Page not found";
    }

    ?>

</div>




</body>
</html>
