<?php
/**
 * Template Name: Trampolines
 *
 */
get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
			//for a given post type, return all
			$post_type = 'trampoline';
			$counter = 1;
			$class = 'well-fieldgrass';
			$tax = 'trampoline_cat';
			$tax_terms = get_terms($tax);
			if ($tax_terms) {
				foreach ($tax_terms  as $tax_term) {

					if($tax_term->slug == 'sales'){ //slug name
					    $args=array(
					      'post_type' => $post_type,
					      "$tax" => $tax_term->slug,
					      'post_status' => 'publish',
					      'posts_per_page' => -1,
					      'caller_get_posts'=> 1
					    );

					    $my_query = null;
					    $my_query = new WP_Query($args);
					    if( $my_query->have_posts() ) {
					    //  echo 'List of '.$post_type . ' where the taxonomy '. $tax . '  is '. $tax_term->name;
					      while ($my_query->have_posts()) : $my_query->the_post(); 

					      if($counter==2){
					      	$class = "well-grass";
					      }
					      else if($counter==3){
					      	$class = "well-wood";
					      }

					      ?>
					        
							<div class="post post-lg">
								<div class="well well-pretty <?php echo $class; ?>">
								<span class="light-f"></span>
								<span class="light-b"></span>
									<div class="container">
										<div class="img-tolltip">
											<h2 class="img-tooltip-l"><?php the_title(); ?></h2>
											<p><?php the_subtitle(); ?></p>
											<a href="individual.php"><span class="right-carret">&nbsp;</span>Discover this model</a>
										</div>
										<div class="prod-info">
											<span class="price">Sale Price: <strong><?php the_field('trampoline_price_p'); ?></strong> </span>

											<?php
											$local_df =  of_get_option('local_dfw', 'no entry'); 
											str_replace(' ', '', $local_df);
											$toll_fr =  of_get_option('toll_free', 'no entry'); 
			  								str_replace(' ', '', $toll_fr);
											?>

											<ul class="contact-details">
												<li>Call for a shipping quote!</li>

												<li>local: <?php if($local_df!=""){?><?php echo $local_df; ?><?php } ?></li>
												<li>toll free: <?php if($toll_fr!=""){?><?php echo $toll_fr; ?><?php } ?></li>
											</ul>

										</div>
										<span class="feather f1"></span>
										<div class="post-img">
											<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
											}  ?>
										</div>
										<span class="feather f2"></span>
										<span class="feather f3"></span>
										<span class="feather f4"></span>
									</div>
									
								</div>
							</div>
						
						<?php
						$counter++;
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

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();?>