<?php $this->load->view('partials/pages_header'); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center py-5">
		<h1 class="display-2 text-light mb-4 animated slideInDown">Pembayaran</h1>
		<nav aria-label="breadcrumb animated slideInDown">
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Informasi</a></li>
				<li class="breadcrumb-item text-light" aria-current="page">Pembayaran</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Pembayaran Offline</h1>
		</div>
		<div class="row konten-pendaftaran wow fadeInUp">
			<img src="<?= base_url('assets/image/payment_offline.jpg') ?>" width="500">
		</div>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Pembayaran Online</h1>
		</div>
		<div class="row konten-pendaftaran wow fadeInUp">
			<img src="<?= base_url('assets/image/payment_online.jpg') ?>" width="500">
		</div>
	</div>
</div>

<?php $this->load->view('partials/pages_footer'); ?>

