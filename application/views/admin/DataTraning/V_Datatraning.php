<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Traning</h4>
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
								<a href="#">Data Responden</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Datatables</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header ">
									<h4 class="card-title">Data Traning</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive ">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
													<tr>
													<th>No</th>
													<th>Nim Responden</th>
													<?php foreach($atribut as $a){ ?>
													<th><?php echo $a->nama_atribut ?></th>
													<?php } ?>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											<?php foreach($datatraning as $u){ ?>
												<tr>
													<td><?php echo $u->id_datatraning ?></td>
													<td><?php echo $u->nim_responden ?></td>
													<td><?php echo $u->akuntansi ?></td>
													<td><?php echo $u->akuntansi_lanjut ?></td>
													<td><?php echo $u->bahasa_pemrograman_1 ?></td>
													<td><?php echo $u->pemrograman_web_lanjut ?></td>
													<td><?php echo $u->pengenalan_perancangan_web ?></td>
													<td><?php echo $u->fotografi ?></td>
													<td><?php echo $u->multimedia ?></td>												
													<td><?php echo $u->komputer_grafis ?></td>
													<td><?php echo $u->bakat ?></td>
													<td><?php echo $u->minat ?></td>
													<td><?php echo $u->konsentrasi ?></td>
													<td>
													<div class="form-button-action">
															<a href="<?php echo base_url().'index.php/C_datatraning/hapus/'.$u->id_datatraning;?>">
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
                        </div>
                     