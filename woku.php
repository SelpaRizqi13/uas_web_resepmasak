<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<html>
    <head>
        <title>Resep Ayam Woku</title>
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
            <h1 class="text-center"> Ayam Woku </h1>
            <div class="img text-center pt-4">
                <a href="woku.php">
                  <img src="img/woku.jpg" width="300" height="200" class="rounded">
                </a>  
              </div>
              <div class="p-5">
              <p>Menu ayam khas Manado ini kaya akan rempah-rempah. Rasa gurih dan pedasnya emang gak ada tandingannya. Kamu harus cobain. Ayam woku paling enak sebenernya pake ayam bagian paha, sayap krna bisa lebih juicy dan kaldu dari tulang lebih menambah gurih.</p>
              <dl>
                <dt>Bahan Bahan :</dt>
                <ul class="list-unstyled">
                    <ul>
                        <li>1/2 kg ayam</li>
                        <li>2 batang serai, iris</li>
                        <li>2 buah bawang putih</li>
                        <li>6 buah bawang merah</li>
                        <li>6 buah bawang merah</li>
                        <li>1/2 ruas jahe</li>
                        <li>5 cm kunyit</li>
                        <li>1 buah cabe merah</li>
                        <li>6 buah cabe rawit</li>
                        <li>2 buah kemiri</li>
                    </ul>
                </ul>
                <dt>Bahan lainnya :</dt>
                <ul class="list-unstyled" >
                    <ul>
                        <li>1 batang serai</li>
                        <li>5 Lembar daun jeruk</li>
                        <li>1 buah tomat</li>
                        <li>1 lembar daun pandan</li>
                        <li>2 lembar daun bawang</li>
                        <li>Secukupnya kemangi</li>
                        <li>200 ml air</li>
                        <li>1/2 jeruk nipis</li>
                        <li>Secukupnya gula</li>
                        <li>Secukupnya garam</li>
                        <li>Secukupnya lada</li>
                        <li>Secukupnya penyedap</li>
                        <li>5 sdm minyak goreng</li>
                    </ul>
                </ul>
                <dt>Cara Memasak:</dt>
                    <dd>1. Ulek/blender semua bahan bumbu </dd>
                    <dd>2. Potong ayam sesuai selera kemudian bersihkan </dd>
                    <dd>3. Panaskan minyak kemudian masukkan bumbu halus</dd>
                    <dd>4. Masukkan juga sereh yg telah digeprek, daun jeruk dan daun pandan. 
                           Kemudian tumis hingga wangi. Setelah wangi masukkan air tunggu hingga mendidih</dd>
                    <dd>5. Masukkan ayam kemudian bumbui dengan gula, garam, lada, penyedap</dd>
                    <dd>6. Setelah kurang lebih 3 menit masukkan daun bawang, tomat dan kemangi. 
                           Jangan lupa koreksi rasa kemudian matikan api</dd>
                    <dd>7. Setelah 5 menit masukkan perasan jeruk nipis, aduk dan kemudian sajikan. Selamat menikmati</dd>
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
