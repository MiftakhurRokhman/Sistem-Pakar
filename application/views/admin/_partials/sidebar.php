<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
						<?php if($this->session->userdata('akses')=='1'):?>
										<div class="avatar-sm"><img src="<?php echo base_url(); ?>upload/admin/<?php echo $this->session->userdata('username') ?>.png"  class="avatar-img rounded-circle"></div>
										<?php else:?>
										<div class="avatar-sm"><img src="<?php echo base_url(); ?>upload/mhs/<?php echo $this->session->userdata('username') ?>.png" class="avatar-img rounded-circle"></div>
										<?php endif;?>
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
								
									<?php echo $this->session->userdata('username') ?>
									<span class="user-level"><?php echo $this->session->userdata('status') ?></span>
								
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#settings">
											<span class="link-collapse"><a href="<?php echo site_url('logout')?>">Logout</a></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="<?php echo site_url('dashboard') ?>" >
								<i class="fas fa-home"></i>
								<p>S1 Sistem Informasi</p>
								<span class="caret"></span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-layer-group"></i>
								<p>Data Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('atribut') ?>">
											<span class="sub-item">Atribut</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('nilaiatribut') ?>">
											<span class="sub-item">Nilai Atribut</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Input Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
										<li>
										<a href="<?php echo site_url('inputdatatraning') ?>">
											<span class="sub-item">Input Data Traning</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Data Traning</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('datatraning') ?> ">
											<span class="sub-item">Data Sample</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('probabilitas') ?> ">
											<span class="sub-item">Probabilitas</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fas fa-chart-bar"></i>
								<p>Data Testing</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('datatesting') ?> ">
											<span class="sub-item">Input Data Testing</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
								<i class="fas fa-user-alt"></i>
								<p>Data User</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('datamahasiswa') ?> ">
											<span class="sub-item">Data Mahasiswa</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>