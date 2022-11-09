<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Nilai</h1>
		</div>

		
		<?php echo $this->session->flashdata('pesan') ?>
		
		<div class="col-md-5">
			<div class="card">
			  <div class="card-body">
			    <table class="table table-striped table-responsive table-bordered">
					<tr>
						<th>No</th>
						<th>Nomor Pendaftaran</th>
						<th>Nilai Seleksi</th>
					</tr>
					<?php $no = 1;
					foreach ($detail as $cs) : ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $cs->id_akun ?></td>
							<td><?php echo $cs->ujian ?></td>
						</tr>

					<?php endforeach; ?>
				</table>
			  </div>
			</div>
		</div>
	</section>
</div>
		