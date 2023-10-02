<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Berita</h4>
					<a href="<?= base_url('Admin/tambah_berita') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-plus"></i> Tambah Berita</a> 
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Berita</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Berita</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->


		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">List Berita</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th>No</th>
										<th>Judul</th>
										<th>Tanggal</th>
										<th>Penulis</th>
										<th>Gambar</th>
										<th>Tag</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach($berita as $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->title ?></td>		
											<td><?= date('d-m-Y', strtotime($value->date)) ?></td>		
											<td><?= $value->writer ?></td>		
											<td><img src="<?= base_url('assets/image/news/' . $value->image) ?>" width="100"></td>		
											<td><?= $value->tag ?></td>
											<td>
												<a href="#detail_berita<?= $value->id ?>" data-toggle="modal" class="badge bg-success" style="color: #fff" title="Detail Berita"><i class="fa fa-eye"></i></a>
												<a href="<?= base_url('Admin/edit_berita/' . $value->slug) ?>" class="badge bg-primary tombol-edit" style="color: #fff" title="Edit"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url('Admin/hapus_berita/' . $value->id) ?>" class="badge bg-danger tombol-hapus" style="color: #fff" title="Hapus"><i class="fa fa-trash"></i></a>
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
<?php foreach($berita as $value) { ?>
	<div class="modal fade" id="detail_berita<?= $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Detail Berita</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="color: #000;">
					<?= $value->content ?>
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
			console.log('hai');
			e.preventDefault();
			const link = $(this).attr('href');

			Swal.fire({
				title: 'Apakah anda yakin ?',
				text: "Data berita akan dihapus!",
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
				text: 'berita berhasil disimpan!',
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
				text: 'berita berhasil diperbarui!',
				showConfirmButton: true,
				// timer: 1500
		})

		<?php elseif ($this->session->flashdata('success_hapus')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'berita berhasil dihapus!',
				showConfirmButton: true,
				// timer: 1500
		})
		<?php endif ?>
</script>
