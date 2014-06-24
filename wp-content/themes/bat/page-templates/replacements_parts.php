<?php
/**
 * Template Name: Replacements Parts
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			
		<?php
			
			if ( have_posts() ) :
				
				while ( have_posts() ) : the_post();
					$post_id = get_the_ID();
					?>
<div class="section section-top">
	<div class="page-title">
		<h1 class="section-title t-nm col-sm-auto"><?php the_title(); ?></h1>
			<?php
			  $local_df =  of_get_option('local_dfw', 'no entry'); 
			  str_replace(' ', '', $local_df);
			  $toll_fr =  of_get_option('toll_free', 'no entry'); 
			  str_replace(' ', '', $toll_fr);
			?>
		
			<p class="section-subtitle col-sm-auto">local: <?php if($local_df!=""){?><?php echo $local_df; ?><?php } ?>, toll free: <?php if($toll_fr!=""){?><?php echo $toll_fr; ?><?php } ?> </p>

	</div>
</div>
<div class="t-content">
	<div class="container">
		<div class="section section-l4">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="title-l4"><?php the_subtitle(); ?></h2>
				</div>
				<div class="col-sm-12">
					<div class="t-col-2"> 	
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="section section-l3">
			<h3 class="title-grad">
				<span> BRANDS WE SERVICE </span>
			</h3>

			<ul class="list-bordered row">

			<?php

			if( have_rows('brands_we_serve') ): 

			while ( have_rows('brands_we_serve') ) : the_row();?>

				<li class="col-sm-6"><a href="<?php the_sub_field('brand_link'); ?>"><?php the_sub_field('brand_name'); ?></a></li>

			<?php 
			endwhile;

			else :

			endif;

			?>
			
			</ul>

		</div>
		<div class="section section-l3">
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-10">
							<h1 class="title-l4 t-md">BEST AMERICAN REPLACEMENT PARTS</h1>
						</div>
					</div>

					<ul class="list-bordered-lg">

					<?php
					//for a given post type, return all
					$post_type = 'trampoline';
					$tax = 'trampoline_cat';
					$tax_terms = get_terms($tax);
					if ($tax_terms) {
						foreach ($tax_terms  as $tax_term) {

							if($tax_term->slug == 'best-american-replacement-parts'){ //slug name
							    $args=array(
							      'post_type' => $post_type,
							      "$tax" => $tax_term->slug,
							      'post_status' => 'publish',
							      'posts_per_page' => 6,
							      'caller_get_posts'=> 1
							    );

							    $my_query = null;
							    $my_query = new WP_Query($args);
							    if( $my_query->have_posts() ) {
							    //  echo 'List of '.$post_type . ' where the taxonomy '. $tax . '  is '. $tax_term->name;
							      while ($my_query->have_posts()) : $my_query->the_post(); ?>

									<li>
										<a href="#" class="t-sm"><?php the_title(); ?></a>
										<p class="t-sm price"><strong>Sale Price: </strong><span class="t-green"> $165<span>.00</span></span></p>
									</li>

								<?php

								endwhile;
								wp_reset_query();
							    } 

							    else {
									// If no content, include the "No posts found" template.
									get_template_part( 'content', 'none' );

							    }
						  	}
						}
					}
					?>

					</ul>

				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-10">
							<h1 class="title-l4 t-md inset-top-md">SPRINGS</h1>
						</div>
					</div>
					<ul class="list-bordered-lg">

					<?php
					//for a given post type, return all
					$post_type = 'trampoline';
					$tax = 'trampoline_cat';
					$tax_terms = get_terms($tax);
					if ($tax_terms) {
						foreach ($tax_terms  as $tax_term) {

							if($tax_term->slug == 'spring'){ //slug name
							    $args=array(
							      'post_type' => $post_type,
							      "$tax" => $tax_term->slug,
							      'post_status' => 'publish',
							      'posts_per_page' => 6,
							      'caller_get_posts'=> 1
							    );

							    $my_query = null;
							    $my_query = new WP_Query($args);
							    if( $my_query->have_posts() ) {
							    //  echo 'List of '.$post_type . ' where the taxonomy '. $tax . '  is '. $tax_term->name;
							      while ($my_query->have_posts()) : $my_query->the_post(); ?>


						<li>
							<a href="#" class="t-sm"><?php the_title(); ?></a>
							<p class="t-sm price">
								<strong>Sale Price: </strong>
								<span class="t-green"> $2<span>.00</span></span>
								<span class="t-green"> ea</span>
								<span class="note"> (no minimum quantity)</span>
							</p>
						</li>

							<?php

								endwhile;
								wp_reset_query();
							    } 

							    else {
									// If no content, include the "No posts found" template.
									get_template_part( 'content', 'none' );

							    }
						  	}
						}
					}
					?>

					</ul>
				</div>
				</div>
			</div>
		</div>

	</div>
	<div class="section section-l2">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-10">
							<h1 class="title-l4 section-title">MEASURING INSTRUCTIONS</h1>
							<p class="t-gray">FRAME PADS</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<ol>

					<?php

					if( have_rows('measuring_instructions') ): 

					while ( have_rows('measuring_instructions') ) : the_row();?>

						<li><?php the_sub_field('instruction_span'); ?></li>

					<?php 
					endwhile;

					else :

					endif;

					?>

					</ol>
				</div>
				<div class="col-sm-5">
					<?php if ( has_post_thumbnail() ) {the_post_thumbnail();}  ?>
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
