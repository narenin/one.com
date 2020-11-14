<?php
get_header();
?>
<div class="swiper-container" id="home_page_banner"> 
	<div class="swiper-wrapper">
		
		<?php
		$args_home = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'category__not_in' => 2,
			'posts_per_page' => -1
		);
		$wp_query_home = new WP_Query($args_home);
		$count = 1;
		if($wp_query->have_posts()):
			while($wp_query_home->have_posts()):
				$wp_query_home->the_post(); 
				$postIDVal = get_the_ID();
				?>


				<div class="swiper-slide hp_bg-img hp_bg-img-<?php echo $count; ?>" <?php if(get_the_post_thumbnail_url()){ ?> style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php } ?>>
					<div class="container mt-header">
						<div class="d-flex justify-content-between flex-column flex-md-row align-xs-center">
							<!-- Left Section -->
							<div class="d-flex flex-column justify-content-between meta_data">
								<div class="d-flex">
									<div class="d-flex align-items-center">
										<p class="mb-0 featured-box mr-2"><?php
										echo sprintf("%02d", $count);
										?></p>
										<p class="mb-0 color-white font-size-13"> - Featured</p>
									</div>
								</div>
								<div class="d-flex flex-column text-left">
									<p class="color-white font-size-12 mb-1"><?php 
									$categories = get_the_category();
									$separator = ' | ';
									$output = '';
									if ( ! empty( $categories ) ) {
										foreach( $categories as $category ) {
											$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										}
										echo trim( $output, $separator );
									}
									?></p>
									<h4 class="cat-title">
										<a href="<?php echo get_the_permalink(); ?>">
											<?php echo get_the_title(); ?>
										</a>
									</h4>
									<div class="d-flex info-text">
										<p class="mr-2">By <?php echo get_the_author(); ?></p>
										<span class="mar-5">*</span>
										<p class="mr-2"><?php echo get_the_date('M d, Y'); ?></p>
										<span class="mar-5">*</span>
										<p class=""><?php
										echo get_post_view_values();
										?></p>
									</div>
								</div>
							</div>
							<!-- #END Left Section -->
							<!-- Right Section -->
							<div class="news-section" id="style-1">
								<h3>What's hot!</h3>
								<?php 
								echo do_shortcode('[add_whats_new]'); 
								?>
							</div>
							<!-- #END Right Section -->
						</div>
					</div>
				</div>
				<?php
				$count++;
			endwhile;
		endif;
		wp_reset_query();
		?>
		<!-- <div class="swiper-slide hp_bg-img hp_bg-img-2">
			<div class="">

			</div>
		</div>
		<div class="swiper-slide hp_bg-img hp_bg-img-3">
			<div class="">

			</div>
		</div> -->
	</div>
	<div class="swiper-pagination"></div>
</div>
</div>
<!--  #END Main Header  -->
<?php
get_footer();
?>