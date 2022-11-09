<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Data Sekolah</h6>
                                </div>
                                <div class="card-body">
           <?php foreach ($info_sekolah as $cs) :?>
    <form method="post" action="<?php echo base_url('info/info_sekolah/update_info_sekolah_aksi') ?>">
        <div class="row">
           <input type="hidden" name="id_sekolah" value="<?php echo $cs->id_sekolah ?>">
           <div class="col-md-12">
                <div class="form-group">
                    <label>Nama Sekolah</label>
                    <input type="hidden" name="id_sekolah" value="<?php echo $cs->id_sekolah ?>">
                    <input type="text" name="Nama_sekolah" class="form-control"value="<?php echo $cs->Nama_sekolah ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="hidden" name="id_sekolah" value="<?php echo $cs->id_sekolah ?>">
                    <input type="text" name="alamat" class="form-control"value="<?php echo $cs->alamat ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="hidden" name="id_sekolah" value="<?php echo $cs->id_sekolah ?>">
                    <input type="text" name="email" class="form-control"value="<?php echo $cs->email ?>">
                </div>
                 <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="hidden" name="id_sekolah" value="<?php echo $cs->id_sekolah ?>">
                    <input type="text" name="no_telp" class="form-control"value="<?php echo $cs->no_telp ?>">
                </div>
                 <div class="form-group">
                    <label>Nomor Rekening / Bank</label>
                    <input type="hidden" name="id_sekolah" value="<?php echo $cs->id_sekolah ?>">
                    <input type="text" name="no_rek" class="form-control"value="<?php echo $cs->no_rek ?>">
                </div>
                 <div class="form-group">
                    <label>Motto</label>
                    <input type="hidden" name="id_sekolah" value="<?php echo $cs->id_sekolah ?>">
                    <input type="text" name="motto" class="form-control"value="<?php echo $cs->motto ?>">
                </div>
                <button type="submit"  class="btn btn-sm btn-primary mt-4">SUBMIT</button>
                <button type="reset"  class="btn btn-sm btn-danger mt-4">RESET</button>
            </div>
      </div>
    </form>
  <?php endforeach; ?>
</div>

      </div>
    </div>
   