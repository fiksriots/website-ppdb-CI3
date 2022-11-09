<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Test Seleksi Peserta Didik Baru</h1>
    </div>
  </section>
  <section class="section">
    <div class="col-md-12">
      <div><?php echo $this->session->flashdata('msg'); ?></div>
      <div class="card">
        <div class="card-body">
          <form>
            <?php 
            echo "Jawaban Benar ".$benar."<br>";
            echo "Jawaban Salah ".$salah."<br>";
            echo "Jawaban Kosong ".$kosong."<br>";
            echo "Score ".$score."<br>";
            ?>
          </form>
        </div>
      </div>  
    </div>
  </section>
</div>