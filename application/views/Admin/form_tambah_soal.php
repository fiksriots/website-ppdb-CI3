<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Soal</h6>
                                </div>
                                <div class="card-body">
    <form method="post" action="<?php echo base_url('admin/data_soal/tambah_soal_aksi') ?> "enctype="multipart/form-data">
        <div class="card">
          <div class="card-body">
                 <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Soal</label>
                    <input type="text" name="soal" class="form-control">
                    <?php echo form_error('soal','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>A</label>
                    <input type="text" name="a" class="form-control">
                    <?php echo form_error('a','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>B</label>
                    <input type="text" name="b" class="form-control">
                    <?php echo form_error('b','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>C</label>
                    <input type="text" name="c" class="form-control">
                    <?php echo form_error('c','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>D</label>
                    <input type="text" name="d" class="form-control">
                    <?php echo form_error('d','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>E</label>
                    <input type="text" name="e" class="form-control">
                    <?php echo form_error('e','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>Kunci Jawaban</label>
                    <select class="form-control" name="knc_jawaban">
                        <option value="">--Pilih Kunci Jawaban--</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="e">E</option>
                    </select>
                    <?php echo form_error('knc_jawaban','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                     <select name="jurusan" class="form-control">
                            <option value="">--Pilih Jurusan--</option>
                            <?php foreach ($info_jurusan as $in) : ?>
                                 <option value="<?php echo $in->nama_jurusan ?>"><?php echo $in->nama_jurusan ?></option>
                            <?php endforeach; ?>
                       </select>
                </div>
                 <div class="form-group">
                    <label>Status Soal</label>
                    <select class="form-control" name="aktif">
                        <option value="">--Status Soal--</option>
                        <option value="Y">Aktif</option>
                        <option value="N">Tidak Aktif</option>
                    </select>
                    <?php echo form_error('aktif','<div class="text-small text-danger">','</div>') ?>
                </div>
                <div class="form-grup">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                    <?php echo form_error('gambar','<div class="text-small text-danger">','</div>') ?>
                </div>
            
                <button type="submit"  class="btn btn-sm btn-primary mt-4">SUBMIT</button>
                <button type="reset"  class="btn btn-sm btn-danger mt-4">RESET</button>
            </div>
        </div>
          </div>
        </div>
       
    </form>
</div>
</div></div>