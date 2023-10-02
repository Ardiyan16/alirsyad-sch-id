<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Prestasi Siswa</h4>
					<a href="<?= base_url('Admin/tambah_prestasi') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-plus"></i> Tambah Prestasi</a> 
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Prestasi Siswa</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Prestasi Siswa</a></li>
				</ol>
			</div>
		</div>
		<!-- row -->


		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Data Prestasi</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Siswa</th>
										<th>Jenis Lomba</th>
										<th>Prestasi</th>
										<th>Tingkat</th>
										<th>Penyelenggara</th>
										<th>Tanggal</th>
										<th>Keterangan</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach($prestasi as $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->student_name ?></td>		
											<td><?= $value->type_contest ?></td>		
											<td><?= $value->archievement ?></td>		
											<td><?= $value->level ?></td>		
											<td><?= $value->organizer_contest ?></td>
											<td><?= $value->date_contest ?></td>
											<td><?= $value->information ?></td>
											<td>
												<a href="<?= base_url('Admin/edit_prestasi/' . $value->id) ?>" class="badge bg-primary tombol-edit" style="color: #fff" title="Edit"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url('Admin/hapus_prestasi/' . $value->id) ?>" class="badge bg-danger tombol-hapus" style="color: #fff" title="Hapus"><i class="fa fa-trash"></i></a>
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

<?php $this->load->view('partials/admin_footer.php') ?>
<script>
	$(document).ready(function() {

		$('.tombol-hapus').on('click', function(e) {
			console.log('hai');
			e.preventDefault();
			const link = $(this).attr('href');

			Swal.fire({
				title: 'Apakah anda yakin ?',
				text: "Data prestasi akan dihapus!",
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
				text: 'prestasi siswa berhasil disimpan!',
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
