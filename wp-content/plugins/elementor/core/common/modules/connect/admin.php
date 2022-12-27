<?php
namespace Elementor\Core\Common\Modules\Connect;

use Elementor\Core\Admin\Menu\Admin_Menu_Manager;
use Elementor\Plugin;
use Elementor\Settings;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Admin {

	const PAGE_ID = 'elementor-connect';

	public static $url = '';

	/**
	 * @since 2.3.0
	 * @access public
	 */
	public function register_admin_menu( Admin_Menu_Manager $admin_menu ) {
		$admin_menu->register( static::PAGE_ID, new Connect_Menu_Item() );
	}

	/**
	 * @since 2.3.0
	 * @access public
	 */
	public function on_load_page() {
		if ( isset( $_GET['action'], $_GET['app'] ) ) {
			$manager = Plugin::$instance->common->get_component( 'connect' );
			$app_slug = $_GET['app'];
			$app = $manager->get_app( $app_slug );
			$nonce_action = $_GET['app'] . $_GET['action'];

			if ( ! $app ) {
				wp_die( 'Unknown app: ' . esc_attr( $app_slug ) );
			}

			if ( empty( $_GET['nonce'] ) || ! wp_verify_nonce( $_GET['nonce'], $nonce_action ) ) {
				wp_die( 'Invalid Nonce', 'Invalid Nonce', [
					'back_link' => true,
				] );
			}

			$method = 'action_' . $_GET['action'];

			if ( method_exists( $app, $method ) ) {
				call_user_func( [ $app, $method ] );
			}
		}
	}

	/**
	 * @since 2.3.0
	 * @access public
	 */
	public function __construct() {
		self::$url = admin_url( 'admin.php?page=' . self::PAGE_ID );

		add_action( 'elementor/admin/menu/register', [ $this, 'register_admin_menu' ] );

		add_action( 'elementor/admin/menu/after_register', function ( Admin_Menu_Manager $admin_menu, array $hooks ) {
			if ( ! empty( $hooks[ static::PAGE_ID ] ) ) {
				add_action( 'load-' . $hooks[ static::PAGE_ID ], [ $this, 'on_load_page' ] );
			}
		}, 10, 2 );
	}
}
