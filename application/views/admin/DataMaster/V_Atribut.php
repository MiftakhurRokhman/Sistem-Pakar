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
						<form action="<?php echo site_url('tambah_atribut') ?>" method="post">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Input Data Atribut</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group ">
												<label for="email2">Kode Atribut</label>
												<input type="text" class="form-control" name="kode_atribut" value="<?php echo $kode; ?>" readonly="readonly">
											</div>
										</div>
											<div class="col-md-6 col-lg-4">
											<div class="form-group validate-input" >
												<label for="email2">Nama Atribut</label>
												<input type="text" class="form-control" name="nama_atribut" placeholder="Nama Atribut">
											</div>
											</div>
											<div class="col-md-6 col-lg-4">
											 <div class="form-group ">
												<label for="exampleFormControlSelect1">Status Atribut</label>
												<select class="form-control" id="exampleFormControlSelect1" name="status_atribut">
													<option>Diketahui</option>
													<option>Dicari</option>
												</select>
											</div>
											</div>
										</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success" >Tambah</button>
									<button class="btn btn-danger">Batal</button>
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
													<th width="10%">Kode Atribut</th>
													<th width="60%">Nama Atribut</th>
													<th width="20%">Status Atribut</th>
													<th width="5%">Aksi</th>
												</tr>
											</thead>
										
											<tbody>
												<?php 
											$no = 0;
											foreach($atribut as $u){ 
											$no++;
											?>
												<tr id="<?php echo $u->id_atribut ?>">
													<td><?php echo $no ?> </td>
													<td><?php echo $u->id_atribut ?></td>
													<td><?php echo $u->nama_atribut ?></td>
													<td><?php echo $u->status_atribut ?></td>
													<td>
														<div class="form-button-action">
													
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg"  data-original-title="Edit Task">
																<a href="<?php echo base_url().'index.php/C_atribut/edit/'.$u->id_atribut;?>">
																<i class="fa fa-edit"></i>
																	</a>
															</button>
															<a href="<?php echo base_url().'index.php/C_atribut/hapus/'.$u->id_atribut;?>" class="alert_demo_7">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger " data-original-title="Remove">
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

