
    <?php echo $this->session->flashdata('pesan') ?>
    
     <!-- Begin Page Content -->
      <div class="container-fluid">
        
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar</h6>

              </div>
              <div class="card-body">
                  <div class="table-responsive">
                   <div class="row mb-3">
                    <div class="dropdown inline ml-3">
                      <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                        Import
                      </button> -->
                      <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-download"></i>Exspor
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo base_url('admin/data_nilai/pdf') ?>">PDF</a>
                        <a class="dropdown-item" href="<?php echo base_url('admin/data_nilai/excel') ?>">Excel</a>

                      </div>
                    </div>
                  </div>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                 <th>No</th>
						<th>Nomor Pendaftaran</th>
						<th>Nama</th>
						<th>Nilai Seleksi</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                   <th>No</th>
						<th>Nomor Pendaftaran</th>
						<th>Nama</th>
						<th>Nilai Seleksi</th>
                              </tr>
                          </tfoot>
                          <tbody>
                             
					<?php $no = 1;
					foreach ($ujian as $cs) : ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $cs->id_akun ?></td>
							<td><?php echo $cs->nama ?></td>
							<td><?php echo $cs->ujian ?></td>
						</tr>

					<?php endforeach; ?>
                              
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

      </div>
      <!-- /.container-fluid -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php echo form_open_multipart('admin/data_nilai/import'); ?>
          <div class="modal-body">
            <div class="form-group">
              <label>Import Data</label>
              <input type="file" name="uploadexcel" id="uploadexcel" accept=".xlsx,.xls" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
          </div>
        </div>
      </div>
    </div>
	
			