<?php
/**
 * The front-page template.  A few different special areas.
 * 
 * Top-Left     - Vertical Rectangle Ad
 * Top-Middle   - Today's Best Sellers.  This will be a special function in a plugin we make.  Two vertically stacked products
 * Top-Right    - Top part    - Buy *.   * will be a specific category set in the Flowers Dashboard.  Horizontal
 * Top-Right    - Bottom part - Horizontal Rectangle Ad
 * Middle-Left  - Send * - category set.  Two horizontal.
 * Middle-Right - Send Flowers - Category set, but not displayed - Three horizontal
 * Bottom       - Five Horizontal Flowers - Category option.
 *
 * The ad at the top (as well as any other special home page text) can be handled in the_content().
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
			<div id="top-row">
				<div id="top-left">
					<?php echo wpsc_flowers_home_ad( 'top-left' ); ?>
				</div>
				<div id="top-middle">
					<?php echo wpsc_flowers_show_category( 'top-right-top' ); ?>
				</div>
				<div id="top-right">
					<div id="top-right-top">
						<?php echo wpsc_flowers_show_category( 'top-right-top' ); ?>
					</div>
					<div id="top-right-bottom">
						<?php echo wpsc_flowers_home_ad( 'top-right' ); ?>
					</div>
				</div>
			</div>
			<div id="middle-row">
				<div id="middle-left">
					<?php echo wpsc_flowers_show_category( 'middle-left' ); ?>
				</div>
				<div id="middle-right">
					<?php echo wpsc_flowers_show_category( 'middle-right', false ); ?>
				</div>
			</div>
			<div id="bottom-row">
				<?php echo wpsc_flowers_best_sellers( '-1 month' ); ?>
			</div>			
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	</article><!-- #post -->
