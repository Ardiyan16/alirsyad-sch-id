<?php $this->load->view('partials/admin_header.php') ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Visi Misi</h4>
					<?php if (empty($data)) { ?>
						<a href="<?= base_url('Admin/tambah_visi_misi') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-plus"></i> Tambah Visi Misi</a> 
					<?php } else { ?>
						<a href="<?= base_url('Admin/tambah_visi_misi') ?>" class="btn btn-success btn-sm mt-4"><i class="fa fa-circle-plus"></i> Edit Visi Misi</a> 
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)"></a>Visi Misi</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Visi Misi</a></li>
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
									<li class="nav-item"><a href="#visi" data-toggle="tab" class="nav-link active show">Visi</a>
									</li>
									<li class="nav-item"><a href="#misi" data-toggle="tab" class="nav-link">Misi</a>
									</li>
								</ul>
								<div class="tab-content">
									<?php if(!empty($data)) { ?> 
										<div id="visi" class="tab-pane fade active show">
											<div class="my-post-content pt-3">
												<div class="row">
													<?= $data->visi ?>
												</div>
											</div>
										</div>
										<div id="misi" class="tab-pane fade">
											<div class="my-post-content pt-3">
												<div class="row">
													<?= $data->misi ?>
												</div>
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

<?php $this->load->view('partials/admin_footer.php') ?>
<script>
	<?php if ($this->session->flashdata('success_simpan')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'Visi misi berhasil disimpan!',
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
				text: 'Visi misi berhasil diperbarui!',
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
</script>
