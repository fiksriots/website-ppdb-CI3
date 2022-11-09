<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Akun</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo base_url('admin/data_akun/tambah_akun_aksi') ?>">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                    <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                    <?php echo form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control">
                                    <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="">--Pilih Gender--</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                    <?php echo form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
                                </div>


                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" name="no_telp" class="form-control">
                                    <?php echo form_error('no_telp', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control">
                                    <?php echo form_error('jurusan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary mt-4">SUBMIT</button>
                                <button type="reset" class="btn btn-sm btn-danger mt-4">RESET</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>