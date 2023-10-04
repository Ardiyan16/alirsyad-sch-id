<?php $this->load->view('partials/pages_header'); ?>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center py-5">
		<h1 class="display-2 text-light mb-4 animated slideInDown">Berita</h1>
		<nav aria-label="breadcrumb animated slideInDown">
			<ol class="breadcrumb justify-content-center mb-0">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Berita</a></li>
				<!-- <li class="breadcrumb-item text-light" aria-current="page">Pengumuman</li> -->
			</ol>
		</nav>
	</div>
</div>

<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
} 
?>

<?php foreach($berita as $value) { 
	$dilihat = $this->db->from('news_view')->where('news_id', $value->id)->count_all_results();
?>
	<div class="container-xxl py-5">
		<div class="container">
			<div class="row g-5">
				<div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
					<a href="<?= base_url('Pages/full_berita/' . $value->slug) ?>"><img class="img-fluid" src="<?= base_url('assets/image/news/' . $value->image) ?>" alt=""></a>
				</div>
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
					<div class="section-title">
						<p class="fs-5 fw-medium fst-italic text-primary"><i class="fa fa-calendar"></i> <?= tgl_indo($value->date) ?> | <i class="fa fa-pencil"></i> <?= $value->writer ?> | <i class="fa fa-eye"></i><?= $dilihat ?> dilihat</p>
						<a href="<?= base_url('Pages/full_berita/' . $value->slug) ?>"><h1 class="display-6"><?= $value->title ?></h1></a>
					</div>
					<p class="mb-4"><?= substr($value->content, 956, 200) ?>...</p>
					<a href="<?= base_url('Pages/full_berita/' . $value->slug) ?>" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php $this->load->view('partials/pages_footer'); ?>
