<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Testing</h4>
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
								<a href="#">Data Testing</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Input Data Testing</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Input Data Testing</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-12">
										<form action="<?php echo site_url('inputdatatesting') ?>" method="post">
											<div class="form-group">
												<label for="email2">Nim Responden Data Testing</label>
												<input type="text" class="form-control" placeholder="xx.xx.xxxx" name="nim_responden" >
											</div>
											<div class="form-group">
												<label for="email2">Nama Responden</label>
												<input type="text" class="form-control" placeholder="Nama" name="nama_responden" >
											</div>
											</div>
											<?php foreach($datatesting as $u){ ?>
                                            <div class="col-md-6 col-lg-12">
											<div class="form-group form-inline">
												<label class="col-md-4"><?php echo $u->nama_atribut ?></label>
												<div class="col-md-8 p-0">
												<select class="form-control input-full" id="inlineinput"  name="<?php echo str_replace(' ','_',strtolower($u->nama_atribut)) ?>">
												<?php 
												foreach ($atributjoin as $z){
												if ($u->nama_atribut  == $z->nama_atribut ){ 
													?>
													<option value="<?php echo $z->id_nilaiatribut ?>"><?php echo $z->namanilai_atribut ?></option> 
													<?php
												} else {  ?>									
													<?php 
											} } ?>
												</select>
												</div>
											</div>
											</div>
											   <?php } ?>
										</div>
										
								</div>
								<div class="card-action">
									<button class="btn btn-success">Submit</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
							
							</div>
							
							</div>
						</div>
					</div>
					
					