<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Tambah Unit</h4>
					<a href="<?= base_url('Admin/unit') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Unit</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Unit</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card" sty>
					<div class="card-header">
							<h4 class="card-title">Form Tambah Unit</h4>
						</div>
						<div class="card-body">
							<p>Tanda * wajib diisi</p>
							<div class="basic-form">
								<form action="<?= base_url('Admin/simpan_unit') ?>" method="post" enctype="multipart/form-data">
									<div class="form-row">
										<div class="form-group col-md-12">
											<label>Nama Unit <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="name_unit" id="name_unit" value="<?= set_value('name_unit') ?>">
											<?= form_error('name_unit', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Logo Unit <span class="text-danger">*</span></label>
											<input type="file" class="form-control" accept="image/*" id="imgInp" name="unit_logo">
											<?= form_error('unit_logo', '<small class="text-danger pl-3">', '</small>'); ?>
											<p>maksimum 3MB</p>
											<img id="blah" class="mt-2 mb-3" height="150" width="150" src="#" alt="preview gambar" />
										</div>
										<div class="form-group col-md-12">
											<label>Profil Sekolah <span class="text-danger">*</span></label>
											<textarea type="text" name="unit_profile" class="summernote"><?= set_value('unit_profile') ?></textarea>
											<?= form_error('unit_profile', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Nama Kepala Sekolah <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="name_head_school" value="<?= set_value('name_head_school') ?>">
											<?= form_error('name_head_school', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Kutipan Kepala Sekolah <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="quote_head_school" value="<?= set_value('quote_head_school') ?>">
											<?= form_error('quote_head_school', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Foto Kepala Sekolah <span class="text-danger">*</span></label>
											<input type="file" class="form-control" accept="image/*" id="ImgUpload" name="image_head_school">
											<?= form_error('image_head_school', '<small class="text-danger pl-3">', '</small>'); ?>
											<p>maksimum 3MB</p>
											<img id="preview" class="mt-2 mb-3" height="150" width="150" src="#" alt="preview gambar" />
										</div>
										<div class="form-group col-md-12">
											<label>Link Instagram</label>
											<input type="text" class="form-control" name="instagram" value="<?= set_value('instagram') ?>">
											<?= form_error('instagram', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Link Facebook</label>
											<input type="text" class="form-control" name="facebook" value="<?= set_value('facebook') ?>">
											<?= form_error('facebook', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Link Youtube</label>
											<input type="text" class="form-control" name="youtube" value="<?= set_value('youtube') ?>">
											<?= form_error('youtube', '<small class="text-danger pl-3">', '</small>'); ?>
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

	$(document).ready(function() {
		$('#blah').hide();
	
		$('#preview').hide();
	
		imgInp.onchange = evt => {
			const [file] = imgInp.files
			if (file) {
				$('#blah').show();
				blah.src = URL.createObjectURL(file)
			}
		}
	
		ImgUpload.onchange = evt => {
			const [file] = ImgUpload.files
			if (file) {
				$('#preview').show();
				preview.src = URL.createObjectURL(file)
			}
		}
	})


</script>
