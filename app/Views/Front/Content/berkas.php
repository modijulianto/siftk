<?= $this->extend('Front/layout'); ?>
<?= $this->section('content'); ?>
<!-- Tentang Kami =========================================== -->
<section class="beasiswa section-sm bg-beasiswa overly">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <br><br>
                <h2>DOKUMENTASI BERKAS</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Tentang Kami ======================================== -->
<section class="section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="cardsearch col-md-8 valigndet">
                    <h3 class="text-center">Cari berkas yang kamu perlukan disini.</h3>
                    <div class="d-flex justify-content-center px-5">
                        <form action="" method="get">
                            <div class="search">
                                <input type="text" class="search-input" placeholder="Cari..." name="cari">
                                <button type="submit" class="search-icon"> <i class="fa fa-search"></i> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-md-12 text-left">
                <p class="pl-3"><i class="fa fa-info fa-lg"></i>&ensp; <b><?= $judul; ?></b>
                </p>
                <hr style="border-color: #cb9b51; border-width: 2px;">
            </div>
            <?php foreach ($berkas as $row) { ?>
                <div class="col-md-12"><br>
                    <div class="col-md-12 cardbeasiswa">
                        <div class="card col-md-2 position-relative">
                            <i class="fa fa-file-text text-center align-left" style="max-width: 200px; font-size: 50px; padding: 30px 20px 20px 20px;"></i>
                        </div>
                        <div class="card col-md-8 text-justify" style="padding: 40px 20px 20px 20px;">
                            <p><?= $row['nama_berkas']; ?> </p>
                        </div>
                        <div class="card text-right wow fadeInUp" style="padding: 30px 20px 20px 20px;">
                            <a href="/upload/<?= $row['berkas']; ?>" download="<?= $row['berkas']; ?>" class="fa fa-download fa-lg btn2 btn2-main">&ensp;Unduh</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?= $pager->links('tb_berkas', 'berkas_pagination'); ?>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>