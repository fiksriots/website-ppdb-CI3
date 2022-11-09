<!-- about section -->
<section class="about_section layout_padding">
  <div class="side_img">
    <img src="<?php echo base_url('assets/assets_frontend') ?>/images/side-img.png" alt="" />
  </div>
  <div id="about" class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img_container">
          <div class="img-box b1">
            <img src="<?php echo base_url('assets/assets_frontend') ?>/images/a-1.jpg" alt="" />
          </div>
          <div class="img-box b2">
            <img src="<?php echo base_url('assets/assets_frontend') ?>/images/a-2.jpg" alt="" />
          </div>
        </div>
      </div>
      <?php foreach ($info_sekolah as $sk) : ?>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h3>
              <?php echo $sk->Nama_sekolah; ?>
            </h3>
            <p>
              <?php echo $sk->motto; ?>
            </p>
            <a href="https://smk.ybbs-surabaya.id/">
              Read More
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- course section -->

<section class="course_section layout_padding-bottom">
  <div class="side_img">
    <img src="<?php echo base_url('assets/assets_frontend') ?>/images/side-img.png" alt="" />
  </div>
  <div id="course" class="container">
    <div class="heading_container">
      <h3>
        PANDUAN
      </h3>
      <!-- <p>
          Panduan tata cara mendaftar melalui PPDB Online.
        </p> -->
      <h5>
        1. Syarat Pendaftaran :
      </h5>
      <p>
        - Mengisi formulir. <br>
        - Menyerahkan Foto copy Ijazah SMP, 2 Lembar (dilegalisir). <br>
        - Menyerahkan Foto copy SKHUN, 2 Lembar (dilegalisir). <br>
        - Menyerahkan Pas foto 3x4 Hitam putih, 3 Lembar. <br>
        - Menyerahkan Foto copy KK, 2 Lembar. <br>
        - Menyerahkan Foto copy Akte kelahiran. <br>
        - Menyerahkan Foto copy KTP Orang Tua.
      </p>
      <h5>
        2. Pembayaran :
      </h5>
    </div>
    <div class="course_container">

      <div class="course_content">
        <div class="col-md-8">
          
            <div class="card-body">
              <table class="table table-striped table-responsive table-bordered ">
              <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Harga Formulir</th>
                <th>Uang Pangkal</th>
                <th>SPP</th>
                <th>DPPS</th>
                <th>Total</th>
              </tr>
              <?php $no = 1;
              foreach ($info_pembayaran as $cs) : ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $cs->jurusan ?></td>
                  <td>Rp.
                    <?php ;
                    echo number_format($cs->harga_formulir,0,',','.') 
                    ?>
                </td>
                <td>Rp.
                    <?php ;
                    echo number_format($cs->uang_pangkal,0,',','.') 
                    ?>
                </td>
                <td>Rp.
                    <?php ;
                    echo number_format($cs->spp,0,',','.') 
                    ?>
                </td>
                <td>Rp.
                    <?php ;
                    echo number_format($cs->dpps,0,',','.') 
                    ?>
                </td>
                <td>
                  Rp.
                    <?php ;
                    echo number_format($cs->uang_pangkal + $cs->harga_formulir +$cs->spp + $cs->dpps,0,',','.') 
                    ?>
                </td>
                </tr>
              <?php endforeach; ?>
            </table>
            </div>
        </div>
        <?php foreach($info_sekolah as $sk ): ?>
        <div class="col-md-4">
          <div class="card-body">
            <h6>
              Pembayaran dapat dilakukan secara transfer ke nomer rekening : <br>
              <b> <?php echo $sk->no_rek; ?> </b>
              
            </h6>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- end course section -->

<!-- login section -->

<section class="login_section event_section layout_padding">
  <div id="event" class="container">


    <div class="heading_container">
      <h3>
        GELOMBANG
      </h3>
      <p>
        Dibawah ini Pembagian Gelombang :
      </p>
    </div>
    
   
      <?php foreach($info_gelombang as $ig) : ?>
         
    <div class="event_container">
      <div class="box">
        
            <div class="detail-box">
            <h4>
              <?php echo $ig->gelombang; ?>
            </h4>
            <h6>
              <?php echo $ig->dari . '-'. $ig->sampai; ?>
            </h6>
          </div>
          </div>
        </div>
      
      
    
  <?php endforeach; ?>
  </div>
</section>

<!-- end login section -->

<!-- end contact section -->

<!-- info section -->
<section class="info_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="info_menu">
          <h5>
            QUICK LINKS
          </h5>
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about"> About </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#course"> Panduan </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#event"> Gelombang </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_course">

        </div>
      </div>
<?php foreach($info_sekolah as $sk ): ?>
      <div class="col-md-5 offset-md-1">
        <div class="info_news">
          <h5>
            CONTACT US
          </h5>
          <div class="info_contact">
            <a href="https://goo.gl/maps/BgRkBi4hwZTVeKcA9">
              Location
            </a>
            <a>
              <?php echo $sk->email; ?>
            </a>
            <a>
              Call : <?php echo $sk->no_telp; ?>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->

<!-- footer section -->
<footer class="container-fluid footer_section">
  <p>
    &copy; 2021 All Rights Reserved By
    <a href="https://smk.ybbs-surabaya.id/"><?php echo $sk->Nama_sekolah; ?></a>
  </p>
</footer>
<!-- footer section -->
<?php endforeach; ?>
<script type="text/javascript" src="<?php echo base_url('assets/assets_frontend') ?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/assets_frontend') ?>/js/bootstrap.js"></script>

</body>

</html>