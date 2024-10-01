<?php
namespace Elementor\Core\Common\Modules\Finder\Categories;

use Elementor\Core\Common\Modules\Finder\Base_Category;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Site Category
 *
 * Provides general site items.
 */
class Site extends Base_Category {

	/**
	 * Get title.
	 *
	 * @since 2.3.0
	 * @access public
	 *
	 * @return string
	 */
	public function get_title() {
		return esc_html__( 'Site', 'elementor' );
	}

	public function get_id() {
		return 'site';
	}

	/**
	 * Get category items.
	 *
	 * @since 2.3.0
	 * @access public
	 *
	 * @param array $options
	 *
	 * @return array
	 */
	public function get_category_items( array $options = [] ) {
		return [
			'homepage' => [
				'title' => esc_html__( 'Homepage', 'elementor' ),
				'url' => home_url(),
				'icon' => 'home-heart',
				'keywords' => [ 'home', 'page' ],
			],
			'cohesion-dashboard' => [
				'title' => esc_html__( 'Dashboard', 'elementor' ),
				'icon' => 'dashboard',
				'url' => admin_url(),
				'keywords' => [ 'dashboard', 'cohesion' ],
			],
			'cohesion-menus' => [
				'title' => esc_html__( 'Menus', 'elementor' ),
				'icon' => 'cohesion',
				'url' => admin_url( 'nav-menus.php' ),
				'keywords' => [ 'menu', 'cohesion' ],
			],
			'cohesion-themes' => [
				'title' => esc_html__( 'Themes', 'elementor' ),
				'icon' => 'cohesion',
				'url' => admin_url( 'themes.php' ),
				'keywords' => [ 'themes', 'cohesion' ],
			],
			'cohesion-customizer' => [
				'title' => esc_html__( 'Customizer', 'elementor' ),
				'icon' => 'cohesion',
				'url' => admin_url( 'customize.php' ),
				'keywords' => [ 'customizer', 'cohesion' ],
			],
			'cohesion-plugins' => [
				'title' => esc_html__( 'Plugins', 'elementor' ),
				'icon' => 'cohesion',
				'url' => admin_url( 'plugins.php' ),
				'keywords' => [ 'plugins', 'cohesion' ],
			],
			'cohesion-users' => [
				'title' => esc_html__( 'Users', 'elementor' ),
				'icon' => 'cohesion',
				'url' => admin_url( 'users.php' ),
				'keywords' => [ 'users', 'profile', 'cohesion' ],
			],
		];
	}
}
