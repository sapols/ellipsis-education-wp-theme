<?php
/**
 * The template used for displaying front page content
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?>
<!-- Start styling and scripting for interactive logo -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="path-to-file/jquery.preload.js"></script>

<style>
	#interactiveLogo {
		margin-top: 0;
		margin-bottom: 0;
    	height: auto;
    	width: 100%;
    	font-size: 0px;
    	line-height: 0;
    }

    #partHolder {
    	padding-left: 20%;
    	height: auto;
    	width: auto;
    	margin: 0 auto;
    	display: inline-block;
    }

    #leftPart {
    	padding-left: 0;
    }

	.logoParts {
    	display: inline-block;
    	width: auto; 
    	height: calc(30vw);
    	padding: 0;
    	margin: auto auto;
    }

    a.logoLink {
    	border: none !important;
    }

</style>

<script>
	var leftBlackURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResBlackTallWide.png'
	var leftNormalURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResTallWide.png'
	var leftBlueURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResBlueBig.png'
	var leftBlackBlueURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResBlueRight.png'

	var middleBlackURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResBlackTall.png'
	var middleNormalURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResTall.png'
	var middleBlackBlueURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResBlueBig.png'
	var middleBlackBlueLeftURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResBlackTallBlueLeft.png'
	var middleBlackBlueRightURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResBlackTallBlueRight.png'

	var rightBlackURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResBlackTallWide.png'
	var rightNormalURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResTallWide.png'
	var rightBlueURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResBlueBig.png'
	var rightBlackBlueURL = 'http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResBlueLeft.png'

	$(document).ready(function() {
    	$("#leftPart").attr('src', leftNormalURL);
    	$("#middlePart").attr('src', middleNormalURL);
    	$("#rightPart").attr('src', rightNormalURL);

		$("#leftPart").mouseover(function() {
    		$("#middlePart").attr('src', middleBlackBlueLeftURL);
    		$("#rightPart").attr('src', rightBlackURL);
    		$(this).attr('src', $(this).data("hover"));

    		$(this).wrap( '<a class="logoLink" href="http://universaldesignbuffs.air2018.knowbility.org/about/"></a>' );
		});
		$("#leftPart").mouseleave(function() {
    		$("#middlePart").attr('src', middleNormalURL);
    		$("#rightPart").attr('src', rightNormalURL);
    		$(this).attr('src', $(this).data("src"));

    		$(this).unwrap();
		});

		$("#middlePart").mouseover(function() {
    		$(this).attr('src', middleBlackBlueURL);
    		$("#leftPart").attr('src', leftBlackBlueURL);
    		$("#rightPart").attr('src', rightBlackBlueURL);

    		$(this).wrap( '<a class="logoLink" href="http://universaldesignbuffs.air2018.knowbility.org/projects-2/"></a>' );
		});
		$("#middlePart").mouseleave(function() {
    		$(this).attr('src', middleNormalURL);
    		$("#rightPart").attr('src', rightNormalURL);
    		$("#leftPart").attr('src', leftNormalURL);

    		$(this).unwrap();
		});

		$("#rightPart").mouseover(function() {
    		$("#middlePart").attr('src', middleBlackBlueRightURL);
    		$("#leftPart").attr('src', leftBlackURL);
    		$(this).attr('src', $(this).data("hover"));

    		$(this).wrap( '<a class="logoLink" href="http://universaldesignbuffs.air2018.knowbility.org/front-page/get-involved/"></a>' );
		});
		$("#rightPart").mouseleave(function() {
    		$("#middlePart").attr('src', middleNormalURL);
    		$("#leftPart").attr('src', leftNormalURL);
    		$(this).attr('src', $(this).data("src"));

    		$(this).unwrap();
		});
	});

</script>

<!-- End styling and scripting for interactive logo -->
	<div class="homepage">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php $image_id = get_post_thumbnail_id(); ?>
			<?php $image_url = wp_get_attachment_image_src($image_id,'full');   ?>
			<div class="cd-fixed-bg cd-bg-1" style="background-image:url(<?php echo esc_url( $image_url[0] ); ?>);"></div>
			<div id="triangleCutOut">
				<svg id="gambit-row-separator-1" preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 200" data-height="150" class="gambit_separator gambit_sep_top gambit-sep-type-arrow-inward-small1 gambit_sep_loaded">
					<polygon class="gambit_sep_main" points="886,86 800,172 714,86 -4,86 -4,204 1604,204 1604,86 " style="fill: rgb(255, 255, 255);"></polygon> <style> #gambit-row-separator-1 {
						transform: translateY(-75%) translateY(1px) scale(1,.75);
						transform-origin: top;
					}</style>
				</svg>
			</div>
			<?php if($post->post_content=="") : ?>
			<?php else : ?>
			<div id="banner-content-caption" class="content-caption">
				<div class="entry-content">
					<div id="site" class="cd-main-content" role="main">
					<?php the_content(); ?>
					<?php edit_post_link( esc_html__( 'Edit', 'maisha' ), '<span class="edit-link">', '</span>' ); ?>
					<?php
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'maisha' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'maisha' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
					?>
					</div>
					<div class="cd-panel from-right">
					<header class="cd-panel-header">
						<a href="#0" class="cd-panel-close">Close</a>
					</header>

					<div class="cd-panel-container">
					<div class="cd-panel-content">
					<?php
							$child_pages = new WP_Query( array(
								'post_type'      => 'page',
								'orderby'        => 'menu_order',
								'order'          => 'ASC',
								'post_parent'    => $post->ID,
								'posts_per_page' => 1,
								'no_found_rows'  => true,
							) );
							while ( $child_pages->have_posts() ) : $child_pages->the_post();
								 get_template_part( 'content', 'page' );
							endwhile;
							wp_reset_postdata();
					?>
					</div> <!-- cd-panel-content -->
					</div> <!-- cd-panel-container -->
					</div> <!-- cd-panel -->
				</div><!-- .entry-content -->
			</div><!-- .content-caption -->
			<?php endif; ?>
		</article><!-- #post-## -->

<div id="interactiveLogo" aria-hidden="true">
	<div id="partHolder">
	   <img id="leftPart" class="logoParts" src="http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResTallWide.png" data-src="http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResTallWide.png" data-hover="http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResBlueBig.png"><!--
	    --><img id="middlePart" class="logoParts" src="http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResTall.png"><!--
	    --><img id="rightPart" class="logoParts" src="http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResTall.png" data-src="http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResTallWide.png" data-hover="http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResBlueBig.png">
    </div>
</div>
<!-- preload interactive logo images to prevent glitches -->
<div class="hidden">
	<script type="text/javascript">
		<!--//--><![CDATA[//><!--
			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image()
					images[i].src = preload.arguments[i]
				}
			}
			preload(
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResBlackTallWide.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResTallWide.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResBlueBig.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/LeftPartHiResBlueRight.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResBlackTall.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResTall.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResBlueBig.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResBlackTallBlueLeft.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/MiddlePartHiResBlackTallBlueRight.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResBlackTallWide.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResTallWide.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResBlueBig.png",
				"http://universaldesignbuffs.air2018.knowbility.org/wp-content/uploads/2018/03/RightPartHiResBlueLeft.png"
			)
		//--><!]]>
	</script>
</div>

	</div><!-- .homepage -->