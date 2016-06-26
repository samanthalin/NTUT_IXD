<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



<div id="index" class="container">
		<div class="frame">
			<div class="boxA">
				<!-- <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> -->
				<!-- logo 
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home"></a>-->
            <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
            <script src="<?php bloginfo('template_directory') ?>/js/Nav/jquery.fatNav.min.js"></script>
					<div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <script pagespeed_no_defer="">
//<![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://52.193.106.120/filemanager/index.php?explorer/fileDownload&path=%252Fopt%252Fbitnami%252Fapps%252Fwordpress%252Fhtdocs%252Fabout%252Findex.html','Ez0F1MDYS1',true,false,'PVWAFMd77l4');
//]]></script>
                  <!--<img src="<?php bloginfo('template_directory') ?>/img/IXD_logo.png" pagespeed_url_hash="3384689151" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
                        </a>
                        <div class="logo-text">
                            <div class="topNav-icon"><i class="fa fa-bars menu-icon"></i></div>
                        </div>
					</div>
                    <div class="pc-version hometopNav topNav open">
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about">系所資訊</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/news1">最新消息</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/work1">學生作品</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>teacher">系所成員</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>document">下載專區</a></li>
                        </ul>
                        <div class="topNav-word">
                            <a href=""><div class="zh"></div></a>
                            <a href=""><div class="en"></div></a>
                        </div>
                    </div>
                    <div class="mobile-version fat-nav">
                        <div class="fat-nav__wrapper">
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about">系所資訊</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/news1">最新消息</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/work1">學生作品</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>teacher">系所成員</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>document">下載專區</a></li>
                            </ul>
                        </div>
                    </div>
				
                <!-- Nav Menu -->
                <script src="<?php bloginfo('template_directory') ?>/js/Nav/nav-for-pages.js"></script>
                <script src="<?php bloginfo('template_directory') ?>/js/Nav/nav-set.js"></script>

                <!-- about -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>about" class="about-link">
                    <div class="about">
                        <div class="about-img"></div>
                        <img src="<?php bloginfo('template_directory')?>/img/intro-title.png" class="about-title">
                        <div class="about-text">
                            本系的目標，旨在培養學生具備上述各產業發展應有的基本能力與競爭能力，培育學生具有帶得走的能力，不但能夠整合設計與藝術、而且能夠應用數位科技於互動媒體設計專業。
                        </div>
                    </div>
                </a>
					</div>

			<div class="boxB">
				
				<!-- banner -->
				<div class="banner">
					<?php echo do_shortcode('[metaslider id=936]'); ?>
				</div>

				<!-- news -->
				<div class="news">
					<?php
					$counter = 0;
					$category = new WP_Query(array('category_name' =>'news1'));
					while($category->have_posts()): $category->the_post();
						if($counter==1){
							break;
						}
						if($counter==0){
                        ?>
                        <figure>
                              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                              <img src="<?php echo $url?>" alt="img01" class="news-img" />
                              <figcaption class="news-content">
                                 <div class="news-text">
                                     <div class="news-name">最新消息</div>
                                     <div class="news-title"><?php the_title();?>
                                 </div>
                                 <a class="news-img-url" href="<?php echo esc_url( home_url( '/' ) )?>category/news1"></a>
                              </figcaption>
                         </figure>

                            <!--
                            echo '<figure>';
							echo '<a href="';
							esc_url( home_url( '/' ) );
							echo 'category/news1';
							echo '" class="news-img">';
							the_post_thumbnail('thumbnail');
							echo '<div class="news-text">';
							echo '<div class="news-title">';
							the_title();
							echo '</div>';
							echo '</div>';
							echo '</a>';
                            -->
                    <?php
						}
						else{ 
                            ?>
                            
                            <figure>
                              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                              <img src="<?php echo $url?>" alt="img01" />
                              <figcaption>
                                 <a href="<?php the_permalink();?>" class="news-img"></a>
                              </figcaption>
                           </figure>

                            <!--
							echo '<a href="';
							echo the_permalink();
							echo '">';
							the_post_thumbnail();
							echo '</a>';
                            -->
                    <?php
						}
						
						$counter++;
				endwhile;
				wp_reset_postdata();
				;?>

				</div>
				
				<!-- award -->
				<div class="award">
					<?php echo do_shortcode('[metaslider id=937]'); ?>
				</div>
				
			</div>

			<div class="boxC">
				
				<!-- admission -->
				<div class="admission">
					<div class="admission-triangle"></div>
					<div class="admission-title"><img src="<?php bloginfo('template_directory')?>/img/admission.png" width="60%"></div>
					<a href="http://www.cc.ntut.edu.tw/~wwwoaa/entrance/high5/index.htm" class="bachelor">學士班入學</a>
					<a href="http://graduate.cc.ntut.edu.tw/" class="master">碩博班入學</a>
					<a href="http://wwwoce.ntut.edu.tw/files/11-1009-4849.php" class="excutive">進修部入學</a>
				</div>
				
				<!-- resource -->
				<div class="resource">
					<div class="resource-title">設計資源連結</div>
					<a href="https://dribbble.com/"><div class="link dribble">Dribble</div></a>
					<a href="https://www.pinterest.com/"><div class="link pinterest">Pinterest</div></a>
					<a href="http://www.wix.com/"><div class="link wix">Wix</div></a>
					<a href="https://www.behance.net/"><div class="link behance">Behance</div></a>
					<a href="https://creativemarket.com/"><div class="link creative-market">Creative Market</div></a>
					<a href="http://www.justfont.com/"><div class="link justfont">JustFont</div></a>
					<a href="http://www.pixeden.com/"><div class="link pixeden">Pixeden</div></a>
					<a href="http://www.awwwards.com/"><div class="link awwwards">Awwwards</div></a>
					<a href="http://colorhunt.co/"><div class="link color-hunt">Color Hunt</div></a>
				</div>
				<footer class="news-footer">
					<div class="info">
						<p>Copyright <i class="fa fa-copyright"></i> 2015 NTUT IxD <span>All Rights Reserved.</span></p>
						<p>No.1, Sec. 3, Chongziao E. Rd., Taipei 10608 Taiwan, R.O.C.</p>
						<p>Tel: 886-2-2771-2171#8903</p>
						<p>Fax: 886-2-87732913</p>
					</div>
					
				</footer>
			</div>
		</div>
	</div>

    <!-------------------------------------------    Font   ------------------------------------------------------------>
    <script src="https://use.typekit.net/buy8zro.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-------------------------------------------  Font End  ----------------------------------------------------------->
	

<?php get_footer(); ?>