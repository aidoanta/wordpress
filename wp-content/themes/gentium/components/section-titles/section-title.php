<?php
    $pixe_section_title_img = get_post_meta( get_the_ID(), 'pixe_section_title_img', true );
    if($pixe_section_title_img =='')
    $pixe_section_title_img = get_theme_mod( 'heading_img','');
    $text_alignment = get_theme_mod( 'aling_titles', 'center' );
    $pixe_page_title_hr = get_theme_mod( 'show_hr_divider', false );
    $pixe_section_title = get_post_meta( get_the_ID(), 'pixe_section_title', true );
	if ( ( get_theme_mod( 'show_section_title', true ) || $pixe_section_title === 'enable') && $pixe_section_title != 'disable' && !is_singular( 'post' )) {
?>
<div class="section-title thumbnail-bg <?php echo esc_attr($text_alignment); ?>" <?php if($pixe_section_title_img ){ ?> style="background-image: url('<?php echo esc_url( $pixe_section_title_img ); ?>')"<?php }?> >
    <div class="uk-container">
        <div class="inner page-title-inner">
            <?php if( $pixe_page_title_hr == true ){?>
                <hr class="pr-page-title-hr">
            <?php } ?>
            <h1 class="entry-title"><?php echo wp_kses_post( pixe_title() ); ?></h1>
            <?php
                $pixe_breadcrumbs = get_post_meta( get_the_ID(), "pixe_breadcrumbs_show", true );
                if ( ( true == get_theme_mod( 'show_breadcrumbs', false ) || $pixe_breadcrumbs === 'enable') && $pixe_breadcrumbs != 'disable' && !is_front_page()) {
            
                    get_template_part('components/navigation/breadcrumbs');
                }
            ?>
        </div>
    </div>
</div>
<?php } ?>
