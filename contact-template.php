<?php
/**
* Template Name: Conatct Page
 * @package understrap
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$email = get_field('email');
$phone = get_field('phone');
$welcome = get_field('contact_welcome');
$cv = get_field('cv' , 52);

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->


			<main class="site-main" id="main">
      <div class="container">
        <div class="row">
        <div class="col-12"><h1 class="contact-header">Contact</h1></div>
			<div class="col-md-6">

        <p class="contact-welcome"> <?php echo $welcome; ?> <a class="contact-welcome" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a> </p>
        <div class="sep-wrapper "><hr class="sep" /></div>
        <div class="contact-deets">
        <?php if($email) { ?>
        <p class="d-flex">email | <a href="mailto:<?php echo $email ?>"><span class="">&nbsp;<?php echo $email ?></span></a></p>
        <?php } ?>
        <?php if($phone) { ?>
        <p class="d-flex">phone |  <a href="tel:<?php echo $phone ?>"><span class="">&nbsp;<?php echo $phone ?></span></a></p>
        <?php } ?>
        <?php if($cv) { ?>
        <p class="d-flex">cv |  <span class=""><a href="<?php echo $cv['url'] ?>">&nbsp;download cv here</a></span></p>
        <?php } ?>
        </div>
        <?php the_widget( 'socials_widget', 'instagram=https://www.instagram.com/niamhbuckleycostume/&imdb=https://www.imdb.com/name/nm2287746/', 'before_title=<h3>&after_title=</h3>' ); ?>
      </div>

      <div class="col-md-6">
        <?php echo do_shortcode( '[contact-form-7 id="42" title="Contact form 1"]' ); ?>
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
