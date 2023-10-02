<?php $this->load->view('partials/pages_header'); ?>

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
				<div class="carousel-item active">
					<img class="w-100" src="<?= base_url('assets/image/slider/DSC_0273.jpg') ?>" alt="Image">
					<div class="carousel-caption">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-7 text-center">
									<h1 class="display-1 text-white mb-4 animated zoomIn">Al Irsyad Al Islamiyyah Jember</h1>
									<p class="fs-4 text-white animated zoomIn"><strong class="text-white">Sekolah Islam Unggul Inspiratif dan Berkarakter</strong></p>
									<a href="https://www.alirsyadjember.sch.id/murottab-dev/PPDB/FormulirOnline/" target="_blank" class="btn btn-success rounded-pill py-3 px-5 animated zoomIn">Daftarkan Sekarang</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php foreach($gambar as $value) { ?>
					<div class="carousel-item">
						<img class="w-100" src="<?= base_url('assets/image/slider/'. $value->image) ?>" alt="Image">
						<div class="carousel-caption">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-lg-7 text-center">
										<h1 class="display-1 text-white mb-4 animated zoomIn">Al Irsyad Al Islamiyyah Jember</h1>
										<p class="fs-4 text-white animated zoomIn"><strong class="text-white">Sekolah Islam Unggul Inspiratif dan Berkarakter</strong></p>
										<a href="https://www.alirsyadjember.sch.id/murottab-dev/PPDB/FormulirOnline/" class="btn btn-success rounded-pill py-3 px-5 animated zoomIn">Daftarkan Sekarang</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="list-section py-5 pt-80 pb-80">
        <!-- <div class="container"> -->
			<h2 class="text-center wow fadeInUp" style="margin-bottom: 60px; color: #FFF;">Prestasi Siswa</h2>
            <div class="row wow fadeInUp" style="margin-left: 30px;">
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-medal"></i>
						</div>
						<div class="content">
							<h3><span></span> Tingkat Kabupaten</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-medal"></i>
						</div>
						<div class="content">
							<h3><span></span> Tingkat Provinsi</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-medal"></i>
						</div>
						<div class="content">
							<h3><span></span> Tingkat Nasional</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-medal"></i>
						</div>
						<div class="content">
							<h3><span></span> Tingkat Internasional</h3>
						</div>
					</div>
				</div>
				<div class="link-selengkapnya col-lg-12 text-center">
					<a href="" class="btn btn-primary">Lihat Selengkapnya</a>
				</div>
			</div>
        <!-- </div> -->
    </div>
    <!-- About End -->


    <!-- Products Start -->
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
                <h1 class="display-6">Unit Pendidikan Kami</h1>
            </div>
            <div class="row ">
				<div class="col-lg-4 col-md-6">
					<a href=""><img src="<?= base_url('assets/image/sd.png') ?>" width="400"></a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a href=""><img src="<?= base_url('assets/image/smp.png') ?>" width="400"></a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a href=""><img src="<?= base_url('assets/image/tpq.png') ?>" width="400"></a>
				</div>
				<div class="col-lg-4 col-md-6 mt-3">
					<a href=""><img src="<?= base_url('assets/image/home_schooling.png') ?>" width="400"></a>
				</div>
				<div class="col-lg-4 col-md-6 mt-3">
					<a href=""><img src="<?= base_url('assets/image/inklusi.png') ?>" width="400"></a>
				</div>
				<div class="col-lg-4 col-md-6 mt-3">
					<a href=""><img src="<?= base_url('assets/image/paud.png') ?>" width="400"></a>
				</div>
			</div>
        </div>
    </div>
    <!-- Products End -->

	<div class="list-section py-5 pt-80 pb-80">
        <div class="container">
			<h2 class="text-center wow fadeInUp" style="color: #FFF;">Kuota Pendaftaran Tahun Ajaran <?= $kuota->year ?></h2>
			<p class="text-center wow fadeInUp" style="margin-bottom: 60px; color: #FFF;">Dibuka pada 01 Oktober 2023</p>
            <div class="row wow fadeInUp" style="margin-left: 10%;">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
					<div class="content">
							<h1 class="text-center"><?= $kuota->sd ?></h1>
							<h3>Sekolah Dasar (SD)</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="content">
							<h1 class="text-center"><?= $kuota->smp ?></h1>
							<h3>SMP Science Qur'an</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="content">
							<h1 class="text-center"><?= $kuota->tpq ?></h1>
							<h3>Taman Pendidikan Quran (TPQ)</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="link-selengkapnya col-lg-12 text-center wow fadeInUp">
				<a href="https://www.alirsyadjember.sch.id/murottab-dev/PPDB/FormulirOnline/" class="btn btn-primary">Ayo Daftarkan Sekarang</a>
			</div>
        </div>
    </div>


    <!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="<?= base_url('assets/image/ketua_umum.jpg') ?>" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <!-- <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p> -->
                        <h1 class="display-6">Quotes Ketua Pimpinan Pusat Al Irsyad Al Islamiyyah KH. Dr. Faisol Nasar bin Madi, MA</h1>
                    </div>
                    <p class="mb-4">"Membangun suatu peradaban berkualitas haruslah memiliki guru yang hebat dan kompeten di bidangnya karena pendidikan dapat membentuk manusia sekaligus merubah manusia. Esensi dari pendidikan haruslah sebagai media untuk menyukseskan visi dan misi penciptaan manusia oleh Allah SWT di muka bumi ini”</p>
                    <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->


	<div class="list-section py-5 pt-80 pb-80">
        <div class="container">
			<h2 class="text-center wow fadeInUp" style="color: #FFF;">SDM kami lulusan kampus terbaik</h2>
            <div class="row wow fadeInUp" style="margin-left: 30px; margin-top: 50px;">
				<div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus1.jpeg') ?>" width="150">
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus2.png') ?>" width="150">
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-4 mt-5 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus3.png') ?>" width="150">
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-4 mt-5 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus4.png') ?>" width="150">
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-4 mt-5 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus5.png') ?>" width="150">
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-4 mt-5 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus6.png') ?>" width="150">
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-4 mt-5 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus7.png') ?>" width="150">
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-4 mt-5 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus8.png') ?>" width="150">
					</div>
				</div>
				<div class="col-lg-2 col-md-6 mb-4 mt-5 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<img src="<?= base_url('assets/image/kampus9.png') ?>" width="150">
					</div>
				</div>
			</div>
        </div>
    </div>


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="fs-5 fw-medium fst-italic text-white">Testimonial</p> -->
                <h1 class="display-6" style="color: #FFF;">Testimoni</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
				<?php foreach($testimoni as $value) { ?>
					<div class="testimonial-item p-4 p-lg-5">
						<p class="mb-4"><?= $value->testi ?></p>
						<div class="d-flex align-items-center justify-content-center">
							<img class="img-fluid flex-shrink-0" src="<?= base_url() ?>assets/image/user.png" alt="">
							<div class="text-start ms-3">
								<h5><?= $value->parent_name ?></h5>
								<span class="text-primary"><?= $value->work ?></span>
							</div>
						</div>
					</div>
				<?php } ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

	 <!-- Article Start -->
	 <div class="container-xxl py-5">
        <div class="container">
			<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
                <h1 class="display-6">Berita Terbaru</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="<?= base_url('assets/image/news/' . $berita->image) ?>" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="section-title"> -->
                        <!-- <p class="fs-5 fw-medium fst-italic text-primary"></p> -->
                        <a href=""><h1 class="display-6"><?= $berita->title ?></h1></a>
                    <!-- </div> -->
                    <div class="isi-berita" style="margin-bottom: 30px;"><?= substr($berita->content, 956, 200) ?>...</div>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->

<?php $this->load->view('partials/pages_footer'); ?>
