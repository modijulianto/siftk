<?= $this->extend('Front/layout'); ?>
<?= $this->section('content'); ?>
<!-- Tentang Kami =========================================== -->
<section class="beasiswa section-sm bg-beasiswa overly">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <br><br>
                <h2>SEMINAR</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Tentang Kami ======================================== -->
<section class="section bg-1">
    <div class="container">
        <div class="row">
            <div class=" details col-lg-12 text-center">
                <h1><?= $berita['judul_berita']; ?></h1>
                <br>
                <ul class="list-inline mb-50">
                    <li class="list-inline-item">Divisi Media Informasi</li>
                    <li class="list-inline-item"><?= date('F d, Y', strtotime($berita['created_at'])); ?></li>
                </ul>
                <br>
                <div class="detail">
                    <img src="/upload/berita/<?= $berita['cover']; ?>" alt="blog-image">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="details valigndet col-lg-8 text-justify">
                    <?= $berita['isi_berita']; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>