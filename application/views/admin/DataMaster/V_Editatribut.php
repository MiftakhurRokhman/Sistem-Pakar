<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Master</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Atribut</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Input</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
                        <?php foreach($atribut as $u){ ?>
						<form action="<?php echo site_url('update_atribut') ?>" method="post">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Data Atribut</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Kode Atribut</label>
												<input type="text" class="form-control" id="email2" name="kode_atribut" value="<?php echo $u->id_atribut ?>" readonly="readonly">
											</div>
										</div>
											<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Nama Atribut</label>
												<input type="text" class="form-control" id="email2" name="nama_atribut" value="<?php echo $u->nama_atribut ?>">
											</div>
											</div>
											<div class="col-md-6 col-lg-4">
											 <div class="form-group">
												<label for="exampleFormControlSelect1">Status Atribut</label>
												<select class="form-control" id="exampleFormControlSelect1" name="status_atribut" value="<?php echo $u->status_atribut ?>">
													<option>Diketahui</option>
													<option>Dicari</option>
												</select>
											</div>
											</div>
										</div>
										
								</div>
								<div class="card-action">
									<button class="btn btn-success" >Edit</button>
									<button class="btn btn-danger" name="cancel" value="cancel" onClick="window.location='http://yoursite.com/index.php';" >Cancel</button>
								</div>
								
							</div>
                            </form>
                            <?php } ?>
							<div class="content">
			
					</div></div></div></div>