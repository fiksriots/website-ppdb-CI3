
<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Informasi Pembayaran</h6>
                                </div>
                                <div class="card-body">
    <form method="post" action="<?php echo base_url('info/info_siswa/tambah_info_pembayaran_aksi') ?>">
        <div class="card">
          <div class="card-body">
                 <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>jurusan</label>
                    <input type="text" name="jurusan" class="form-control">
                    <?php echo form_error('jurusan','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>Harga Formulir</label>
                    <input type="text" name="harga_formulir" class="form-control">
                    <?php echo form_error('harga_formulir','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>Uang Pangkal</label>
                    <input type="text" name="uang_pangkal" class="form-control">
                    <?php echo form_error('uang_pangkal','<div class="text-small text-danger">','</div>') ?>
                </div>
            
                <div class="form-group">
                    <label>SPP</label>
                    <input type="text" name="spp" class="form-control">
                    <?php echo form_error('spp','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>DPPS</label>
                    <input type="text" name="dpps" class="form-control">
                    <?php echo form_error('dpps','<div class="text-small text-danger">','</div>') ?>
                </div>
                <button type="submit"  class="btn btn-sm btn-primary mt-4">SUBMIT</button>
                <button type="reset"  class="btn btn-sm btn-danger mt-4">RESET</button>
            </div>
        </div>
          </div>
        </div>
       
    </form>
</div></div></div>
