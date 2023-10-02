<?php $this->load->view('partials/admin_header.php') ?>

	<div class="content-body">
		<div class="container-fluid">
			<div class="row page-titles mx-0">
				<div class="col-sm-6 p-md-0">
					<div class="welcome-text">
						<h4>Edit Pengurus Al-Irsyad Al-Islammiyah</h4>
						<a href="<?= base_url('Admin/visi_misi') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
					</div>
				</div>
				<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Visi Misi</li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Visi Misi</a></li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card" sty>
						<div class="card-header">
                                <h4 class="card-title">Form Pengurus Al-Irsyad Al-Islammiyah</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
									<form action="<?= base_url('Admin/ubah_struktur_pc') ?>" method="post" enctype="multipart/form-data">
										<div class="form-row">
											<div class="form-group col-md-12">
												<label>Ketua</label>
												<input type="hidden" class="form-control" name="id" value="<?= $struktur->id ?>">
												<input type="text" class="form-control" name="chief" value="<?= $struktur->chief ?>">
												<?= form_error('chief', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Sekretaris</label>
												<input type="text" class="form-control" name="secretary" value="<?= $struktur->secretary ?>">
												<?= form_error('secretary', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Bendahara</label>
												<input type="text" class="form-control" name="treasurer" value="<?= $struktur->treasurer ?>">
												<?= form_error('treasurer', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Ketua Lajnah Pendidikan & Pengajaran</label>
												<input type="text" class="form-control" name="chief_lpp" value="<?= $struktur->chief_lpp ?>">
												<?= form_error('chief_lpp', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Ketua Lajnah Dakwah</label>
												<input type="text" class="form-control" name="chief_dakwah" value="<?= $struktur->chief_dakwah ?>">
												<?= form_error('chief_dakwah', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Ketua Lajnah Sosial & Ekonomi</label>
												<input type="text" class="form-control" name="chief_sosek" value="<?= $struktur->chief_sosek ?>">
												<?= form_error('chief_sosek', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Pengurus Cabang Wanita</label>
												<input type="text" class="form-control" name="chief_pcw" value="<?= $struktur->chief_pcw ?>">
												<?= form_error('chief_pcw', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Pengurus Cabang Pemuda</label>
												<input type="text" class="form-control" name="chief_pemuda" value="<?= $struktur->chief_pemuda ?>">
												<?= form_error('chief_pemuda', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group col-md-12">
												<label>Gambar Pengurus</label>
												<input type="hidden" class="form-control" value="<?= $struktur->image ?>" name="old_image">
												<input type="file" class="form-control" accept="image/*" id="imgInp" name="image">
												<?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
												<p>maksimum 3MB</p>
												<img class="mt-2 mb-3" width="150" src="<?= base_url('assets/image/struktur/' . $struktur->image) ?>" alt="Gambar Lama" title="gambar lama"/>
												<img id="blah" class="mt-2 mb-3 ml-3" height="150" width="150" src="#" alt="preview gambar" />
											</div>
											<div class="form-group col-md-12">
												<label>Gambar Bagan Pengurus</label>
												<input type="hidden" class="form-control" value="<?= $struktur->image_chart ?>" name="old_bagan">
												<input type="file" class="form-control" accept="image/*" id="imgInp2" name="image_chart">
												<?= form_error('image_chart', '<small class="text-danger pl-3">', '</small>'); ?>
												<p>maksimum 3MB</p>
												<img class="mt-2 mb-3" width="150" src="<?= base_url('assets/image/image_all/' . $struktur->image_chart) ?>" alt="Gambar Lama" title="gambar lama"/>
												<img id="blah2" class="mt-2 mb-3 ml-2" height="150" width="150" src="#" alt="preview gambar" />
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

<?php $this->load->view('partials/admin_footer.php') ?>
<script>
	imgInp.onchange = evt => {
		const [file] = imgInp.files
		if (file) {
			blah.src = URL.createObjectURL(file)
		}
	}
	imgInp2.onchange = evt => {
		const [file] = imgInp2.files
		if (file) {
			blah2.src = URL.createObjectURL(file)
		}
	}
</script>
