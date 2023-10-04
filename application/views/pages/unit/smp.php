<?php $this->load->view('partials/pages_header'); ?>

<div class="container-fluid page-header-smp py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center py-5">
		<h1 class="display-2 text-light mb-4 animated slideInDown"><?= $value->name_unit ?></h1>
		<h6 class="display-6 mb-4 animated slideInDown" style="color: yellow;">Holistik Science and Balanced Islamic Education</h6>
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
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-running"></i>
					</div>
					<div class="content">
						<h3>Proniaga : Program Pendidikan Jasmani Olahraga</h3>
						<p style="color: #FFF; text-align: justify">Bertujuan untuk melatih aspek fisik dan juga melatih aspek intelektual, emosional, sosial dan moral dengan maksud, kelak anak muda itu menjadi seseorang percaya diri, berdisiplin, sehat, bugar, dan hidup bahagia.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-mosque"></i>
					</div>
					<div class="content">
						<h3>KEISLAMAN</h3>
						<p style="color: #FFF; text-align: justify">Ciri khas dari kurikulum SMP Science Qur’an Al Irsyad Jember yang memadukan antara kurikulum nasional dan pengembangan dari kurikulum khas Al Irsyad. Beberapa programnya yaitu PROFIDZ (Program Tahfidz) meliputi Tahfidzul Qur’an, Tahsin dan PONDASI (Program Pembinaan Dasar Keislaman) : Penguatan Aqidah. Akhlak Mulia. Ibadah Harian. Puasa Sunnah. Qiyamul Lail.</p>
					</div>
				</div>
			</div>
			<hr style="background: #FFF;">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-laptop-code"></i>
					</div>
					<div class="content">
						<h3>PROMIS : Program IT Siswa</h3>
						<p style="color: #FFF; text-align: justify">Untuk mencetak generasi masa depan yang membawa ke agen perubahan berazaskan Al Qur’an. Programnya yang dilakukan yaitu Programing / Coding dan Multimedia</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-leaf"></i>
					</div>
					<div class="content">
						<h3>BUDIDAYA TANAMAN (Prakarya & Kewirausahaan)</h3>
						<p style="color: #FFF; text-align: justify">Anak-anak secara bergotong-royong merawat lahan yang ditanami sayur/buah, yang hasilnya bisa dijual/dimanfaatkan</p>
					</div>
				</div>
			</div>
			<hr style="background: #FFF;">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-language"></i>
					</div>
					<div class="content">
						<h3>LANGUAGE : ENGLISH & ARABIC</h3>
						<p style="color: #FFF; text-align: justify">MABIT (Mahir Bahasa Internasional) yaitu adanya jam khusus kewajiban seluruh warga sekolah untuk berkomunikasi menggunakan Bahasa Arab atau Inggris serta adanya mata pelajaran khusus yang tujuannya untuk mengasah kosakata bahasa siswa dalam bahasa internasional.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-handshake"></i>
					</div>
					<div class="content">
						<h3>LEADERSHIP “TRAPI IMAN” ( Training Calon pemimpin Indonesia masa depan)</h3>
						<p style="color: #FFF; text-align: justify">Melatih kepemimpinan lebih efektif dimulai sejak masa kecil, khususnya pada masa-masa sekolah.</p>
					</div>
				</div>
			</div>
			<hr style="background: #FFF;">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-users"></i>
					</div>
					<div class="content">
						<h3>PROSI (Program Sosial Siswa)</h3>
						<p style="color: #FFF; text-align: justify">Untuk mengaplikasikan ilmu pengetahuan dan keterampilan sebagai sarana aktualisasi diri siswa untuk membantu sesama. Program yang akan dilaksanakan yaitu Jum’at Berkah, PMR, Sahabat Asuh, Sosial Work, dan Pramuka.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-user-graduate"></i>
					</div>
					<div class="content">
						<h3>MINAT & BAKAT “KEMBARI” (Keminatan dan Bakat Diri)</h3>
						<p style="color: #FFF; text-align: justify">Pengembangkan bakat, dan minat peserta didik dan sekaligus sebagai upaya mempersiapkan peserta didik untuk hidup mandiri sebagai mahluk individual maupun mahluk sosial.</p>
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
			<h1 class="display-6">Kepala Sekolah SMP</h1>
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

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Sosial Media <?= $value->name_unit ?></h1>
		</div>
		<div class="row text-center  wow fadeInUp">
			<div class="col-md-12">
				<a href="<?= $value->instagram ?>" target="_blank"><img src="<?= base_url('assets/image/instagram.png') ?>"></a>
				<a href="<?= $value->facebook ?>" target="_blank"><img src="<?= base_url('assets/image/facebook.png') ?>"></a>
				<a href="<?= $value->youtube ?>" target="_blank"><img src="<?= base_url('assets/image/youtube.png') ?>"></a>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/pages_footer'); ?>
