<div class="container">
    <div style="margin-top: 60px;">
        <form action="<?= base_url('toko/tambahDataToko'); ?>" method="post">
            <div class="form-group row">
                <label for="namaJamu" class="col-sm-2 col-form-label">Nama Toko</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaJamu" name="nama">
                </div>
                <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input class="form-control" name="lokasi" id="exampleFormControlTextarea1" rows="3">
                </div>
                <?= form_error('lokasi', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea2" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>
                <?= form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">jam Kerja</label>
                <div class="col-sm-10">
                    <input type="text" name="jam_kerja" class="form-control" id="harga">
                </div>
                <?= form_error('jam_kerja', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div> -->
                    <input type="text" class="form-control" id="gambar" name="gambar">
                </div>
                <?= form_error('gambar', '<div class="text-small text-danger">', '</div>') ?>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>