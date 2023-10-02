<?php $this->load->view('partials/admin_header.php') ?>
<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Detail Unit <?= $value->name_unit ?></h4>
					<a href="<?= base_url('Admin/unit') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Unit</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Detail Unit</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Data Unit <?= $value->name_unit ?></h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-2">
								<img src="<?= base_url('assets/image/unit/' . $value->unit_logo) ?>" width="200">
							</div>
							<div class="col-sm-10">
								<h5>Profil <?= $value->name_unit ?></h5>
								<?= $value->unit_profile ?>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-7">
								<?= $value->quote_head_school ?>
							</div>
							<div class="col-sm-2">
								<img src="<?= base_url('assets/image/unit/' . $value->image_head_school) ?>" width="200">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
								<a href=""><i class="fa-brands fa-instagram"></i> Instagram</a> &nbsp;|&nbsp;
								<a href=""><i class="fa-brands fa-facebook"></i> Facebook</a> &nbsp;|&nbsp;
								<a href=""><i class="fa-brands fa-youtube"></i> Youtube</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/admin_footer.php') ?>
