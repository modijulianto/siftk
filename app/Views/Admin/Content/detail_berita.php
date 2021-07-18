<?= $this->extend('Admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
        <div class="tab-content-details shadow-reset">
            <div class="text-right">
                <a href="/Berita/update/<?= $berita['id_berita']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i>&ensp; UBAH</a>
                <a href="/Berita/delete/<?= $berita['id_berita']; ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash" style="color: white;"></i>&ensp; HAPUS</a>
            </div>
            <div class="text-left">
                <h1><?= $berita['judul_berita']; ?></h1>
                <h5>Kategori : <?= $berita['nama_kategori_berita']; ?></h5>
                Dibuat pada <?= date('d F Y H.i.s', strtotime($berita['created_at'])); ?>
            </div>
            <?= $berita['isi_berita']; ?>
            <br>
            <hr>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>