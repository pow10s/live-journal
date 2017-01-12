<?php 
/**
 * integral functions and definitions
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
* Enqueue Scripts.
*/
require get_template_directory() . '/inc/enqueue.php';

/**
 * Redux Framework Options.
 */
require get_template_directory() . '/inc/options.php';

/**
* Theme Welcome Page.
*/
require get_template_directory() . '/inc/welcome/theme-welcome.php';

/**
* Wordpress Bootstrap Nav Walker.
*/
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Custom Comments.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Extras.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Wordpress Customizer.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Register Widgets.
 */
require get_template_directory() . '/inc/widgets.php';

/**
* Load WooCommerce Functions.
*/
require get_template_directory() . '/inc/woocommerce.php';

/**
* TGM Plugin Activation.
*/
require get_template_directory() . '/inc/tgm-plugin-activation.php';

/**
* Theme Demo Import functions.
*/
require get_template_directory() . '/inc/theme-demo-import.php';

/*TRANSLATES*/
pll_register_string('Journal section', 'Журнал');
pll_register_string('About us', 'Про нас');
pll_register_string('About us subtitle', 'Про нас сабтайтл');
pll_register_string('Our team', 'Наша команда');
pll_register_string('From our blog', 'Наш блог');
