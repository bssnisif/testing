<!DOCTYPE html>
<html>
<head>
<title>Selamat Datang Di Halaman Login Sistem Kependudukan Dan Pencatatan Sipil</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- //Custom Theme files -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<br><br>
		<h3 style="text-align:center; margin-bottom:40px; color:#fff;">Selamat Datang Di Halaman Login <br> Sistem Kependudukan Dan Pencatatan Sipil</h3>
		<div class="header-main">
			<div class="main-icon" style="margin-bottom:10px;">
				<img src="images/logo.png" width="100">
			</div>
			<?php
			session_start();
			if(isset($_SESSION['status'])){
			?>
			<div class="alert alert-danger alert-dismissible fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				Username / Password Salah
			 </div>
			<?php } 
			unset($_SESSION['status']);
			session_destroy();
			?>
			<div class="header-left-bottom">
				<form action="login.php" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="Email Address" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" required=""/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>
					<div class="bottom">
						<button class="btn">Log In</button>
					</div>
				</form>	
			</div>
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>© <?php echo date("Y"); ?> Dinas Kependudukan dan Pencatatan Sipil - Pemprov DKI Jakarta</p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>