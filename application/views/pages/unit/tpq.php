<?php $this->load->view('partials/pages_header'); ?>

<div class="container-fluid page-header-tpq py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center py-5">
		<h1 class="display-2 text-light mb-4 animated slideInDown"><?= $value->name_unit ?></h1>
		<h6 class="display-6 mb-4 animated slideInDown" style="color: yellow;">Berakhlak Qur'ani Bersama Al Qur'an</h6>
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
			<div class="col-md-3 text-center bg-success pt-3">
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
						<i class="fas fa-quran"></i>
					</div>
					<div class="content">
						<h3>Tuntas metode Ummi </h3>
						<p style="color: #FFF; text-align: justify">Menyeleseikan pembelajaran Jilid 1-6 dan materi Tajwid Ghorib.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-quran"></i>
					</div>
					<div class="content">
						<h3>Tahfidzul Qur’an juz 30</h3>
						<p style="color: #FFF; text-align: justify">Menghafal target minimal juz 30 dalam kurun 2 tahun.</p>
					</div>
				</div>
			</div>
			<hr style="background: #FFF;">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-user-graduate"></i>
					</div>
					<div class="content">
						<h3>Wisuda Uji Publik</h3>
						<p style="color: #FFF; text-align: justify">Melaksanakan uji Munaqosah dihadapan public.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-mosque"></i>
					</div>
					<div class="content">
						<h3>Peraktek wudhu’ dan sholat</h3>
						<p style="color: #FFF; text-align: justify">Mampu melaksakan ibadah wudhu dan sholat sesuai deangan tuntunan Al Qur’an dan Hadist.</p>
					</div>
				</div>
			</div>
			<hr style="background: #FFF;">
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-quran"></i>
					</div>
					<div class="content">
						<h3>Kitabatu khatthil ‘arobi an-naskhi</h3>
						<p style="color: #FFF; text-align: justify">Mampu menulis arab dengan kaidah yang benar.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-quran"></i>
					</div>
					<div class="content">
						<h3>Halaqoh Keislaman </h3>
						<p style="color: #FFF; text-align: justify">Memberikan wawasan keislaman.</p>
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
			<h1 class="display-6">Kepala TPQ</h1>
		</div>
		<div class="row ">
			<div class="col-md-9">
				<h5>Kepala TPQ   : Ust Mirza Rachmanto, S.Pd</h5>
				<p>Dewan Guru :<br>
				1. Ustdzah Sri Purwasih, S.Pd<br>
				2. Ustdzah Rizqiatun Mufidah<br>
				3. Ust Abubakar Zakin<br>
				4. Ust Naufal Ihza Zaman<br>
			</div>
			<div class="col-md-3">
				<img src="<?= base_url('assets/image/unit/' . $value->image_head_school) ?>" >
			</div>
		</div>
	</div>
</div>

<div class="container-fluid product py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
					<h1 class="display-6">Alokasi Waktu Pembelajaran</h1>
				</div>
				<div class="row">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Waktu</th>
								<th scope="col">Materi</th>
								<th scope="col">Teknik</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>5 Menit</td>
								<td>Pembukaan (Salam, Doa Pembuka dll)</td>
								<td>klasikal</td>
							</tr>
							<tr>
								<td>5 Menit</td>
								<td>Talqin & Ittiba’ (Surat-surat Pendek, Do’a)</td>
								<td>klasikal</td>
							</tr>
							<tr>
								<td>10 Menit</td>
								<td>klasikal</td>
								<td>Drill terpimpin & Klasikal</td>
							</tr>
							<tr>
								<td>35 Menit</td>
								<td>Urdloh Individual</td>
								<td>Drill terpimpin & Klasikal</td>
							</tr>
							<tr>
								<td>5 Menit</td>
								<td>Penutup (Drill dan Do’a Penutup)</td>
								<td>Evaluas</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-lg-5" style="margin-left: 30px; margin-top: 50px">
				<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
					<h1 class="display-6">Infaq Pembelajaran</h1>
				</div>
				<div class="row">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col text-center"><b>PENDAFTARAN</b></th>
								<th scope="col"><b>Infaq Bulanan</b></th>
								<th scope="col"><b>Seragam</b></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Rp. 50.000</td>
								<td>Rp. 50.000</td>
								<td>Rp. 100.000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
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
