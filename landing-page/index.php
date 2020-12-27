<div class="sidebar">
	<ul>
		<li><a href="#home" onclick="hide()">Home</a></li>
		<li><a href="#tentang" onclick="hide()">Tentang Kami</a></li>
		<li><a href="#galeri" onclick="hide()">Galeri Kami</a></li>
		<li><a href="#tim" onclick="hide()">Tim Kami</a></li>
		<li><a href="#kontak" onclick="hide()">Kontak Kami</a></li>
	</ul>
</div>

<?php get_header(); ?>

<div class="jumbotron1" id="home">
	<div class="card">
		<h1>Temukan <span>Website Terbaik</span> Di Sini</h1>
		<p>Cari desainer yang pas dihati dan temukan web design terbaik menurutmu</p>
		<a href="#tim" class="tim">Tim Kami</a> <a href="#kontak" class="">Kontak Kami</a>
	</div>
	<div class="card">
		<img src="wp-content/themes/landing-page/img/hero_right.png">
	</div>
</div>

<div class="cari">
<div id="search"><?php get_search_form(); ?></div>
</div>

<div class="jumbotron2" id="tentang">
	<div class="card">
		<img src="wp-content/themes/landing-page/img/belajar-di-cerdika-aja.png">
	</div>
	<div class="card">
		<h1>Tentang <span>Kami</span></h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit
		</p>
		<a href="#kontak">Kontak Kami</a>
	</div>
</div>


<div class="jumbotron3" id="galeri">
	<h1><span>Galeri</span> Kami</h1>
	<p>Galeri Kami berisi hasil website yang telah di buat dan website yang <br> paling populer di jaman modern saat ini</p>

	<div class="galeri">
		<?php echo do_shortcode('[Total_Soft_Portfolio id="1"]'); ?>
	</div>
</div>

<div class="banner">
</div>

<div class="jumbotron4" id="tim">
	<h1> Tim <span>Kami</span></h1>
	<p>Ini adalah tim yang bekerja di IDesign dan mereka telah bergerak di bidang website sekitar 10 tahun. Silahkan pilih <br> mereka untuk mendapatkan dasain website</p>

	
	<div class="body">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="card">
		<?php the_post_thumbnail(); ?>

		<div class="kotak">
			<h1><?php the_title(); ?></h1>
			<p><?php echo get_the_date(); ?></p>
		</div>
	</div>
		<?php endwhile; endif; ?>
	</div>
	
</div>


<div class="jumbotron5" id="kontak">
	<div class="card">
		<h1><span>Kontak</span> Kami</h1>
		<p>Klampisan, Sempukerep, Sidoharjo, Wonogiri</p>
		<p>+62 423 4231 5342</p>
		<p>www.idesign.com</p>
		<p>idesign@gmail.co</p>
	</div>
	<div class="card">
		<?php echo do_shortcode('[contact-form-7 id="94" title="Contact form 1"]'); ?>
	</div>
</div>

<div class="jumbotron6">
	<p>copyright &copy Aris Munandar <span>2020</span></p>
</div>



<script type="text/javascript">
	window.onscroll = function()
	{
		scrol();
	}

	var header = document.getElementById('header');

	function scrol()
	{

		if (window.pageYOffset >= 620 ) 
		{
			header.classList.add('fixed');
		}
		else
		{
			header.classList.remove('fixed');
		}

	}
</script>

<script type="text/javascript">
	var sidebar = document.querySelector('.sidebar');

	function show()
	{
		sidebar.style.left = "0%";
	}
</script>

<script type="text/javascript">
	var sidebar = document.querySelector('.sidebar');

	function hide()
	{
		sidebar.style.left = "100%";
	}
</script>
<!-- 
<main id="content">

<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>

<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?> -->