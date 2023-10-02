<?php $this->load->view('partials/pages_header'); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center py-5">
		<h1 class="display-2 text-light mb-4 animated slideInDown">Visi Misi</h1>
		<nav aria-label="breadcrumb animated slideInDown">
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Tentang</a></li>
				<li class="breadcrumb-item text-light" aria-current="page">Visi Misi</li>
			</ol>
		</nav>
	</div>
</div>
<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Visi - Misi Al Irsyad Al Islamiyyah Jember</h1>
		</div>
		<div class="row ">
			<p><span style="font-weight: bold;">Visi</span> <?= $visimisi->visi ?></p>
			<br>
			<br>
			<p><span style="font-weight: bold;">Misi</span> <?= $visimisi->misi ?></p>
		</div>
	</div>
</div>

<?php $this->load->view('partials/pages_footer'); ?>
