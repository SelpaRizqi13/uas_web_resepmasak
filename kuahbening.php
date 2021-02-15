<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<html>
    <head>
        <title>Resep Ikan Kuah Bening</title>
        <!-- Csrf Token -->
<meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
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
    <body >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <div class="jumbotron text-center bg-secondary text-light" style="margin-bottom:0">
            <p style="font-family: cursive;" class="display-2 "> FOODSEL </p>
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
    <div class="container-fluid" style="margin-top:30px">
            <h1 class="text-center"> Ikan Kuah Bening </h1>
            <div class="img text-center pt-4">
                <a href="woku.php">
                  <img src="img/woku.jpg" width="300" height="200" class="rounded">
                </a>  
              </div>
              <div class="p-5">
              <p>Ikan gurame dibuat sup dengan kuah bening. Beragam rempah segar dan daun rempah membuat kuahnya harum. Diberi air jeruk nipis yang kecut segar bikin sup ini makin sedap. Bikinnya gampang banget, ikuti resep dan tips berikut ini.</p>
              <dl>
                <dt>Bahan Bahan :</dt>
                <ul class="list-unstyled">
                    <ul>
                        <li>1 ekor (600 g) ikan gurame segar</li>
                        <li>1.5 liter air</li>
                        <li>1 batang serai, memarkan</li>
                        <li>3 lembar daun jeruk, remas</li>
                        <li>2 lembar daun salam</li>
                        <li>3 cm jahe, memarkan</li>
                        <li>1 cm lengkuas</li>
                        <li>100 ml air jeruk nipis/lemon</li>
                        <li>1 sdm garam</li>
                        <li>1 sdt gula pasir</li>
                        <li>1/2 sdt merica bubuk</li>
                        <li>2 sdm saus ikan</li>
                        <li>1 batang daun bawang,potong kasar</li>
                        <li>5 buah tomat hijau, potong-potong</li>
                        <li>5 buah rawit merah, buang tangkainya</li>
                        <li>3 siung bawang putih, iris tipis (bumbu tumis)</li>
                        <li>2 butir bawang merah, iris tipis (bumbu tumis)</li>
                        <li>3 cm kunyit, iris tipis (bumbu tumis)</li>


                    </ul>
                </ul>
                
                <dt>Cara Memasak:</dt>
                    <dd>1. Siangi ikan gurame hingga bersih, buang isi perut dan sisiknya. Cuci bersih lalu tiriskan. </dd>
                    <dd>2. Potong-potong ikan gurame menjadi 3-4 potong. Sisihkan. </dd>
                    <dd>3. Tumis bawang putih, bawang merah dan kunyit hingga layu. Angkat.</dd>
                    <dd>4. Didihkan air bersama bumbu tumis, daun jeruk, daun salam, serai dan lengkuas</dd>
                    <dd>5. Masukkan air jeruk, garam, gula, saus ikan dan merica, didihkan beberapa saat.</dd>
                    <dd>6. Tambahkan potongan ikan gurame. tomat hijau, cabe rawit merah dan daun bawang. Kecilkan api, masak hingga ikan dan sayuran matang.</dd>
                    <dd>7. Matikan api, masukkan daun kemangi.</dd>
                </pre>
                    
              </dl>
            </div>
    </div>
    <form method="POST" id="form_komen">
		<div class="form-group">
			<input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" />
		</div>
		<div class="form-group">
			<textarea name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
		</div>
	</form>
	<hr>
	<h4 class="mb-3">Komentar :</h4>
	<span id="message"></span>
   
   	<div id="display_comment"></div>
    <div class="jumbotron text-center bg-secondary" style="margin-top:30; margin-bottom: 0px; font-family: cursive;">
        <p>@Copyright by 18111154_SelpaRizqi_TIFRPCNS18A_UASWEB1</p>
      </div>
      <script src="js/jquery.min.js"></script>
      <script>
		$(document).ready(function(){
			//Mengirimkan Token Keamanan
			$.ajaxSetup({
	            headers : {
	                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
        
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				let nama_pengirim = $('#nama_pengirim').val();
				let komen = $('#komen').val();
				
				if(nama_pengirim==''){
				    alert("Nama Pengirim Harus disii");
				} else if(komen==''){
				    alert("Komentar Harus disii");
				} else {
    				var form_data = $(this).serialize();
    				$.ajax({
    					url:"tambah_komentar.php",
    					method:"POST",
    					data:form_data,
    					success:function(data){
    						$('#form_komen')[0].reset();
    						$('#komentar_id').val('0');
    						load_comment();
    					}, error: function(data) {
    		            	console.log(data.responseText)
    		            }
    				})
				}
			});
 
			load_comment();
 
			function load_comment(){
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data){
						$('#display_comment').html(data);
					}, error: function(data) {
		            	console.log(data.responseText)
		            }
				})
			}
 
			$(document).on('click', '.reply', function(){
				var komentar_id = $(this).attr("id");
				$('#komentar_id').val(komentar_id);
				$('#nama_pengirim').focus();
			});
		});
	</script>
    </body>
</html>
