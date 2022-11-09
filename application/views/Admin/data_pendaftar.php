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
                   <div class="row">
              

              <div class="dropdown inline ml-3">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                  Import
                </button>
                <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-download"></i>Exspor
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?php echo base_url('admin/data_pendaftar/pdf') ?>">PDF</a>
                  <a class="dropdown-item" href="<?php echo base_url('admin/data_pendaftar/excel') ?>">Excel</a>

                </div>
              </div>
            </div>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                  <th>No</th>
                    <th>No.Pendaftaran</th>
                    <th>Nama Lengkap</th>
                    <th>Minat Jurusan</th>
                    <th>Nilai Rata-rata</th>
                    <th>Status</th>
                    <th>action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                   <th>No</th>
                    <th>No.Pendaftaran</th>
                    <th>Nama Lengkap</th>
                    <th>Minat Jurusan</th>
                    <th>Nilai Rata-rata</th>
                    <th>Status</th>
                    <th>action</th>
                              </tr>
                          </tfoot>
                          <tbody>
                             <?php $no=1; foreach ($data_diri as $mb) : ?>
                    <tr>
                         <td><?php echo $no++ ?></td>
                         <td><?php echo $mb->id_akun ?></td>
                         <td><?php echo $mb->nama_lengkap ?></td>
                         <td><?php echo $mb->minat_jurusan ?></td>
                          <td>
                              <?php 
                                   $a=$mb->nilai_b_indo;
                                   $b=$mb->nilai_mtk;
                                   $c=$mb->nilai_ipa;
                                   $d=$mb->nilai_b_inggris;
                                   $e=($a+$b+$c+$d)/4;
                                   echo $e 
                              ?>
                          </td>
                         <td><?php 
                         if($mb->status_pendaftaran=="0"){
                              echo "<span class='badge badge-danger'> Tidak Diterima </span>";
                         }else{
                              echo "<span class='badge badge-primary'> Diterima </span>";
                         }
                         ?></td>
                         <td>
                              <div class="row">
                                   <a href="<?php echo base_url('admin/data_pendaftar/detail_data/').$mb->id_datadiri ?>" class="btn btn-sm btn-success btn-circle ml-1"><i class="fas fa-eye"></i></a><br>
                                   <a href="<?php echo base_url('admin/data_pendaftar/delete_data/').$mb->id_datadiri ?>" class="btn btn-sm btn-danger btn-circle ml-1"><i class="fas fa-trash"></i></a>
                                   <a href="<?php echo base_url('admin/data_pendaftar/update_data/').$mb->id_datadiri ?>" class="btn btn-sm btn-primary btn-circle ml-1"><i class="fas fa-edit"></i></a>
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
          <?php echo form_open_multipart('admin/data_pendaftar/import'); ?>
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