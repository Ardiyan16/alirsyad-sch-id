<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sekolah Al-Irsyad Al-Islamiyyah | <?= $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="https://www.alirsyadjember.sch.id/wp-content/uploads/2021/12/Logo-LPP.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets/pages/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/pages/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>assets/pages/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>assets/pages/css/style.css" rel="stylesheet">
</head>
<style>
	.img-logo {
		max-width: 150%;
		margin-top: 10px;
	}
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-0">
                <a href="<?= base_url('Pages') ?>" class="navbar-brand">
                    <img class="img-logo" src="<?= base_url() ?>assets/image/Logo LPP Web.png" style="width= 100px;" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?= base_url('Pages') ?>" class="nav-item nav-link">Home</a>
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="<?= base_url('Pages/selayang_pandang') ?>" class="dropdown-item">Selayang Pandang</a>
                                <a href="<?= base_url('Pages/visi_misi') ?>" class="dropdown-item">Visi Misi</a>
                                <a href="testimonial.html" class="dropdown-item">Struktur Organisasi</a>
                            </div>
                        </div>
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Unit</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="feature.html" class="dropdown-item">Selayang Pandang</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="feature.html" class="dropdown-item">Pendaftaran</a>
                                <a href="blog.html" class="dropdown-item">Pembayaran</a>
                                <a href="testimonial.html" class="dropdown-item">Pengumuman</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Berita</a>
                        <a href="contact.html" class="nav-item nav-link">Kontak</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
