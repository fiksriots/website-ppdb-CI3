 <?php echo $this->session->flashdata('pesan') ?>
    
     <!-- Begin Page Content -->
      <div class="container-fluid">
        
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Informasi Pembayaran</h6>

              </div>
              <div class="card-body">
                  <div class="table-responsive">
                  <a href="<?php echo base_url('info/info_siswa/tambah_info_pembayaran') ?>" class="btn btn-primary mb-3">Tambah Info Pembayaran</a>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
               <th>No</th>
							<th>Jurusan</th>
							<th>Harga Formulir</th>
							<th>Uang Pangkal</th>
							<th>SPP</th>
							<th>DPPS</th>
							<th>Total</th>
							<th>Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                 <th>No</th>
							<th>Jurusan</th>
							<th>Harga Formulir</th>
							<th>Uang Pangkal</th>
							<th>SPP</th>
							<th>DPPS</th>
							<th>Total</th>
							<th>Action</th>
                              </tr>
                          </tfoot>
                          <tbody>
                   <?php $no = 1;
						foreach ($info_pembayaran as $cs) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $cs->jurusan ?></td>
								<td>Rp.
										<?php ;
										echo number_format($cs->harga_formulir,0,',','.') 
										?>
								</td>
								<td>Rp.
										<?php ;
										echo number_format($cs->uang_pangkal,0,',','.') 
										?>
								</td>
								<td>Rp.
										<?php ;
										echo number_format($cs->spp,0,',','.') 
										?>
								</td>
								<td>Rp.
										<?php ;
										echo number_format($cs->dpps,0,',','.') 
										?>
								</td>
								<td>
									Rp.
										<?php ;
										echo number_format($cs->uang_pangkal + $cs->harga_formulir +$cs->spp + $cs->dpps,0,',','.') 
										?>
								</td>
								<td>
									<div class="row">
										<a href="<?php echo base_url('info/info_siswa/delete_info_pembayaran/') . $cs->id ?>" class="btn btn-sm btn-danger mr-2"><i class="fas fa-trash"></i></a>
										<a href="<?php echo base_url('info/info_siswa/update_info_pembayaran/') . $cs->id ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
									</div>
								</td>
							</tr>

						<?php endforeach; ?>
                      
              </div>
          </div>

      </div>

		