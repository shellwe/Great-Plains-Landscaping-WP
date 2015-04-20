		<aside class="col-md-3 col-sm-4">
			<div class="sidebar">

				<?php
				/**
				 * The sidebar containing the main widget area.
				 *
				 * @package Great Plains Landscaping
				 */
				
				if ( ! is_active_sidebar( 'sidebar-1' ) ) {
					return;
				}
				?>
				
				<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div><!-- #secondary -->
            </div>
        </aside>