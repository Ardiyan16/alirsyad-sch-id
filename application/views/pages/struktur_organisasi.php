<?php $this->load->view('partials/pages_header'); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center py-5">
		<h1 class="display-2 text-light mb-4 animated slideInDown">Struktur Organisasi</h1>
		<nav aria-label="breadcrumb animated slideInDown">
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Tentang</a></li>
				<li class="breadcrumb-item text-light" aria-current="page">Struktur Organisasi</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Struktur Pimpinan Cabang Al Irsyad Jember</h1>
		</div>
		<div class="row wow fadeInUp">
			<div class="col-md-12 text-center">
				<img src="<?= base_url('assets/image/struktur/' . $struktur_pc->image) ?>" width="400">
				<img src="<?= base_url('assets/image/struktur/' . $struktur_pc->image_chart) ?>" width="1200" style="margin-top: 20px;">
			</div>
			<div class="card col-md-12 mt-3 wow fadeInUp">
				<div class="row">
					<div class="col-sm-3">Ketua Pc Al Irsyad Jember</div>
					<div class="col-sm-9">: <?= $struktur_pc->chief ?></div>
					<div class="col-sm-3">Sekretaris PC</div>
					<div class="col-sm-9">: <?= $struktur_pc->secretary ?></div>
					<div class="col-sm-3">Bendahara PC</div>
					<div class="col-sm-9">: <?= $struktur_pc->treasurer ?></div>
					<div class="col-sm-3">Lajnah Pendidikan & Pengajaran</div>
					<div class="col-sm-9">: <?= $struktur_pc->chief_lpp ?></div>
					<div class="col-sm-3">Lajnah Dakwah</div>
					<div class="col-sm-9">: <?= $struktur_pc->chief_dakwah ?></div>
					<div class="col-sm-3">Lajnah Sosial & Ekonomi</div>
					<div class="col-sm-9">: <?= $struktur_pc->chief_sosek ?></div>
					<div class="col-sm-3">Pengurus Cabang Wanita-Putri</div>
					<div class="col-sm-9">: <?= $struktur_pc->chief_pcw ?></div>
					<div class="col-sm-3">Pengurus Cabang Pemuda</div>
					<div class="col-sm-9">: <?= $struktur_pc->chief_pemuda ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Struktur Lajnah Pendidikan & Pengajaran Al Irsyad Jember</h1>
		</div>
		<div class="row wow fadeInUp">
			<div class="col-md-12 text-center">
				<img src="<?= base_url('assets/image/lpp.png') ?>" width="400">
				<img src="<?= base_url('assets/image/lpp_bagan.png') ?>" width="1200" style="margin-top: 20px;">
			</div>
			<div class="card col-md-12 mt-3 wow fadeInUp">
				<div class="row">
					<div class="col-sm-3">Ketua LPP</div>
					<div class="col-sm-9">: Muhammad Iqbal, S.Gz,. M.P.H</div>
					<div class="col-sm-3">Ketua Harian</div>
					<div class="col-sm-9">: M. Riky Yakob, S.Pd</div>
					<div class="col-sm-3">Sekretaris</div>
					<div class="col-sm-9">: Arrohman Huda Kurniawan, S.E</div>
					<div class="col-sm-3">Bendahara </div>
					<div class="col-sm-9">: Ir. Rida Fadiah</div>
					<div class="col-sm-3">Staff Accounting</div>
					<div class="col-sm-9">: Muhimmatus Syarifah, S.E</div>
					<div class="col-sm-3">Staf IT</div>
					<div class="col-sm-9">: Rizki Firmansyah, Amd.Kom</div>
					<div class="col-sm-3">Staf IT</div>
					<div class="col-sm-9">: Bawik Ardiyan Ramadhan, S.Tr.Kom</div>
					<div class="col-sm-3">Biro Biah Islamiyyah</div>
					<div class="col-sm-9">: Moh. Habibi Hamzah Lc. M.Pd</div>
					<div class="col-sm-3">Biro Sarpras</div>
					<div class="col-sm-9">: Hairul Anam S.ST</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Struktur SD Alirsyad Al Islamiyyah</h1>
		</div>
		<div class="row wow fadeInUp">
			<div class="col-md-12 text-center">
				<img src="<?= base_url('assets/image/struktur_sd.png') ?>" width="400">
				<img src="<?= base_url('assets/image/bagan_sd.png') ?>" width="1200" style="margin-top: 20px;">
			</div>
			<div class="card col-md-12 mt-3 wow fadeInUp">
				<div class="row">
					<div class="col-sm-3">Kepala SD</div>
					<div class="col-sm-9">: Nur Fatma, S.Pd</div>
					<div class="col-sm-3">Staff Tata Usaha</div>
					<div class="col-sm-9">: Arhamna Hamda Arroby</div>
					<div class="col-sm-3">Staff Dapodik</div>
					<div class="col-sm-9">: Wardatur Rosikho</div>
					<div class="col-sm-3">Bendahara BOS </div>
					<div class="col-sm-9">: Tutik Sri Rahayu</div>
					<div class="col-sm-3">Waka Level 1</div>
					<div class="col-sm-9">: Tatik Hidayati, S.Pd</div>
					<div class="col-sm-3">Waka Level 2</div>
					<div class="col-sm-9">: Hendra Sri Hariyati, S.Pd</div>
					<div class="col-sm-3">Waka Level 3</div>
					<div class="col-sm-9">: Rini Anggaraini Septianingsih, S.Pd</div>
					<div class="col-sm-3">Waka Al Qur’an</div>
					<div class="col-sm-9">: Erda Putri Amalia, S.Pd.I</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid product py-5 my-5">
	<div class="container py-5">
		<div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<!-- <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p> -->
			<h1 class="display-6">Struktur SMP Science Qur'an Al Irsyad Al Islamiyyah Jember</h1>
		</div>
		<div class="row wow fadeInUp">
			<div class="col-md-12 text-center">
				<img src="<?= base_url('assets/image/struktur_smp.png') ?>" width="400">
				<img src="<?= base_url('assets/image/bagan_smp.png') ?>" width="900" style="margin-top: 20px;">
			</div>
			<div class="card col-md-12 mt-3 wow fadeInUp">
				<div class="row">
					<div class="col-sm-3">Kepala SMP</div>
					<div class="col-sm-9">: Elok Nur Faiqoh, S.Si, M.Pd</div>
					<div class="col-sm-3">Waka Kurikulum</div>
					<div class="col-sm-9">: Hikma Ardiantika Sari, S.Si</div>
					<div class="col-sm-3">Waka Kesiswaan</div>
					<div class="col-sm-9">: Ahmad Ardiyanto, S.Pd</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/pages_footer'); ?>
