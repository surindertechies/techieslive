<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Techies India Inc.
 * @since Techies India Inc. 1.0
 */
?>
<div id="search">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" name="s" id="s" placeholder="<?php esc_attr_e( 'Quick Blog Search', 'Techies India Inc.' ); ?>" />
		<input type="submit" name="submit" class="search" value="Submit" />
	</form>
</div>