
    
    <?php echo $this->session->flashdata('pesan') ?>
    
     <!-- Begin Page Content -->
      <div class="container-fluid">
        
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Lampiran</h6>

              </div>
              <div class="card-body">
                  <div class="table-responsive">
                   
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                  <th>No</th>
						<th>No. Pendaftaran</th>
						<th>Kartu Keluarga</th>
						<th>Akta Kelahiran</th>
						<th>Ijazah</th>
						<th>Rapot</th>
						<th>KTP Orang Tua</th>
						<th>KPS/BSM/KIP</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                   
                   <th>No</th>
						<th>No. Pendaftaran</th>
						<th>Kartu Keluarga</th>
						<th>Akta Kelahiran</th>
						<th>Ijazah</th>
						<th>Rapot</th>
						<th>KTP Orang Tua</th>
						<th>KPS/BSM/KIP</th>
                              </tr>
                          </tfoot>
                          <tbody>
                        <?php $no = 1;
					foreach ($lampiran as $cs) : ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $cs->id_akun ?></td>
							<td>
								<a href="<?php echo base_url('foto/lampiran_kk/'); echo $cs->lampiran_kk; ?>" download>
										  <span class='badge badge-success'> download</span>
								</a>	
							</td>
							<td>
								<a href="<?php echo base_url('foto/lampiran_akta/'); echo $cs->lampiran_akta; ?>" download>
										  <span class='badge badge-success'> download</span>
								</a>	
							</td>
							<td>
								<a href="<?php echo base_url('foto/lampiran_ijazah/'); echo $cs->lampiran_ijazah; ?>" download>
										  <span class='badge badge-success'> download</span>
								</a>	
							</td>
							<td>
								<a href="<?php echo base_url('foto/lampiran_rapot/'); echo $cs->lampiran_rapot; ?>" download>
										  <span class='badge badge-success'> download</span>
									</a>	
							</td>
							<td>
								<a href="<?php echo base_url('foto/lampiran_ktp/'); echo $cs->lampiran_ktp; ?>" download>
										  <span class='badge badge-success'> download</span>
									</a>	
							</td>
							<td>
								<div class="row justify-content-center">
								<?php 
				          			if($cs->lampiran_bantuan ==''){
				          				echo "<span class='badge badge-danger'>Tidak Ada </span>";
				          			}else{
				          		?>
				          		
				          			<a href="<?php echo base_url('foto/lampiran_bantuan/'); echo $cs->lampiran_bantuan; ?>" download>
										  <span class='badge badge-success'> download</span>
									</a>	
				          		<?php } ?>
				          		
								</div>
							</td>
							
						</tr>

					<?php endforeach; ?>
                              
                              
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

      </div>
      <!-- /.container-fluid -->
