
<html>
<head>
  <title>Bootstrap 4 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #bbbbbb;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center bg-secondary text-light" style="margin-bottom:0">
  <p style="font-family: cursive;" class="display-3"> FOODSEL </p>
  <p style="font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">The Delicious Food</p> 
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="font-family: cursive">
  <a class="navbar-brand" href="index.php" >HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="login.php">LOGIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container-fluid " style="margin-top:50px" >
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/woku.jpg" alt="Los Angeles" width="1600" height="500">
      </div>
      <div class="carousel-item">
        <img src="img/tongseng.jpg" alt="Chicago" width="1600" height="500">
      </div>
      <div class="carousel-item">
        <img src="img/nasi.jpg" alt="New York" width="1600" height="500">
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="card-deck" style="margin-top:10px">
    <div class="card">
      <img src="img/woku.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Ayam Woku</h5>
        <p class="card-text">Menu ayam khas Manado ini kaya akan rempah-rempah. Rasa gurih dan pedasnya emang gak ada tandingannya. Kamu harus cobain.</p>
        <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
      </div>
    </div>
    <div class="card">
      <img src="img/sate.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Sate</h5>
        <p class="card-text">Sate, satai, atau satay merupakan salah stau penganan yang sangat akrab di lidah masyarakat Indonesia. Sate merupakan olahan daging, baik daging ayam, kambing, domba, sapi, maupun ikan atau yang lainnya, dipotong kecil dan dironce dalam sebilah lidi atau bambu, lalu dibakar di atas bara api.</p>
        <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
      </div>
    </div>
    <div class="card">
      <img src="img/soto.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Soto Bandung</h5>
        <p class="card-text">Kuliner khas lezat asal Bandung bukan cuma asinan, batagor, atau siomay saja. Kota Kembang juga punya soto bening yang begitu enak dan segar. Sama sih seperti soto pada umumnya, tapi biasanya ada lobak yang menjadi ciri khasnya.</p>
        <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="jumbotron text-center bg-secondary" style="margin-top:30; margin-bottom: 0px; font-family: cursive;">
  <p>&copy Copyright Selpa Rizqi</p>
</div>

</body>
</html>
