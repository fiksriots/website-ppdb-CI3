<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Data Jurusan</h6>
                                </div>
                                <div class="card-body">
           <?php foreach ($info_jurusan as $cs) :?>
    <form method="post" action="<?php echo base_url('info/info_jurusan/update_info_jurusan_aksi') ?>">
        <div class="row">
           <input type="hidden" name="id_jurusan" value="<?php echo $cs->id_jurusan ?>">
           <div class="col-md-12">
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="hidden" name="id_jurusan" value="<?php echo $cs->id_jurusan ?>">
                    <input type="text" name="nama_jurusan" class="form-control"value="<?php echo $cs->nama_jurusan ?>">
                </div>
                <div class="form-group">
                    <label>Kode Jurusan</label>
                    <input type="hidden" name="id_jurusan" value="<?php echo $cs->id_jurusan ?>">
                    <input type="text" name="kode_jurusan" class="form-control"value="<?php echo $cs->kode_jurusan ?>">
                </div>
                <div class="form-group">
                    <label>Kuota Siswa</label>
                    <input type="hidden" name="id_jurusan" value="<?php echo $cs->id_jurusan ?>">
                    <input type="text" name="kuota_siswa" class="form-control" value="<?php echo $cs->kuota_siswa ?>">
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
   