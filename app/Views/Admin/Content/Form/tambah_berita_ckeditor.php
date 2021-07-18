<?= $this->extend('Admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd" style="margin-bottom: 50px;">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">TAMBAH</span> BERITA</h1>
                        </div>
                    </div>
                    <form action="/Berita/save" method="POST" enctype="multipart/form-data">
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label for="judul_berita" class="login2">Judul Berita</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <input type="text" name="judul_berita" id="judul_berita" class="form-control" required placeholder="Masukkan judul berita" value="<?= old('judul_berita'); ?>" />
                                    <font color="red"><?= $validation->getError('judul_berita'); ?></font>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label for="kategori" class="login2">Kategori Berita</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option value="">-- Pilih Kategori --</option>
                                        <?php foreach ($kat as $row) { ?>
                                            <option value="<?= $row['id_kategori_berita']; ?>"><?= $row['nama_kategori_berita']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <font color="red"><?= $validation->getError('kategori'); ?></font>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label for="isi_berita" class="login2">Isi Berita</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <textarea name="isi_berita" id="editor" class="form-control" placeholder="Masukkan isi berita" cols="30" rows="10"><?= old('isi_berita'); ?></textarea>
                                    <font color="red"><?= $validation->getError('isi_berita'); ?></font>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script language="JavaScript" type="text/javascript" src="/ckeditor5/ckeditor.js"></script>
<style>
    .ck-editor__editable_inline {
        min-height: 200px;
    }
</style>
<script>
    // import Indent from '/@ckeditor/ckeditor5-indent/src/indent';
    ClassicEditor
        .create(document.querySelector('#editor'), {
            // plugins: [Indent],
            // toolbar: ['indent'],
            ckfinder: {
                uploadUrl: "<?= base_url('Berita/upload_ckeditor') ?>"
            }
        })
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<?= $this->endSection(); ?>