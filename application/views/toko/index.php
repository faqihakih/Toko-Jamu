<script>
    $(document).ready(function() {

        $("#tombol").click(function() {
            $("#box").toggle(300);
        })

    });
</script>
<style>
    #box {
        margin-bottom: 100px;
    }
</style>


<button id="tombol" class="btn btn-dark" style="margin-top: 100px;">Hide/Show</button>
<br><br>
<div id="box">
    <?php foreach ($data as $i) : ?>
        <div class="media container" style="margin-top: 65px;">
            <img src="<?= base_url('assets/img/') . $i['gambar']; ?>" class="align-self-center mr-3" width="40%" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Nama : <?= $i['nama']; ?></h5>
                <p>Lokasi : <?= $i['lokasi']; ?></p>
                <p class="mb-0">Jam Kerja : <?= $i['jam_kerja']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>