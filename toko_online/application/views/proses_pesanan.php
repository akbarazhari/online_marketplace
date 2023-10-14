<div class="container-fluid">
	<div class="alert alert-success">
		<p class="text-center align-middle">Selamat Pesanan Anda Sedang di Proses </p>
	</div>
	<div>
		<h4>History Pembelian</h4>
		<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub Total</th>
			<th>Tanggal Pemesanan</th>
		</tr>
		
		<?php
		$no=1;
		 foreach($this->cart->contents() as $items): ?>

			<tr>
				<td><?= $no++; ?></td>
				<td><?= $items['name'] ?></td>
				<td><?= $items['qty'] ?></td>
				<td align="right">Rp. <?= number_format($items ['price'], 0,',','.')  ?></td>
				<td align="right"><?= number_format($items['subtotal'], 0,',','.')  ?></td>
				<td align="right"><?= date('d F Y'); ?></td>
			</tr>
			

		<?php endforeach; ?>
		<tr>
			<td colspan="5"></td>
				<td align="right">
					Rp. <?= number_format($this->cart->total(), 0,',','.') ?>
				</td>
			</tr> 
	</table>
	<div align="right">
		<a href="<?= base_url('dashboard/hapus_history') ?>">
			<div class="btn btn-sm btn-danger">Hapus Riwayat Pembelian</div>
		</a>
	</div>
	</div>
</div>