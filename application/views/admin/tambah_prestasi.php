       <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Data Prestasi
                                        <div class="page-title-subheading">DATA PRESTASI DI MTS AL-MUJAHIDIN
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
                                        <i class="pe-7s-rocket fa-2x icon-gradient bg-mean-fruit mr-2"> </i>Edit Prestasi
                                    </div>
                                    <div class="container my-4">
                                            <form action="<?= base_url('admin/proses_add_prestasi') ?>" method="post">
                                                <div class="form-group">
                                                    <label for="">Nama Siswa</label>
                                                    <select name="id_siswa" class="form-control" id="">
                                                        <option value="">-- Pilih Siswa --</option>
                                                        <?php foreach ($siswa as $s): ?>
                                                            <option value="<?= $s['id_siswa'] ?>"><?= $s['nama_siswa'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Prestasi</label>
                                                    <input type="text" class="form-control" name="prestasi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Mapel</label>
                                                    <select name="mapel" class="form-control" id="">
                                                        <option value="">-- Pilih Mapel --</option>
                                                        <?php foreach ($pelajaran as $pel): ?>
                                                            <option value="<?= $pel['id_pelajaran'] ?>"><?= $pel['nama_pelajaran'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <input type="submit" value="Simpan" class="btn btn-success btn-black">
                                            </form>
                                    </div>
                                    <!-- <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    