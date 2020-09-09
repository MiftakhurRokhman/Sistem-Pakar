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
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
						<a href="<?php echo site_url('dashboard') ?> ">	
								<i class="fas fa-home"></i>
								<p>S1 Sistem Informasi</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo site_url('probabilitas') ?> ">	
								<i class="fas fa-clipboard-list"></i>
								<p>Probabilitas</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('datatesting') ?> ">
								<i class="fas fa-edit"></i>
								<p>Input Data Testing</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>