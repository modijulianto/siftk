<?= $this->extend('Admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd" style="margin-bottom: 50px;">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">DATA</span> BERKAS</h1>
                        </div>
                        <button type="button" data-toggle="modal" data-target="#modalBerkas" class="btn btn-custon-rounded-four btn-primary tombolTambahBerkas" style="float:right;"><i class="fa fa-plus edu-informatio" aria-hidden="true"></i>&ensp; Tambah Data Berkas</button>
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
                            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">No</th>
                                        <th data-field="name">Nama Berkas</th>
                                        <th data-field="unit">Unit</th>
                                        <th data-field="kategori_berkas">Kategori Berkas</th>
                                        <th data-field="tahun">Tahun</th>
                                        <th data-field="status">Status</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($berkas as $row) { ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $row['nama_berkas']; ?></td>
                                            <td><?= $row['nama_unit']; ?></td>
                                            <td><?= $row['nama_kategori_berkas']; ?></td>
                                            <td><?= $row['tahun']; ?></td>
                                            <td>
                                                <?php if ($row['status'] == 1) { ?>
                                                    <center><span class="label label-success">Berlaku</span></center>
                                                <?php } else { ?>
                                                    <center><span class="label label-danger">Tidak Berlaku</span></center>
                                                <?php } ?>
                                            </td>
                                            <td class="datatable-ct">
                                                <button type="button" class="btn btn-primary tombolUbahBerkas" data-id="<?= $row['id_berkas']; ?>" data-toggle="modal" data-target="#modalBerkas"><i class="fa fa-pencil" style="color: white;"></i></button>
                                                <button href="/Berkas/delete/<?= md5($row['id_berkas']) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash" style="color: white;"></i></button>
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
<div id="modalBerkas" class="modal modal-edu-general default-popup-PrimaryModal modal-zoomInDown fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Tambah Data Berkas</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <div class="modal-login-form-inner">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="basic-login-inner modal-basic-inner">
                                <form action="/Berkas/save" method="POST" enctype="multipart/form-data">
                                    <input type="text" id="id" name="id">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Unit Berkas</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="id_unit" id="id_unit">
                                                        <?php foreach ($unit as $row) { ?>
                                                            <option value="<?= $row['id_unit']; ?>"><?= $row['nama_unit']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <font color="red"><?= $validation->getError('id_unit'); ?></font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Kategori Berkas</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="id_kategori_berkas" id="id_kategori_berkas">
                                                        <?php foreach ($kat as $row) { ?>
                                                            <option value="<?= $row['id_kategori_berkas']; ?>"><?= $row['nama_kategori_berkas']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <font color="red"><?= $validation->getError('id_kategori_berkas'); ?></font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Nama Berkas</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan nama berkas" value="<?= old('nama'); ?>" />
                                                <font color="red"><?= $validation->getError('nama'); ?></font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Tahun</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="number" name="tahun" id="tahun" class="form-control" required required placeholder="Masukkan tahun" value="<?= old('tahun'); ?>" />
                                                <font color="red"><?= $validation->getError('tahun'); ?></font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Status</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="bt-df-checkbox pull-left">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="i-checks pull-left">
                                                                <label>
                                                                    <input type="radio" value="1" name="status" id="berlaku" checked> <i></i> Berlaku</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="i-checks pull-left">
                                                                <label>
                                                                    <input type="radio" value="0" name="status" id="tidak_berlaku"> <i></i> Tidak Berlaku</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <font color="red"><?= $validation->getError('status'); ?></font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Berkas</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="file" id="berkas" name="berkas" class="custom-file-input">
                                                <font color="red"><?= $validation->getError('berkas'); ?></font>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" name="berkas_lama" id="berkas_lama">
                                    <div class="login-btn-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="login-horizental">
                                                    <button class="btn btn-sm btn-primary login-submit-cs" id="tombolModal" type="submit">Tambah</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>