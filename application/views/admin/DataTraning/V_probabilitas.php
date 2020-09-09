<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Probabilitas</h4>
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
								<a href="#">Probabilitas</a>
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
								<div class="card-header">
									<div class="card-title">Konsentrasi</div>
								</div>
								<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
											
                                                    <?php foreach($konsentrasi as $z){ ?>
                                                    <th><?php echo $z->namanilai_atribut ?>
													</th>                                                 
                                                  <?php } ?>
											</tr>
										</thead>
										<tbody>
										<tr>
																		
											<?php 
												foreach ($konsentrasi2 as $kr){ 
													$b1 = "ecom";
													$b2 = "mul";
													$b3 = "ft";
												?>	
												<th><?php echo $kr->$b1; ?></th>
												<th><?php echo $kr->$b2; ?></th>
												<th><?php echo $kr->$b3; ?></th>
												<?php 
											 }
											?>
										
										</tr>
									</tbody>
									</table>
									</div>
								</div>
								</div>
								</div>
					
					<?php 
					foreach($namaatribut as $u){ ?>
					<div class="col-md-6">
                    <div class="card">
								<div class="card-header">
									<div class="card-title"><?php echo $u->nama_atribut ?></div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
                                                    <?php foreach($konsentrasi as $z){ ?>
                                                    <th><?php echo $z->namanilai_atribut ?>
													</th>                                                 
                                                  <?php } ?>
                                                </tr>
											</thead>
											<tbody>
													<?php foreach ($atributjoin2 as $y){ ?>      
													 <?php
														if ($u->nama_atribut == $y->nama_atribut ){ ?> 
															<tr>
															<td><?php echo $y->namanilai_atribut; ?></td>															
															<?php 
															
															foreach ($probabilitas as $pr){														
															$var1 = $y->id_nilaiatribut.$b1;
															$var2 = $y->id_nilaiatribut.$b2;
															$var3 = $y->id_nilaiatribut.$b3;
															$b1= "ecom";
															$b2 = "mul";
															$b3 = "ft";
															?>
															<td><?php echo $pr->$var1; ?></td>
															<td><?php echo $pr->$var2; ?></td>
															<td><?php echo $pr->$var3; ?></td>
															
														<?php   } 	?>
														</tr>
														<?php } else {
															} 
														?>
													   <?php } ?>     
													                                              
											</tbody>

										</table>
                                </div>
								</div>
								</div>
								</div>
								 <?php 	} ?>
								
                        </div>