<?= $this->extend('Home/layout'); ?>
<?= $this->section('content'); ?>
<!-- Tentang Kami =========================================== -->
<section class="beasiswa section-sm bg-beasiswa overly">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <br><br>
                <h2>BEASISWA</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Tentang Kami ======================================== -->
<div class="container">
    <div class="row">
        <br><br>
        <div class="col-md-12 text-left">
            <p class="pl-3"><i class="fa fa-info fa-lg"></i>&ensp; <b>INFORMASI SEPUTAR BEASISWA DI FTK UNDIKSHA</b></p>
            <hr style="border-color: #cb9b51; border-width: 2px;">
        </div>
        <div class="col-md-12"><br>
            <?php foreach ($beasiswa as $row) { ?>
                <div class="col-md-12 cardbeasiswa">
                    <div class="card col-md-2 position-relative">
                        <i class="fa fa-book text-center align-left" style="max-width: 200px; font-size: 50px; padding: 30px 20px 20px 20px;"></i>
                    </div>
                    <div class="card col-md-8 text-justify" style="padding: 40px 20px 20px 20px;">
                        <p><?= $row['nama_berkas']; ?></p>
                    </div>
                    <div class="card text-right wow fadeInUp" style="padding: 30px 20px 20px 20px;">
                        <a href="/upload/<?= $row['berkas']; ?>" download="<?= $row['berkas']; ?>" class="fa fa-download fa-lg btn2 btn2-main">&ensp;Unduh</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>