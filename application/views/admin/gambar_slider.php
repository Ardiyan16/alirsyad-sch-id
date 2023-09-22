<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Gambar Slider</h4>
					<a href="#tambah" data-toggle="modal" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-plus"></i> Tambah Gambar</a> 
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Beranda</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Gambar Slider</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->


		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Data Gambar Slider</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th>No</th>
										<th>Gambar</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach($gambar as $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><img src="<?= base_url('assets/image/slider/' . $value->image) ?>" width="200"></td>
											<td>
												<a href="#gambar_view<?= $value->id ?>" data-toggle="modal" class="badge bg-success tombol-edit" style="color: #fff" title="Lihat Foto"><i class="fa fa-eye"></i></a>
												<a href="#edit<?= $value->id ?>" data-toggle="modal" class="badge bg-primary tombol-edit" style="color: #fff" title="Edit"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url('Admin/hapus_gambar/' . $value->id) ?>" class="badge bg-danger tombol-hapus" style="color: #fff" title="Hapus"><i class="fa fa-trash"></i></a>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Gambar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('Admin/simpan_gambar') ?>" method="post" enctype="multipart/form-data" name="form_gambar">
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" class="form-control" accept="image/*" id="imgInp" name="image">
						<p>maksimum 3MB</p>
						<img id="blah" class="mt-2 mb-3" height="150" width="150" src="#" alt="preview gambar" />
                    </div>
					<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
			</div>
		</div>
	</div>
</div>

<?php foreach($gambar as $edit) { ?>
	<div class="modal fade" id="edit<?= $edit->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Gambar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin/ubah_gambar') ?>" method="post" enctype="multipart/form-data" name="edit_gambar">
						<div class="form-group">
							<label>Gambar</label>
							<input type="file" class="form-control" accept="image/*" id="imgInp2" name="image">
							<input type="hidden" name="old_image" value="<?= $edit->image ?>">
							<input type="hidden" name="id" value="<?= $edit->id ?>">
							<?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
							<p>maksimum 3MB</p>
							<img class="mt-2 mb-3" width="150" src="<?= base_url('assets/image/slider/' . $edit->image) ?>" alt="Gambar Lama" title="gambar lama"/>
							<img id="blah2" class="mt-2 mb-3" width="150" src="#" alt="preview gambar" />
						</div>
						<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php foreach($gambar as $val) { ?>
	<div class="modal fade" id="gambar_view<?= $val->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?= $val->gambar ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="<?= base_url('assets/image/slider/' . $val->gambar) ?>" width="1000">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php $this->load->view('partials/admin_footer.php') ?>
<script>


	<?php if ($this->session->flashdata('success_simpan')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'Gambar slider berhasil disimpan!',
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
				text: 'Gambar berhasil diperbarui!',
				showConfirmButton: true,
				// timer: 1500
		})

		<?php elseif ($this->session->flashdata('login_dulu')) : ?>
			Swal.fire({
				icon: 'warning',
				title: 'Catatan!',
				text: 'Anda harus login terlebih dahulu!',
				showConfirmButton: true,
				// timer: 1500
		})

		<?php elseif ($this->session->flashdata('success_hapus')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'Gambar berhasil dihapus!',
				showConfirmButton: true,
				// timer: 1500
		})
		<?php endif ?>

	$(document).ready(function() {

		$('#blah').hide();
		$('#blah2').hide();

		imgInp.onchange = evt => {
			const [file] = imgInp.files
			if (file) {
				$('#blah').show();
				blah.src = URL.createObjectURL(file)
			}
		}
		
		imgInp2.onchange = evt => {
			const [file] = imgInp2.files
			if (file) {
				$('#blah2').show();
				blah2.src = URL.createObjectURL(file)
			}
		}

		$(function() {
			$("form[name='form_gambar']").validate({
				rules: {
					image: {
						required: true
					}
				},
				messages: {
					image: {
						required: "gambar harus di isi"
					}
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
    	});

		$('.tombol-hapus').on('click', function(e) {
			console.log('hai');
			e.preventDefault();
			const link = $(this).attr('href');

			Swal.fire({
				title: 'Apakah anda yakin ?',
				text: "Data gambar slider akan dihapus!",
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

</script>

