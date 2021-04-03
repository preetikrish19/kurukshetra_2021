<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital India</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style media="screen">
    img {
      margin-right: 150px;
    }
    .carousel-inner img {
        width: 100%;
        height: 80vh;
      }
  }


    </style>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Digital India</a>
      </div>
      <ul style="display: inline" class="nav navbar-nav navbar-right">
        <a href="#"><li style="display: inline; margin-right:3vh;">Home</li></a>
        <a href="#"><li style="display: inline; margin-right:3vh;">Our Vision</li></a>
        <a href="#"><li style="display: inline; margin-right:3vh;">Management</li></a>
      </ul>
    </div>
  </nav>
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>We’re here for a reason. I believe a bit of the reason</h3>
        <h3>is to throw little torches out to lead people through the dark</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/main.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Consultant | Counselor | Cheerleader</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/wifi.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <?php include('footer.php') ?>
  </body>
</html>
