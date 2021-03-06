<?php
/**
 * Separator custom control
 *
 * @package WordPress
 * @subpackage inc/customizer
 * @version 1.1.0
 * @author  Denis Žoljom <http://madebydenis.com/>
 * @license https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link https://github.com/dingo-d/wordpress-theme-customizer-extra-custom-controls
 * @since  1.0.0
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	
	return;
}
	
class Maximo_Customize_Divider_Control extends WP_Customize_Control {
	/**
	 * Control type
	 *
	 * @var string
	 */
	public $type = 'divider';

	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {

		$asset_uri = MAXIMO_THEME_URI . '/customizer/controls/divider/';

		wp_enqueue_style(
			MAXIMO_THEME_SLUG . '-divider',
			$asset_uri . 'divider.css',
			null,
			MAXIMO_THEME_VERSION,
			'all'
		);
	}

	/**
	 * Control method
	 *
	 * @since 1.0.0
	 */
	public function render_content() {
		?>
		<div class="divider-line"></div>
		<?php
	}
}