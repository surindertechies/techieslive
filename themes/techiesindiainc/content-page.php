<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Techies India Inc.
 * @since Techies India Inc. 1.0
 */
?>
<?php the_content(); ?>
<?php
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'Techies India Inc.' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'Techies India Inc.' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
?>
<?php edit_post_link( __( 'Edit', 'Techies India Inc.' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>