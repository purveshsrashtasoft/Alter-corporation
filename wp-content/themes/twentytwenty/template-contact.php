<?php

/**
 * Template Name: Contact Us 
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

</section>

<!--====================== Company-details ====================== -->
<div class="container section-padding-contact">
	<div class="row">
		<div class="col-lg-12 col-md-12 mb-3">
			<div class="contact-info-container d-flex">
				<div class="title py-5">
					  <img src="https://altercorporation.com/wp-content/uploads/2022/11/Our-Location-icon.png">
					<h4 class="mb-0"><?php the_field('location_title'); ?></h4>
				</div>
				<div class="discription w-100">
					<div class="item d-flex">
						<div class="title-inner">
						<b>Registered Address :- </b> 	</div>
							<div>
							<?php the_field('register_address'); ?>
						</div>
							</div>
				
					<div class="item d-flex">
						<div class="title-inner">
						<b>Godown :-</b> </div>
						<div>
						<?php the_field('godown_address'); ?>
							
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12  mb-3">
			<div class="contact-info-container d-flex">
				<div class="title">
					   <img src="https://altercorporation.com/wp-content/uploads/2022/11/email-icon.png">
					<h4 class="mb-0"><?php the_field('email_title'); ?></h4>
				</div>
				<div class="discription w-100">
					<div class="item">
						<p class="mb-0"><b><?php the_field('email_decription'); ?> </b></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 mb-3">
			<div class="contact-info-container d-flex">
				<div class="title">
					 <img src="https://altercorporation.com/wp-content/uploads/2022/11/call-us-icon.png">
					<h4 class="mb-0"><?php the_field('number_title'); ?></h4>
				</div>
				<div class="discription w-100">
					<div class="item">
						<p class="mb-0"><b><?php the_field('number_decription'); ?> </b></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <!--====================== Map ====================== -->

<section>
<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=2048&amp;height=400&amp;hl=en&amp;q=H 708 Shreedhar flora &amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
</section>
    <!--====================== Company-logo ====================== -->
     <section class="slider main-client-logo">
    <div class="container">
 <?php echo do_shortcode('[sp_wpcarousel id="464"]'); ?>
 </div>
 </section>

<?php
get_footer();
