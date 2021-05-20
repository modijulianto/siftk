<?= $this->extend('Admin/layout'); ?>

<?= $this->section('content'); ?>
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd" style="margin-bottom: 50px;">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">DATA</span> ADMIN</h1>
                        </div>
                        <button type="button" data-toggle="modal" data-target="#modalAdmin" class="btn btn-custon-rounded-four btn-primary tombolTambahAdmin" style="float:right;"><i class="fa fa-plus edu-informatio" aria-hidden="true"></i>&ensp; Tambah Data Admin</button>
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
                                        <th data-field="name">Nama Admin</th>
                                        <th data-field="email">Email</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($admin as $row) { ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $row['nama_user']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td class="datatable-ct">
                                                <button type="button" class="btn btn-primary tombolUbahAdmin" data-id="<?= $row['id_user']; ?>" data-toggle="modal" data-target="#modalAdmin"><i class="fa fa-pencil" style="color: white;"></i></button>
                                                <button href="/Admin/delete/<?= md5($row['id_user']) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash" style="color: white;"></i></button>
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

<div id="modalAdmin" class="modal modal-edu-general default-popup-PrimaryModal modal-zoomInDown fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Tambah Data Admin</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <div class="modal-login-form-inner">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="basic-login-inner modal-basic-inner">
                                <form action="/Admin/save" method="POST">
                                    <input type="hidden" id="id" name="id">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Nama</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan nama user" value="<?= old('nama'); ?>" />
                                                <font color="red"><?= $validation->getError('nama'); ?></font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Email</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="email" name="email" id="email" class="form-control" required placeholder="Masukkan email user" value="<?= old('email'); ?>" />
                                                <font color="red"><?= $validation->getError('email'); ?></font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-password">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <label class="login2">Password</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkann password user" />
                                                    <font color="red"><?= $validation->getError('password'); ?></font>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <label class="login2">Retype Password</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <input type="password" name="retypePassword" id="retypePassword" class="form-control" placeholder="Masukkann ulang password user" />
                                                    <font color="red"><?= $validation->getError('retypePassword'); ?></font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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