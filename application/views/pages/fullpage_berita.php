<?php $this->load->view('partials/pages_header'); ?>

<style>
.blog {
  padding: 40px 0 20px 0;
}

.blog .entry {
  padding: 30px;
  margin-bottom: 60px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .entry .entry-img {
  max-height: 440px;
  margin: -30px -30px 20px -30px;
  overflow: hidden;
}

.blog .entry .entry-title {
  font-size: 28px;
  font-weight: bold;
  padding: 0;
  margin: 0 0 20px 0;
}

.blog .entry .entry-title a {
  color: #545454;
  transition: 0.3s;
}

.blog .entry .entry-title a:hover {
  color: #028000;
}

.blog .entry .entry-meta {
  margin-bottom: 15px;
  color: #bababa;
}

.blog .entry .entry-meta ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  align-items: center;
  padding: 0;
  margin: 0;
}

.blog .entry .entry-meta ul li+li {
  padding-left: 20px;
}

.blog .entry .entry-meta i {
  font-size: 16px;
  margin-right: 8px;
  line-height: 0;
}

.blog .entry .entry-meta a {
  color: #777777;
  font-size: 14px;
  display: inline-block;
  line-height: 1;
}

.blog .entry .entry-content p {
  line-height: 24px;
}

.blog .entry .entry-content .read-more {
  -moz-text-align-last: right;
  text-align-last: right;
}

.blog .entry .entry-content .read-more a {
  display: inline-block;
  background: #e96b56;
  color: #fff;
  padding: 6px 20px;
  transition: 0.3s;
  font-size: 14px;
  border-radius: 4px;
}

.blog .entry .entry-content .read-more a:hover {
  background: #ec7f6d;
}

.blog .entry .entry-content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog .entry .entry-content blockquote {
  overflow: hidden;
  background-color: #fafafa;
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog .entry .entry-content blockquote p {
  color: #444444;
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog .entry .entry-content blockquote::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: #545454;
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog .entry .entry-footer {
  padding-top: 10px;
  border-top: 1px solid #e6e6e6;
}

.blog .entry .entry-footer i {
  color: #a1a1a1;
  display: inline;
}

.blog .entry .entry-footer a {
  color: #616161;
  transition: 0.3s;
}

.blog .entry .entry-footer a:hover {
  color: #e96b56;
}

.blog .entry .entry-footer .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog .entry .entry-footer .cats li {
  display: inline-block;
}

.blog .entry .entry-footer .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog .entry .entry-footer .tags li {
  display: inline-block;
}

.blog .entry .entry-footer .tags li+li::before {
  padding-right: 6px;
  color: #6c757d;
  content: ",";
}

.blog .entry .entry-footer .share {
  font-size: 16px;
}

.blog .entry .entry-footer .share i {
  padding-left: 5px;
}

.blog .entry-single {
  margin-bottom: 30px;
}

.blog .blog-author {
  padding: 20px;
  margin-bottom: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .blog-author img {
  width: 120px;
  margin-right: 20px;
}

.blog .blog-author h4 {
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 0px;
  padding: 0;
  color: #545454;
}

.blog .blog-author .social-links {
  margin: 0 10px 10px 0;
}

.blog .blog-author .social-links a {
  color: rgba(84, 84, 84, 0.5);
  margin-right: 5px;
}

.blog .blog-author p {
  font-style: italic;
  color: #000;
}

.blog .blog-comments {
  margin-bottom: 30px;
}

.blog .blog-comments .comments-count {
  font-weight: bold;
}

.blog .blog-comments .comment {
  margin-top: 30px;
  position: relative;
}

.blog .blog-comments .comment .comment-img {
  margin-right: 14px;
}

.blog .blog-comments .comment .comment-img img {
  width: 60px;
}

.blog .blog-comments .comment h5 {
  font-size: 16px;
  margin-bottom: 2px;
}

.blog .blog-comments .comment h5 a {
  font-weight: bold;
  color: #444444;
  transition: 0.3s;
}

.blog .blog-comments .comment h5 a:hover {
  color: #e96b56;
}

.blog .blog-comments .comment h5 .reply {
  padding-left: 10px;
  color: #545454;
}

.blog .blog-comments .comment h5 .reply i {
  font-size: 20px;
}

.blog .blog-comments .comment time {
  display: block;
  font-size: 14px;
  color: #6e6e6e;
  margin-bottom: 5px;
}

.blog .blog-comments .comment.comment-reply {
  padding-left: 40px;
}

.blog .blog-comments .reply-form {
  margin-top: 30px;
  padding: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .blog-comments .reply-form h4 {
  font-weight: bold;
  font-size: 22px;
}

.blog .blog-comments .reply-form p {
  font-size: 14px;
}

.blog .blog-comments .reply-form input {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .blog-comments .reply-form input:focus {
  box-shadow: none;
  border-color: #f5bab0;
}

.blog .blog-comments .reply-form textarea {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .blog-comments .reply-form textarea:focus {
  box-shadow: none;
  border-color: #f5bab0;
}

.blog .blog-comments .reply-form .form-group {
  margin-bottom: 25px;
}

.blog .blog-comments .reply-form .btn-primary {
  border-radius: 4px;
  padding: 10px 20px;
  border: 0;
  background-color: #545454;
}

.blog .blog-comments .reply-form .btn-primary:hover {
  background-color: #616161;
}

.blog .blog-pagination {
  color: #878787;
}

.blog .blog-pagination ul {
  display: flex;
  padding: 0;
  margin: 0;
  list-style: none;
}

.blog .blog-pagination li {
  margin: 0 5px;
  transition: 0.3s;
}

.blog .blog-pagination li a {
  color: #545454;
  padding: 7px 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.blog .blog-pagination li.active,
.blog .blog-pagination li:hover {
  background: #e96b56;
}

.blog .blog-pagination li.active a,
.blog .blog-pagination li:hover a {
  color: #fff;
}

.blog .sidebar {
  padding: 30px;
  margin: 0 0 60px 20px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .sidebar .sidebar-title {
  font-size: 20px;
  font-weight: 700;
  padding: 0 0 0 0;
  margin: 0 0 15px 0;
  color: #545454;
  position: relative;
}

.blog .sidebar .sidebar-item {
  margin-bottom: 30px;
}

.blog .sidebar .search-form form {
  background: #fff;
  border: 1px solid #ddd;
  padding: 3px 10px;
  position: relative;
}

.blog .sidebar .search-form form input[type=text] {
  border: 0;
  padding: 4px;
  border-radius: 4px;
  width: calc(100% - 40px);
}

.blog .sidebar .search-form form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 15px;
  margin: -1px;
  background: #e96b56;
  color: #fff;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  line-height: 0;
}

.blog .sidebar .search-form form button i {
  line-height: 0;
}

.blog .sidebar .search-form form button:hover {
  background: #eb7b68;
}

.blog .sidebar .categories ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .categories ul li+li {
  padding-top: 10px;
}

.blog .sidebar .categories ul a {
  color: #545454;
  transition: 0.3s;
}

.blog .sidebar .categories ul a:hover {
  color: #e96b56;
}

.blog .sidebar .categories ul a span {
  padding-left: 5px;
  color: #aaaaaa;
  font-size: 14px;
}

.blog .sidebar .recent-posts .post-item+.post-item {
  margin-top: 15px;
}

.blog .sidebar .recent-posts img {
  width: 80px;
  float: left;
}

.blog .sidebar .recent-posts h4 {
  font-size: 15px;
  margin-left: 95px;
  font-weight: bold;
}

.blog .sidebar .recent-posts h4 a {
  color: #545454;
  transition: 0.3s;
}

.blog .sidebar .recent-posts h4 a:hover {
  color: #028000;
}

.blog .sidebar .recent-posts time {
  display: block;
  margin-left: 95px;
  font-style: italic;
  font-size: 14px;
  color: #aaaaaa;
}

.blog .sidebar .tags {
  margin-bottom: -10px;
}

.blog .sidebar .tags ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .tags ul li {
  display: inline-block;
}

.blog .sidebar .tags ul a {
  color: #949494;
  font-size: 14px;
  padding: 6px 14px;
  margin: 0 6px 8px 0;
  border: 1px solid white;
  display: inline-block;
  transition: 0.3s;
}

.blog .sidebar .tags ul a:hover {
  color: #fff;
  border: 1px solid #e96b56;
  background: #e96b56;
}

.blog .sidebar .tags ul a span {
  padding-left: 5px;
  color: #ededed;
  font-size: 14px;
}
</style>

<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

	<div class="row">

	  <div class="col-lg-8 entries">

		<article class="entry entry-single">

		  <div class="entry-img">
			<img src="<?= base_url('assets/image/news/' . $berita->image) ?>" alt="" class="img-fluid">
		  </div>

		  <h2 class="entry-title">
			<a href="#"><?= $berita->title ?></a>
		  </h2>

			<?php 
			function month_indo($month)
				{
					switch($month) {
						case '01':
							return 'Januari';
						case '02':
							return 'Februari';
						case '03':
							return 'Maret';
						case '04':
							return 'April';
						case '05':
							return 'Mei';
						case '06':
							return 'Juni';
						case '07':
							return 'Juli';
						case '08':
							return 'Agustus';
						case '09':
							return 'September';
						case '10':
							return 'Oktober';
						case '11':
							return 'November';
						case '12':
							return 'Desember';
					}
				}
			?>

		  <div class="entry-meta">
			<ul>
			  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?= $berita->writer ?></a></li>
			  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><?= date('d', strtotime($berita->date)) . ' ' . month_indo(date('m', strtotime($berita->date))) . ' ' .  date('Y', strtotime($berita->date)) ?> </a></li>
			  <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a href="blog-single.html"><?= $dilihat ?> Dilihat</a></li>
			</ul>
		  </div>

		  <div class="entry-content">
			
		  <?= $berita->content ?>

		  </div>

		</article><!-- End blog entry -->


	  </div><!-- End blog entries list -->

	  <div class="col-lg-4">

		<div class="sidebar">

		  <h3 class="sidebar-title">Berita Terbaru</h3>
		  <div class="sidebar-item recent-posts">
			<?php foreach($new_news as $value) { ?>
				<div class="post-item clearfix">
					<img src="<?= base_url('assets/image/news/' . $value->image) ?>" alt="">
					<h4><a href="<?= base_url('Pages/full_berita/' . $value->slug) ?>"><?= $value->title ?></a></h4>
					<time datetime="2020-01-01"><?= date('d', strtotime($berita->date)) . ' ' . month_indo(date('m', strtotime($berita->date))) . ' ' .  date('Y', strtotime($berita->date)) ?></time>
				</div>
			<?php } ?>

		  </div><!-- End sidebar recent posts-->

		</div><!-- End sidebar -->

	  </div><!-- End blog sidebar -->

	</div>

  </div>
</section><!-- End Blog Single Section -->

<?php $this->load->view('partials/pages_footer'); ?>
