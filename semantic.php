<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <title>Semantic UI CDN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
    <style>
    .image{
      width:200px;
      height:400px;
      overflow: hidden;
    }
    </style>

</head>

<body>
    <button class="ui loading button">hello</button>
    <?php echo htmlspecialchars('<button class="ui loading button">hello</button>');?><br><br>
    <button class="ui button">hello</button>
    <?php echo htmlspecialchars('<button class="ui button">hello</button>');?><br><br>
    <button class="ui button primary">hello</button>
    <?php echo htmlspecialchars('<button class="ui button primary">hello</button>');?><br><br>
    <button class="ui button secondary">world</button>
    <?php echo htmlspecialchars('<button class="ui button secondary">world</button>');?><br><br>
    <div class="ui labeled button" tabindex="0">
        <div class="ui red button">
            <i class="heart icon"></i> Like
        </div>
        <a class="ui basic red left pointing label">
          1,048
        </a>
    </div>

<div class="ui labeled button" tabindex="0">
  <div class="ui basic blue button">
    <i class="fork icon"></i> Forks
  </div>
  <a class="ui basic left pointing blue label">
    1,048
  </a>
</div>

<button class="ui primary basic button">Primary</button>
<button class="ui secondary basic button">Secondary</button>
<button class="ui positive basic button">Positive</button>
<button class="ui negative basic button">Negative</button>
<div class="ui animated fade button" tabindex="0">
  <div class="visible content">Sign-up for a Pro account</div>
  <div class="hidden content">
    $12.99 a month
  </div>
</div>
<br>
<br>
<div class="ui secondary pointing menu">
  <a class="item">
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a class="item active">
    Friends
  </a>
  <div class="right menu">
    <a class="ui item">
      Logout
    </a>
  </div>
</div>
<div class="ui segment">
  <p></p>
</div>

<br>
<br>
<div class="ui statistic">
  <div class="value">
    5,550
  </div>
  <div class="label">
    Downloads
  </div>
</div>
<br>
<br>
<div class="ui statistics">
  <div class="red statistic">
    <div class="value">
      27
    </div>
    <div class="label">
      Red
    </div>
  </div>
  <div class="orange statistic">
    <div class="value">
      8
    </div>
    <div class="label">
      Orange
    </div>
  </div>
  <div class="yellow statistic">
    <div class="value">
      28
    </div>
    <div class="label">
      Yellow
    </div>
  </div>
  <div class="olive statistic">
    <div class="value">
      7
    </div>
    <div class="label">
      Olive
    </div>
  </div>
  <div class="green statistic">
    <div class="value">
      14
    </div>
    <div class="label">
      Green
    </div>
  </div>
  <div class="teal statistic">
    <div class="value">
      82
    </div>
    <div class="label">
      Teal
    </div>
  </div>
  <div class="blue statistic">
    <div class="value">
      1
    </div>
    <div class="label">
      Blue
    </div>
  </div>
  <div class="violet statistic">
    <div class="value">
      22
    </div>
    <div class="label">
      Violet
    </div>
  </div>
  <div class="purple statistic">
    <div class="value">
      23
    </div>
    <div class="label">
      Purple
    </div>
  </div>
  <div class="pink statistic">
    <div class="value">
      15
    </div>
    <div class="label">
      Pink
    </div>
  </div>
  <div class="brown statistic">
    <div class="value">
      36
    </div>
    <div class="label">
      Brown
    </div>
  </div>
  <div class="grey statistic">
    <div class="value">
      49
    </div>
    <div class="label">
      Grey
    </div>
  </div>
</div>

<br>
<br>
<div class="ui three column grid">
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="http://lorempixel.com/500/200/" class="hoverZoomLink">
      </div>
      <div class="content">
        <a class="header">Daniel Louise</a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="http://lorempixel.com/900/1400/" class="hoverZoomLink">
      </div>
      <div class="content">
        <a class="header">Helen Troy</a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="http://lorempixel.com/400/200/" class="hoverZoomLink">
      </div>
      <div class="content">
        <a class="header">Elliot Fu</a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="http://lorempixel.com/500/200/" class="hoverZoomLink">
      </div>
      <div class="content">
        <a class="header">Daniel Louise</a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="http://lorempixel.com/900/1400/" class="hoverZoomLink">
      </div>
      <div class="content">
        <a class="header">Helen Troy</a>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="http://lorempixel.com/400/200/" class="hoverZoomLink">
      </div>
      <div class="content">
        <a class="header">Elliot Fu</a>
      </div>
    </div>
  </div>
</div>


</body>

</html>
