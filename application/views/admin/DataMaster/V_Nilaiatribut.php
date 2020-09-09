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
						<form action="<?php echo site_url('tambah_nilaiatribut') ?>" method="post">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Input Nilai Atribut</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Kode Nilai Atribut</label>
												<input type="text" class="form-control" id="email2" name="kode_nilaiatribut" value="<?php echo $kode; ?>" readonly="readonly">
											</div>
										</div>
											<div class="col-md-6 col-lg-4">
											<div class="form-group">	
												<label for="exampleFormControlSelect1">Nama Atribut</label>
												<select class="form-control" id="exampleFormControlSelect1" name="id_atribut">
													<?php foreach($atribut as $u){ ?>
													<option value="<?php echo $u->id_atribut ?>"><?php echo $u->nama_atribut ?></option>
													<?php } ?>
												</select>
											</div>
											</div>
											<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Nama Nilai Atribut</label>
												<input type="text" class="form-control" id="email2" name="namanilai_atribut" placeholder="Nama Nilai Atribut">
											</div>
											</div>
										</div>
										
								</div>
								<div class="card-action">
									<button class="btn btn-success">Tambah</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
							</div>
							</form>
							<div class="content">
			
					</div>
					
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Data Atribut</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th width="5%">Nomor</th>
													<th width="20%">Kode Nilai Atribut</th>
													<th width="50%">Nama Atribut</th>
													<th width="20%">Nama Nilai Atribut</th>
													<th width="5%">Aksi</th>
												</tr>
											</thead>
										
											<tbody>
											<?php 
											$no = 0;
											foreach($nilaiatribut as $u){ 
												$no++;
											?>
												<tr>
													<td><?php echo $no ?> </td>
													<td><?php echo $u->id_nilaiatribut ?></td>
													<td><?php echo $u->nama_atribut?></td>
													<td><?php echo $u->namanilai_atribut ?></td>
													<td>
													<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<a href="<?php echo base_url().'index.php/C_nilaiatribut/edit/'.$u->id_nilaiatribut;?>">
																<i class="fa fa-edit"></i>
																	</a>
															</button>
															<a href="<?php echo base_url().'index.php/C_nilaiatribut/hapus/'.$u->id_nilaiatribut;?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
															</a>
														</div>
												</td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
                        </div>
                        </div>