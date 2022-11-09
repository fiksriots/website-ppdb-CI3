<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tabel Pembayaran</h6>

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Jurusan</th>
									<th>Harga Formulir</th>
									<th>Uang Pangkal</th>
									<th>SPP</th>
									<th>DPPS</th>
									<th>Total</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Jurusan</th>
									<th>Harga Formulir</th>
									<th>Uang Pangkal</th>
									<th>SPP</th>
									<th>DPPS</th>
									<th>Total</th>
								</tr>
							</tfoot>
							<tbody>
								<?php $no = 1;
								foreach ($info_pembayaran as $cs) : ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $cs->jurusan ?></td>
										<td>Rp.
											<?php
											echo number_format($cs->harga_formulir, 0, ',', '.')
											?>
										</td>
										<td>Rp.
											<?php
											echo number_format($cs->uang_pangkal, 0, ',', '.')
											?>
										</td>
										<td>Rp.
											<?php
											echo number_format($cs->spp, 0, ',', '.')
											?>
										</td>
										<td>Rp.
											<?php
											echo number_format($cs->dpps, 0, ',', '.')
											?>
										</td>
										<td>
											Rp.
											<?php
											echo number_format($cs->uang_pangkal + $cs->harga_formulir + $cs->spp + $cs->dpps, 0, ',', '.')
											?>
										</td>

									</tr>

								<?php endforeach; ?>


							</tbody>
						</table>
					</div>
				</div>






				<div class="card-body">
					<p class="text-success">Pembayaran dapat dilakukan secara Transfer ke Nomer Rekening : Bank BNI 0198216446 An Yayasan Barunawati Biru Surabaya</p>
					<?php
					$buk = $this->session->userdata('bukti_pembayaran');
					$st = $this->session->userdata('status');
					if (empty($buk)) { ?>

						<!-- Button trigger modal -->
						<button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
							Upload Bukti Pembayaran
						</button>

					<?php } elseif ($st == 0) { ?>
						<button style="width: 100%" class="btn btn-sm btn-warning"><i class="fa fa-clock-o"></i>Menunggu Konfirmasi <br> silahkan menunggu 1 x 24 jam</button>
						<span></span>
					<?php } else { ?>
						<button style="width: 100%" class="btn btn-sm btn-success"><i class="fa fa-check"></i>Pembayaran Selesai</button>

					<?php } ?>
				</div>

			</div>
		</div>

	</div>






	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- <form method="POST"> -->
				<?php echo form_open_multipart('Pendaftar/pembayaran/pembayaran_aksi'); ?>
				<div class="modal-body">
					<div class="form-group">
						<label>Upload Bukti Pembayaran</label>
						<input type="file" name="bukti" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">SUBMIT</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>