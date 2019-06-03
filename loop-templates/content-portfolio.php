<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$featured_image = get_the_post_thumbnail_url($post->ID);
?>
<div class="col-md-6 mb-2 mb-md-4 portfolio-item-container" >
  <article style="background-image: url(<?php echo $featured_image ?> );" <?php post_class('position-relative'); ?> id="post-<?php the_ID(); ?>">
  <div class="position-absolute h-100 w-100"></div>
    <a href="<?php echo esc_url( get_permalink() ); ?>">
      	<header class="entry-header">
          <h2 class="secondary-header position-absolute p-3">
          <?php the_title() ?>
          </h2>
        </header><!-- .entry-header -->
    </a>
  </article><!-- #post-## -->
</div>
