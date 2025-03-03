<?php

/**
 * Template Name: Client & Partner
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb( '<div class="dss"><h4>Alter Resources Limited</h4>','</div>' );
}
?>
<section id="clients-partners" class=section-padding>

        <?php

// Check rows existexists.
if( have_rows('client_&_partner_images_new_repeter') ):?>
 <div class="container">
	  <div class="row">
<?php

    // Loop through rows.
    while( have_rows('client_&_partner_images_new_repeter') ) : the_row();

        // Load sub field value.
        $image = get_sub_field('images_name');
        $client_and_partner_image_new = get_sub_field('client_and_partner_image_new');     
        ?>
      
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 ourClint-logo">
           
                <img src="<?php echo $client_and_partner_image_new ?>" alt="">

</div>

<?php
        // Do something...

    // End loop.
    endwhile;?>
    </div>
	  </div> 
	<?php
// No value.
else :
    // Do something...
endif;

?>
           
               
</section>
           

 <!--====================== Contact-Form ====================== -->

 <section id="contact-form" class="section-padding contact-section-wrap">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 pe-lg-5 mx-md-auto mb-lg-0 mb-5">
                <div class="about-company" id="counter">


                    <?php

                    // Check rows existexists.
                    if (have_rows('your_message_left_section_')) : ?>

                        <div class="our-details">

                            <?php while (have_rows('your_message_left_section_')) : the_row();

                                // Load sub field value.
                                $heading = get_sub_field('heading');
                                $icon = get_sub_field('icon');
                                $number = get_sub_field('number');
                                $title = get_sub_field('title');

                            ?>
                                <div class="single-item trust-text">
                                <h4><?php echo $heading?></h4>
                                    <img src="<?php echo $icon ?>" alt="">
                                    <?php
                                   if( $number) {?>
                                    <h5 class="counter-value" data-count="<?php echo  $number ?>">0</h5>
                                  <?php } ?>
                                    <p><?php echo $title ?></p>
                                </div>
                            <?php
                            // Do something...

                            // End loop.
                            endwhile;

                            ?>
                        </div>
                    <?php

                    // No value.
                    else :
                    // Do something...
                    endif;
                    ?>



                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <?php echo do_shortcode(' [contact-form-7 id="176" title="Evox Home Contact"]'); ?>

            </div>
        </div>
    </div>
    </div>

</section>
<?php
get_footer();
