				<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

					<div class="widget" style="display:none;">
						<?php
						if ( is_user_logged_in() ) {
							?>
							<h4 class="widgettitle">Members area</h4>
							<?php
						    echo do_shortcode("[wppb-login]");
						} else {
							?>
						    <h4 class="widgettitle">Register for exclusive members content</h4>
							<?php echo do_shortcode("[wppb-register]"); ?>

							<h4 class="widgettitle">Already a member? Login below</h4>
							<?php echo do_shortcode("[wppb-login]"); }
							?>
						
					</div>

				</div>
