<?php
/**
 * Template Name: Contacts
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
<div class="section section-top section-top-lg">
	<div class="page-title">
		<h1 class="section-title t-nm col-sm-auto"><?php the_title(); ?></h1>
		<p class="section-subtitle col-sm-auto"><?php the_subtitle(); ?></p>
	</div>
</div>

<div class="t-content">
	<div class="container">
		<div class="well-blue offset-top-md">
			<?php
			  $local_df =  of_get_option('local_dfw', 'no entry'); 
			  str_replace(' ', '', $local_df);
			  $toll_fr =  of_get_option('toll_free', 'no entry'); 
			  str_replace(' ', '', $toll_fr);
			?>

			<span>
			<h1>Local DFW customers call: 
			<?php if($local_df!=""){?>
			<strong><?php echo $local_df; ?></strong>
			<?php } ?>
			</h1>
			</span>
			<span>
			<h1>Out of area call toll free: 
			<?php if($toll_fr!=""){?>
			<strong><?php echo $toll_fr; ?></strong>
			<?php } ?>
			</h1>
			</span>
		</div>
	</div>
	<div class="section-l1">
		<div class="container">
			<?php
			  $comp_add =  of_get_option('complete_address', 'no entry'); 
			  str_replace(' ', '', $comp_add);
			  $email_adds =  of_get_option('email_add', 'no entry'); 
			  str_replace(' ', '', $comp_add);
			  $op_hour =  of_get_option('op_hours', 'no entry'); 
			  str_replace(' ', '', $comp_add);
			?>

			<div class="row">
				<div class="col-sm-4">
					<h4><b>Address:</b></h4>
				<?php if($comp_add!=""){?>
					<h4 class="t-sm"><?php echo $comp_add; ?></h4>
				<?php } ?>
				</div>
				<div class="col-sm-4">
					<h4><b>Email Us:</b></h4>
				<?php if($email_adds!=""){?>
					<h4 class="t-sm">Enquiries: <?php echo $email_adds; ?></h4>
				<?php } ?>
				</div>
				<div class="col-sm-4">
					<h4><b>Hours of Operation:</b></h4>
				<?php if($op_hour!=""){?>
					<h4 class="t-sm"><?php echo $op_hour; ?></h4>
				<?php } ?>
				</div>
			</div>


		</div>
	</div>
	<div class="section section-l5">
		<div class="container">
			<div class="row">
				<div class="address-bubble" style="background: url('<?php if ( has_post_thumbnail() ) {the_post_thumbnail();}  ?>');">
					<?php
					  $street =  of_get_option('street_address', 'no entry'); 
					  str_replace(' ', '', $street);
					  $state =  of_get_option('state_span', 'no entry'); 
					  str_replace(' ', '', $state);
					  $zip =  of_get_option('zip_code', 'no entry'); 
					  str_replace(' ', '', $zip);
					?>
					<span class="bubble">
					<?php if($street!=""){?>
						<h3><?php echo $street; ?></h3>
					<?php } ?>
					<?php if($state!="" || $zip!=""){?>
						<h3><?php echo $state; ?> <?php echo $zip; ?></h3>
					<?php } ?>
					</span>
				</div>
			</div>
		</div>  
	</div>  
	 
	<div class="section	section-l2">
		<div class="container">
			<h1 class="section-title">EMAIL US</h1>
			<div class="row">
				<?php echo do_shortcode('[contact-form-7 id="77" title="Contact form 1"]'); ?>
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
