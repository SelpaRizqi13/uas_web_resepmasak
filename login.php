<?php
session_start();
include('config.php');
error_reporting(0);
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
  $query= $dbh -> prepare($sql);
  $query-> bindParam(':email', $email, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    $_SESSION['login']=$_POST['email'];
    $_SESSION['fname']=$results->FullName;
    $currentpage=$_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
  } else{
    
    echo "<script>alert('Periksa Kembali Email dan Password');</script>";

  }
}
?>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
  <a class="navbar-brand" href="index.php">HOME</a>
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

<div class="container" style="margin-top:30px">
    <div class="text-center" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
    <form method="post">
    <img class="mb-4" src="assets/css/user.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
 <div class="form-group">
   <input type="email" class="form-control" name="email" placeholder="Email address*">
 </div>
 <div class="form-group">
   <input type="password" class="form-control" name="password" placeholder="Password*">
 </div>
 <div class="form-group">
   <button class="btn btn-secondary btn-block" type="submit" name="login">LOGIN</button>
   <a href="register.php" class="btn btn-lg btn-dark btn-block">Register</a>
 </div>
</form>
    </div>
    <script>
      function validasi(){
        if(document.forms["formlogin"] ["username"].value == ""){
          alert ("Username Tidak Boleh Kosong");
          document.forms["formlogin"]["username"].focus();
          return false;
        }
        if(document.forms["formlogin"] ["password"].value == ""){
          alert ("Password Tidak Boleh Kosong");
          document.forms["formlogin"]["password"].focus();
          return false;
        }
      }
    </script>
</div>


<div class="jumbotron text-center bg-secondary" style="margin-top:30; margin-bottom: 0px; font-family: cursive;">
  <p>@Copyright by 18111154_SelpaRizqi_TIFRPCNS18A_UASWEB1</p>
</div>

</body>
</html>
