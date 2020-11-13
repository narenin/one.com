<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
?>
<article id="post-search">
	<header class="entry-header">
		<h1 class="page-title">
			<?php
			/* translators: %s: The search query. */
			printf( __( 'Search Results for : %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
			?>
		</h1>
	</header><!-- .page-header -->
	<!-- .entry-header -->

	<div class="entry-content">
		<div class="container">

			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 text-center">
					<div class="box-title">
						<p class="box-title-p"> 
							<?php 
							_e('Results');
							?>
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-12 ">
					<div class="box-container p-0">
						<div class="table-responsive">
							<table class="table table-borderless mb-0">


								<?php 

								$searchedKeyword = get_search_query();

								global $post;
// Get post types
								$args_first = array(
									'public' => true,
								);
								$post_types = get_post_types( $args_first, 'objects' );

								foreach ($post_types as $post_typeskey => $post_typesvalue){
									$final_post_typeskey[] = $post_typeskey;
								}

								$args = array(
									'post_type' => $final_post_typeskey,
									's' => $searchedKeyword,
								);
								$query = new WP_Query($args);
								
								if ( $query->have_posts() ) : ?>
									<?php
			            // Start the loop.
									while ( $query->have_posts() ) :
										$query->the_post();
										$title = get_the_title();
										$postType = get_post_type();

										$resultLink = get_the_permalink();
										if($postType == 'page'){
											_e('<tr><td><p><a href="'.$resultLink.'">'.$title.'</a></p></td>');
										}
										else{
											_e('<tr><td><p><a href="'.$resultLink.'">'.$title.'</a></p></td>');
										}
									endwhile;
								else:
									
								endif;
								?>
							</div>
						</div>
					</table>
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>
