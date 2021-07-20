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
<section id="blog" class="section">
    <div class="wow fadeInUp text-center"></div><br>
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <?php foreach ($seminar as $row) { ?>
                    <!-- single blog post -->
                    <article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
                        <div class="post-block hover">
                            <div class="media-wrapper">
                                <img src="/upload/berita/<?= $row['cover']; ?>" class="img-responsive">
                                <div class="card-date"><span><?= date('d', strtotime($row['tgl_dilaksanakan'])); ?></span><br><?= date('M', strtotime($row['tgl_dilaksanakan'])); ?></div>
                            </div>
                            <div class="content text-center">
                                <h3><b><?= $row['judul_berita']; ?></b></h3><br>
                                <p>Halo civitas biru dongker Badan Eksekutif Mahasiswa Fakultas Teknik dan Kejuruan dengan bangga mempersembahkan</p>
                                <br><br><a class="btn1" href="/detail/<?= md5($row['id_berita']); ?>">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- /single blog post -->
                <?php } ?>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<?= $this->endSection('content'); ?>