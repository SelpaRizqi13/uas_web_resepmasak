<html>
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: cornflowerblue;
  }
  </style>
</head>
<body>

    <div class="jumbotron text-center bg-secondary text-light" style="margin-bottom:0">
        <p style="font-family: cursive;" class="display-1"> FOODSEL </p>
        <p style="font-size: 20px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">The Delicious Food</p> 
      </div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="font-family: cursive">
  <a class="navbar-brand" href="profile.php">Profile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="resep.php">RESEP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">LOGOUT</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-8">
        <h2>Ayam Woku</h2>
        <h5>Makanan Berbahan Daun Kemangi</h5>
        <div class="img">
          <a href="woku.php">
            <img src="img/woku.jpg" width="300" height="200" class="rounded">
          </a>  
        </div>
        
        <p>Menu ayam khas Manado ini kaya akan rempah-rempah. Rasa gurih dan pedasnya emang gak ada tandingannya. Kamu harus cobain.</p>
        <br>
        <h2>Ikan Berkuah Bening</h2>
        <h5>Makanan Berkuah</h5>
        <div class="img">
          <a href="kuahbening.php">
            <img src="img/ikankuahbening.jpg" width="300" height="200" class="rounded">
          </a>  
        </div>
        
        <p>Ikan mengandung banyak protein dan juga bermacam-macam kandungan yang baik untuk tubuh.</p>
      </div>
      <div class="col-sm-4">
          <h3>Masakan Populer</h3>
              <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                      <a class="nav-link active" href="#">Sayur Lodeh</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Opor Ayam</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Sayur Bayam</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Sayur Sop</a>
                  </li>
              </ul>
          <hr class="d-sm-none">
      </div>
    </div>
  </div>
  

<div class="jumbotron text-center bg-secondary" style="margin-top:30; margin-bottom: 0px; font-family: cursive;">
    <p>@Copyright by 18111154_SelpaRizqi_TIFRPCNS18A_UASWEB1</p>
  </div>

</body>
</html>
