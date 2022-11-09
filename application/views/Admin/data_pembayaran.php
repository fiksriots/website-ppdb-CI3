
    
    <?php echo $this->session->flashdata('pesan') ?>
    
     <!-- Begin Page Content -->
      <div class="container-fluid">
        
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>

              </div>
              <div class="card-body">
                  <div class="table-responsive">
                   
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                  <th>No</th>
						<th>Nama</th>
						<th>Bukti Pembayaran</th>
						<th>Status Pembayaran</th>
						<th>Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                 <th>No</th>
						<th>Nama</th>
						<th>Bukti Pembayaran</th>
						<th>Status Pembayaran</th>
						<th>Action</th>
                              </tr>
                          </tfoot>
                          <tbody>
                            <?php $no = 1;
					foreach ($akun as $cs) : ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $cs->nama ?></td>
							<td>
								<div class="row justify-content-center">
									
									
								<?php 
				          			if($cs->bukti_pembayaran==''){
				          				echo "<span class='badge badge-danger'> Bukti Pembayaran Belum Diupload </span>";
				          			}else{
				          		?>
				          		
				          			<a href="<?php echo base_url('foto/bukti_pembayaran/'); echo $cs->bukti_pembayaran; ?>" download>
										  <span class='badge badge-success'> download</span>
										</a>
									
				          				
				          		
				          				
				          			<?php } ?>
				          		
								</div>
							</td>
							<td><?php 
		          			if($cs->status=="0"){
		          				echo "<span class='badge badge-danger'> belum dikonfirmasi </span>";
		          			}else{
		          				echo "<span class='badge badge-primary'> sudah terkonfirmasi </span>";
		          			}
		          			?></td>
							<td>
								<div class="row">
									<a href="<?php echo base_url('admin/data_pembayaran/update_pembayaran/') . $cs->id_akun ?>" class="btn btn-sm btn-primary btn-circle ml-3"><i class="fas fa-edit "></i></a>
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
					