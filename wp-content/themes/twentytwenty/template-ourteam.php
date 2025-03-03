<?php

/**
 * Template Name: OurTeam Page
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
 <!--====================== Our-founders ====================== -->
    <section id="our-founders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-founders-title">
                        <h6><?php the_field('ourteam_title'); ?></h6>
                        <p><?php the_field('ourteam_decription'); ?></p>
                    </div>
                </div>
            </div>

            <?php

            if (have_rows('our_founders_repeter')) :

            ?>

                <div class="row founder-list">
                    <div class="col-xl-10 mx-auto">

                        <?php

                        // Loop through rows.
                        while (have_rows('our_founders_repeter')) : the_row();

                            // Load sub field value.
                            $our_founders_image = get_sub_field('our_founders_image');
                            $title = get_sub_field('title');
                            $heading = get_sub_field('heading');
                            $decription = get_sub_field('decription');
                            $facebook_url = get_sub_field('facebook_url');
                            $twitter_url = get_sub_field('twitter_url');
                            $linkedin = get_sub_field('linkedin');
                            $instagram = get_sub_field('instagram');
                            $youtube = get_sub_field('youtube'); ?>

                            <div class="row our-founders">
                                <div class="col-lg-6">
                                    <div class="our-founders-img">
                                        <img src="<?php echo $our_founders_image ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-founders-content">
                                        <h4><?php echo $title ?></h4>
                                        <h6><?php echo $heading ?></h6>
                                        <p><?php echo $decription ?></p>
                                    </div>
                                    <div class="our-founders-icon d-flex">
                                        <div class="d-flex">
                                            <a href="<?php echo $facebook_url ?>"></a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="<?php echo $twitter_url ?>"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="<?php echo $linkedin ?>"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            <a href="<?php echo $instagram ?>"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            <a href="<?php echo $youtube ?>"> <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div> <?php

                                // End loop.
                                endwhile; ?>


                    </div>
                </div><?php

                    // No value.
                    else :
                    // Do something...
                    endif; ?>

        </div>
    </section>
    <!--====================== Core-Team ====================== -->
    <Section id="core-team" class="section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="core-team-title">
                        <h6><?php the_field('core_team_title'); ?></h6>
                    </div>
                </div>
                <?php

                // Check rows existexists.
                if (have_rows('core_team_repeter')) :

                    // Loop through rows.
                    while (have_rows('core_team_repeter')) : the_row();

                        // Load sub field value.
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $heading = get_sub_field('heading');
                        $faceook = get_sub_field('faceook');
                        $twitter = get_sub_field('twitter');
                        $linkedin = get_sub_field('linkedin');
                        $instagram = get_sub_field('instagram');

                ?>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="core-team-details">
                                <img src="<?php echo $image ?>" alt="" class="w-100 mb-3">
                                <h6><?php echo $title ?></h6>
                                <p><?php echo $heading ?></p>
                                <div class="core-team-icon">
                                    <div class="d-flex justify-content-center">
                                        <a href="<?php echo $faceook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="<?php echo $twitter ?>"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="<?php echo $linkedin ?>"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <a href="<?php echo $instagram ?>"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php

                    // End loop.
                    endwhile;

                // No value.
                else :
                // Do something...
                endif; ?>
            </div>
        </div>
    </Section>
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
