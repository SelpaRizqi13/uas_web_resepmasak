<?php
//error_reporting(0);
session_start();
include('config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
  $fname=$_POST['fullname'];
  $email=$_POST['emailid']; 
  $mobile=$_POST['mobileno'];
  $password=md5($_POST['password']); 
  $sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES(:fname,:email,:mobile,:password)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':fname',$fname,PDO::PARAM_STR);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
  $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
  $query->bindParam(':password',$password,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if($lastInsertId)
  {
    echo "<script>alert('Registration successfull. Now you can login');</script>";
  }
  else 
  {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}
?>
<!doctype html>
<html lang="en">
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
    <div style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            <!-- Begin page content -->
        <main role="main" class="flex-shrink-0">
          <div class="container">
            <h1 class="mt-5 text-center">Register Form</h1>
            <p class="lead text-center">Silahkan Daftarkan Identitas Anda</p>
            <hr/>
  <form method="post" name="signup" onSubmit="return valid();">
 <div class="form-group">
   <label>Nama Lengkap</label>
   <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap*" required="required">
 </div>
 <div class="form-group">
   <label>NO Handphoe/Telephone</label>
   <input type="text" class="form-control" name="mobileno" placeholder="Nomor Hp*" maxlength="10" required="required">
 </div>
 <div class="form-group">
   <label >Email</label> <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Email Address*" required="required">
 </div>
 <div class="form-group">
   <label>Password</label>
   <input type="password" class="form-control" name="password" placeholder="Password*" required="required">
 </div>
 <div class="form-group">
   <label>Konfirmasi Password</label>
   <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password*" required="required">
 </div>
 <div class="form-group">
 <a href="login.php" class="btn btn-dark">Back</a>
   <button class="btn btn-secondary" type="submit" name="signup" id="submit">REGISTER</button>
 </div>
</form>
          </div>
          <script>
            function validasi(){
              if(document.forms["formdaftar"] ["username"].value == ""){
                alert ("Username Tidak Boleh Kosong");
                document.forms["formdaftar"]["username"].focus();
                return false;
              }
              if(document.forms["formdaftar"] ["nama"].value == ""){
                alert ("Nama Tidak Boleh Kosong");
                document.forms["formdaftar"]["nama"].focus();
                return false;
              }
              if(document.forms["formdaftar"] ["password"].value == ""){
                alert ("Password Tidak Boleh Kosong");
                document.forms["formdaftar"]["password"].focus();
                return false;
              }
            }
          </script>
        </main> 
    </div>
</div>

<div class="jumbotron text-center bg-secondary" style="margin-top:30; margin-bottom: 0px; font-family: cursive;">
  <p>&copy Copyright Selpa Rizqi</p>
</div>

</body>
</html>
