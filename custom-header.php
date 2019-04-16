<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php bloginfo('language'); ?>">

<head profile="http://gmpg.org/xfn/11">
	
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css"; ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
<script src="<?php echo bloginfo('template_url') ?>/js/min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<meta name="google-site-verification" content="u_trtuy0qHmDRmlcaUwUXLj5LrW6qqd3lS81fRZtIw8" />

<style>
.featuredpage img.thumbnail {
    width: 267px!important;height:120px!important;
}
.cat-posts-widget img.thumbnail {
    width: 90px!important;
    height: 90px!important;
}

@media (min-width:1200px){
#logo img {
    width: 500px!important;
    height: 136px!important;
}
}

</style>
<?php // MODIFIED BY CTC
wp_head();
?>
</head>

<body <?php body_class(); ?>>


<div id="outer-wrap">

	<div id="wrap">

		<div id="header">
			<div id="head-content" class="clearfix">
				<?php if ( get_option('solostream_site_title_option') == 'Image/Logo-Type Title' && get_option('solostream_site_logo_url') ) { ?>
					<div id="logo">
						<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option('solostream_site_logo_url'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
					</div>
				<?php } else { ?>
					<div id="sitetitle">
						<div class="title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div> 
						<div class="description"><?php bloginfo('description'); ?></div>
					</div>
				<?php } ?>
				<?php $post_types = get_post_types( array( 'public' => true, '_builtin' => false ) );
// 				print_r( $post_types);
				$taxonomy_objects = get_object_taxonomies( 'ajde_events', 'names' );
//    print_r( $taxonomy_objects); ?>
				<div class="head-banner468">
					<!-- Custom Search Form Starts -->
						
	<div class="child-header-container">
		<div class="color-overlay"></div>
		<div class="search-container">
			<div class="search-content pb-1">
				<form role="search" name="s" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="mainSearchForm">
										
                	<div class="row search-bar-input-group">
						 
						<div class="col-10 col-md-9 pr-0 mb-4">
                        	<span class="twitter-typeahead" style="position: relative; display: inline-block;">
									<input id="mainKeywordInput" class="form-control tt-input" name="s" type="text" placeholder="<?php _e("Find your course", "solostream"); ?>" maxlength="50" onfocus="if (this.value == '<?php _e("Enter Course Name", "solostream"); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e("Enter Search Terms", "solostream"); ?>';}" size="18" maxlength="50" name="s" id="searchfield" >
									<div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
										<div class="tt-dataset tt-dataset-0"></div>
									</div>
							</span>			
                        </div> <!-- .col-10 -->
											
                        <div class="col-2 col-md-3 pl-0">				
                        	<button id="headerSearchButton" class="btn btn-primary" type="submit">
                                <span class="d-none d-md-block"><?php _e("Search", "solostream"); ?></span>
                                <span class="d-md-none search-icon"></span>
                            </button>		
                        </div> <!-- .col-2 -->
						 
					</div> <!-- .search-bar-input-group -->
										
                </form>
				<hr>
			</div>
								
            <div class="row">
                 <div class="quick-links-container">
                     	<div class="swiper-container mobile-swiper">
											
                        	<div class="quick-links-swiper swiper-container-horizontal swiper-container-free-mode">
								<div class="swiper-wrapper">
						<?php

									$taxonomies = array( 'event_type', 'course' );
									foreach( $taxonomies as $taxonomy ) {
										wp_list_categories( array(
											'child_of'            => 0,
											'current_category'    => 0,
											'depth'               => 1,
											'echo'                => 1,
											'exclude'             => '',
											'exclude_tree'        => 1,
											'feed'                => '',
											'feed_image'          => '',
											'feed_type'           => '',
											'hide_empty'          => 1,
											'hide_title_if_empty' => false,
											'hierarchical'        => true,
											'order'               => 'ASC',
											'orderby'             => 'name',
											'show_count'          => 0,
											'show_option_all'     => '',
											'show_option_none'    => __( 'No categories' ),
											'style'               => 'list',
											'taxonomy'            => $taxonomy,
											'title_li'            => '',
											'use_desc_for_title'  => 1
										) );
									}
 													
						?>
								</div>
												
							</div> <!-- .quick-links-swiper -->
						</div> <!-- .swiper-container -->
						<div id="ct-left" class="quick-links-arrow quick-links-swiper-prev arrow-left display-none"></div>
                        <div id="ct-right" class="quick-links-arrow quick-links-swiper-next arrow-right"></div>
					</div>
				
				</div><!-- .row -->
			
			</div> <!-- .search-container -->
		</div> <!-- .header-container -->

					<!-- Custom Search Form Ends -->
				</div>
				
			</div>
		</div>

		<div id="topnavfix">
			<div class="limit clearfix">
				<?php if (has_nav_menu('topnav')) { ?>
					<ul class="clearfix">
						<?php wp_nav_menu(array('container'=>false,'theme_location'=>'topnav','fallback_cb'=>'nav_fallback','items_wrap'=>'%3$s')); ?>
						
					</ul>
				<?php } else { ?>
					<ul>
						<li id="home"<?php if (is_front_page()) { echo " class=\"current_page_item\""; } ?>><a href="<?php bloginfo('url'); ?>"><?php _e("Home", "solostream"); ?></a></li>
						<?php wp_list_pages('title_li='); ?>
						
					</ul>
				<?php } ?>
			</div>
		</div>

		<?php if ( get_option('solostream_show_catnav') == 'yes'  ) { ?>
		<div id="catnav">
			<div class="limit clearfix">
				<?php if (has_nav_menu('catnav')) { ?>
					<ul class="clearfix">
						<?php wp_nav_menu(array('container'=>false,'theme_location'=>'catnav','fallback_cb'=>'catnav_fallback','items_wrap'=>'%3$s')); ?>
					</ul>
				<?php } else { ?>
					<ul class="clearfix"><?php wp_list_categories('title_li='); ?></ul>
				<?php } ?>
			</div>
		</div>
		<?php } ?>

		<?php include (TEMPLATEPATH . '/banner728.php');