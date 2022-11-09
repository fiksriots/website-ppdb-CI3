<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Data Pendaftar</h6>
                                </div>
                                <div class="card-body">
           <?php foreach ($data_diri as $cs) :?>
    <form method="post" action="<?php echo base_url('admin/data_pendaftar/update_pendaftar_aksi/'.$cs->id_datadiri) ?>">
        <div class="row">
            <div class="col-md-12">

              <div class="form-group">
                <label>Status pendaftar</label>
                <select class="form-control" name="status_pendaftaran">
                  <option value="<?php echo $cs->status_pendaftaran ?>"><?php 
                if($cs->status_pendaftaran=="0"){
                  echo " Belum Diterima ";
                }else{
                  echo " Sudah Diterima ";
                }
                ?></option>
                  <option value="0">Belum Di Terima</option>
                  <option value="1">Sudah Di Terima</option>
                </select>
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
   