<?php get_header(); ?>
	
	<header class="news-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="logo">
				<div class="nav-triangle">
					<i class="fa fa-bars menu-icon"></i>
				</div>
			</div>
		</a>
		<div class="title">最新消息</div>
	</header>
	<div class="banner">
		<div class="bannerA"></div>
		<div class="bannerB">
			<?php echo do_shortcode('[metaslider id=21]'); ?>
		</div>
		<div class="bannerC"></div>
	</div>
	<div class="filter">
		<a href="">Award News</a>
		<span>|</span>
		<a href="">competition News</a>
		<span>|</span>
		<a href="">Academic Activities</a>
		</br>
		<a href="">Internshop & employment</a>
		<span>|</span>
		<a href="">Scholarship</a>
		<span>|</span>
		<a href="">Exchange Student</a>
	</div>
		
	<div class="news-frame">

	<?php 
	$the_query = new WP_Query( array('cat' =>'5,6,15,16,17' ,'posts_per_page' => -1) );
	if ( $the_query->have_posts() ) {
	
	
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
			echo '<div class="news">';
			echo '<a href="';
			echo the_permalink();
			echo '" class="news-img">';
			the_post_thumbnail('medium');
			echo '</a>';
			echo '</div>';
	}
	
	} else {
	// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata(); 
	?>

	</div>
		
	<footer  class="news-footer">
		<span>Copyright © 2015 NTUT IxD</span>
		<span>All Rights Reserved.</span>
		<span>1, Sec. 3, Zhongxiao E. Rd., Taipei 10608 Taiwan, R.O.C.</span>
		<span>Tel: 886-2-2771-2171#8903 </span>
		<span>Fax: 886-2-8773-2913</span>
	</footer>
</body>
</html>