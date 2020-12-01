<div class="container">
    <a class="btn text-white" style="margin-top: 65px; background-color: #3ee228;" href="<?= base_url('jamu/tambahJamu') ?>">Tambah</a>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($data as $i) : ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $i['nama']; ?></td>
                    <td><?= $i['deskripsi']; ?></td>
                    <td><?= $i['harga']; ?></td>
                    <td>
                        <a href="<?= base_url('jamu/editJamu/' . $i['id']) ?>" class="badge badge-success">Edit</a> |
                        <a href="<?= base_url('jamu/hapusJamu/' . $i['id']) ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>