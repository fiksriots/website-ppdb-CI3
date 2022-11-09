<div class="main-content">
  <section class="section">
    <div class="col-md-12">
      <div><?php echo $this->session->flashdata('msg'); ?><div>
      
        <div class="card mt-4 mb-3 ml-3 mr-3">
          <div class="card-header">
            Test Seleksi Peserta Didik Baru (Jawablah Pertanyaan dibawah ini dengan benar)
          </div>
        <?php
        $urut=0;
        foreach ($ujian as $row) {
            //$no++;
            $id=$row->id_soal;
            $pertanyaan=$row->soal;
            $pilihan_a=$row->a;
            $pilihan_b=$row->b;
            $pilihan_c=$row->c;
            $pilihan_d=$row->d;
            $pilihan_e=$row->e; 
      ?>
        
          <div class="card-body">
            <form name="form1" method="post" action="<?php echo base_url()?>pendaftar/ujian/jawab/">
              <input type="hidden" name="id[]" value=<?php echo $id; ?>>
              <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
              <table>
                <div class="card">
              <div class="card-header">
                Nomor <?php echo  $urut=$urut+1; ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo "$pertanyaan"; ?></h5>
                <?php
                  if (!empty($row->gambar)) {
                      echo "<tr><td></td><td><img src='foto/$row->gambar' width='200' hight='200'></td></tr>";
                  }
                ?>
                <div class="row">
                  <div class="col-md-2">
                    <font color="#000000">
                       A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
                        <?php echo "$pilihan_a";?>
                    </font>
                  </div>
                  <div class="col-md-2">
                    <font color="#000000">
                       B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
                        <?php echo "$pilihan_b";?>
                    </font>
                  </div>
                  <div class="col-md-2">
                    <font color="#000000">
                C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
                  <?php echo "$pilihan_c";?></font>
                  </div>
                  <div class="col-md-2">
                    <font color="#000000">
                D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
                  <?php echo "$pilihan_d";?></font>
                  </div>
                  <div class="col-md-2">
                    <font color="#000000">
                E.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
                  <?php echo "$pilihan_e";?></font>
                  </div>
                </div>
              </div>
            </div>
            
        <?php } ?>
              <tr>
                  <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
              </tr>
              </table>
            </form>

            
          </div>
        </div>


      </div>  
    </div>
  </section>
</div>