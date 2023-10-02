<?php $this->load->view('partials/admin_header.php') ?>

	<div class="content-body">
		<div class="container-fluid">
			<div class="row page-titles mx-0">
				<div class="col-sm-6 p-md-0">
					<div class="welcome-text">
						<?php if(empty($data)) { ?>
							<h4>Tambah Visi Misi</h4>
							<a href="<?= base_url('Admin/visi_misi') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
						<?php } else { ?>
							<h4>Edit Visi Misi</h4>
							<a href="<?= base_url('Admin/visi_misi') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-arrow-left"></i> Kembali</a>
						<?php } ?>
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
                                <h4 class="card-title">Form Visi Misi</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
									<?php if(empty($data)) { ?>
										<form action="<?= base_url('Admin/simpan_visimisi') ?>" method="post" enctype="multipart/form-data">
											<div class="form-row">
												<div class="form-group col-md-12">
													<label>Visi</label>
													<textarea type="text" name="visi" class="summernote"><?= set_value('visi') ?></textarea>
													<?= form_error('visi', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
												<div class="form-group col-md-12">
													<label>Misi</label>
													<textarea type="text" name="misi" class="summernote"><?= set_value('misi') ?></textarea>
													<?= form_error('misi', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
												<br>
												<hr>
												<div class="form-group col-md-12">
													<button type="submit" class="btn btn-primary mt-3"><i class="fa fa-save"></i> Simpan</button>
												</div>
											</div>
										</form>
									<?php } else { ?>
										<form action="<?= base_url('Admin/ubah_visimisi') ?>" method="post" enctype="multipart/form-data">
											<div class="form-row">
												<div class="form-group col-md-12">
													<label>Visi</label>
													<input type="hidden" name="id" value="<?= $data->id ?>">
													<textarea type="text" name="visi" class="summernote"><?= $data->visi ?></textarea>
													<?= form_error('visi', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
												<div class="form-group col-md-12">
													<label>Misi</label>
													<textarea type="text" name="misi" class="summernote"><?= $data->misi ?></textarea>
													<?= form_error('misi', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
												<br>
												<hr>
												<div class="form-group col-md-12">
													<button type="submit" class="btn btn-primary mt-3"><i class="fa fa-save"></i> Simpan</button>
												</div>
											</div>
										</form>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('partials/admin_footer.php') ?>
