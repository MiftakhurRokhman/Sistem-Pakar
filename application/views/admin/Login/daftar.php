<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pendaftaran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
 <?php $this->load->view("admin/Login/css.php") ?>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-90 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="<?php echo site_url('tambah_mahasiswa') ?>" method="post" enctype="multipart/form-data">
						<p><?php echo $this->session->flashdata('data'); ?></p> 
					<span class="login100-form-title p-b-32">
						Daftar Mahasiswa
                    </span>
					  <span class="txt1 p-b-11">
						NIM Mahasiswa
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nim is required">
						<input class="input100" type="text" name="nim_mhs">
						<span class="focus-input100"></span>
					</div>
                    <span class="txt1 p-b-11">
						Nama Mahasiswa
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nama is required">
						<input class="input100" type="text" name="nama_mhs">
						<span class="focus-input100"></span>
					</div>
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
					
					
				
					<br/>
						<div class="row">   
						<div class="col-md-4">   
						<span class="txt1 p-b-11">
							Foto Upload
						</span>
						</div>  
						<div class="col-md-1">  
						</div>
								<div class="col-md-4">               
								<input id="input100" type="file" name="foto">  
						</div>   
						<br/>
						</div>  
						 <br/>
				
                   
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Daftar
						</button>
					</div>
				</form>
				<br><br>
						<div class="row justify-content-center">
							
									<div class="txt4">
									Sudah Punya Akun <a href="login"> Login Disini
									</a></div>
							</div>	
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	 <?php $this->load->view("admin/Login/js.php") ?>
<!--===============================================================================================-->

</body>
</html>