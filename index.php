<?php
/* SMOF TEST */

get_header(); ?>

	<article>

		<header class="entry-header">
			<h1>SMOF TEST</h1>
		</header><!-- .entry-header -->

		<div class="entry-content">

		<pre>
		<?php
		$data_r = print_r($smof_data, true);
		$data_r_sans = htmlspecialchars($data_r, ENT_QUOTES);
		echo $data_r_sans;

		?>


		</pre>
		<pre>
		<?php
/*
		$data_r = print_r($data, true);
		$data_r_sans = htmlspecialchars($data_r, ENT_QUOTES);
		echo $data_r_sans;
		*/
		?>


		</pre>

		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php get_footer(); ?>