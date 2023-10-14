<div class="container-fluid">
    
    
    <div class="row text-center">
        <?php foreach($barang as $brg): ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
              <img src="<?= base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title mb-1"><?= $brg->nama_brg ?></h5>
                <small><?= $brg->keterangan?></small><br>
                <span class="badge badge-pill badge-success text-white mb-3">Rp. <?= number_format($brg->harga, 0,',','.') ?></span>
                <?= anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg,'<div class="btn btn-primary btn-sm mb-2">Tambah ke Keranjang </div>' ) ?>
                <a href="#" class="btn btn-sn btn-success">Detail</a>
              </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>