<?php
/**
 * @package whimsy-framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header"> 
	
	<?php whimsy_post_meta_before(); ?>

	<div class="entry-meta">

	   <!-- Link Post Format: Add a title and place the URL by itself in content editor -->
	   
        <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_the_content() ) ), '</a></h1>' ); ?>
	
	<?php whimsy_post_meta_after(); ?>

	</header><!-- .entry-header -->
	
</article><!-- #post-## -->