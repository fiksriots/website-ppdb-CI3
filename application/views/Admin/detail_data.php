<div class="container-fluid">
        
          
          <!-- DataTales Example -->
         <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Detail Data Pendaftar</h6>
                                </div>
                                <div class="card-body">

    <?php foreach ($detail as $dt) : ?>
          <div class="card">
               <div class="card-body">
                    <div class="row">
                         
                         <div class="col-md-6 mb-2">
                            <div class="card bg-light mb-2" >
                                <table class="table">
                                  <tr>
                                     <td><h6>Data Diri Siswa</h6></td>
                                   </tr>
                                </table>
                                <div class="row justify-content-center">
                                  <img src="<?php echo base_url().'foto/lampiran_foto/'.$dt->gambar ?>" style="width:50%" class=" img-thumbnail ">

                                     <!-- <img style="width: 100"src=""> -->
                                </div>
                                
                                   
                                    
                                 <table class="table">
                                  
                                   
                                   <tr>
                                    <td>Nama Lengkap</td>
                                    <td><?php echo $dt->nama_lengkap ?></td>
                                   </tr>
                                   <tr>
                                     <td>Gender </td>
                                     <td> <?php echo $dt->gender ?> </td>
                                   </tr>
                                   <tr>
                                     <td>NIK</td>
                                     <td> <?php echo $dt->nik ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Tempat lahir</td>
                                     <td> <?php echo $dt->tempat_lahir ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Tanggal lahir </td>
                                     <td> <?php echo $dt->tgl_lahir ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Agama</td>
                                     <td> <?php echo $dt->agama ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Minat jurusan</td>
                                     <td><?php echo $dt->minat_jurusan ?></td>
                                   </tr>
                                   <tr>
                                  <tr>
                                     <td>Penerima KPS/BSM/KIP</td>
                                     <td> <?php echo $dt->p_bantuan ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>Anak yatim/piatu/yatim piatu</td>
                                     <td> <?php echo $dt->status_anak ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>Hobi</td>
                                     <td> <?php echo $dt->hobi ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>Alamat</td>
                                     <td> <?php echo $dt->alamat ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>Nomor telepon</td>
                                     <td> <?php echo $dt->no_telp ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>Golongan darah</td>
                                     <td> <?php echo $dt->gol_darah ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>tinggi</td>
                                     <td> <?php echo $dt->tinggi ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>berat</td>
                                     <td> <?php echo $dt->berat ?> </td>
                                   </tr>
                                   <tr>
                                     <td>Status</td>
                                     <td>
                                       <?php 
                                          if($dt->status_pendaftaran=="0"){
                                            echo "<span class='badge badge-danger'>Belum Diterima</span>";
                                          }else{
                                            echo "<span class='badge badge-success'>Diterima</span>";
                                          }
                                        ?>
                                     </td>
                                   </tr>
                              </table>
                            </div>
                                   <!-- data sekolah  -->
                            <div class="card bg-light mb-2" >
                              <table class="table">
                                  <tr>
                                     <td><h6>Data Pendidikan Terakhir</h6></td>
                                   </tr>
                                    <tr>
                                     <td>nomor ijazah</td>
                                     <td> <?php echo $dt->no_ijazah ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>nomor skhun</td>
                                     <td> <?php echo $dt->no_skhun ?> </td>
                                   </tr>
                                   <tr>
                                    <tr>
                                     <td>nisn</td>
                                     <td> <?php echo $dt->nisn ?> </td>
                                   </tr>
                                   <tr>
                                     <td>asal sekolah</td>
                                     <td> <?php echo $dt->asal_sekolah ?> </td>
                                   </tr>
                              </table>
                            </div>
                         </div>
                         <div class="col-md-6 mb-2">
                                 <!-- data sekolah  -->
                            <div class="card bg-light mb-2" >
                              <table class="table">
                                  <tr>
                                 <td><h6>Data Ayah</h6></td>
                               </tr>
                                <tr>
                                 <td>nama</td>
                                 <td> <?php echo $dt->nama_ayah ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>tanggal lahir</td>
                                 <td> <?php echo $dt->tgl_lahir_ayah ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>Agama</td>
                                 <td> <?php echo $dt->agama_ayah ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>pendidikan</td>
                                 <td> <?php echo $dt->pendidikan_ayah ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>pekerjaan</td>
                                 <td> <?php echo $dt->pekerjaan_ayah ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>penghasilan</td>
                                 <td> <?php echo $dt->penghasilan_ayah ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>alamat</td>
                                 <td> <?php echo $dt->alamat_ayah ?> </td>
                               </tr>
                               <tr><tr>
                                 <td>nomor telepon</td>
                                 <td> <?php echo $dt->no_telp_ayah ?> </td>
                               </tr>
                               <tr>
                                 <td>Masih Hidup/Meninggal dunia</td>
                                 <td> <?php echo $dt->hidup_ayah ?> </td>
                               </tr>
                              </table>
                            </div>
                            <!-- data ibu -->
                          <div class="card bg-light mb-2" >
                           <table class="table">
                               <tr>
                                 <td><h6>Data Ibu</h6></td>
                               </tr>
                               <tr>
                                 <td>Nama</td>
                                 <td> <?php echo $dt->nama_ibu ?> </td>
                               </tr>
                               <tr>
                                 <td>tanggal lahir</td>
                                 <td> <?php echo $dt->tgl_lahir_ibu ?> </td>
                               </tr>
                               <tr>
                                 <td>pendidikan</td>
                                 <td> <?php echo $dt->pendidikan_ibu ?> </td>
                               </tr>
                               <tr>
                                 <td>pekerjaan</td>
                                 <td> <?php echo $dt->pekerjaan_ibu ?> </td>
                               </tr>
                               <tr>
                                 <td>penghasilan</td>
                                 <td> <?php echo $dt->penghasilan_ibu ?> </td>
                               </tr>
                               <tr>
                                 <td>alamat</td>
                                 <td> <?php echo $dt->alamat_ibu ?> </td>
                               </tr>
                               <tr>
                                 <td>nomor telepon</td>
                                 <td> <?php echo $dt->no_telp_ibu ?> </td>
                               </tr>
                               <tr>
                                 <td>Masih hidup / Meninggal dunia</td>
                                 <td> <?php echo $dt->hidup_ibu ?> </td>
                               </tr>
                              </table>
                            </div>
                            <div class="card bg-light mb-2" >
                              <table class="table">
                               <tr>
                                 <td><h6>Data Nilai</h6></td>
                               </tr>
                                <tr>
                                 <td>Bahasa Indonesia</td>
                                 <td> <?php echo $dt->nilai_b_indo ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>Matematika</td>
                                 <td> <?php echo $dt->nilai_mtk ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>Ilmu Pengetahuan Alam</td>
                                 <td> <?php echo $dt->nilai_ipa ?> </td>
                               </tr>
                               <tr>
                                <tr>
                                 <td>Bahasa Inggris</td>
                                 <td> <?php echo $dt->nilai_b_inggris ?> </td>
                               </tr>
                           </table>
                           </div>
                         </div>
                         <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_pendaftar') ?>">Back</a>
                    </div>
               </div>
          </div>
    <?php endforeach; ?>
    </div>
</div></div>

