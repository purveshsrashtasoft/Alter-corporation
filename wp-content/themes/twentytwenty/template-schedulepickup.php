<?php

/**
 * Template Name: Schedulepickup
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
<!--====================== Schedule pickup ====================== -->
<section id="inquiry" class="section-padding">

    <?php

    // Check rows existexists.
    if (have_rows('schedule_pickup_repeter')) :
    ?> <div class="container">
            <div class="row">
                <?php
                // Loop through rows.
                while (have_rows('schedule_pickup_repeter')) : the_row();

                    // Load sub field value.
                    $schedule_pickup_icon = get_sub_field('schedule_pickup_icon');
                    $schedule_pickup_title = get_sub_field('schedule_pickup_title');
                    $schedule_pickup_decription = get_sub_field('schedule_pickup_decription');

                ?>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="inquiry-box">
                            <img src="<?php echo $schedule_pickup_icon ?>" alt="">
                            <h6><?php echo $schedule_pickup_title ?></h6>
                            <p>
                            <?php echo $schedule_pickup_decription ?>
                            </p>
                        </div>
                    </div>

                <?php
                // End loop.
                endwhile;
                ?>

            </div>
        </div><?php
            // No value.
            else :
            // Do something...
            endif; ?>


</section>

<!--====================== Schedule pickup inquiry ====================== -->
<!-- Button trigger modal -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="schedule-pickup-inquiry-btn text-center">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    SCHEDULE PICKUP INQUIRY
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-form">
                                <h4 class="text-center">Request for a Pickup</h4>
                                <p class="text-center">Office Hours : 07:30 and 19:00 Monday to Saturday, Sunday – Holiday</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Inquiry">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
                                </div>
                                <div class="Schedule-pickup-inquiry modal-footer">
                                    <button type="button" class="btn submit-btn" data-bs-dismiss="modal">Submit request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================================================== -->
<div class="container">
    <img src="<?php the_field('schedule_pickup_image'); ?>" alt="" class="w-100">
</div>
<!--====================== Contact-Form ====================== -->

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
                                    <h4><?php echo $heading ?></h4>
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
