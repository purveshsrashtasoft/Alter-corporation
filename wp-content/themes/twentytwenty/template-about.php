<?php

/**
 * Template Name: About Us 
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
<!--====================== Company Introduction ====================== -->
<section id="company-introduction" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-7">
                <div class="company-intro">
                    <h6><?php the_field('heading'); ?></h6>
                    <h4><?php the_field('title'); ?></h4>
                    <p><?php the_field('decription'); ?></p>
                    <div class="company-iconbox d-flex">
                        <div>
                            <img src="<?php the_field('icon1'); ?>" alt="">
                            <h5><?php the_field('title1'); ?></h5>
                            <p><?php the_field('decription1'); ?></p>
                        </div>
                        <div>
                            <img src="<?php the_field('icon2'); ?>" alt="">
                            <h5><?php the_field('title2'); ?></h5>
                            <p><?php the_field('decription2'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-5">
                <div class="company-imgbox position-relative">
                    <img src="<?php the_field('right_image1'); ?>" alt="" class="company-img1">
                    <img src="<?php the_field('right_image2'); ?>" alt="" class="company-img2">
                    <div class="element d-flex align-items-center justify-content-center" id="counter">
                        <p style="font-size:15px; margin-left: 20px;"><?php the_field('right_title'); ?></p>
                       <h1 class="counter-value count-round" data-count="<?php the_field('right_number');?>">0</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="our-Mission">
       

        <?php

// Check rows existexists.
if( have_rows('our_mission_section_') ):?>
 <div class="container mission-container">
<?php

    // Loop through rows.
    while( have_rows('our_mission_section_') ) : the_row();

        // Load sub field value.
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $decription = get_sub_field('decription');   
        ?>
        

        <div class="row single-mission-item align-items-center mb-5">
        <div class="col-lg-6">
            <div class="our-mission-img">
                <img src="<?php echo $image ?>" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="our-mission-content">
                <h6><?php echo $title ?></h6>
                <p><?php echo $decription ?></p>
            
        </div>
    </div>


</div>

<?php
        // Do something...

    // End loop.
    endwhile;?>
    </div> <?php
// No value.
else :
    // Do something...
endif;

?>
           
    </section>
     
 <!--====================== Company-logo ====================== -->
   <section class="slider main-client-logo">
    <div class="container">
 <?php echo do_shortcode('[sp_wpcarousel id="464"]'); ?>
 </div>
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
