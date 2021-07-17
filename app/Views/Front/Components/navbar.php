<!-- Fixed Navigation ==================================== -->
<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <!-- /responsive nav button -->
        </div>
        <!-- Menu nav -->
        <?php $request = \Config\Services::request(); ?>
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <?php if ($request->uri->getSegment(1) == "") { ?>
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#body">Beranda</a></li>
                    <li><a href="#visi">Visi & Misi</a></li>
                    <li><a href="#footer">Sampaikan Aspirasimu</a></li>
                </ul>
            <?php } else { ?>
                <ul class="nav navbar-nav">
                    <li><a href="/">Beranda</a></li>
                </ul>
            <?php } ?>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Susunan Kepengurusan <span class="fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/pengurus_inti">Pengurus Inti</a></li>
                        <li><a href="/pendidikan_penalaran">Pendidikan & Penalaran</a></li>
                        <li><a href="/psdm">PSDM</a></li>
                        <li><a href="/kerumahtanggaan">Kerumahtanggan</a></li>
                        <li><a href="/sosmas">Sosial Masyarakat</a></li>
                    </ul>
                </li>
                <li><a href="/berkas">Dokumentasi Berkas</a></li>
            </ul>


        </nav>
        <!-- /Menu nav -->
    </div>
</header>
<!--End Fixed Navigation ==================================== -->