<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Update Foto</h1>
          </div>
    </section>
    <?php foreach ($data_diri as $cs) :?>
    <!-- <form method="post" action="<?php //echo base_url('pendaftar/form_pendaftaran/update_data_aksi') ?>"> -->
    <?php echo form_open_multipart('pendaftar/form_pendaftaran/update_foto_aksi'); ?>
        <div class="row">

            <div class="col-md-12">
                <!-- data diri -->
               <div class="card">
                   <div class="row justify-content-center mt-3">
                        <img src="<?php echo base_url().'foto/lampiran_foto/'.$cs->gambar ?>" style="width:30%" class=" img-thumbnail ">
                    </div>
                    <div class="form-grup mt-3 ml-4 mb-4 mr-4">
                        <label>Ubah Foto</label>
                        <input type="file" name="gambarfoto" class="form-control">
                        <?php echo form_error('gambarfoto','<div class="text-small text-danger">','</div>') ?>
                    </div>
               </div>
            	
            	<button type="submit"  class="btn btn-sm btn-primary mt-4">Simpan</button>
            	<a href="<?php echo base_url('pendaftar/form_pendaftaran/update_data') ?>" class="btn btn-sm btn-danger mt-4">Back</a>
            </div>
    	</div>
    </form>
    <?php endforeach; ?>
</div>
