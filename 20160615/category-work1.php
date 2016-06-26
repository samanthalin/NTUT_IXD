<!--------------------------------------------- Header ---------------------------------------------------->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/img/favicon.png">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/WorksCSS.css">
    <!-- Nav Menu -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/Nav/download-1.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/Nav/jquery.fatNav.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/Nav/nav.css">
    <!--Popup modal-->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <!--Img Grid-->
    <script src="<?php bloginfo('template_directory') ?>/js/Grid/jquery.row-grid.min.js"></script>
    <!--Filter-->
    <!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <!----------------------------------- Fliter ---------------------------------------------------------------->
    <!--[if lt IE 9]>
        <script src=" http//html5shim.googlecode.com/svn/trunk/html5.js"></script>a
    <![endif]-->
    

    <script>
    (function ($) {
            $(document).ready(function () {
                $(function () {
                    $('.container').mixItUp();
                });
            });
	}(jQuery));
    </script>
    <!----------------------------------- /Fliter ---------------------------------------------------------------->


    <!--<link href="<?php bloginfo('template_directory') ?>/style.css" media="screen" rel="stylesheet" type="text/css" />-->
</head>

<body>
    <!-- Nav Menu -->
    <!--<script src="<?php bloginfo('template_directory') ?>/js/Nav/jquery-1.12.0.min.js"></script>-->
    <script src="<?php bloginfo('template_directory') ?>/js/Nav/jquery.fatNav.min.js"></script>

    <div class="Loading">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
    </div>

    <div class="main">
        <section>
            <header>
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <script pagespeed_no_defer="">
//<![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://52.193.106.120/filemanager/index.php?explorer/fileDownload&path=%252Fopt%252Fbitnami%252Fapps%252Fwordpress%252Fhtdocs%252Fabout%252Findex.html','Ez0F1MDYS1',true,false,'PVWAFMd77l4');
//]]></script>
                        <!--<img src="<?php bloginfo('template_directory') ?>/img/IXD_logo.png" pagespeed_url_hash="3384689151" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
                    </a>
                    <div class="logo-text">
                        <div class="topNav-icon"><i class="fa fa-bars"></i></div>
                    </div>
                </div>
                <div class="pc-version topNav">
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
                <div class="title">學生作品</div>
            </header>
        </section>
    </div>

    <!-- Nav Menu -->
    <script src="<?php bloginfo('template_directory') ?>/js/Nav/nav-for-pages.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/Nav/nav-set.js"></script>

<!--------------------------------------------- /Header ---------------------------------------------------->
    <div id="qs1" class="queueslider">
        <ul class="queue">
            <li><img src="http://www.ixd.ntut.edu.tw/wp-content/uploads/2016/05/2013-國際工作營.jpg" />
                <div class="queue_title">2013 國際工作營</div>
            </li>
            <li><img src="http://www.ixd.ntut.edu.tw/wp-content/uploads/2016/05/2014-新一代設計展.jpg" />
                <div class="queue_title">2014 新一代設計展</div>
            </li>
            <li><img src="http://www.ixd.ntut.edu.tw/wp-content/uploads/2016/05/2015-畏什麼展.jpg" />
                <div class="queue_title">2015 畏什麼展</div>
            </li>
        </ul>
    </div>
    <!--
    <ul id="filters" class="Newsfilter clearfix">
        <li><span class="filter" data-filter=".work1">All</span></li>
        <li><span>|</span></li>
        <li><span class="filter" data-filter=".bachelor">Bachelor</span></li>
        <li><span>|</span></li>
        <li><span class="filter" data-filter=".master">Master</span></li>
    </ul>
    -->
    <ul id="filters" class="Newsfilter clearfix">
        <li><span class="filter"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/work1" target="_self">全部作品</a></span></li>
        <li><span>|</span></li>
        <li><span class="filter"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/work1/bachelor" target="_self">學士班</a></span></li>
        <li><span>|</span></li>
        <li><span class="filter"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/work1/master" target="_self">碩士班</a></span></li>
    </ul>


    <div class="works-content">
        <div class="container">
           <!--<?php $the_query = new WP_Query( array('cat' =>'13' ,'posts_per_page' => -1) ); ?>--> 
            <?php $the_query = new WP_Query( array('cat' =>'68,69' ,'posts_per_page' => -1) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ): ?>
            <?php $the_query->the_post(); ?>
            <div class="item mix news <?php foreach(get_the_category() as $category) { echo $category->slug . ' ';} ?>">
                <!--get category-->
                <figure class="thumbnailhover">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                    <?php $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" ); //resize the feature img
                          $image_width = $image_data[1]; 
                          $image_height = $image_data[2];
                          $image_width = $image_width/($image_height/280); //$image_height/img.height
                    ?>
                    
                    <img src="<?php echo $url ?>" width="<?php echo $image_width?>" height="280" />
                    <?php endif; ?>
                    <figcaption>
                        <h4><?php the_time('m ,j ,Y'); ?></h4>
                        <h2><?php the_title(); ?></h2>
                    </figcaption>
                    <a id="Modal01" class="Modal-link animatedModal" href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>"></a>
                </figure>
                
            </div>
            <?php endwhile?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <script>
        jQuery(document).ready(function ($) {
                $(function () {
                    $(".container").rowGrid({
                        itemSelector: ".item",
                        minMargin: 5,
                        maxMargin: 10,
                        resize: true,
                        lastRowClass: "last-row",
                        firstItemClass: "first-item"
                    });
                });
            });
    </script>
    <!------------------------------- Modal --------------------------------------------->

    <!--DEMO01-->
    <div id="animatedModal">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
        <div class="border1">
            <div class="border2">
                <div class="animatedModal-content">

                    <div class="close-animatedModal">
                        <!--<img class="close-animatedModal-img" src="<?php bloginfo('template_directory') ?>/img/cross_circle_gray.svg">-->
                    </div>

                    <div class="modal-content">
                        <!--Your modal content goes here-->
                        <div id="single-post-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="<?php bloginfo('template_directory') ?>/js/Modal/animatedModal.min.js"></script>


    <script type="text/javascript">
        $("#Modal01").animatedModal({
            color: 'rgba(0, 0, 0, 0.70)',
        });
    </script>

    <!--------------------------------- Loading post content ------------------------------------------>
    <script>
      $(document).ready(function(){

        $.ajaxSetup({cache:false});
        $(".Modal-link").click(function () {
            var post_link = $(this).attr("href");

            $("#single-post-container").html("content loading");
            $("#single-post-container").load(post_link);
        return false;
        });

     });
    </script>
    <!--------------------------------- /Loading post content ------------------------------------------>
    <!-------------------------------------------Slider------------------------------------------------------------->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <!--<script>window.jQuery || document.write('<script src="jquery-1.11.0.min.js"><\/script>')</script>-->
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.queueslider.min.js"></script>
    <script defer>
      (function($) {
          $(window).bind('load', function() {
             $('div#qs1').queueSlider({
               fade: 0.3,
               transitionSpeed: 300,
               speed: 5000,
               direction: 1,
               autoHeight: false,
               offScreen: false,
               previous: 'v',
               next: 'v'
            });
        });
      }(jQuery));
    </script>
    <!-------------------------------------------Slider End------------------------------------------------------------->
    <!-------------------------------------------Loading ------------------------------------------------------------>

    <script>
        $(window).load(function () {
            $(".Loading").fadeOut("slow");
        });
    </script>

    <!-------------------------------------------Loading End------------------------------------------------------------>
   <?php get_footer('new1'); ?>
