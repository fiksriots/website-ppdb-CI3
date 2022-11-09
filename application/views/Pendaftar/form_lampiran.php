<div class="main-content">
    
    <?php echo form_open_multipart('pendaftar/form_lampiran/tambah_lampiran_aksi'); ?>
    <!-- <form method="post" action="<?php //echo base_url('pendaftar/form_pendaftaran/tambah_data_aksi') ?>"> -->
        
        <div class="card ml-3 mr-3 mb-3 mt-4">
            <div class="card-header">
            Data Lampiran
          </div>
            <div class="card-body col-md-12">
                <!-- data diri -->
                <div class="form-grup">
                    <label>Lampiran KK</label>
                    <input type="file" name="gambarkk" class="form-control">
                    <div class="ml-3 text-small text-danger">format filename (no.pendaftaran.jpg)</div>
                </div>
                <div class="form-grup">
                    <label>Lampiran AKTA</label>
                    <input type="file" name="gambarakta" class="form-control">
                    <div class="ml-3 text-small text-danger">format filename (no.pendaftaran.jpg)</div>
                </div>
            	<div class="form-grup">
                    <label>Lampiran KTP(orang tua)</label>
                    <input type="file" name="gambarktp" class="form-control">
                    <div class="ml-3 text-small text-danger">format filename (no.pendaftaran.jpg)</div>
                </div>
                <div class="form-grup">
                    <label>Lampiran Ijazah</label>
                    <input type="file" name="gambarijazah" class="form-control">
                    <div class="ml-3 text-small text-danger">format filename (no.pendaftaran.jpg)</div>
                </div>
                <div class="form-grup">
                    <label>Lampiran SKHU/Rapot</label>
                    <input type="file" name="gambarrapot" class="form-control">
                    <div class="ml-3 text-small text-danger">format filename (no.pendaftaran.jpg)</div>
                </div>
                <div class="form-grup">
                    <label>Lampiran KPS/BSM/KIP</label>
                    <input type="file" name="gambarbantuan" class="form-control">
                    <div class="ml-3 text-small text-danger">format filename (no.pendaftaran.jpg)</div>
                </div>
            	<button type="submit"  class="btn btn-sm btn-primary mt-4">SIMPAN DATA</button>
            	<button type="reset"  class="btn btn-sm btn-danger mt-4">RESET</button>
            </div>
    	</div>

    </form>
</div>
