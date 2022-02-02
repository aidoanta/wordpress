<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gentium
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
$preloader_title = get_theme_mod( 'preloader_loading_text', esc_html__( 'Loading', 'gentium' ) );
$pixe_preloader = get_theme_mod('show_preloader', true); 
if($pixe_preloader == true){
?>
<div id="loader" class="preloader pr__dark">
	<span class="loading">
		<span class="txt"><?php echo wp_kses_post( $preloader_title ); ?></span>
		<span class="progress">
			<span class="bar-loading"></span>
		</span>
	</span>
</div><!-- Preloader End -->
<?php } ?>
<div id="site-wrapper" class="site <?php pixe_layouts(); ?>">

	<?php if( ! is_404() ) : 

		get_template_part( 'components/header/header' );
		get_template_part( 'components/header/mobile', 'header' );
		get_template_part( 'components/section-titles/section', 'title');
		
	endif; ?>

	<div id="content" class="site-content">
