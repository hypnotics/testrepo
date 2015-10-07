<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy Studio With 2015
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>


<!-- jQuery 1.8+ -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.2.min.js"></script>
 
 
<!-- Media Boxes JS files -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.isotope.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.imagesLoaded.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.transit.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/waypoints.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr.custom.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mediaBoxes.js"></script>

<script>

$('#grid').mediaBoxes({
        boxesToLoadStart: 8,
        boxesToLoad: 4,
        minBoxesPerFilter: 0,
        lazyLoad: true,
        horizontalSpaceBetweenBoxes: 10,
        verticalSpaceBetweenBoxes: 10,
        columnWidth: 'auto',
        columns: 4,
        resolutions: [
            {
                maxWidth: 1600,
                columnWidth: 'auto',
                columns: 3,
            },
            {
                maxWidth: 650,
                columnWidth: 'auto',
                columns: 2,
            },
            {
                maxWidth: 450,
                columnWidth: 'auto',
                columns: 1,
            },
        ],
        filterContainer: '#filter',
        filter: 'a',
        search: '',
        searchTarget: '.media-box-title',
        sortContainer: '',
        sort: 'a',
        getSortData: {
          title: '.media-box-title',
          text: '.media-box-text',
        }, 
        waitUntilThumbLoads: true, 
        waitForAllThumbsNoMatterWhat: false, 
        thumbnailOverlay: true, 
        overlayEffect: 'fade', 
        overlaySpeed: 200,
        overlayEasing: 'default',
        showOnlyLoadedBoxesInPopup: false,
        considerFilteringInPopup: true, 
        deepLinking: true,
        gallery: true,
        LoadingWord: 'Loading...',
        loadMoreWord: 'Load More',
        noMoreEntriesWord: 'No More Entries',
    }); 
    
</script>

</body>
</html>
