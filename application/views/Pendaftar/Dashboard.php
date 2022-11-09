
  <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
</div>

<!-- Content Row -->
<div class="row">

	<div class="col-md-6">
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Jurusan</th>
		      <th scope="col">Kuota Jurusan</th>
		      <th scope="col">Siswa yang sudah mendaftar</th>
		    </tr>
		  </thead>
		  <tbody>
		   <?php $no = 1;
				foreach ($info_jurusan as $cs) : ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $cs->nama_jurusan ?></td>
				        <td><?php echo $cs->kuota_siswa ?></td>
				        <td><?php echo $cs->siswa_mendaftar ?></td>
					</tr>

				<?php endforeach; ?>
		  </tbody>
		</table>
	</div>
	<div class="col-md-6">
  	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Syarat pendaftaran :</h5>
		</div>
		<div class="card-body">
			Berkas-berkas yang di kumpulkan
			<div class="card">
				<ul class="list-group list-group-flush">
					<li class="list-group-item">1. Mengisi Formulir (harus upload bukti pembayaran formulir dulu) 
						<?php 
						$buk =$this->session->userdata('bukti_pembayaran');
						$st =$this->session->userdata('status');
						if(empty($buk)) { ?>
							
							<a href="<?php echo base_url('pendaftar/Pembayaran') ?>" style="float: right;" class="btn btn-success btn-sm"><i class="far fa-money-bill-alt"></i> Bayar</a>
						<?php } elseif($st == 0) {?>
							<a style="float: right;" class="btn btn-warning btn-sm"><i class="fa fa-clock-o"></i>Menunggu Konfirmasi</a>
						<?php } else{?>
							<button style="width: 100%" class="btn btn-sm btn-success"><i class="fa fa-check"></i>Pembayaran Selesai</button>
						
						<?php } ?>
						
					</li>
					<li class="list-group-item">2. Menyerahkan Foto copy Ijazah SMP asal sebanyak 2 lembar (dilegalisir)</li>
					<li class="list-group-item">3. Menyerahkan Foto copy Surat Keterangan Hasil Ujian Nasional (SKHUN), 2 lembar ( dilegalisir )</li>
					<li class="list-group-item">4. Menyerahkan Pas foto ukuran 3x4 (3 lembar) Hitam Putih</li>
					<li class="list-group-item">5. Menyerahkan Foto copy KK (2 lembar)</li>
					<li class="list-group-item">6. Menyerahkan Foto copy Akte kelahiran</li>
					<li class="list-group-item">7. Menyerahkan Foto copy KTP Orang Tua</li>
				</ul>
				<div class="card-footer">

				</div>
			</div>
		</div>
	</div>
  </div>
  </div>
  

    

    

   
</div>



<!-- <div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1 class="text-left mr-4">Selamat Datang di Pendaftaran Siswa Baru SMK Barunawati |</h1>
			<h1 class=" text-right" 	>No. Pendaftaran : <?php $id=$this->session->userdata('id_akun'); echo $id; ?></h1>
		</div>
	</section>
	<section class="section">
		<div class="row">
			<div class="col-md-12">
				<?php 
				$pembayaran=$this->session->userdata('status'); 
				if($pembayaran == '1'){
				?>	
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <i class="fas fa-bell"></i> <strong>Notifikasi</strong> Pembayaran Berhasil Diverifikasi.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php }elseif($pembayaran == '0'){ ?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <i class="fas fa-bell"></i> <strong>Notifikasi</strong> Pembayaran Belum Diverifikasi.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php }elseif($pembayaran == '2'){ ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <i class="fas fa-bell"></i> <strong>Notifikasi</strong> Pembayaran Belum Diverifikasi,Upload Ulang Bukti Pembayaran.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php } ?>
			</div>	
		</div>
		
		<div class="row">
			<div class="col-md-8">
				
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="card">
							<ul class="list-group list-group-flush">
								<h5 class="card-title">Daftar Jurusan :</h5>
								<li class="list-group-item">1. Akuntansi</li>
								<li class="list-group-item">2. Perhotelan </li>
								<li class="list-group-item">3. Teknik Komputer & Jaringan</li>
								<li class="list-group-item">4. Multimedia</li>
								<li class="list-group-item">5. Tata Boga</li>
								<li class="list-group-item">6. Otomatisasi dan Tata Kelola Perkantoran</li>
							</ul>
						</div>

					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="card">
							<ul class="list-group list-group-flush">
								<h5 class="card-title">Contact Person :</h5>
								<li class="list-group-item">Bu Indarti <a href="#" style="float: right;" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i> 081234063532</a></li>
								<li class="list-group-item">Bu Indira <a href="#" style="float: right;" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i> 082331638941</a></li>
								<li class="list-group-item">Bu Nurul <a href="#" style="float: right;" class="btn btn-success btn-sm me-md-2"><i class="fab fa-whatsapp"></i> 085745175324</a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</div> -->