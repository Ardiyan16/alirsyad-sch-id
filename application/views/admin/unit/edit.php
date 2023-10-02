<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Edit Unit</h4>
					<a href="<?= base_url('Admin/unit') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Unit</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Unit</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card" sty>
					<div class="card-header">
							<h4 class="card-title">Form Edit Unit</h4>
						</div>
						<div class="card-body">
							<p>Tanda * wajib diisi</p>
							<div class="basic-form">
								<form action="<?= base_url('Admin/update_unit') ?>" method="post" enctype="multipart/form-data">
									<div class="form-row">
										<div class="form-group col-md-12">
											<label>Nama Unit <span class="text-danger">*</span></label>
											<input type="hidden" name="id" value="<?= $edit->id ?>">
											<input type="text" class="form-control" name="name_unit" id="name_unit" value="<?= $edit->name_unit ?>">
											<?= form_error('name_unit', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Logo Unit <span class="text-danger">*</span></label>
											<input type="hidden" name="old_logo" value="<?= $edit->unit_logo ?>">
											<input type="file" class="form-control" accept="image/*" id="imgInp" name="unit_logo">
											<?= form_error('unit_logo', '<small class="text-danger pl-3">', '</small>'); ?>
											<p>maksimum 3MB</p>
											<img class="mt-2 mb-3" height="150" width="150" src="<?=  base_url('assets/image/unit/' . $edit->unit_logo) ?>" alt="gambar lama" />
											<img id="blah" class="mt-2 mb-3 ml-3" height="150" width="150" src="#" alt="preview gambar" />
										</div>
										<div class="form-group col-md-12">
											<label>Profil Sekolah <span class="text-danger">*</span></label>
											<textarea type="text" name="unit_profile" class="summernote"><?= $edit->unit_profile ?></textarea>
											<?= form_error('unit_profile', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Nama Kepala Sekolah <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="name_head_school" value="<?= $edit->name_head_school ?>">
											<?= form_error('name_head_school', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Kutipan Kepala Sekolah <span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="quote_head_school" value="<?= $edit->quote_head_school ?>">
											<?= form_error('quote_head_school', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Foto Kepala Sekolah <span class="text-danger">*</span></label>
											<input type="hidden" name="old_image_head_school" value="<?= $edit->image_head_school ?>">
											<input type="file" class="form-control" accept="image/*" id="ImgUpload" name="image_head_school">
											<?= form_error('image_head_school', '<small class="text-danger pl-3">', '</small>'); ?>
											<p>maksimum 3MB</p>
											<img class="mt-2 mb-3" height="150" width="150" src="<?=  base_url('assets/image/unit/' . $edit->image_head_school) ?>" alt="gambar lama" />
											<img id="preview" class="mt-2 mb-3 ml-3" height="150" width="150" src="#" alt="preview gambar" />
										</div>
										<div class="form-group col-md-12">
											<label>Link Instagram</label>
											<input type="text" class="form-control" name="instagram" value="<?= $edit->instagram ?>">
											<?= form_error('instagram', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Link Facebook</label>
											<input type="text" class="form-control" name="facebook" value="<?= $edit->facebook ?>">
											<?= form_error('facebook', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group col-md-12">
											<label>Link Youtube</label>
											<input type="text" class="form-control" name="youtube" value="<?= $edit->youtube ?>">
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
