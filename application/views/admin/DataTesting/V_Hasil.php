<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Hasil Data Testing</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
                        <div class="card">
								<div class="card-body">
								<div class="table-responsive">
										<table class="table table-bordered" >
										<thead>
                                                <tr>
                                                    <th>Nim Responden</th>
                                                    <th>Nama Responden</th>
													<?php foreach($atribut as $at){ ?>
													<th><?php echo $at->nama_atribut; ?></th>
													<?php } ?>
												</tr>
										</thead>
										<tbody>
											<tr>
                                                <td><?php echo $nim_responden; ?></td>
												<td><?php echo $nama; ?></td>					
												<td><?php echo $akuntansi; ?></td>
												<td><?php echo $akuntansi_lanjut; ?></td>
												<td><?php echo $bahasa_pemrograman_1; ?></td>
                                                <td><?php echo $pemrograman_web_lanjut; ?></td>
												<td><?php echo $pengenalan_perancangan_web; ?></td>
												<td><?php echo $fotografi; ?></td>
												<td><?php echo $multimedia; ?></td>
                                                <td><?php echo $komputer_grafis; ?></td>
												<td><?php echo $bakat; ?></td>
												<td><?php echo $minat; ?></td>
											</tr>
										</tbody>
									</table>
								</div>
                                </div>
								</div>
                                <div class="card">
								<div class="card-body">
								<div class="table-responsive">
										<table class="table table-bordered ">
										<thead>
                                                <tr>
													<th>Konsentrasi</th>
													<?php foreach($atribut as $at){ ?>
													<th><?php echo $at->nama_atribut; ?></th>
													<?php } ?>
                                                    
												</tr>
										</thead>
										<tbody>
										<tr>
												<td><?php echo $ecom1; ?></td>
												<td><?php echo $akun_e; ?></td>
												<td><?php echo $al_e; ?></td>
												<td><?php echo $bp1_e; ?></td>
                                                <td><?php echo $pwl_e; ?></td>
												<td><?php echo $ppw_e; ?></td>
												<td><?php echo $f_e; ?></td>
												<td><?php echo $m_e; ?></td>
												<td><?php echo $kg_e; ?></td>
												<td><?php echo $b_e; ?></td>
                                                <td><?php echo $mi_e; ?></td>
                                                
											</tr>			
										<tr>
												<td><?php echo $multi; ?></td>
												<td><?php echo $akun_m; ?></td>
												<td><?php echo $al_m; ?></td>
												<td><?php echo $bp1_m; ?></td>
                                                <td><?php echo $pwl_m; ?></td>
                                                <td><?php echo $ppw_m; ?></td>
												<td><?php echo $f_m; ?></td>
												<td><?php echo $m_m; ?></td>
                                                <td><?php echo $kg_m; ?></td>
												<td><?php echo $b_m; ?></td>
												<td><?php echo $mi_m; ?></td>
                                               
                                            </tr>								
                                            <tr>
												<td><?php echo $financ; ?></td>
												<td><?php echo $akun_ft; ?></td>
												<td><?php echo $al_ft; ?></td>
												<td><?php echo $bp1_ft; ?></td>
                                                <td><?php echo $pwl_ft; ?></td>
                                                <td><?php echo $ppw_ft; ?></td>
												<td><?php echo $f_ft; ?></td>
												<td><?php echo $m_ft; ?></td>
                                                <td><?php echo $kg_ft; ?></td>
												<td><?php echo $b_ft; ?></td>
												<td><?php echo $mi_ft; ?></td>
                                               
                                                </tr>
										</tbody>
									</table>
								</div>
                                </div>   
								 </div>
								 <div class="row">
                       			 <div class="col-md-12">
                                    <div class="card">
								        <div class="card-body">
										<div class="table-responsive">
                                            <table class="table table-hover  ">
                                                <thead>
                                                        <tr>
                                                            <th>Konsentrasi</th>
                                                            <th>Total Probabilitas Kriteria</th>
                                                            <th>Probabilitas Konsentrasi</th>
                                                            <th>Jumlah Probabilitas</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
														<td><?php echo $ecom1; ?></td>
                                                        <td><?php echo $prob_ecom; ?></td>
                                                        <td><?php echo $ecom; ?></td>
                                                        <td><?php echo $jum_ecom; ?></td>
                                                    </tr>
                                                    <tr>
														<td><?php echo $multi; ?></td>
                                                        <td><?php echo $prob_mul; ?></td>
                                                        <td><?php echo $mul; ?></td>
                                                        <td><?php echo $jum_mul; ?></td>
                                                    </tr>
                                                    <tr>
														<td><?php echo $financ; ?></td>
                                                        <td><?php echo $prob_ft; ?></td>
                                                        <td><?php echo $ft; ?></td>
                                                        <td><?php echo $jum_ft; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                    </div>
									
						</div>
						 <div class="row">
						<div class="col-12 col-sm-6 col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<div>
											<h4><b><?= $ecom1; ?></b></h4>
											
										</div>
										<h3 class="text-info fw-bold"><?= $jumlah_ecom; ?></h3>
									</div>
									<div class="progress progress-sm">
										<div class="progress-bar bg-info w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<div>
											<h4><b><?= $multi; ?></b></h4>
											
										</div>
										<h3 class="text-secondary fw-bold"><?= $jumlah_mul; ?></h3>
									</div>
									<div class="progress progress-sm">
										<div class="progress-bar bg-secondary w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<div>
											<h4><b><?= $financ; ?></b></h4>
											
										</div>
										<h3 class="text-success fw-bold"><?= $jumlah_ft; ?></h3>
									</div>
									<div class="progress progress-sm">
										<div class="progress-bar bg-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>  
                        <div class="row">
						<div class="col-md-12">
										<div class="card card-dark bg-<?=$warna;?>-gradient">
											<div class="card-body skew-shadow">
												<h3 class="py-2 mb-0">Hasil Keputusan Konsentrasi</h3>
												<div class="row">
													<div class="col-12 pr-0">
														<h4 class="fw mb-1">Hasil keputusan pemilihan konsentrasi yang tepat untuk Saudara 
														<?= $nama;?> adalah <?= $prediksi;?> dengan nilai <?= $nilai_prediksi;?></h4>
														<br/>
													</div>
												</div>
											</div>
										</div>
										</div>								
										</div>
									</div>						
							</div>
                        </div>
                        </div>