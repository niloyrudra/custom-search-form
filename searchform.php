<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="header-search-container">
	
	<div class="child-header-container">
		<div class="color-overlay"></div>
		<div class="search-container">
			<div class="search-content pb-1">
				<form role="search" name="s" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="mainSearchForm">
										
                	<div class="row search-bar-input-group">
						 
						<div class="col-10 col-md-9 pr-0 mb-4">
                        	<span class="twitter-typeahead" style="position: relative; display: inline-block;">
									<input id="mainKeywordInput" class="form-control tt-input" name="s" type="text" placeholder="Subject or qualification, eg. IT" maxlength="255">
									<pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
									<div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
										<div class="tt-dataset tt-dataset-0"></div>
									</div>
							</span>			
                        </div> <!-- .col-10 -->
											
                        <div class="col-2 col-md-3 pl-0">				
                        	<button id="headerSearchButton" class="btn btn-primary" type="submit">
                                <span class="d-none d-md-block">Search</span>
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
									$taxonomies = array( 'category', 'course' );
									foreach( $taxonomies as $taxonomy ) {
										$args = array(
											'child_of'            => 0,
											'current_category'    => 0,
											'depth'               => 0,
											'echo'                => 1,
											'exclude'             => '',
											'exclude_tree'        => '',
											'feed'                => '',
											'feed_image'          => '',
											'feed_type'           => '',
											'hide_empty'          => 1,
	// 										'hide_empty'          => 0,
											'hide_title_if_empty' => false,
											'hierarchical'        => true,
											'order'               => 'ASC',
											'orderby'             => 'name',
											//'separator'           => '<br />',
	// 										'separator'           => '|',
	// 										'show_count'          => 0,
											'show_count'          => 1,
											'show_option_all'     => '',
											'show_option_none'    => __( 'No categories' ),
											'style'               => 'list',
											'taxonomy'            => $taxonomy,
											'title_li'            => '',
											'use_desc_for_title'  => 1
										);

										wp_list_categories( $args );
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

</div> <!-- .header-search-container -->
