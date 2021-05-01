     <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <!-- <div class="logo-src"></div> -->
                        <img style="width: 60%" src="<?= base_url('assets/logo-dashboard.png') ?>">
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="<?= base_url('admin/index') ?>" class="mm-active">
                                        <i class="metismenu-icon pe-7s-culture"></i>
                                        Beranda
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">SPK</li>
                                <li>
                                    <a href="<?= base_url('admin/spk') ?>">
                                        <i class="metismenu-icon pe-7s-hourglass"></i>
                                        SPK
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Input Data</li>
                                <li>
                                    <a href="<?= base_url('admin/siswa') ?>">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Siswa
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/nilai') ?>">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        Nilai
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/prestasi') ?>">
                                        <i class="metismenu-icon pe-7s-medal"></i>
                                        Prestasi
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">User</li>
                                <li>
                                    <a href="<?= base_url('admin/user') ?>">
                                        <i class="metismenu-icon pe-7s-smile">
                                        </i>Data User
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>