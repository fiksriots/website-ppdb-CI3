 <?php echo $this->session->flashdata('pesan') ?>
    
     <!-- Begin Page Content -->
      <div class="container-fluid">
        
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Informasi Jurusan</h6>

              </div>
              <div class="card-body">
                  <div class="table-responsive">
                   <a href="<?php echo base_url('info/info_jurusan/tambah_info_jurusan') ?>" class="btn btn-primary mb-3">Tambah Info jurusan</a>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                <th>No</th>
							<th>nama jurusan</th>
							<th>kode jurusan</th>
              <th>kuota siswa</th>
              <th>siswa yang mendaftar</th>
							<th>Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>No</th>
              <th>nama jurusan</th>
              <th>kode jurusan</th>
              <th>kuota siswa</th>
              <th>siswa yang mendaftar</th>
              <th>Action</th>
                              </tr>
                          </tfoot>
                          <tbody>
                             
					<?php $no = 1;
						foreach ($info_jurusan as $cs) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $cs->nama_jurusan ?></td>
								<td><?php echo $cs->kode_jurusan ?></td>
                <td><?php echo $cs->kuota_siswa ?></td>
                 <td><?php echo $cs->siswa_mendaftar ?></td>
								<td>
									<div class="row">
										<a href="<?php echo base_url('info/info_jurusan/delete_info_jurusan/') . $cs->id_jurusan ?>" class="btn btn-sm btn-danger btn-circle ml-3 mr-2"><i class="fas fa-trash"></i></a>
										<a href="<?php echo base_url('info/info_jurusan/update_info_jurusan/') . $cs->id_jurusan ?>" class="btn btn-sm btn-primary btn-circle "><i class="fas fa-edit"></i></a>
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
