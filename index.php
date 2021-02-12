<?php
include("includes/main_class.php");

$kelvin = new owner("odyssey-studio", "Kelvin Meredith-Smith", "Kelviny@odyssey-studio.uk");

?>
<!doctype html>
<html lang="en">
<head> 
  <?php
  include("includes/header.php");
  ?>
    <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>

<body> 
<div class="jumbotron text-center" style="margin-bottom:0; background-color:black;">
  <h1><span class="ocode">&lt;?php</span> <span class="funcode">echo</span><span class="funbracket">(</span><span class="funtext">"Odyssey-Studio Portfolio"</span><span class="funbracket">)</span><span class="funsem">;</span> <span class="ocode">?&gt;</span></h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cv">CV</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact Us</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2><span class="funtext">//About Me</span></h2>
      <p>Hi, my name is <?php echo $kelvin->get_author(); ?><br />
      Here a brief about me, I always enjoy to learn and develop in programming language. Please click <a href="/about">About</a> to learn more about me.
      </p>
      <h3><span class="funtext">//Portfolio</span></h3>
      <p>Website I have done</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/deaf-life/">Deaf-Life</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/osc/">Odyssey-Studio Chat</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Odyssey-Studio Chat (OSC)</h2>
      <h5>This is HTML online chat, N/A</h5>
      <p>In my own spare time, I have carry out working on PHP, AJAX for HTML chat room.</p>
      <p>This project is not complete yet, I am planning to make some change on coding to make smaller and faster. </p>
      <br>
      <h2>Deaf-Life Magazine</h2>
      <h5>This is online magazine, N/A</h5>
      <p>In my own spare time, I have carry out working on wordpress, and giving out the specistlist equipmwnt and information.</p>
      <p>This project is no longer require. </p>
      <br>
      <h2>More to add SOON!</h2>
      <h5>Comment to be here, N/A</h5>
      <p>Say something about this line, like blah blah... </p>
      <br>
    </div>
  </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0; background-color:black;">
<?php
include("includes/footer.php");
?>
</div>

</body>
</html>