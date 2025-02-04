<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>D A M S | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
  <meta name="viewport" content="width=device-width%, initial-scale=1">
  <link rel="icon" href="img/pp.jpg" >

    <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css"> 
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <style>
	.hero-image {
  background-image: url("img/background tosca.png");
  background-color: #cccccc;
  height: 100%;
  width:100%;;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  border: 10px solid white;
  width:60%;
}
</style>
</head>
<body class="hold-transition" style="display:flex;flex-direction:column;">
	<div id="wrapper" >
		<div id="content-wrapper" >
			<div class="row">
			<div class="col-sm-4">
				<div class="login-box" style="height:350px; margin-top: 50%;margin-bottom : 50%;margin-left : 10%; text-align:center; ">
					<div class="login-logo">
						<img src="img/ppblack.png" style="width:70px; height:100px;">
					</div>
				  <!-- /.login-logo -->
				  <div class="card" style="box-shadow:none; ">
				  <div class="card-body" style="font-weight:bold"> DAMS DIT P2
					</div>
					<div class="card-body">

					 <form action="logon.php" method="post">
						<div class="input-group mb-3">
						  <input type="text" class="form-control form-control-sm" name="user" placeholder="NIP Pendek" autocomplete="off" autofocus >
						</div>
						<div class="input-group mb-3">
						  <input type="password" class="form-control form-control-sm" placeholder="Kata Sandi" name="pass">
						</div>
						<div class="row">
							<p class="ml-2"> Belum Punya Akun? <a target="_blank" href="https://wa.me/6285155448521">Kontak Kami</a></p>
						</div>
						<div class="row">
						  <!-- /.col -->
						  <div class="col-4">
						  <button type="submit" class="btn btn-sm btn-info btn-block">Masuk</button>
						  </div>
						  <!-- /.col -->
						</div>
						<?php
	error_reporting (0);
	$error = $_GET['error'];
	if($error == 1)
	{
	?>
	<div>
	<br>
		<a href="#" class="btn btn-block btn-danger">
           User dan Password salah
        </a>
	</div>
	<?php
	}
	?>
					  </form>
</div>
					  <div class="social-auth-links text-center mb-3">
					   
					  </div>
					  <!-- /.social-auth-links -->

					  <p class="mb-1">
					   
					  </p>
					  <p class="mb-0">
						
					  </p>
					<!-- /.login-card-body -->
				  </div>
				</div>
				<!-- /.login-box -->
			</div>
			<!--<div class="col-sm-8" style="background: url('img/4.png') center fixed;max-width: 100%;height: auto;";>
				<div style="display:block; box-sizing:border-box; min-width: 990px;">
					<h1>Let's Vote</h1>
				</div>-->
			<div class="col-sm-8">	
				<div class="hero-image">
				  <div class="hero-text">
					<h1 style="font-size:50px">Daily Activity Monitoring System</h1>
					<!--<h3>And I'm a Photographer</h3>
					<button>Hire me</button>-->
				  </div>
				</div>
			</div>
			</div>

		</div>
	</div>
	
<a style="left:20px;bottom:20px;position:absolute;" target="_blank" href="https://github.com/ciptakelvin/damsp2"><img height=30 src="img/github-brands-solid.svg" alt=""></a>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
