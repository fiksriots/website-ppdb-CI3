 <div class="container-fluid">


   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Update Data Akun</h6>
     </div>
     <div class="card-body">
       <?php foreach ($akun as $cs) : ?>
         <form method="post" action="<?php echo base_url('admin/data_akun/update_akun_aksi') ?>">
           <div class="row">
             <div class="col-md-12">

               <div class="form-group">
                 <label>Nama</label>
                 <input type="hidden" name="id_akun" value="<?php echo $cs->id_akun ?>">
                 <input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
                 <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
               </div>
               <div class="form-group">
                 <label>Email</label>
                 <input type="hidden" name="id_akun" value="<?php echo $cs->id_akun ?>">
                 <input type="text" name="email" class="form-control" value="<?php echo $cs->email ?>">
                 <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
               </div>
               <div class="form-group">
                 <label>Alamat</label>
                 <input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
                 <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
               </div>
               <div class="form-group">
                 <label>Gender</label>
                 <select class="form-control" name="gender">
                   <option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
                   <option value="laki-laki">Laki-laki</option>
                   <option value="perempuan">Perempuan</option>
                 </select>
                 <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
               </div>

               <div class="form-group">
                 <label>Nomor Telepon</label>
                 <input type="text" name="no_telp" class="form-control" value="<?php echo $cs->no_telp ?>">
                 <?php echo form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
               </div>
               <div class="form-group">
                 <label>Jurusan</label>
                 <input type="text" name="jurusan" class="form-control" value="<?php echo $cs->jurusan ?>">
                 <?php echo form_error('jurusan', '<div class="text-small text-danger">', '</div>') ?>
               </div>
               <div class="form-group">
                 <label>Status Pembayaran</label>
                 <select class="form-control" name="status_pembayaran">
                   <option value="<?php echo $cs->status ?>"><?php
                                                              if ($cs->status == "0") {
                                                                echo " Belum Dikonfirmasi ";
                                                              } else {
                                                                echo " Sudah Dikonfirmasi ";
                                                              }
                                                              ?></option>
                   <option value="0">Belum Dikonfifmasi</option>
                   <option value="1">Sudah Dikonfirmasi</option>
                 </select>
                 <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
               </div>
               <button type="submit" class="btn btn-sm btn-primary mt-4">SUBMIT</button>
               <button type="reset" class="btn btn-sm btn-danger mt-4">RESET</button>
             </div>
           </div>
         </form>
       <?php endforeach; ?>
     </div>
   </div>
 </div>