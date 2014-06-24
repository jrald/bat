<?php
/**
 * Template Name: Company Name
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			
		<?php
			
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
					$post_id = get_the_ID();
					?>
<div class="section section-top title-l3">
	<div class="page-title">
	


		<h1 class="section-title t-nm col-sm-auto"><?php the_title(); ?></h1>
		<p class="section-subtitle col-sm-auto"><?php echo get_post_meta($post_id, 'badge_title', YES); ?></p>
	</div>
</div>

<div class="t-content">
	<div class="container">
		<div class="section section-l4">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-8">
							<h3 class="t-30 title-l1"><?php the_subtitle(); ?></h3>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-l3">
			<h3 class="title-grad"><span>DISCOVER OUR PRODUCTS</span></h3> 
			<div class="post-sm post-bordered">

				<ul class="post-listing">
					<?php foreach (get_terms('product_cat') as $cat) : ?>

					 	<li class="col-sm-3">
					 		<h4><?php echo $cat->name; ?></h4>
					 		<a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="t-mini">find out more</a>
					 		<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
					 	</li>
		
					<?php endforeach; ?>
				</ul>

			</div>
		</div>

		<div class="section section-testi-lg section-l3 text-center">
			<div class="avatar">
				<img src="<?php echo get_post_meta($post_id, 'ceo_avatar_link', YES); ?>" alt="" class="img-circle">
			</div>
			<blockquote class="blockquote-full"><?php echo get_post_meta($post_id, 'company_blockquote', YES); ?></blockquote>
			<div class="testi-info">
				<p class=""><?php echo get_post_meta($post_id, 'ceo_name', YES); ?></p>
				<p class=""><?php echo get_post_meta($post_id, 'company_name', YES); ?></p>
			</div>
		</div>
	</div>
	<div class="section section-testi section-l1 section-dark">
		<div class="container">
			<h1 class="section-title">OUR SATISFIED CLIENTS</h1>
			<div class="slider-testi">

				<?php 

				$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

				<div data-avatar="<?php echo $url; ?>" data-name='<?php echo the_title(); ?>' data-position="<?php echo the_subtitle(); ?>">
					<blockquote><?php the_content(); ?></blockquote>
				</div>
				
				 <?php  

				endwhile; ?>

			</div>
			
		</div>
	</div>

</div>

					<?php

				endwhile;

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();