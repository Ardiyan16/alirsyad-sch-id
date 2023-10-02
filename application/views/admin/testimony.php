<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Testimoni</h4>
					<a href="#tambah" data-toggle="modal" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-plus"></i> Tambah Testimoni</a> 
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Testimoni</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Testimoni</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->


		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">List Testimoni</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Wali Murid</th>
										<th>Isi Testimoni</th>
										<th>Pekerjaan</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach($testimony as $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->parent_name ?></td>		
											<td><?= $value->testi ?></td>		
											<td><?= $value->work ?></td>		
											<td>
												<a href="#edit<?= $value->id ?>" data-toggle="modal" class="badge bg-primary tombol-edit" style="color: #fff" title="Edit"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url('Admin/hapus_testimoni/' . $value->id) ?>" class="badge bg-danger tombol-hapus" style="color: #fff" title="Hapus"><i class="fa fa-trash"></i></a>
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
	<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Testimoni</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('Admin/simpan_testimoni') ?>" name="form_tambah_testi" method="post">
					<div class="form-group">
						<label>Nama Wali Murid</label>
						<input type="text" class="form-control" name="parent_name">
                    </div>
					<div class="form-group">
						<label>Testimoni</label>
						<input type="text" class="form-control" name="testi">
                    </div>
					<div class="form-group">
						<label>Pekerjaan</label>
						<input type="text" class="form-control" name="work">
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

<?php foreach($testimony as $val) { ?>
	<div class="modal fade" id="edit<?= $val->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Testimoni</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin/update_testimoni') ?>" name="form_edit_testi" method="post">
						<div class="form-group">
							<label>Nama Wali Murid</label>
							<input type="hidden" class="form-control" name="id" value="<?= $val->id ?>">
							<input type="text" class="form-control" name="parent_name" value="<?= $val->parent_name ?>">
						</div>
						<div class="form-group">
							<label>Testimoni</label>
							<input type="text" class="form-control" name="testi" value="<?= $val->testi ?>">
						</div>
						<div class="form-group">
							<label>Pekerjaan</label>
							<input type="text" class="form-control" name="work" value="<?= $val->work ?>">
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

		$(function() {
			$("form[name='form_tambah_testi']").validate({
				rules: {
					parent_name: {
						required: true
					},
					testi: {
						required: true
					},
					work: {
						required: true
					}
				},
				messages: {
					parent_name: {
						required: "nama wali murid wajib di isi"
					},
					testi: {
						required: "testimoni wajib di isi"
					},
					work: {
						required: "Pekerjaan wajib di isi"
					}
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
    	});

		$(function() {
			$("form[name='form_edit_testi']").validate({
				rules: {
					parent_name: {
						required: true
					},
					testi: {
						required: true
					},
					work: {
						required: true
					}
				},
				messages: {
					parent_name: {
						required: "nama wali murid wajib di isi"
					},
					testi: {
						required: "testimoni wajib di isi"
					},
					work: {
						required: "Pekerjaan wajib di isi"
					}
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
    	});

		$('.tombol-hapus').on('click', function(e) {
			e.preventDefault();
			const link = $(this).attr('href');

			Swal.fire({
				title: 'Apakah anda yakin ?',
				text: "Data testimoni akan dihapus!",
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
	})

	<?php if ($this->session->flashdata('success_simpan')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'testimoni siswa berhasil disimpan!',
				showConfirmButton: true,
				// timer: 1500
			})
		<?php elseif ($this->session->flashdata('gagal_simpan')) : ?>
			Swal.fire({
				icon: 'error',
				title: 'Gagal!',
				text: 'Gambar slider gagal disimpan!',
				showConfirmButton: true,
				// timer: 1500
			})

		<?php elseif ($this->session->flashdata('success_ubah')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'prestasi siswa berhasil diperbarui!',
				showConfirmButton: true,
				// timer: 1500
		})

		<?php elseif ($this->session->flashdata('success_hapus')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'prestasi berhasil dihapus!',
				showConfirmButton: true,
				// timer: 1500
		})
		<?php endif ?>
</script>
