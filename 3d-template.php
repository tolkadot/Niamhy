<?php
/**
* Template Name: 3D Printing
 * @package understrap
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$email = get_field('email', 43);
$phone = get_field('phone', 43);
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

		<main class="site-main" id="main">
      <div class="container">
        <div class="row">
          <div class="col-12"><h1 class="contact-header">3d Printing</h1></div>
  			   <div class="col-md-6">
            <p class="contact-welcome"> Using CAD Niamh designs and 3D prints jewellery.
            <p>Printed in high resolution, lightweight and durable SLA resin the hand-finished prints are perfect for a variety of uses in costume.  </p>
            Prints are available in a range of colours or can be used for casting in metal.
            This technique is ideal for making replica buttons, insignia and repeats of jewellery.
            Designs can be printed to your size requirements in any quantity.
            Please contact me for more information.</p>
            <div class="sep-wrapper "><hr class="sep" /></div>
            <div class="contact-deets">
            <?php if($email) { ?>
            <p class="d-flex">email | <a href="mailto:<?php echo $email ?>"><span class="">&nbsp;<?php echo $email ?></span></a></p>
            <?php } ?>
            <?php if($phone) { ?>
            <p class="d-flex">phone |  <a href="tel:<?php echo $phone ?>"><span class="">&nbsp;<?php echo $phone ?></span></a></p>
            <?php } ?>
            </div>
            <?php the_widget( 'socials_widget', 'instagram=https://www.instagram.com/niamhbuckleycostume/&imdb=https://www.imdb.com/name/nm2287746/', 'before_title=<h3>&after_title=</h3>' ); ?>
          </div>
        <div class="col-md-6">
<div class="slider showcase-slider">
      <?php if( have_rows('images') ): ?>
      <div class="slider-for">
        <?php  while ( have_rows('images') ) : the_row(); ?>
          <?php  $image = get_sub_field('image');
              if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
        <?php  endwhile; ?>
      </div>
      <?php endif; ?>
    <?php if( have_rows('images') ): ?>
    <div class="slider-nav">
      <?php  while ( have_rows('images') ) : the_row(); ?>
        <?php  $image = get_sub_field('image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
      <?php  endwhile; ?>
    </div>
    <?php endif; ?>
      </div>
        </div>
      </div>
    </div>
	</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
