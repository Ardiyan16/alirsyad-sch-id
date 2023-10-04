<?php $this->load->view('partials/pages_header'); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center py-5">
		<h1 class="display-2 text-light mb-4 animated slideInDown">Pendaftaran</h1>
		<nav aria-label="breadcrumb animated slideInDown">
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Informasi</a></li>
				<li class="breadcrumb-item text-light" aria-current="page">Pendaftaran</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Pendaftaran Online</h1>
		</div>
		<div class="row konten-pendaftaran wow fadeInUp">
			<div class="col-sm-5">
				<a href="https://www.alirsyadjember.sch.id/murottab-dev/PPDB/FormulirOnline/" target="_blank"><img src="<?= base_url('assets/image/step1.jpg') ?>"></a>
			</div>
			<div class="icon-arrow col-sm-1">
				<i class="fa fa-arrow-right"></i>
			</div>
			<div class="col-sm-5">
				<img src="<?= base_url('assets/image/step2.png') ?>" style="padding-left: 40%;">
			</div>
			<div class="col-sm-5">
				
			</div>
			<div class="col-sm-4">
				
			</div>
			<div class="icon-arrow col-sm-3">
				<i class="fa fa-arrow-down"></i>
			</div>
			<div class="col-sm-5">
				<img src="<?= base_url('assets/image/step4.jpg') ?>">
			</div>
			<div class="icon-arrow col-sm-1">
				<i class="fa fa-arrow-left"></i>
			</div>
			<div class="col-sm-5">
				<a href="https://wa.me/6281232342727"><img src="<?= base_url('assets/image/step3.jpg') ?>" style="padding-left: 40%;"></a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Pendaftaran Offline</h1>
		</div>
		<div class="row konten-pendaftaran wow fadeInUp">
			<img src="<?= base_url('assets/image/stepbystep.jpg') ?>" width="500">
		</div>
	</div>
</div>

<?php $this->load->view('partials/pages_footer'); ?>

