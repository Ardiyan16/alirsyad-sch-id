<?php $this->load->view('partials/admin_header.php') ?>

	<div class="content-body">
		<div class="container-fluid">
			<div class="row page-titles mx-0">
				<div class="col-sm-6 p-md-0">
					<div class="welcome-text">
						<h4>Edit Berita</h4>
						<a href="<?= base_url('Admin/berita') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
					</div>
				</div>
				<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Berita</li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Berita</a></li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card" sty>
						<div class="card-header">
                                <h4 class="card-title">Form Tambah Berita (Tanda * Wajib diisi)</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
									<form action="<?= base_url('Admin/update_berita') ?>" method="post" enctype="multipart/form-data">
										<div class="form-row">
											<div class="form-group col-md-12">
												<label>Judul <span class="text-danger">*</span></label>
												<input type="hidden" name="id" value="<?= $edit->id ?>">
												<input type="text" class="form-control" name="title" id="title" value="<?= $edit->title ?>" onkeyup="createTextSlug()">
												<?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Slug <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="slug" id="slug" readonly value="<?= $edit->slug ?>">
												<?= form_error('slug', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Tanggal <span class="text-danger">*</span></label>
												<input type="date" class="form-control col-md-2" name="date" value="<?= $edit->date ?>">
												<?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Penulis <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="writer" value="<?= $edit->writer ?>">
												<?= form_error('writer', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Isi Berita <span class="text-danger">*</span></label>
												<textarea type="text" name="content" class="summernote"><?= $edit->content ?></textarea>
												<?= form_error('content', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Gambar <span class="text-danger">*</span></label>
												<input type="hidden" class="form-control" name="old_image" value="<?= $edit->image ?>">
												<input type="file" class="form-control" accept="image/*" id="imgInp" name="image">
												<?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
												<p>maksimum 3MB</p>
												<img class="mt-2 mb-3" width="150" src="<?= base_url('assets/image/news/' . $edit->image) ?>" alt="Gambar Lama" title="gambar lama"/>
												<img id="blah" class="mt-2 mb-3 ml-2" height="150" width="150" src="#" alt="preview gambar" />
											</div>
											<div class="form-group col-md-12">
												<label>Tagar <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="tag" value="<?= $edit->tag ?>">
												<?= form_error('tag', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<br>
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
<!-- Modal -->

<?php $this->load->view('partials/admin_footer.php') ?>
<script>
	$('#blah').hide();
	imgInp.onchange = evt => {
		const [file] = imgInp.files
		if (file) {
			$('#blah').show();
			blah.src = URL.createObjectURL(file)
		}
	}

	function createTextSlug()
	{
		var title = document.getElementById("title").value;
		document.getElementById("slug").value = generateSlug(title);
	}

	function generateSlug(text)
	{
		return text.toString().toLowerCase()
			.replace(/^-+/, '')
			.replace(/-+$/, '')
			.replace(/\s+/g, '-')
			.replace(/\-\-+/g, '-')
			.replace(/[^\w\-]+/g, '');
	}

	$('#kategori').select2({
        placeholder: 'Pilih Kategori',
    });
</script>
