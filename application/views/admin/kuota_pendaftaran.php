<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Kuota Pendaftaran</h4>
					<a href="#edit" data-toggle="modal" class="btn btn-success btn-sm mt-4"><i class="fa fa-edit"></i> Edit Kuota</a> 
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Kuota Pendaftaran</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kuota Pendaftaran</a></li>
				</ol>
			</div>
		</div>

		<div class="row mt-3">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="profile-tab">
							<div class="custom-tab-1">
								<ul class="nav nav-tabs">
									<li class="nav-item"><a href="#visi" data-toggle="tab" class="nav-link active show">Kuota Pendaftaran</a>
									</li>
								</ul>
								<div class="tab-content">
									<?php if(!empty($data)) { ?> 
										<div id="visi" class="tab-pane fade active show">
											<div class="my-post-content pt-3">
												<div class="row">
													<div class="col-md-2">Tahun Ajaran</div>
													<div class="col-md-10">: <?= $data->year ?></div>
													<div class="col-md-2 mt-3">Jumlah Kuota Home Schooling</div>
													<div class="col-md-10 mt-3">: <?= $data->home_schooling ?></div>
													<div class="col-md-2 mt-3">Jumlah Kuota TPQ</div>
													<div class="col-md-10 mt-3">: <?= $data->tpq ?></div>
													<div class="col-md-2 mt-3">Jumlah Kuota SD</div>
													<div class="col-md-10 mt-3">: <?= $data->sd ?></div>
													<div class="col-md-2 mt-3">Jumlah Kuota SMP</div>
													<div class="col-md-10 mt-3">: <?= $data->smp ?></div>
													<div class="col-md-2 mt-3">Di Update Pada</div>
													<div class="col-md-10 mt-3">: <?= date('d-m-Y', strtotime($data->updated_at)) ?></div>
												</div>
												<!-- <div class="row">
												</div> -->
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('Admin/update_kuota') ?>" name="form_kuota" method="post">
					<div class="form-group">
						<label>Tahun Ajaran</label>
						<input type="hidden" class="form-control" name="id" value="<?= $data->id ?>">
						<input type="text" class="form-control" name="year" value="<?= $data->year ?>">
                    </div>
					<div class="form-group">
						<label>Kuota Home Schooling</label>
						<input type="text" class="form-control" name="home_schooling" value="<?= $data->home_schooling ?>">
                    </div>
					<div class="form-group">
						<label>Kuota TPQ</label>
						<input type="text" class="form-control" name="tpq" value="<?= $data->tpq ?>">
                    </div>
					<div class="form-group">
						<label>Kuota SD</label>
						<input type="text" class="form-control" name="sd" value="<?= $data->sd ?>">
                    </div>
					<div class="form-group">
						<label>Kuota SMP</label>
						<input type="text" class="form-control" name="smp" value="<?= $data->smp ?>">
                    </div>
					<hr>
					<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('partials/admin_footer.php') ?>
<script>
	$(document).ready(function() {
		$(function() {
			$("form[name='form_kuota']").validate({
				rules: {
					year: {
						required: true
					},
					home_schooling: {
						required: true
					},
					tpq: {
						required: true
					},
					sd: {
						required: true
					},
					smp: {
						required: true
					}
				},
				messages: {
					year: {
						required: "tahun ajaran wajib di isi"
					},
					home_schooling: {
						required: "kuota home schooling wajib di isi"
					},
					tpq: {
						required: "kuota TPQ wajib di isi"
					},
					sd: {
						required: "kuota SD wajib di isi"
					},
					smp: {
						required: "kuota SMP wajib di isi"
					}
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
    	});
	})

	<?php if ($this->session->flashdata('success_ubah')) : ?>
		Swal.fire({
			icon: 'success',
			title: 'Berhasil!',
			text: 'Kuota Pendaf berhasil disimpan!',
			showConfirmButton: true,
			// timer: 1500
		})
	<?php endif ?>
</script>

