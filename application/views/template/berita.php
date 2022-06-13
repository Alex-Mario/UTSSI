<section class="container">
    <?php foreach ($data as $berita) { ?>
        <div class="row mb-3">
            <div class="col-sm-6">
                <h1><?= $berita["judul"] ?></h1>
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-end" style="gap:10px;">
                <small><?= $berita["nama"] ?> | <?= $berita["tgl"] ?></small>
                <img src=" https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" style="width:48px; height:48px;" class="rounded-circle border">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="<?= base_url() ?>assets/gambar/<?= $berita['gambar'] ?>" alt="" class="w-100 mb-3" style="height: 70vh;">
            </div>
        </div>
        <div class="row container">
            <?= $berita['isi'] ?>
        </div>
    <?php }  ?>
</section>