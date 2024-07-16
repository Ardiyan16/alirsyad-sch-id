<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Tambah Prestasi Siswa</h4>
					<a href="<?= base_url('Admin/prestasi') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Prestasi Siswa</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Prestasi Siswa</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card" sty>
					<div class="card-header">
							<h4 class="card-title">Form Tambah Prestasi</h4>
						</div>
						<div class="card-body">
							<div class="basic-form">
								<form action="<?= base_url('Admin/simpan_prestasi') ?>" method="post" enctype="multipart/form-data">
									<div class="form-row">
										<div class="form-group col-md-12">
											<label>Nama Siswa</label>
											<input type="text" class="form-control" name="student_name" id="student_name" value="<?= set_value('student_name') ?>">
											<?= form_error('student_name', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Jenis Lomba</label>
											<input type="text" class="form-control" name="type_contest" id="type_contest" value="<?= set_value('type_contest') ?>">
											<?= form_error('type_contest', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Prestasi</label>
											<input type="text" class="form-control" name="archievement" value="<?= set_value('archievement') ?>">
											<?= form_error('archievement', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Tingkat</label>
											<select class="form_control" name="level" id="select-level">
												<!-- <option disabled selected>Pilih Tingkat</option> -->
												<option <?php if (set_value('level') == 'kabupaten') {
															echo "selected=\"selected\"";
														} ?> value="kabupaten">Kabupaten</option>
												<option <?php if (set_value('level') == 'provinsi') {
															echo "selected=\"selected\"";
														} ?> value="provinsi">Provinsi</option>
												<option <?php if (set_value('level') == 'nasional') {
															echo "selected=\"selected\"";
														} ?> value="nasional">Nasional</option>
												<option <?php if (set_value('level') == 'internasional') {
															echo "selected=\"selected\"";
														} ?> value="internasional">Internasional</option>
											</select>
											<!-- <input type="text" class="form-control" name="level" value="<?= set_value('level') ?>"> -->
											<?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Penyelenggara</label>
											<input type="text" class="form-control" name="organizer_contest" value="<?= set_value('organizer_contest') ?>">
											<?= form_error('organizer_contest', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Infomasi</label>
											<input type="text" class="form-control" name="information" value="<?= set_value('information') ?>">
											<?= form_error('information', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Tanggal Lomba</label>
											<input type="text" class="form-control" name="date_contest" value="<?= set_value('date_contest') ?>">
											<?= form_error('date_contest', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<hr>
										<div class="form-group col-md-12">
											<button type="submit" class="btn btn-primary mt-3"><i class="fa fa-save"></i> Simpan</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/admin_footer.php') ?>
<script>
	$('#select-level').select2();
</script>

