<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package studiowith
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->



         
	<div id="secondary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="grid-section" style="background-color: white; width: 100%;">

	<div class="content grid-container" style="width:85%;">
	<div class="sw-title">STUDIO WITH</div>
	<div class="sw-tag">Branding & Design</div>

	<!--  ================== MEDIA BOXES ================== -->
       
        <div id="grid" >
        	        

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <!-- <?php if ( have_posts() ) : ?> -->
      
			<?php
			// Start the loop.
			
			while ( have_posts() ) : the_post();

			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			$url = $thumb['0']; 
                       ?>
                       
                        <div class="media-box nature">
                    		
                    		<div class="media-box-image">
                        		<div data-thumbnail=<?= $url ?> ></div>
                        		<a href=<?= get_the_permalink() ?> >
                        		<div class="thumbnail-overlay">
                            			<div class="media-box-title sw-title"> <?= get_the_title() ?></div>
                            			<div class="media-box-text sw-tag"><?= get_the_excerpt() ?></div>
                        		</div>
                        		</a>
                    		</div>
                	</div>
           <?php
		       // get_template_part( 'content', get_post_format() );
  
			// End the loop.
			endwhile;


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );
		endif;
	   ?>

        </div><!-- #grid -->
        </div> <!-- #container -->
        </div> <!-- grid section -->
        </main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>