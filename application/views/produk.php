<?php foreach ($data as $i) : ?>
    <div class="media container" style="margin-top: 65px;">
        <img src="<?= base_url('assets/img/') . $i['gambar']; ?>" class="align-self-center mr-3" width="40%" alt="...">
        <div class="media-body">
            <h5 class="mt-0">Nama : <?= $i['nama']; ?></h5>
            <p>Deskripsi : <?= $i['deskripsi']; ?></p>
            <p class="mb-0">Khasit : <?= $i['khasiat']; ?></p>
            <p class="mb-0">Harga : Rp <?= $i['harga']; ?></p>
        </div>
    </div>
<?php endforeach; ?>