<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Kegiatan Unit</h4>
					<a href="#tambah" data-toggle="modal" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-plus"></i> Tambah Kegiatan Unit</a> 
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Unit</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kegiatan Unit</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->


		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">List Kegiatan Unit</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Unit</th>
										<th>Foto Kegiatan</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach($aktivitas as $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->name_unit ?></td>		
											<td><img src="<?= base_url('assets/image/unit/activity/' . $value->image) ?>" width="80"></td>		
											<td>
												<a href="#edit<?= $value->id ?>" data-toggle="modal" class="badge bg-primary tombol-edit" style="color: #fff" title="Edit"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url('Admin/hapus_aktivitas/' . $value->id) ?>" class="badge bg-danger tombol-hapus" style="color: #fff" title="Hapus"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('Admin/simpan_aktivitas') ?>" name="form_tambah" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Pilih Unit <span class="text-danger">*</span></label>
						<select class="form-control" id="unit_id" name="unit_id">
							<option disabled selected>Pilih Unit</option>
							<?php foreach($unit as $val) { ?>
								<option value="<?= $val->id ?>"><?= $val->name_unit ?></option>
							<?php } ?>
						</select>
                    </div>
					<div class="form-group">
						<label>Foto Kegiatan <span class="text-danger">*</span></label>
						<input type="file" class="form-control" accept="image/*" id="imgInp" name="image">
						<p>maksimum 3MB</p>
						<img id="blah" class="mt-2 mb-3" height="150" width="150" src="#" alt="preview gambar" />
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

<?php foreach($aktivitas as $edit) { ?>
	<div class="modal fade" id="edit<?= $edit->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin/ubah_aktivitas') ?>" name="form_edit" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Pilih Unit <span class="text-danger">*</span></label>
							<input type="hidden" name="id" value="<?= $edit->id ?>">
							<select class="form-control" id="unit_id_edit" name="unit_id">
								<option disabled selected>Pilih Unit</option>
								<?php foreach($unit as $val) { ?>
									<option <?php if ($edit->unit_id == $val->id) {
												echo "selected=\"selected\"";
											} ?> value="<?= $val->id ?>"><?= $val->name_unit ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Foto Kegiatan <span class="text-danger">*</span></label>
							<input type="hidden" class="form-control" value="<?= $edit->image ?>" name="old_image">
							<input type="file" class="form-control" accept="image/*" id="imgUpload" name="image">
							<p>maksimum 3MB</p>
							<img class="mt-2 mb-3" height="150" width="150" src="<?= base_url('assets/image/unit/activity/' . $edit->image) ?>" alt="preview gambar" />
							<img id="image_view" class="mt-2 mb-3" height="150" width="150" src="#" alt="preview gambar" />
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
<?php } ?>

<?php $this->load->view('partials/admin_footer.php') ?>
<script>
	$(document).ready(function() {

		$('.tombol-hapus').on('click', function(e) {
			e.preventDefault();
			const link = $(this).attr('href');

			Swal.fire({
				title: 'Apakah anda yakin ?',
				text: "Data kegiatan akan dihapus!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#d33',
				cancelButtonColor: '#898989',
				confirmButtonText: 'Hapus!'
			}).then((result) => {
				if (result.isConfirmed) {
					document.location.href = link;
				}
			})

		})

		$('#unit_id').select2();
		$('#unit_id_edit').select2();
		$('#blah').hide();
		$('#image_view').hide();
	
		imgInp.onchange = evt => {
			const [file] = imgInp.files
			if (file) {
				$('#blah').show();
				blah.src = URL.createObjectURL(file)
			}
		}
		
		imgUpload.onchange = evt => {
			const [file] = imgUpload.files
			if (file) {
				$('#image_view').show();
				image_view.src = URL.createObjectURL(file)
			}
		}

		$(function() {
			$("form[name='form_tambah']").validate({
				rules: {
					unit_id: {
						required: true
					},
					image: {
						required: true
					}
				},
				messages: {
					unit_id: {
						required: "unit wajib di isi"
					},
					image: {
						required: "foto kegiatan wajib di isi"
					}
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
		})
	
		$(function() {
			$("form[name='form_edit']").validate({
				rules: {
					unit_id: {
						required: true
					},
					image: {
						required: true
					}
				},
				messages: {
					unit_id: {
						required: "unit wajib di isi"
					},
					image: {
						required: "foto kegiatan wajib di isi"
					}
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
		})
	})

	<?php if ($this->session->flashdata('success_simpan')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'kegiatan unit berhasil disimpan!',
				showConfirmButton: true,
				// timer: 1500
			})
		<?php elseif ($this->session->flashdata('gagal_simpan')) : ?>
			Swal.fire({
				icon: 'error',
				title: 'Gagal!',
				text: 'Unit sekolah gagal disimpan!',
				showConfirmButton: true,
				// timer: 1500
			})

		<?php elseif ($this->session->flashdata('success_ubah')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'kegiatan unit berhasil diperbarui!',
				showConfirmButton: true,
				// timer: 1500
		})

		<?php elseif ($this->session->flashdata('success_hapus')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'kegiatan unit berhasil dihapus!',
				showConfirmButton: true,
				// timer: 1500
		})
		<?php endif ?>
</script>
