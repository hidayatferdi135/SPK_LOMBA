       <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Data Siswa
                                        <div class="page-title-subheading">DATA SISWA DI MTS AL-MUJAHIDIN
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
                                        <i class="pe-7s-rocket fa-2x icon-gradient bg-mean-fruit mr-2"> </i>Edit Siswa
                                    </div>
                                    <div class="container my-4">
                                        <?php foreach ($siswa as $s): ?>
                                            <form action="<?= base_url('admin/update_siswa') ?>" method="post">
                                                <input type="hidden" name="id_siswa" value="<?= $s['id_siswa'] ?>">
                                                <div class="form-group">
                                                    <label for="">NIS</label>
                                                    <input type="text" class="form-control" value="<?= $s['nis'] ?>" name="nis">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama Siswa</label>
                                                    <input type="text" class="form-control" value="<?= $s['nama_siswa'] ?>" name="nama_siswa">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tempat, Tanggal Lahir</label>
                                                    <input type="text" class="form-control" value="<?= $s['ttl'] ?>" name="ttl">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <select name="jenis_kelamin" class="form-control">
                                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                                        <option <?php if($s['jenis_kelamin'] == 1){echo "selected";} ?> value="1">Laki Laki</option>
                                                        <option <?php if($s['jenis_kelamin'] == 2){echo "selected";} ?> value="2">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Kelas</label>
                                                    <input type="text" class="form-control" value="<?= $s['kelas'] ?>" name="kelas">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Rombel</label>
                                                    <input type="text" class="form-control" value="<?= $s['rombel'] ?>" name="rombel">
                                                </div>
                                                <input type="submit" value="Simpan" class="btn btn-success btn-black">
                                            </form>
                                        <?php endforeach ?>
                                    </div>
                                    <!-- <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    