<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
    
    
    <!------------------------------- BEGIN STUDIOWITH ----------------------------------->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"> <!-- needed for mobile devices -->
  
  	<!-- Import font -->
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

  	<!-- Style for Bootstrap -->
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  	
  	<!-- Custom style for the demo-->
  	<link rel="stylesheet" href="css/demo.css">

  	<!-- Media Boxes CSS files -->
	<link rel="stylesheet" href="../plugin/css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="../plugin/css/mediaBoxes.css">

	<style>

		/* == LETS MODIFY SOME COLORS AND STYLE FOR THE DEMO == */

		/* *********** STYLE OF GRID 1 *********** */
		
        	body{
            		margin-top: 20px !important;
        	}
        	
        	.sw-title{
			font-family: Helvetica;
			font-size: 19px;
			color: black;
			white-space: nowrap;
			display: inline-block;
		}

		.sw-tag{
			font-family: 'Times LT W01 Italic';
			font-size: 21px;
		        color: black;
		        white-space: nowrap;
			display: inline-block;
		}
        
        	#grid .media-box-date{
			color: #28ac86;
		}
		#grid .media-box-title{
			font-family: Helvetica;
			font-size: 19px;
			color: white;
		}

		#grid .media-box-text{
			font-family: 'Times LT W01 Italic';
			font-size: 17px;
		        color: white;
		}
        
		.thumbnail-overlay>div.aligment>div.aligment {
    		text-align: left; /* FOR HORIZONTAL ALIGN */
  		}
  		.media-boxes-drop-down{
      		float: right;
      		margin-left: 8px;
      	}
         
		#grid .media-box-container{
			-webkit-border-radius: 0px;
			   -moz-border-radius: 0px;
		            border-radius: 0px;
		}
		#grid .thumbnail-overlay{
			background: black;
			padding: 0 20px;
		}
		.blue .media-box-title, .blue 
		.media-box-text,
		.light-blue .media-box-title, 
		.light-blue .media-box-text,
		.red .media-box-title, 
		.red .media-box-text,
        .black .media-box-title, 
		.black .media-box-text,
		.green .media-box-title, 
		.green .media-box-text{
			color: white !important;
		}
		.black{
            background: #323232 !important;
        }
        .blue{
			background: #445E9F !important;
		}
		.light-blue{
			background: #55B1E1 !important;
		}
		.red{
			background: #c03636 !important;
		}
		.green{
			background: #399199 !important;
		}


      	/* *********** HIDE THE "NO MORE ENTRIES" BUTTON *********** */
		.media-boxes-no-more-entries{
			display: none;
		}
	
		/* *********** PUSH THE SEARCH TO THE RIGHT *********** */
		.media-boxes-search{
      		float: right;
      	}

      	/* *********** REMOVE SHADOW *********** */
      	.media-box-container{
		  -webkit-box-shadow: none !important;
		     -moz-box-shadow: none !important;
		       -o-box-shadow: none !important;
		      -ms-box-shadow: none !important;
		          box-shadow: none !important;
		}

	</style>
    
    <!------------------------------- END STUDIOWITH ----------------------------------->
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
	<div id="content" class="site-content">