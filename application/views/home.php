<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
      $this->load->view('src');
    ?>
    <title>Sogata.Co | My PortFolio</title>
</head>
<body data-spy="scroll" data-target="#mynavbar" data-offset="100">

<!-- start navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mynavbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url();?>asset/img/mylogo.png" alt="Sogata.Co">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#about">About</a>
          <a class="nav-item nav-link" href="#service">Services</a>
          <a class="nav-item nav-link" href="#">Portfolio</a>
          <a class="nav-item nav-link" href="#">Contact</a>
        </div>
      </div>
      </div>
  </nav>
<!-- end navbar -->

<!-- home -->
<div  id="home">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>Hi! I’m an <strong>Android</strong> and <strong>Web</strong> Developer.</h1>
      <p>I master several programming languages ​​to develop web or android applications. 
If you are a business need the services or an employer looking to hire, 
you can get in touch with me.</p>
  </div>
  </div>
<!-- end home -->

<!-- about -->
<div id="about" style="height:1500px; padding-top:100px ">saya</div>
<!-- end about -->

<!-- service -->
<div id="service" style="height:1000px;background:#000000">saya</div>
<!-- end service -->
  
</body>
</html>