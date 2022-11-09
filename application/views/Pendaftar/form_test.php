<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Test Seleksi Peserta Didik Baru</h1>
    </div>
  </section>
  <section class="section">
    <div class="col-md-12">
      <form method="post" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data">
              

                  <div class="form-grup">
                    <label>1. APA itu HTML</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                  </div>


                  <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                  <button type="reset" class="btn btn-danger mt-4">Reset</button>
              
              </form>
    </div>

  </section>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seleksi Masuk SMK Barunawati</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda sudah yakin?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>