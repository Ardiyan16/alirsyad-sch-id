<?php $this->load->view('partials/admin_header.php') ?>
<style>
	.image-pengurus {
		margin-left: 35%;
		margin-top: 25px;
	}
	.image-bagan {
		margin-top: 35px;
	}
	.susunan-pengurus {
		margin-top: 35px;
	}
</style>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Struktur Lajnah Pendidikan & Pengajaran</h4>
					<a href="<?= base_url('Admin/edit_struktur_pc') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-edit"></i> Edit Struktur</a> 
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Struktur LPP</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Struktur LPP</a></li>
				</ol>
			</div>
		</div>

		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<?php if(empty($struktur)) { ?>
						<div class="card-body">
							<h5>Data Belum Tersedia</h5>
						</div>
					<?php } else { ?>
						<div class="card-body">
							<h5>Struktur Organiasasi Pimpinan Cabang Al-Irsyad Al-Islamiyyah</h5>
							<div class="row pengurus">
								<img src="<?= base_url('assets/image/struktur/' . $struktur->image) ?>" class="image-pengurus">
								<img src="<?= base_url('assets/image/struktur/' . $struktur->image_chart) ?>" width="1300" class="image-bagan">
								<div class="col-md-2" style="margin-top: 35px">Ketua</div>
								<div class="col-md-10" style="margin-top: 35px">: <?= $struktur->chief ?></div>
								<div class="col-md-2" style="margin-top: 35px">Ketua Harian</div>
								<div class="col-md-10" style="margin-top: 35px">: <?= $struktur->chief_day ?></div>
								<div class="col-md-2" style="margin-top: 15px">Sekretaris</div>
								<div class="col-md-10" style="margin-top: 15px">: <?= $struktur->secretary ?></div>
								<div class="col-md-2" style="margin-top: 15px">Bendahara</div>
								<div class="col-md-10" style="margin-top: 15px">: <?= $struktur->treasurer ?></div>
								<div class="col-md-2" style="margin-top: 15px">Staf Akuntansi</div>
								<div class="col-md-10" style="margin-top: 15px">: <?= $struktur->accounting_staf ?></div>
								<div class="col-md-2" style="margin-top: 15px">IT Staf</div>
								<div class="col-md-10" style="margin-top: 15px">: <?= $struktur->it_staf ?></div>
								<div class="col-md-2" style="margin-top: 15px">Biro Biah Islamiyyah</div>
								<div class="col-md-10" style="margin-top: 15px">: <?= $struktur->div_biah_islamiyyah ?></div>
								<div class="col-md-2" style="margin-top: 15px">Biro Sarpras</div>
								<div class="col-md-10" style="margin-top: 15px">: <?= $struktur->div_sarpras ?></div>
								<div class="col-md-2" style="margin-top: 15px">Biro SDM</div>
								<div class="col-md-10" style="margin-top: 15px">: <?= $struktur->div_human_resources ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/admin_footer.php') ?>
