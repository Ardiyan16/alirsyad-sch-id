<?php $this->load->view('partials/pages_header'); ?>

<div class="container-fluid page-header-inklusi py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center py-5">
		<h1 class="display-2 text-light mb-4 animated slideInDown"><?= $value->name_unit ?></h1>
		<h6 class="display-6 mb-4 animated slideInDown" style="color: yellow;">All Children Can Learn & Give a Chance For Them to Reach The Future</h6>
		<nav aria-label="breadcrumb animated slideInDown">
			<a href="https://www.alirsyadjember.sch.id/murottab-dev/PPDB/FormulirOnline/" class="btn btn-primary">Daftarkan Sekarang</a>
		</nav>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Profil <?= $value->name_unit ?></h1>
		</div>
		<div class="row ">
			<div class="col-md-3">
				<img src="<?= base_url('assets/image/unit/' . $value->unit_logo) ?>" width="250">
			</div>
			<div class="col-md-9">
				<?= $value->unit_profile ?>
			</div>
		</div>
	</div>
</div>

<div class="list-section py-5 pt-80 pb-80">
	<div class="container">
		<h2 class="text-center wow fadeInUp" style="color: #FFF;">Program Unggulan</h2>
		<div class="row wow fadeInUp" style="margin-left: 10%;">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 mt-5">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-book-open"></i>
					</div>
					<div class="content">
						<h3>Akademik</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 mt-5">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fa-solid fa-person-rays"></i>
					</div>
					<div class="content">
						<h3>Terapi Okupasi</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 mt-3">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-person-walking"></i>
					</div>
					<div class="content">
						<h3>Sensorik Integrasi</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 mt-3">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-person"></i>
					</div>
					<div class="content">
						<h3>Bina Diri</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 mt-3">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-person"></i>
					</div>
					<div class="content">
						<h3>Perilaku</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 mt-3">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-book"></i>
					</div>
					<div class="content">
						<h3>Pre Akademik</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 mt-3">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-volume-low"></i>
					</div>
					<div class="content">
						<h3>Wicara</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 mt-3">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-book"></i>
					</div>
					<div class="content">
						<h3>Pengembangan bakat sesuai visi dan misi sekolah</h3>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Konsultan Psikolog <?= $value->name_unit ?></h1>
		</div>
		<div class="row ">
			<div class="col-md-9">
				<?= $value->quote_head_school ?>
			</div>
			<div class="col-md-3">
				<img src="<?= base_url('assets/image/unit/' . $value->image_head_school) ?>" >
			</div>
		</div>
	</div>
</div>

<div class="container-fluid fasilitas py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-white">Testimonial</p> -->
			<h1 class="display-6" style="color: #FFF;">Fasilitas</h1>
		</div>
		<div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
			<?php foreach($fasilitas as $val) { ?>
				<div class="fasilitas-item p-4 p-lg-5">
					<div class="justify-content-center">
						<img  src="<?= base_url('assets/image/unit/fasility/' . $val->image_fasility) ?>" alt="">
					</div>
					<div class="d-flex align-items-center justify-content-center">
						<div class="text-start ms-3">
							<h5><?= $val->name_fasility ?></h5>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="container-fluid product py-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<h1 class="display-6">Kegiatan <?= $value->name_unit ?> </h1>
		</div>
		<div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
			<?php foreach($kegiatan as $val) { ?>
			<a class="d-block product-item rounded">
				<img src="<?= base_url('assets/image/unit/activity/' . $val->image) ?>" alt="">
				<!-- <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
					<h4 class="text-primary">Green Tea</h4>
					<span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
				</div> -->
			</a>
			<?php } ?>
		</div>
	</div>
</div>

<?php $this->load->view('partials/pages_footer'); ?>
