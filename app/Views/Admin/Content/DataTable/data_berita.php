<?= $this->extend('Admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd" style="margin-bottom: 50px;">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">DATA</span> BERITA</h1>
                        </div>
                        <a href="/Berita/tambah" type="button" class="btn btn-custon-rounded-four btn-primary" style="float:right;"><i class="fa fa-plus edu-informatio" aria-hidden="true"></i>&ensp; Tambah Data Berita</a>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <?php if (session()->getFlashdata('warning-msg')) { ?>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Perhatian!</strong> <?= session()->getFlashdata('warning-msg'); ?>
                                </div>
                            <?php } ?>
                            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">No</th>
                                        <th data-field="name">Judul Berita</th>
                                        <th data-field="kategori">Kategori Berita</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($berita as $row) { ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $row['judul_berita']; ?></td>
                                            <td><?= $row['nama_kategori_berita']; ?></td>
                                            <td class="datatable-ct">
                                                <a href="/Berita/detail/<?= $row['id_berita']; ?>" type="button" class="btn btn-info"><i class="fa fa-eye" style="color: white;"></i></a>
                                                <a href="/Berita/update/<?= $row['id_berita']; ?>" type="button" class="btn btn-primary"><i class="fa fa-pencil" style="color: white;"></i></a>
                                                <a href="/Berita/delete/<?= $row['id_berita']; ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash" style="color: white;"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>