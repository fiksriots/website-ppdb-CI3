<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('foto/') ?>logo.jpg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('register') ?>">
                 
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="text" class="form-control" name="email">
                      <?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input id="alamat" type="text" class="form-control" name="alamat">
                      <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                      <div class="invalid-feedback">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="gender" class="d-block">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="">--PILIH GENDER--</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                      <?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <label>Jurusan</label>
                      <?php echo form_error('asal_sekolah','<div class="text-small text-danger">','</div>') ?>
                       <select name="asal_sekolah" class="form-control">
                            <option value="">--Pilih Jurusan</option>
                            <?php foreach ($jurusan as $tp) : ?>
                                 <option value="<?php echo $tp->kode_jurusan ?>"><?php echo $tp->nama_jurusan ?></option>
                            <?php endforeach; ?>
                       </select>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control">
                      <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                    </div>
               
                 

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
                  Sudah Punya Akun? <a href="<?php echo base_url('auth/login') ?>">Login</a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>