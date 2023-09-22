<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin | <?php echo $title ?></title>
    <!-- Favicon icon -->
	<link href="https://www.alirsyadjember.sch.id/wp-content/uploads/2021/12/Logo-LPP.png" rel="icon">
    <link href="<?= base_url() ?>assets/admin/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/vendor/chartist/css/chartist.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/admin/vendor/summernote/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/vendor/select2/css/select2.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
 
<style>
    form .error {
        color: red;
        font-size: 15px;
        width: 100%;
    }
	
	td {
		color: #000000;
	}

	label {
		color : #000000;
	}

	.content-body {
		background-color: #ced4da;
	}

	.form-control {
		border: 1px solid #000000;
	}
	
	textarea .summernote {
		border: 1px solid #ffd700;
	}

	/* table#example {
		border: 1px solid #ffd700;
	} */

	table.dataTable thead th {
		border: 1px solid #127F62;
	}
	
	.select2-selection__rendered {
        line-height: 40px !important;
    }

    .select2-container .select2-selection--single {
        height: 40px !important;
    }

    .select2-selection__arrow {
        height: 40px !important;
    }
</style>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?= base_url('Admin') ?>" class="brand-logo">
                <!-- <img class="logo-abbr" src="<?= base_url() ?>layouts/image/dian-store.png" alt=""> -->
                <img class="logo-compact" src="<?= base_url() ?>assets/image/Logo LPP Web.png" height="100" alt="">
                <img class="brand-title" src="<?= base_url() ?>assets/image/Logo LPP Web.png"  height="100" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?= base_url('Admin/profile') ?>" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="#logout" data-toggle="modal" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
		<!-- Modal -->
		<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Apakah anda akan keluar ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close <i class="fa fa-close"></i></button>
						<a href="<?= base_url('Admin/logout') ?>" class="btn btn-danger">Keluar <i class="fa-solid fa-right-to-bracket"></i></a>
					</div>
				</div>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Beranda</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a href="<?= base_url('Admin/dashboard') ?>" aria-expanded="false"><i class="fa fa-dashboard"></i><span class="nav-text">Dashboard</span></a></li>
                    <li><a href="<?= base_url('Admin/gambar_slider') ?>" aria-expanded="false"><i class="fa fa-image"></i><span class="nav-text">Gambar Slider</span></a></li>
                    <!-- <li><a href="<?= base_url('Admin/pembelian') ?>" aria-expanded="false"><i class="fa fa-cart-shopping"></i><span class="nav-text">Pembelian</span></a></li>
                    <li><a href="<?= base_url('Admin/laporan_bulanan') ?>" aria-expanded="false"><i class="fa fa-file"></i><span class="nav-text">Laporan Bulanan</span></a></li> -->
					<li><a href="<?= base_url('Admin/visi_misi') ?>" aria-expanded="false"><i class="fa fa-book"></i><span class="nav-text">Visi Misi</span></a></li>
					<li><a href="<?= base_url('Admin/pengurus') ?>" aria-expanded="false"><i class="fa fa-users"></i><span class="nav-text">Susunan Pengurus</span></a></li>
					<li><a href="<?= base_url('Admin/kategori_berita') ?>" aria-expanded="false"><i class="fa fa-list"></i><span class="nav-text">Kategori Berita</span></a></li>
					<li><a href="<?= base_url('Admin/berita') ?>" aria-expanded="false"><i class="fa fa-newspaper"></i><span class="nav-text">Berita</span></a></li>
					<li><a href="<?= base_url('Admin/konsultasi_syariah') ?>" aria-expanded="false"><i class="fa-solid fa-handshake-simple"></i><span class="nav-text">Konsultasi Syariah</span></a></li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Sosial Ekonomi</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Admin/visimisi_sosek') ?>">Visi & Misi</a></li>
                            <li><a href="<?= base_url('Admin/struktur_organisasi_sosek') ?>">Struktur Organisasi</a></li>
                            <li><a href="<?= base_url('Admin/program_sosek') ?>">Program</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
