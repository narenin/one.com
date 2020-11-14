<?php
//silence is golden


function whats_new_section_function(){
	$args = array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'category__in' => 2,
		'posts_per_page' => -1
	);
	$wp_query = new WP_Query($args);
	if($wp_query->have_posts()):
		while($wp_query->have_posts()):
			$wp_query->the_post(); 
			$postIDVal = get_the_ID();
			$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small_thumbnail', false );
			?>
			<div class="d-flex mb-2">
				<div class="img-thhum">
					<?php
					if(!empty($src)){
						?>
						<img src="<?php echo $src[0]; ?>" class="img-fluid news-thum-img" />
						<?php
					}
					?>
				</div>
				<div class="d-flex flex-column justify-content-between align-items-start ml-2">
					<p class="news-text">
						<?php
						echo get_the_title();
						?>
					</p>
					<p class="news-date"><?php echo get_the_date('M d, Y'); ?></p>
				</div>
			</div>
			<?php
		endwhile;
	endif;
	wp_reset_query();       
}
add_shortcode('add_whats_new','whats_new_section_function');

