<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Update Data</h1>
          </div>
    </section>
    <?php foreach ($data_diri as $cs) :?>
    <!-- <form method="post" action="<?php //echo base_url('pendaftar/form_pendaftaran/update_data_aksi') ?>"> -->
    <?php echo form_open_multipart('pendaftar/form_pendaftaran/update_data_aksi'); ?>
        <div class="row">

            <div class="col-md-12">
                <!-- data diri -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Diri</h5>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                            <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $cs->nama_lengkap ?>">
                            <?php echo form_error('nama_lengkap','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="alamat" class="form-control"value="<?php echo $cs->alamat ?>">
                                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Minat Jurusan</label>
                                <select class="form-control" name="minat_jurusan">
                                        <option value="<?php echo $cs->minat_jurusan ?>"><?php echo $cs->minat_jurusan ?></option>
                                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                        <option value="Multimedia">Multimedia</option>
                                        <option value="Perhotelan">Perhotelan</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Tata Boga">Tata Boga</option>
                                        <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                                </select>
                                    <?php echo form_error('minat_jurusan','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                    <?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                  <div class="form-group">
                                    <label>NIK</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="nik" class="form-control"value="<?php echo $cs->nik ?>">
                                    <?php echo form_error('nik','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select class="form-control" name="agama">
                                        <option value="<?php echo $cs->agama ?>"><?php echo $cs->agama ?></option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen katholik">Kristen Katholik</option>
                                        <option value="kristen protestan">Kristen Protestan</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                    <?php echo form_error('agama','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-grup col-md-12">
                                    <label>Foto</label><br>
                                    <a href="<?php echo base_url('pendaftar/form_pendaftaran/update_foto')?>" class="btn btn-warning">Ubah Gambar</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="tempat_lahir" class="form-control"value="<?php echo $cs->tempat_lahir ?>">
                                    <?php echo form_error('tempat_lahir','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $cs->tgl_lahir ?>">
                                    <?php echo form_error('tgl_lahir','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Penerima KPS/BSM/KIP</label>
                                <select class="form-control" name="p_bantuan">
                                        <option value="<?php echo $cs->p_bantuan ?>"><?php echo $cs->p_bantuan ?></option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                </select>
                                    <?php echo form_error('p_bantuan','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="col-md-3">
                                <label>Anak Yatim/Piatu/Yatim piatu</label>
                                <select class="form-control" name="status_anak">
                                        <option value="<?php echo $cs->status_anak ?>"><?php echo $cs->status_anak ?></option>
                                        <option value="yatim">Yatim</option>
                                        <option value="piatu">Piatu</option>
                                        <option value="yatim piatu">Yatim piatu</option>
                                        <option value="tidak">Tidak</option>
                                </select>
                                    <?php echo form_error('status_anak','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Hobby</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="hobi" class="form-control"value="<?php echo $cs->hobi ?>">
                                    <?php echo form_error('hobi','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="no_telp" class="form-control"value="<?php echo $cs->no_telp ?>">
                                    <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Golongan darah</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="gol_darah" class="form-control"value="<?php echo $cs->gol_darah ?>">
                                    <?php echo form_error('gol_darah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tinggi</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="tinggi" class="form-control"value="<?php echo $cs->tinggi ?>">
                                    <?php echo form_error('tinggi','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Berat</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="berat" class="form-control"value="<?php echo $cs->berat ?>">
                                    <?php echo form_error('berat','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            	<!-- data sekolah -->
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Keterangan Pendidikan</h5>
                     <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                <input type="text" name="nisn" class="form-control"value="<?php echo $cs->nisn ?>">
                                <?php echo form_error('nisn','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                                <label>Asal Sekolah</label>
                                <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                <input type="text" name="asal_sekolah" class="form-control"value="<?php echo $cs->asal_sekolah ?>">
                                <?php echo form_error('asal_sekolah','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>
                         <div class="col-md-3">
                           <div class="form-group">
                                <label>Nomor Ijazah</label>
                                <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                <input type="text" name="no_ijazah" class="form-control"value="<?php echo $cs->no_ijazah ?>">
                                <?php echo form_error('no_ijazah','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>
                         <div class="col-md-3">
                           <div class="form-group">
                                <label>Nomor SKHUN</label>
                                <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                <input type="text" name="no_skhun" class="form-control"value="<?php echo $cs->no_skhun ?>">
                                <?php echo form_error('no_skhun','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nilai B.Indonesia</label>
                                        <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                        <input type="text" name="nilai_b_indo" class="form-control"value="<?php echo $cs->nilai_b_indo ?>">
                                        <?php echo form_error('nilai_b_indo','<div class="text-small text-danger">','</div>') ?>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Nilai Matematika</label>
                                            <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                            <input type="text" name="nilai_mtk" class="form-control"value="<?php echo $cs->nilai_mtk ?>">
                                            <?php echo form_error('nilai_mtk','<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Nilai IPA</label>
                                            <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                            <input type="text" name="nilai_ipa" class="form-control"value="<?php echo $cs->nilai_ipa ?>">
                                            <?php echo form_error('nilai_ipa','<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">   
                                        <div class="form-group">
                                            <label>Nilai B.Inggris</label>
                                            <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                            <input type="text" name="nilai_b_inggris" class="form-control"value="<?php echo $cs->nilai_b_inggris?>">
                                            <?php echo form_error('nilai_b_inggris','<div class="text-small text-danger">','</div>') ?>
                                        </div>
                                    </div>
                        </div>
                  </div>
                </div>
               <!-- data ayah -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Orangtua</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="nama_ayah" class="form-control"value="<?php echo $cs->nama_ayah ?>">
                                    <?php echo form_error('nama_ayah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="nama_ibu" class="form-control"value="<?php echo $cs->nama_ibu ?>">
                                    <?php echo form_error('nama_ibu','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Alamat Ayah</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="alamat_ayah" class="form-control"value="<?php echo $cs->alamat_ayah ?>">
                                    <?php echo form_error('alamat_ayah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Alamat Ibu</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="alamat_ibu" class="form-control"value="<?php echo $cs->alamat_ibu ?>">
                                    <?php echo form_error('alamat_ibu','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select class="form-control" name="agama_ayah">
                                        <option value="<?php echo $cs->agama_ayah ?>"><?php echo $cs->agama_ayah ?></option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen katholik">Kristen Katholik</option>
                                        <option value="kristen protestan">Kristen Protestan</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                    <?php echo form_error('agama_ayah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pekerjaan Ayah</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="pekerjaan_ayah" class="form-control"value="<?php echo $cs->pekerjaan_ayah ?>">
                                    <?php echo form_error('pekerjaan_ayah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                               <div class="form-group">
                                    <label>Pekerjaan Ibu</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="pekerjaan_ibu" class="form-control"value="<?php echo $cs->pekerjaan_ibu ?>">
                                    <?php echo form_error('pekerjaan_ibu','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Penghasilan Ayah</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="penghasilan_ayah" class="form-control"value="<?php echo $cs->penghasilan_ayah ?>">
                                    <?php echo form_error('penghasilan_ayah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                               <div class="form-group">
                                    <label>Penghasilan Ibu</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="penghasilan_ibu" class="form-control"value="<?php echo $cs->penghasilan_ibu ?>">
                                    <?php echo form_error('penghasilan_ibu','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Lahir Ayah</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="date" name="tgl_lahir_ayah" class="form-control"value="<?php echo $cs->tgl_lahir_ayah ?>" >
                                    <?php echo form_error('tgl_lahir_ayah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Lahir Ibu</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="date" name="tgl_lahir_ibu" class="form-control" value="<?php echo $cs->tgl_lahir_ibu ?>">
                                    <?php echo form_error('tgl_lahir_ibu','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pendidikan Ayah</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="pendidikan_ayah" class="form-control"value="<?php echo $cs->pendidikan_ayah ?>">
                                    <?php echo form_error('pendidikan_ayah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                               <div class="form-group">
                                    <label>Pendidikan Ibu</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="pendidikan_ibu" class="form-control"value="<?php echo $cs->pendidikan_ibu ?>">
                                    <?php echo form_error('pendidikan_ibu','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nomor Telepon Ayah</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="no_telp_ayah" class="form-control"value="<?php echo $cs->no_telp_ayah ?>">
                                    <?php echo form_error('no_telp_ayah','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nomor Telepon Ibu</label>
                                    <input type="hidden" name="id_datadiri" value="<?php echo $cs->id_datadiri ?>">
                                    <input type="text" name="no_telp_ibu" class="form-control"value="<?php echo $cs->no_telp_ibu ?>">
                                    <?php echo form_error('no_telp_ibu','<div class="text-small text-danger">','</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Status Ayah</label>
                                <select class="form-control" name="hidup_ayah">
                                        <option value="<?php echo $cs->hidup_ayah ?>"><?php echo $cs->hidup_ayah ?></option>
                                        <option value="masih hidup">Masih Hidup</option>
                                        <option value="meninggal dunia">Meninggal Dunia</option>
                                </select>
                                    <?php echo form_error('hidup_ayah','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="col-md-3">
                                <label>Status Ibu</label>
                                <select class="form-control" name="hidup_ibu">
                                        <option value="<?php echo $cs->hidup_ibu ?>"><?php echo $cs->hidup_ibu ?></option>
                                        <option value="masih hidup">Masih Hidup</option>
                                        <option value="meninggal dunia">Meninggal Dunia</option>
                                </select>
                                    <?php echo form_error('hidup_ibu','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>
                    </div>
                </div>
            	
            	<button type="submit"  class="btn btn-sm btn-primary mt-4">SIMPAN DATA</button>
            	<button type="reset"  class="btn btn-sm btn-danger mt-4">RESET</button>
            </div>
    	</div>
    </form>
    <?php endforeach; ?>
</div>
