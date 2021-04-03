<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital India</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-color:  #bf80ff">
  <nav class="navbar navbar-inverse bg-dark navbar-dark">
      <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#">Digital India</a>
          </div>
          <ul style="display: inline" class="nav navbar-nav navbar-right">
              <a href="index.php"><li style="display: inline; margin-right:3vh;">Home</li></a>
              <a href="vision.php"><li style="display: inline; margin-right:3vh;">Our Vision</li></a>
              <a href="management.php"><li style="display: inline; margin-right:3vh;">Management</li></a>
          </ul>
      </div>
  </nav>
  <?php include('carousel.php') ?>
  <div >


      <div class='row'>
          <div class="col-md-4 mt-3">
              <div class="card  p-4 " style="background:#ff6666">
                  <h2>Digital Infrastructure as a Core Utility to Every Citizen</h2>

                  <ul class="list-group">
                      <li class="list-group-item">Availability of high speed internet as a core utility for delivery of services to citizens</li>
                      <li class="list-group-item">Cradle to grave digital identity that is unique, lifelong, online and authenticable to every <citizen></citizen></li>
                      <li class="list-group-item">Mobile phone & bank account enabling citizen participation in digital & financial space</li>
                      <li class="list-group-item">Easy access to a Common Service Centre</li>
                      <li class="list-group-item">Safe and secure cyber-space</li>
                  </ul>
              </div>
          </div>
          <div class="col-md-4 mt-3">
              <div class="card p-4 " style="background:#ff6666">
                  <h2>Governance & Services on Demand</h2>
                  <ul class="list-group">
                      <li class="list-group-item">Seamlessly integrated services across departments or jurisdictions</li>
                      <li class="list-group-item">Availability of services in real time from online & mobile platforms</li>
                      <li class="list-group-item">All citizen entitlements to be portable and available on the cloud</li>
                      <li class="list-group-item">Digitally transformed services for improving ease of doing business</li>
                      <li class="list-group-item">Making financial transactions electronic & cashless</li>
                  </ul>
              </div>
          </div>
          <div class="col-md-4 mt-3">
              <img class="img-fluid" src="img/digidraw.jpg">
          </div>
      </div>
  </div>
  <?php include('footer.php') ?>
  </body>
  <button onclick="topFunction()" id="myBtn" class="btn btn-danger"  title="Go to top"><i class="fa fa-arrow-up"></i></button>

  <script src="main.js">
  </script>
</html>
