<?php
require_once 'database.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BeritaHu</title>
	<link rel="stylesheet" href="<?= BASE_URL . '/assets/css/style.css'; ?>">
</head>

<body>

	<!-- Header & Navigasi -->
	<header class="site-header">
		<div class="container">
			<a href="#" class="logo">Berita<span>Hu</span></a>

			<!-- Navigasi -->
			<nav class="main-nav">
				<ul>
					<li><a href="#">Berita</a></li>
					<li><a href="#">Teknologi</a></li>
					<li><a href="#">Ekonomi</a></li>
					<li><a href="#">Politik</a></li>
				</ul>
			</nav>

			<!-- Form Pencarian -->
			<form class="search-form">
				<input type="search" placeholder="Cari berita..." aria-label="Cari berita">
				<button type="submit">Cari</button>
			</form>

		</div>
	</header>

	<!-- Konten Utama -->
	<main class="site-main">
		<div class="container">

			<!-- Berita Utama (Headline) -->
			<section class="headline-section">
				<article class="headline-card">
					<img src="" alt="Gambar berita utama">
					<div class="headline-content">
						<span class="category">Ini kategori berita</span>
						<h2>Ini Judul Berita Utama</h2>
						<p class="excerpt">
							Ini deskripsi berita utama.
						</p>
						<span class="meta">Penulis/Publisher | Tanggal</span>
					</div>
				</article>
			</section>

			<!-- Layout Utama (Untuk semua berita) -->
			<div class="main-layout">

				<!-- Kolom Berita Terbaru -->
				<section class="latest-news">
					<h2 class="section-title">Berita Terbaru</h2>
					<div class="latest-news-list">
						<!-- Artikel Berita -->
						<article class="news-card">
							<img src="" alt="Gambar berita">
							<div class="news-content">
								<span class="category">Kategori</span>
								<h3>Judul</h3>
								<span class="meta">Penulis | Tanggal</span>
							</div>
						</article>
					</div>
				</section>

			</div><!-- .main-layout -->

		</div><!-- .container -->
	</main>

	<?php echo BASE_PATH ?>

	<!-- Footer -->
	<footer class="site-footer">
		<div class="container">
			<p class="copyright">&copy; 2025 Portal BeritaHu</p>
		</div>
	</footer>

</body>

</html>