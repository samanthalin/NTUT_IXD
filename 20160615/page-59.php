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
		<div class="bannerB"><span>BANNER</span></div>
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
	$the_query = new WP_Query( array( 'post_type' => 'news', 'post_per_page' => -1 ) );
	if ( $the_query->have_posts() ) {
	
	
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<div class="news">';
					echo '<a href="';
					echo the_permalink();
					echo '" class="news-img">';
					the_post_thumbnail();
					echo '</a>';
					echo '</div>';
	}
	
	} else {
	// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata(); 
	?>


		<!-- <?php 
			//$counter = 0;
			//$category = new WP_Query(array('category_name' =>'news'));
			//while($category->have_posts()): $category->the_post();
				//if($counter==100){
				//	break;
				//}
				//if($counter==0){
				//	echo '<div class="news">';
				//	echo '<a href="';
				//	echo the_permalink();
				//	echo '" class="news-img">';
				//	the_post_thumbnail();
				//	echo '</a>';
				///	echo '</div>';
				//}
				//else{ 
				//	echo '<div class="news">';
				//	echo '<a href="';
				//	echo the_permalink();
				//	echo '" class="news-img">';
				//	the_post_thumbnail();
				//	echo '</a>';
				//	echo '</div>';
				//}
				
				//$counter++;
			//endwhile;
			wp_reset_postdata();
		;?> -->
		<!-- <div class="news"><div class="news-img"></div></div>
		<div class="news"><div class="news-img"></div></div>
		<div class="news"><div class="news-img"></div></div>
		<div class="news"><div class="news-img"></div></div>
		<div class="news"><div class="news-img"></div></div>
		<div class="news"><div class="news-img"></div></div>
		<div class="news"><div class="news-img"></div></div>
		<div class="news"><div class="news-img"></div></div> -->
	</div>
		
	<footer>
		<span>Copyright © 2015 NTUT IxD</span>
		<span>All Rights Reserved.</span>
		<span>1, Sec. 3, Zhongxiao E. Rd., Taipei 10608 Taiwan, R.O.C.</span>
		<span>Tel: 886-2-2771-2171#8903 </span>
		<span>Fax: 886-2-8773-2913</span>
	</footer>
</body>
</html>