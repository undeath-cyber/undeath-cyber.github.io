<?php
$site                       = $this->konfigurasi_model->listing();
$site_nav                   = $this->konfigurasi_model->listing();
$nav_profil                 = $this->nav_model->nav_profil();
$nav_download               = $this->nav_model->nav_download();
$nav_berita                 = $this->nav_model->nav_berita();
$nav_agenda                 = $this->nav_model->nav_agenda();
$nav_layanan                = $this->nav_model->nav_layanan();
?>
<!-- Start Menu -->
<div class="bg-main-menu menu-scroll">
    <div class="container">
        <div class="row">
            <div class="main-menu">
                <a class="show-res-logo" href="<?php echo base_url() ?>"><img src="<?php echo $this->website->logo() ?>" alt="logo" class="img-responsive" style="max-height: 76px; width: auto;" /></a>
                <nav class="navbar">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h2 class="logo me-auto" style="margin-top: 30px;"><a href="index.html">Kelompok 3</a></h2>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <!-- home -->
                            <li><a href="<?php echo base_url() ?>" class="active">Profil</a></li>

                            <!-- berita -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile<span class="caret"></span></a>
                                <ul class="dropdown-menu sub-menu">
                                    <li><a href="#">Sejarah</a></li>
                                    <li><a href="#">Visi & Misi</a></li>
                                    <li><a href="#">Deskripsi Prodi</a></li>
                                    <li><a href="#">Kompetensi Lulusan</a></li>
                                    <li><a href="#">Contact Prodi</a></li>
                                    <li><a href="#">Pengelola Prodi</a></li>
                                </ul>
                            </li>

                            <!-- LAYANAN -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Konsentrasi<span class="caret"></span></a>
                                <ul class="dropdown-menu sub-menu">
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">2D Animation</a></li>
                                    <li><a href="#">Networking</a></li>
                                </ul>
                            </li>

                            <!-- PROFIL -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akademik<span class="caret"></span></a>
                                <ul class="dropdown-menu sub-menu">
                                    <li><a href="#">Kalender Akademik</a></li>
                                    <li><a href="#">Kurikulum</a></li>
                                    <li><a href="#">Buku Panduan</a></li>
                                    <li><a href="#">Simulasi Nilai</a></li>
                                    <li><a href="#">Panduan Pembayaran</a></li>
                                    <li><a href="#">KRS</a></li>
                                </ul>
                            </li>

                            <!-- galeri -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program<span class="caret"></span></a>
                                <ul class="dropdown-menu sub-menu">
                                    <li><a href="#">Magang Reguler</a></li>
                                    <li><a href="#">Magang MBKM</a></li>
                                    <li><a href="#">TA Non Reguler</a></li>
                                    <li><a href="#">TA Reguler</a></li>
                                </ul>
                            </li>


                            <!-- galeri -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RPS<span class="caret"></span></a>
                                <ul class="dropdown-menu sub-menu">
                                    <li><a href="#">Semester 1</a></li>
                                    <li><a href="#">Semester 2</a></li>
                                    <li><a href="#">Semester 3</a></li>
                                    <li><a href="#">Semester 4</a></li>
                                    <li><a href="#">Semester 5</a></li>
                                    <li><a href="<?= base_url() ?>rps">Semester 6</a></li>
                                </ul>
                            </li>
                            <!-- galeri -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program<span class="caret"></span></a>
                                <ul class="dropdown-menu sub-menu">
                                    <li><a href="#">2021</a></li>
                                </ul>
                            </li>


                            <!-- .navbar-collapse -->
                </nav>
            </div>
            <!-- .main-menu -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .bg-main-menu -->
</header>