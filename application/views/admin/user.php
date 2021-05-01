       <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Data User
                                        <div class="page-title-subheading">DATA USER SPK LOMBA
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <!-- <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button> -->
                                    <!-- <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>    </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="pe-7s-rocket fa-2x icon-gradient bg-mean-fruit mr-2"> </i>Tabel User
                                        <a href="<?= base_url('admin/tambah_user') ?>" class="btn btn-success ml-auto">+ Tambah User</a>
                                    </div>
                                    <div class="table-responsive my-4">
                                        <table class="table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">No Induk</th>
                                                <th class="text-center">Username</th>
                                                <th class="text-center">Nama User</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Jabatan</th>
                                                <th class="text-center">Akses</th>
                                                <!-- <th class="text-center">Aksi</th> -->
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach ($data_user as $u): ?>
                                                    <tr class="text-center">
                                                        <td><?= $no ?></td>
                                                        <td><?= $u['no_induk'] ?></td>
                                                        <td><?= $u['username'] ?></td>
                                                        <td><?= $u['nama_user'] ?></td>
                                                        <td><?= $u['email'] ?></td>
                                                        <td>
                                                            <?php if ($u['jabatan'] == 1): ?>
                                                                <span class="badge badge-primary">Admin</span>
                                                            <?php endif ?>
                                                            <?php if ($u['jabatan'] == 2): ?>
                                                                <span class="badge badge-warning">Pegawai</span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td><span class="badge badge-success"><?= $u['akses'] ?></span></td>
                                                    </tr>
                                                <?php $no++; endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    