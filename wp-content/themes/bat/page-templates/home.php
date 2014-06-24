<?php
/**
 * Template Name: Home Page
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
						<div class="slider slider-main">
							<div class="container">
								<?php the_content(); ?>
							</div>
						</div>

						<div class="section section-dark">
							<div class="container">
								<div class="stats">
									<div class="col-sm-4">
										<h1 class="t-huge js-count"><span><?php echo get_post_meta($post_id, 'years_of_experience', YES); ?></span></h1>
										<h3>Years of experience</h3>
									</div>
									<div class="col-sm-4">
										<h1 class="t-huge js-count">+<span><?php echo get_post_meta($post_id, 'satisfied_clients', YES); ?></span>K</h1>
										<h3>Satisfied clients</h3>
									</div>
									<div class="col-sm-4">
										<h1 class="t-huge js-count"><span><?php echo get_post_meta($post_id, 'products_in_our_offer', YES); ?></span></h1>
										<h3>Products in our offer</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="section section-l1">
							<div class="container">
								<h1 class="section-title">OUR TRAMPOLINES</h1>
								<div class="section section-l3">
									<div class="prod-feat">
										<div class="row">	
											<?php
											//for a given post type, return all
											$post_type = 'trampoline';
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

													      $image = get_field('home_page_display_image');
											
													      if( !empty($image) ):

													      ?>

															<div class="col-sm-12">
																<div class="prod-img"><img src="<?php echo the_field('home_page_display_image')['url'] ?>" alt="<?php echo $image['alt']; ?>" /></div>
																<h4><?php the_title(); ?></h4>
																<p><?php the_content(); ?></p>
															</div>

														<?php
														endif;
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
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section section-l2">
							<div class="container">	

								<div class="prod-feat-single">
									<?php query_posts('post_type=banner&post_status=publish&orderby=date&order=desc'); 
											if ( have_posts() ):
												while ( have_posts() ): the_post();

													$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<div class="owl-item">
										<h1 class="section-title col-sm-auto"><?php the_title(); ?></h1>
										<div class="prod-indoor">
											<img src="<?php echo $image[0] ?>">
										</div>
										<?php the_content(); ?>
									</div>
									<?php 
												endwhile;
												wp_reset_query();
											endif;
											?>
								</div>

								
							</div>
						</div>
						<div class="section section-l1">
							<div class="container">	
								<h1 class="section-title"><?php echo get_post_meta($post_id, 'opc_heading', YES); ?></h1>
								<p class="text-center section-subtitle"><?php echo get_post_meta($post_id, 'opc_content_desc', YES); ?></p>
								<ul class="client-feat">
									<?php 
									query_posts('post_type=partner_client&post_status=publish&orderby=date&order=desc'); 
									if ( have_posts() ):
									while ( have_posts() ): the_post();
										$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<li>
												<img src="<?php echo $image[0]; ?>">
												<div class="img-desc">
													<h3 class="t-sm"><?php the_title(); ?></h3>
													<p class="t-nano"><?php echo content(NO, 100, YES); ?></p>
												</div>
											</li>
										<?php 
										endwhile;
										wp_reset_query();
									endif;
									?>
								</ul>
							</div>
						</div>
						<div class="section section-dark">
							<div class="container">
								<div class="tabbed">
									<ul class="nav nav-tabs" data-scroll-reveal="enter top over .5s and move 70px after 0.4s">
										<li class=""><a href="#tab1"><span>Made in the usa</a></li>
										<li class=""><a href="#tab2"><span>Nationwide  Services</span></a></li>
										<li class=""><a href="#tab3"><span>Local Services</span></a></li>
										<li class=""><a href="#tab4"><span>Brand we serve</span></a></li>
									</ul>
									<div class="tab-content tab-map">
										<div class="tab-pane active">
											<div class="col-sm-5" data-scroll-reveal="enter left over .5s and move 70px after 0.8s">
												<div class="tab-desc" id="tab1">
													<h1>OUR PRODUCTS ARE MADE IN THE USA</h1>
													<p>We purchase all of our raw materials in the USA. We manufacture our products in the USA.</p>
													<p>We employ American workers. There has never been a more important time in history to support companies based here in America. We ask for your support, and in return you can expect superior products and customer care.</p>
												</div>
												<div class="tab-desc" id="tab2">
													<h1>NATION WIDE SERVICES</h1>
													<p><a href="">In-ground trampoline service</a>. We will work directly with your contractor to ensure your in-ground trampoline installation meet our specifications.</p>
													<ul class="tick">
														<li>Shipping directly to your home or place of business.</li>
														<li>Trampoline repair services.</li>
														<li>Pole vault, high jump pits, and stunt matting.</li>
														<li>Custom design & engineering, manufacturing & installation of indoor trampoline parks.</li>
													</ul>
												</div>
												<div class="tab-desc" id="tab3">
													<h1>LOCAL SERVICES</h1>
													<ul class="tick">
														<li>Full service <a href="">in-ground trampoline</a> installations.</li>
														<li>Delivery & installation offered for all of our rectangular trampoline models.</li>
														<li>Trampoline moving services.</li>
														<li>Trampoline repair services.</li>
													</ul>
												</div>
												<div class="tab-desc" id="tab4">
													<h1>BRAND WE SERVE</h1>
													<ul class="tick list-inline">
														<li><a href="">Best American Trampolines</a></li>
														<li><a href="">Sidlinger Trampolines</a></li>
														<li><a href="">Jumpking Trampolines</a></li>
														<li><a href="">AMF Trampolines</a></li>
														<li><a href="">NBF Trampolines</a></li>
														<li><a href="">Nissen Trampolines</a></li>
														<li><a href="">Texas Trampolines</a></li>
														<li><a href="">All American Trampolines</a></li>
														<li><a href="">Jump Sport Trampolines</a></li>
														<li><a href="">Super Trampoline</a></li>
														<li><a href="">Folding Trampolines</a></li>
														<li><a href="">In-Ground Trampolines</a></li>
													</ul>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="map-wrapper" data-scroll-reveal="enter right over .5s and move 70px after 0.4s">
													<img src="images/map.png">
													<div class="map-marker marker-us">
														<span class="map-name"><p class="t-mini">Dallas, Texas</p></span>
														<span class="pulse "></span>
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
								<!-- <div class="tabbed">
									<ul class="nav nav-tabs">
										<li class="active"><a href=""><span>Made in the usa</a></li>
										<li class=""><a href=""><span>Nationwide  Services</span></a></li>
										<li class=""><a href=""><span>Local Services</span></a></li>
										<li class=""><a href=""><span>Brand we serve</span></a></li>
									</ul>
									<div class="tab-content tab-map">
										<div class="tab-pane active">
											<div class="col-sm-5">
												<div class="map-desc">
													<h1>OUR PRODUCTS ARE MADE IN THE USA</h1>
													<p>We purchase all of our raw materials in the USA. We manufacture our products in the USA.</p>
													<p>We employ American workers. There has never been a more important time in history to support companies based here in America. We ask for your support, and in return you can expect superior products and customer care.</p>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="map-wrapper">
													<img src="images/map.png">
													<div class="map-marker marker-us">
														<span class="map-name"><p class="t-mini">Dallas, Texas</p></span>
														<span class="pulse "></span>
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div> -->
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
