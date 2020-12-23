<div class="container">
    <div style="margin-top: 60px;">
        <?php foreach ($toko as $t) : ?>
            <form action="<?= base_url('jamu/update'); ?>" method="post">
                <div class="form-group row">
                    <label for="namaJamu" class="col-sm-2 col-form-label">Nama Toko</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="namaJamu" name="id" value="<?= $t->id ?>">
                        <input type="text" class="form-control" id="namaJamu" name="namaJamu" value="<?= $t->nama ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" value=""><?= $t->lokasi ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label">alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="khasiat" id="exampleFormControlTextarea2" rows="3" value=""><?= $t->alamat ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Jam Kerja</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" class="form-control" id="harga" value="<?= $t->jam_kerja ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div> -->
                        <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $t->gambar ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
</div>