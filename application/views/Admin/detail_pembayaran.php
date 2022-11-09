<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Detail Data Pembayaran</h6>
                                </div>
                                <div class="card-body">
    <?php foreach ($detail as $dt) : ?>
          <div class="card">
               <div class="card-body">
                    <div class="row">
                         <div class="col-md-5">
                              <img style="width: 100%"src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>">
                         </div>
                         <div class="col-md-7">
                            <div class="form-grup">
                              <label>Status</label>
                              <select name="status" class="form-control">
                                <option <?php if($mb->status == "1"){echo "selected='selected'";}echo $mb->status; ?> value="1">Terverifikasi
                                </option>
                                <option <?php if($mb->status == "0"){echo "selected='selected'";}echo $mb->status; ?> value="0">Belum Terverifikasi
                                </option>
                              </select>
                              <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                            </div>
                              <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_mobil') ?>">Back</a>
                              <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>">Update</a>
                         </div>
                    </div>
               </div>
          </div>
    <?php endforeach; ?>
    </div>
</div></div>
