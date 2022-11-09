
<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Informasi Gelombang</h6>
                                </div>
                                <div class="card-body">
    <form method="post" action="<?php echo base_url('info/info_gelombang/tambah_info_gelombang_aksi') ?>">
        <div class="card">
          <div class="card-body">
                 <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Gelombang</label>
                    <input type="text" name="gelombang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Dari</label>
                    <input type="text" name="dari" class="form-control">
                </div>
                <div class="form-group">
                    <label>Sampai</label>
                    <input type="text" name="sampai" class="form-control">
                </div>
                <button type="submit"  class="btn btn-sm btn-primary mt-4">SUBMIT</button>
                <button type="reset"  class="btn btn-sm btn-danger mt-4">RESET</button>
            </div>
        </div>
          </div>
        </div>
       
    </form>
</div></div></div>
