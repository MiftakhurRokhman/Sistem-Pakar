<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data User</h4>
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
								<a href="#">Mahasiswa</a>
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
						<form action="<?php echo site_url('tambah_aksi_mhs') ?>" method="post" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Input Data Mahasiswa</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">Nim Mahasiswa</label>
												<input type="text" class="form-control" id="email2" name="nim_mhs" placeholder="xx.xx.xxxx">
											</div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="email2">Nama Mahasiswa</label>
												<input type="text" class="form-control" id="email2" name="nama_mhs" placeholder="Nama Mahasiswa">
											</div>
											</div>
											<div class="col-md-6 col-lg-6">
											 <div class="form-group">
												<label for="exampleFormControlSelect1">Username</label>
												<input type="text" class="form-control" id="email2" name="username" placeholder="Username">
											</div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
											 <div class="form-group">
												<label for="exampleFormControlSelect1">Password</label>
												<input type="password" class="form-control" id="email2" name="password" placeholder="Password">
											</div>
											</div>
											<div class="col-md-6 col-lg-6">
											<div class="form-group">
											<label for="exampleFormControlSelect1">Foto Upload</label>
												<div class="col-md-12">               
													<input id="file-input" type="file" name="foto">  
												     
												</div>   
											</div>
										</div>
										</div>
								</div>
								<div class="card-action">	
									<button class="btn btn-success" type="submit">Tambah</button>
									<button class="btn btn-danger">Batal</button>
								</div>
								
							</div>
							</form>
							<div class="content">
			
					</div>
					
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Data Mahasiswa</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th width="5%">Nomor</th>
													<th width="5%">Foto</th>
													<th width="20%">Nim Mahasiswa</th>
													<th width="30%">Nama Mahasiswa</th>
													<th width="30%">Username</th>
													<th width="10%">Aksi</th>
												</tr>
											</thead>
										
											<tbody>
												<?php 
											$no = 0;
											foreach($mhs as $u){ 
											$no++;
											?>
												<tr>
													<td><?php echo $no ?> </td>
													<td>
													<div class="avatar avatar">
														<img src="<?php echo base_url(); ?>upload/mhs/<?php echo $u->foto_mhs ?>.png" alt="..." class="avatar-img rounded-circle">
													</div>
													</td>
													<td><?php echo $u->nim_mhs ?></td>
													<td><?php echo $u->nama_mhs ?></td>
													<td><?php echo $u->username ?></td>
													<td>
														<div class="form-button-action">
															<a href="<?php echo base_url().'index.php/C_user/hapus/'.$u->username.'/'.$u->id_mhs;?>">
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