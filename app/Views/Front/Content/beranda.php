<?= $this->extend('Front/layout'); ?>
<?= $this->section('content'); ?>
<!--Home Slider ============================================= -->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators bullet -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- End Indicators bullet -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- single slide -->
            <div class="item active" style="background-image: url(/home/img/banner.png);">
                <div class="carousel-caption">
                    <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
                        <span>BADAN EKSEKUTIF MAHASISWA</span>
                    </h2>
                    <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><b>FAKULTAS TEKNIK DAN
                            KEJURUAN</b></h3>
                    <p data-wow-duration="1000ms" class="wow slideInRight animated"><b>UNIVERSITAS PENDIDIKAN
                            GANESHA</b></p>

                    <ul class="social-links text-center">
                        <li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-envelope fa-lg"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end single slide -->
            <!-- Next slide -->
            <!-- <div class="item" style="background-image: url(img/FTK.jpg);">
        <div class="carousel-caption">						
            <ul class="social-links text-center">
                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
            </ul>
        </div>
    </div> -->
            <!-- end Next slide -->
        </div>
        <!-- End Wrapper for slides -->
    </div>
</section>
<!--End Home Slider End ====================================== -->
<!-- Card Informasi  ========================================= -->
<section class="about section">
    <div class="container">
        <div class="row">
            <!-- About item -->
            <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="400ms">
                <div class="block">
                    <div class="icon-box">
                        <i class="fa fa-graduation-cap fa-lg"></i>
                    </div>
                    <div class="content text-center">
                        <br>
                        <h3><b>BEASISWA</b></h3>
                        <br>
                        <p>Informasi beasiswa FTK UNDIKSHA</p>
                        <br>
                        <br>
                        <a class="btn btn-transparent" href="/beasiswa">Read more</a>
                    </div>
                </div>
            </div>
            <!-- End About item -->
            <!-- About item -->
            <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                <div class="block">
                    <div class="icon-box">
                        <i class="fa fa-trophy fa-lg"></i>
                    </div>
                    <div class="content text-center">
                        <br>
                        <h3><b>PRESTASI</b></h3>
                        <br>
                        <p>Informasi prestasi FTK UNDIKSHA</p>
                        <br>
                        <br>
                        <a class="btn btn-transparent" href="/prestasi">Read more</a>
                    </div>
                </div>
            </div>
            <!-- End About item -->
            <!-- About item -->
            <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                <div class="block">
                    <div class="icon-box">
                        <i class="fa fa-university fa-lg"></i>
                    </div>
                    <div class="content text-center">
                        <br>
                        <h3><b>SEMINAR</b></h3>
                        <br>
                        <p>Seminar & Webinar FTK UNDIKSHA</p>
                        <br>
                        <br>
                        <a class="btn btn-transparent" href="/seminar">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Card Informasi  ========================================= -->
<!-- Tentang Kami ============================================ -->
<section class="call-to-action section-sm bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h2>TENTANG KAMI</h2>
                <br>
                <p> Badan Eksekutif Mahasiswa Fakultas Teknik dan Kejuruan merupakan organisasi mahasiswa intra
                    kampus yang bertanggung jawab untuk menerapkan hukum atau kebijakan lainnya yang berlaku pada
                    fakultas teknik dan kejuruan, undiksha.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Tentang Kami ======================================== -->
<!-- Visi & Misi ============================================= -->
<section id="visi" class="works clearfix bg-visi">
    <div class="container">
        <div class="row">
            <div class="sec-title text-center wow fadeInUp">
                <h2>VISI</h2>
                <div class="devider"><i class="fa fa-graduation-cap fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center">
                <p>Menjadi Fakultas <b>Unggul</b> di bidang Teknologi dan Kejuruan berlandaskan Falsafah <b>Tri Hita
                        Karana</b> di Asia pada Tahun <b>2045</b>.</p>
            </div>
            <div class="sec-title text-center wow fadeInUp">
                <h2>MISI</h2>
                <div class="devider"><i class="fa fa-graduation-cap fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-justify">
                <p>1. Menyelenggarakan pendidikan yang efektif di bidang Teknologi dan Kejuruan untuk mendukung
                    kemajuan dan pengembangan masyarakat yang berlandaskan Tri Hita Karana.</p>
                <br>
                <p>2. Menyelenggarakan penelitian sebagai wujud pengembangan keilmuan dan keterampilan di bidang
                    akademik, profesi dan vokasi yang berwawasan Tri Hita Karana.</p>
                <br>
                <p>3. Menyelenggarakan pengabdian kepada masyarakat sebagai implementasi dari hasil-hasil penelitian
                    dan pengkajian keilmuan dan keterampilan di bidang akademik, profesi dan vokasi yang berwawasan
                    Tri Hita Karana.</p>
                <br>
                <p>4. Menyelenggarakan kerjasama dengan para pemangku kepentingan dalam rangka pengembangan dan
                    peningkatan kualitas lembaga, fakultas, dan jurusan.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Visi & Misi ========================================== -->
<section id="lagas" class="bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12  wow fadeInUp">
                <form id="regForm" class="col-md-8 valign">
                    <h1 id="register">
                        <b>LAGAS!</b>
                        <br>
                        <p>LAGAS! LAporan teGAS merupakan sebuah platform untuk menampung segala aspirasi mahasiswa
                            FTK UNDIKSHA secara daring</p>
                    </h1>
                    <div class="all-steps" id="all-steps">
                        <span class="step"><i class="fa fa-user"></i></span>
                        <span class="step"><i class="fa fa-graduation-cap"></i></span>
                        <span class="step"><i class="fa fa-legal"></i></span>
                        <span class="step"><i class="fa fa-comment"></i>
                    </div>
                    <div class="tab">
                        <h6>Hi! Boleh Kenalan Ga? Siapa Namamu?</h6><br>
                        <p><input placeholder="Nama Lengkap" oninput="this.className = ''" name="fname" id="fname"></p>
                    </div>
                    <div class="tab">
                        <h6>NIM Kamu Berapa?</h6><br>
                        <p><input placeholder="Nomor Induk Mahasiswa" oninput="this.className = ''" name="nim" id="nim"></p>
                    </div>
                    <div class="tab">
                        <h6>Tentang Apa Keluhanmu?</h6><br>
                        <select name="pilih" class="form-control" id="pilih">
                            <option value="Perkuliahan">Perkuliahan</option>
                            <option value="Sarana & Prasarana">Sarana & Prasarana</option>
                            <option value="Event">Event</option>
                            <option value="Keuangan">Keuangan</option>
                        </select>
                    </div>
                    <div class="tab">
                        <h6>Ungkapkan Pendapatmu Disini.</h6><br>
                        <p>
                            <input class="form-control" oninput="this.className = ''" name="isi" rows="4" id="isi">
                        </p>
                    </div>
                    <div class="thanks-message text-center" id="text-message">
                        <img src="/home/img/logo(2).png" width="100" class="mb-4">
                        <h3>Terimakasih sudah menyampaikan aspirasi anda!</h3>
                        <span>Terimakasih atas informasi yang diberikan. Akan segera kami sampaikan aspirasi
                            anda.</span>
                    </div><br>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">
                                <i class="fa fa-angle-double-left"></i>
                            </button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">
                                <i class="fa fa-angle-double-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // $('#isi').on('change', function() {
    //     alert('awoakowkokaw')
    // });
</script>
<?= $this->endSection('content'); ?>