<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class="grid-section" style="background-color: white; width: 100%;">

		<div class="content grid-container" style="width:85%;">

		<!--  ================== MEDIA BOXES ================== -->
		
		<div class="filters-container">

			<ul class="media-boxes-filter" id="filter">
				<li><a class="selected" href="#" data-filter="*">All</a></li>
				<li><a href="#" data-filter=".category1">Category 1</a></li>
				<li><a href="#" data-filter=".category2">Category 2</a></li>
				<li><a href="#" data-filter=".category3">Category 3</a></li>
				<li><a href="#" data-filter=".category1, .category2">Category 1 and 2</a></li>
			</ul>

		</div>
        
        <div id="grid">
        
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

            
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
                $url = $thumb['0'];    
                $cats = '';
            
                foreach((get_the_category()) as $category) { 
                    $cats .= $category->cat_name; 
                }
                
                echo '<div class="media-box '. $cats .'">';
                
                
				            echo '<div class="media-box-image">';
                                    echo '<div data-width="1" data-height="1" data-thumbnail="' . $url . '"></div>';							
                                    echo '<a href="' . get_the_permalink() . '">';
                                    echo '<div class="thumbnail-overlay black">';
						                echo '<div class="media-box-big-icon"></div>';
						                echo '<div class="media-box-title"> <small>' . get_the_title() . '</small></div>';
						                echo '<div class="media-box-text">' . get_the_excerpt() . '</div>';
					                echo '</div>';
                                    echo '</a>';
				            echo '</div>';
				echo '</div>';
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
                 
				 // get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
        
        </div> <!-- #grid -->
        </div> <!-- #container -->	
        </div> <!-- grid section -->
        
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
