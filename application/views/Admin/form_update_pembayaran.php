<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Data Pembayaran</h6>
                                </div>
                                <div class="card-body">
           <?php foreach ($akun as $cs) :?>
    <form method="post" action="<?php echo base_url('admin/data_pembayaran/update_pembayaran_aksi/'.$cs->id_akun) ?>">
        <div class="row">
            <div class="col-md-12">

              <div class="form-group">
                <label>Status Pembayaran</label>
                <select class="form-control" name="status_pembayaran">
                  <option value="<?php echo $cs->status ?>"><?php 
                if($cs->status=="0"){
                  echo " Belum Dikonfirmasi ";
                }else{
                  echo " Sudah Dikonfirmasi ";
                }
                ?></option>
                  <option value="0">Belum Dikonfirmasi</option>
                  <option value="1">Sudah Dikonfirmasi</option>
                  <option value="2">Kembalikan Bukti</option>
                </select>
                <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
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
   