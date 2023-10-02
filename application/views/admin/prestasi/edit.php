<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Edit Prestasi Siswa</h4>
					<a href="<?= base_url('Admin/prestasi') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Prestasi Siswa</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Prestasi Siswa</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card" sty>
					<div class="card-header">
							<h4 class="card-title">Form Edit Prestasi</h4>
						</div>
						<div class="card-body">
							<div class="basic-form">
								<form action="<?= base_url('Admin/update_prestasi') ?>" method="post" enctype="multipart/form-data">
									<div class="form-row">
										<div class="form-group col-md-12">
											<label>Nama Siswa</label>
											<input type="hidden" name="id" value="<?= $edit->id ?>">
											<input type="text" class="form-control" name="student_name" id="student_name" value="<?= $edit->student_name ?>">
											<?= form_error('student_name', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Jenis Lomba</label>
											<input type="text" class="form-control" name="type_contest" id="type_contest" value="<?= $edit->type_contest ?>">
											<?= form_error('type_contest', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Prestasi</label>
											<input type="text" class="form-control" name="archievement" value="<?= $edit->archievement ?>">
											<?= form_error('archievement', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Tingkat</label>
											<input type="text" class="form-control" name="level" value="<?= $edit->level ?>">
											<?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Penyelenggara</label>
											<input type="text" class="form-control" name="organizer_contest" value="<?= $edit->organizer_contest ?>">
											<?= form_error('organizer_contest', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Infomasi</label>
											<input type="text" class="form-control" name="information" value="<?= $edit->information ?>">
											<?= form_error('information', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Tanggal Lomba</label>
											<input type="text" class="form-control" name="date_contest" value="<?= $edit->date_contest ?>">
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

