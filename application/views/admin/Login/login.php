<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Sistem Penunjang Keputusan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
 <?php $this->load->view("admin/Login/css.php") ?>
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">	
		<div class="container-login100">
			<div class="wrap-login100 p-l-90 p-r-90 p-t-40 p-b-40">
				<form class="login100-form validate-form flex-sb flex-w" action="<?php echo site_url('aksi_login') ?>" method="post">
					<p><?php echo $this->session->flashdata('data'); ?></p> 
					<span class="login100-form-title p-b-32">
						Account Login
					</span>
					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>	
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
					</div>	
					<div class="flex-sb-m w-full p-b-48">
					</div>
						<div class="justify-content-center">
						<button class="login100-form-btn">
							Login
						</button>
						</form>
						</div>
						<br><br>
						<div class="row justify-content-center">
							<div class="txt4">
							Belum Punya Akun <a href="daftar"> Daftar Disini
							</a></div>
					</div>	
		</div>	
	</div>
	<div id="dropDownSelect1"></div>	
<!--===============================================================================================-->
	 <?php $this->load->view("admin/Login/js.php") ?>
<!--===============================================================================================-->
</body>
</html>