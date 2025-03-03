<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>


	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
<!--====================== Header ====================== -->
<section id="header">
        <div class="header container-fluid p-0">
            <div class="topbar d-flex justify-content-between">

                <ul class="left-side list-unstyled d-flex justify-content-start align-items-center" style="flex: 1;">
                    <li class="address">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Shed 7, Versetile Industrial Estate, GIDC Road No 5, Kathwada Ahmedabad 382430
                    </li>
                    <li class="email">
                        <i class="fa fa-envelope" aria-hidden="true"></i>info@altercorporation.com
                    </li>
                    <li class="time">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>Mon - Sat 9:00 am to 7:00 pm
                    </li>
                </ul>
				<ul class="right-side list-unstyled d-flex align-items-center justify-content-center " style="    background: transparent;
    color: #fff;">
 					<li type="button" data-bs-toggle="modal" data-bs-target="#exampleModals">
                        Vendor Register
                    </li>
				</ul>

                <ul class="right-side list-unstyled d-flex align-items-center justify-content-center ">
                    <li type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa fa-refresh" aria-hidden="true"></i>Request for a pickup
                    </li>
					
                </ul>
            </div>
        </div>
    </section>

    <!--====================== Navbar ====================== -->
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid p-0">
            
                <div class="navbar-logo-wrap"><?php
                twentytwenty_site_logo(); ?>
                </div>
          
         <button class="navbar-toggler" id="main_nav" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <div class="toggle-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse mobile-menu-overlay" id="main_nav" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation"></div>

            <div class="collapse navbar-collapse toggle-menu-items" id="main_nav">
                <div class="mobile-menu-logo">
                   <?php
                twentytwenty_site_logo(); ?>
                    <i class="fa fa-times-circle close-icon" id="main_nav" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation" aria-hidden="true"></i>

                </div>
                <div class="social-media-icon d-flex align-items-center">
                    <a href="https://www.facebook.com/people/Alter-Resources/100087574755893/" class="d-flex align-items-center justify-content-center"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>
                    <a href="https://twitter.com/AlterResources" class="d-flex align-items-center justify-content-center"><i class="fa fa-twitter"
                            aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/company/86867584/admin/" class="d-flex align-items-center justify-content-center"><i class="fa fa-linkedin"
                            aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/alterresources32/" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a>
                  
                </div>
                <!-- <ul class="navbar-nav"> -->
                    <!-- <li class="nav-item active"> <a class="nav-link px-0" href="index.html"> Home </a> </li>
                    <li class="nav-item"><a class="nav-link px-0" href="About.html"> About Us </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle px-0" href="#" data-bs-toggle="dropdown"> Product & Service
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Products.html"> Product </a></li>
                            <li><a class="dropdown-item" href="Schedulepickup.html"> Schedule Pickup </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link px-0" href="Client&partners.html"> Client & Partners </a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-0" href="Contactus.html"> Contact Us </a></li> -->
                <!-- </ul> -->
<div class="navbar-nav navbar-menu">
                    <?php
wp_nav_menu( array(
    'menu' => 'primary-menu',
    'container' => '',
    'item_wrap' => '<ul class="navbar-nav"></ul>'
) );
?>
</div>
                <div class="navbar-right call-action">
                    <a href="tel: +1234567895" class="d-flex align-items-center">
                        <div class="call-icon d-flex align-items-center justify-content-center">
                             <img class="have-call-icon"src="https://altercorporation.com/wp-content/uploads/2022/11/call.png">
                        </div>
                        <div class="contact-info">
                            <p>Have any questions?</p>
                            <h6 class="m-0">+91 90990 06971</h6>
                        </div>
                    </a>
                </div>
            </div>
            <!-- navbar-collapse.// -->
        </div>
        <!-- container-fluid.// -->
    </nav>
	
    <!--====================== Schedule pickup inquiry ====================== -->

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
                                 <?php echo do_shortcode('[contact-form-7 id="506" title="Request For Pickup Form"]'); ?>
                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		
		<!--====================== Vender Registration Form  ====================== -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabels" aria-hidden="true">
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
                                 <?php echo do_shortcode('[contact-form-7 id="974" title="Vender Form"]'); ?>
                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
		?>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>