
<div class="main-panel">
	<div class="content">
    	<div class="container-fluid">
			<h3>Data Buku</h3>
			<?php if($this->session->userdata('isAdmin') == 1):?>
			<a href="<?php echo base_url().'admin/tambah_buku'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Buku Baru </a>
			<?php endif; ?>
			<br><br>
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover" id="datatable-buku">
					<thead>
						<tr>
							<th>No</th>
							<th>Gambar</th>
							<th>Judul Buku</th>
							<th>Pengarang</th>
							<th>Penerbit</th>
							<th>Tahun Terbit</th>
							<th>ISBN</th>
							<th>Lokasi</th>
							<th>Status</th>
							<?php if($this->session->userdata('isAdmin') == 1):?>
							<th>Pilihan</th>
							<?php endif; ?>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($buku as $b) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><img src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" width="80" height="80" alt="Gambar Tidak Ada"></td>
							<td><?php echo $b->judul_buku ?></td>
							<td><?php echo $b->pengarang ?></td>
							<td><?php echo $b->penerbit ?></td>
							<td><?php echo $b->thn_terbit ?></td>
							<td><?php echo $b->isbn ?></td>
							<td><?php echo $b->lokasi ?></td>
							<td>
								<?php
								if ($b->status_buku == "1"){
									echo "Tersedia";
								}else if($b->status_buku == "0"){
									echo "Sedang Dipinjam";
								}
								?>
							</td>
							<?php if($this->session->userdata('isAdmin') == 1):?>
							<td nowrap="nowrap">
								<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_buku/'.$b->id_buku; ?>"><span class="fa fa-edit"></span></a>
								<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_buku/'.$b->id_buku; ?>"><span class="fa fa-trash"></span></a>
							</td>
							<?php endif; ?>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
