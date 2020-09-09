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
								<a href="#">Nilai Atribut</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Input Nilai Atribut</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
                         <?php foreach($nilaiatribut as $u){ ?>
						<form action="<?php echo site_url('update_nilaiatribut') ?>" method="post">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Input Nilai Atribut</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Kode Nilai Atribut</label>
												<input type="text" class="form-control" id="email2" name="kode_nilaiatribut" value="<?php echo $u->id_nilaiatribut ?>" readonly="readonly" >
											</div>
										</div>
											<div class="col-md-6 col-lg-4">
										<div class="form-group">	
												<label for="exampleFormControlSelect1">Nama Atribut</label>
												<select name="id_atribut" class="form-control" required>
												<?php
												foreach ($detail_atribut as $p)
												{
													echo "<option value='$p->id_atribut'";
													echo $u->id_atribut==$p->id_atribut?'selected':'';
													echo">$p->nama_atribut</option>";
												}
												?>
											</select>
											</div>
											</div>
											<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Nama Nilai Atribut</label>
												<input type="text" class="form-control" id="email2" name="namanilai_atribut" value="<?php echo $u->namanilai_atribut ?>">
											</div>
											</div>
										</div>
										
								</div>
								<div class="card-action">
									<button class="btn btn-success">Edit</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
							</div>
							</form>
                            <?php } ?>
							<div class="content">
                    </div>
                    </div>
                    </div>
                    </div>