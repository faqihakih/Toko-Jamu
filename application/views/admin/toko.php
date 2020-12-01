<div class="container">
    <a class="btn text-white" style="margin-top: 65px; background-color: #3ee228;" href="<?= base_url('jamu/tambahJamu') ?>">Tambah</a>
    <table class="table mt-3" id="table-data">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Jam Kerja</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="tbody-data"></tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "<?php echo base_url() ?>toko/jsonGetAllData",
            async: true,
            dataType: 'json',
            success: function(data) {
                let html = '';
                for (i = 0; i < data.toko.length; i++) {
                    html += `
              <tr>
                <td>${i + 1}</td>
                <td>${data.toko[i].nama}</td>
                <td>${data.toko[i].lokasi}</td>
                <td>${data.toko[i].jam_kerja}</td>
                <td>
                <a href="<?= base_url() ?>jamu/editToko/${data.toko[i].id}" class="badge badge-success">Edit</a> |
                        <a href="<?= base_url() ?>jamu/hapusToko/${data.toko[i].id}" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                </td>
              </tr>
            `


                }

                $('#tbody-data').html(html)
                $('#table-data').dataTable({})
            }
        })
    })
</script>