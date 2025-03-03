<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" class="header-footer-group">
				<div class="footer-bg-image section-padding">
	<div id="footer-sidebar" class="secondary">
<div id="sidebar-1">
	<div class="container">
                <div class="footer-input">
                    <div class="row">
						 
                        <div class="col-lg-6">
                            <div class="footer-text d-flex align-items-center">
								 <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <p>Subscribe Now to Get Latest Updates</p>
                              
								
                            </div>
                        </div>
                        <div class="col-lg-6 footer-input-email">
                            <div class="position-relative">
                                <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	<div class="container">
			<div class="row">
	<div class="col-lg-4">	
	
<?php
if(is_active_sidebar('sidebar-1')){
dynamic_sidebar('sidebar-1');
}
?>
</div>

		<div class="col-lg-4">	
<div id="sidebar-2">
	<div class="footer-links ">
<?php
if(is_active_sidebar('sidebar-2')){
dynamic_sidebar('sidebar-2');
}
?>
	</div>
</div>
	</div>
		<div class="col-lg-4">	
<div id="sidebar-4">
<?php
if(is_active_sidebar('sidebar-4')){
dynamic_sidebar('sidebar-4');
}
?>
</div>
		</div>
		</div>
		 <div class="footer-bottom d-flex justify-content-between ">
                    <div class="d-flex footer-icon ">
                        <div class="d-flex">
                           <a href="https://www.facebook.com/people/Alter-Resources/100087574755893/" class="d-flex align-items-center justify-content-center"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>
                    <a href="https://twitter.com/AlterResources" class="d-flex align-items-center justify-content-center"><i class="fa fa-twitter"
                            aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/company/86867584/admin/" class="d-flex align-items-center justify-content-center"><i class="fa fa-linkedin"
                            aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/alterresources32/" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a>
                        </div>
                        <div>
                            <p>Copyright @2022 All rights reserved</p>
                        </div>
                    </div>
                    <div>
                        <p>Design And Developed by <a href="https://srashtasoft.com/">Srashtasoft</a></p>
                    </div>
                </div>
	</div>
	    
</div>
</div>

				<div class="section-inner">
					

					<div class="footer-credits">

						<p class="footer-copyright">
							
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

<!-- 						<?php
						//if ( function_exists( 'the_privacy_policy_link' ) ) {
							//the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						//}
						?> -->

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

				</div><!-- .section-inner -->
					</div>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
