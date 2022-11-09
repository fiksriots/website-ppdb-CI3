
    
    <?php echo $this->session->flashdata('pesan') ?>
    
     <!-- Begin Page Content -->
      <div class="container-fluid">
        
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Bank Soal</h6>

              </div>
              <div class="card-body">
                  <div class="table-responsive">
                  	<div class="row">
											<a href="<?php echo base_url('admin/data_soal/tambah_soal') ?>" class="btn btn-primary btn-sm ml-3 mb-3">Tambah Soal</a>

											<div class="dropdown inline ml-3">
												<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
													Import
												</button>
												<button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-download"></i>Exspor
												</button>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													<a class="dropdown-item" href="<?php echo base_url('admin/data_soal/pdf') ?>">PDF</a>
													<a class="dropdown-item" href="<?php echo base_url('admin/data_soal/excel') ?>">Excel</a>

												</div>
											</div>
										</div>
                   
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                 <th>No</th>
					<th>Soal</th>
					<th>A</th>
					<th>B</th>
					<th>C</th>
					<th>D</th>
					<th>E</th>
					<th>Kunci Jawaban</th>
					<th>jurusan</th>
					<th>Status Soal</th>
					<th>Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>No</th>
					<th>Soal</th>
					<th>A</th>
					<th>B</th>
					<th>C</th>
					<th>D</th>
					<th>E</th>
					<th>Kunci Jawaban</th>
					<th>jurusan</th>
					<th>Status Soal</th>
					<th>Action</th>
                              </tr>
                          </tfoot>
                          <tbody>
                            <?php $no = 1;
				foreach ($soal as $soal) : ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $soal->soal ?></td>
						<td><?php echo $soal->a ?></td>
						<td><?php echo $soal->b ?></td>
						<td><?php echo $soal->c ?></td>
						<td><?php echo $soal->d ?></td>
						<td><?php echo $soal->e ?></td>
						<td><?php echo $soal->knc_jawaban ?></td>
						<td><?php echo $soal->jurusan ?></td>
						<td><?php echo $soal->aktif ?></td>
						<td>
							<div class="row">
								<a href="<?php echo base_url('admin/data_soal/delete_soal/') . $soal->id_soal ?>" class="btn btn-sm btn-danger btn-circle mr-1 ml-4"><i class="fas fa-trash"></i></a>
								<!-- <a href="<?php// echo base_url('admin/data_soal/update_soal/') . $soal->id_soal ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> -->
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
					<?php echo form_open_multipart('admin/data_soal/import'); ?>
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