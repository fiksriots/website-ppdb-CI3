
<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Informasi Jurusan</h6>
                                </div>
                                <div class="card-body">
    <form method="post" action="<?php echo base_url('info/info_jurusan/tambah_info_jurusan_aksi') ?>">
        <div class="card">
          <div class="card-body">
                 <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kode Jurusan</label>
                    <input type="text" name="kode_jurusan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kuota Siswa</label>
                    <input type="text" name="kuota_siswa" class="form-control">
                </div>
                <button type="submit"  class="btn btn-sm btn-primary mt-4">SUBMIT</button>
                <button type="reset"  class="btn btn-sm btn-danger mt-4">RESET</button>
            </div>
        </div>
          </div>
        </div>
       
    </form>
</div></div></div>
