<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success mb-3">
				<?php
					$grand_total = 0;
					if($keranjang = $this->cart->contents())
					{
						foreach($keranjang as $item)
						{
							$grand_total = $grand_total + $item['subtotal'];
						}
						echo "Total Belanja anda: Rp. ".number_format($grand_total,0,',','.');
					
				  ?>
			</div>	
			
			<h5>input Alamat Pengiriman dan Pembayaran</h5>
			<form method="post" action="<?= base_url() ?>dashboard/proses_pesanan">
					
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" class="form-control" required>
					</div>
					<div class="form-group">
						<label>No. Hp</label>
						<input type="text" name="no_telpon" placeholder="Masukkan No. Hp Anda" class="form-control"required>
					</div>
					<div class="form-group">
						<label>Jasa Pengiriman</label>
						<select class="form-control">
							<option>JNE</option>
							<option>TIKI</option>
							<option>Pos Indonesia</option>
							<option>J&T</option>
						</select>
					</div>
					<div class="form-group">
						<label>Metode Pembayaran</label>
						<select class="form-control">
							<option>BRI</option>
							<option>BNI</option>
							<option>MANDIRI</option>
							<option>OVO</option>
							<option>DANA</option>
							<option>GOPAY</option>
						</select>
					</div>

					
					<button  name="pesan" id="pesan" type="submit" class="btn btn-sm btn-primary mb-3" >Checkout</button>

			</form>
					<?php 
				}else{
					echo "<h5>Anda Tidak Memiliki Pesanan";
				} 
				?>
		</div>

		<div class="col-md-2"></div>		
	</div>
</div>