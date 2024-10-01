<?php
namespace Elementor\Modules\System_Info\Reporters;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor cohesion environment report.
 *
 * Elementor system report handler class responsible for generating a report for
 * the cohesion environment.
 *
 * @since 1.0.0
 */
class cohesion extends Base {

	/**
	 * Get cohesion environment reporter title.
	 *
	 * Retrieve cohesion environment reporter title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Reporter title.
	 */
	public function get_title() {
		return 'cohesion Environment';
	}

	/**
	 * Get cohesion environment report fields.
	 *
	 * Retrieve the required fields for the cohesion environment report.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Required report fields with field ID and field label.
	 */
	public function get_fields() {
		return [
			'version' => 'Version',
			'site_url' => 'Site URL',
			'home_url' => 'Home URL',
			'is_multisite' => 'WP Multisite',
			'max_upload_size' => 'Max Upload Size',
			'memory_limit' => 'Memory limit',
			'max_memory_limit' => 'Max Memory limit',
			'permalink_structure' => 'Permalink Structure',
			'language' => 'Language',
			'timezone' => 'Timezone',
			'admin_email' => 'Admin Email',
			'debug_mode' => 'Debug Mode',
		];
	}

	/**
	 * Get cohesion memory limit.
	 *
	 * Retrieve the cohesion memory limit.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion memory limit.
	 * }
	 */
	public function get_memory_limit() {
		return [
			'value' => (string) WP_MEMORY_LIMIT,
		];
	}

	/**
	 * Get cohesion max memory limit.
	 *
	 * Retrieve the cohesion max memory limit.
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion max memory limit.
	 * }
	 */
	public function get_max_memory_limit() {
		return [
			'value' => (string) WP_MAX_MEMORY_LIMIT,
		];
	}

	/**
	 * Get cohesion version.
	 *
	 * Retrieve the cohesion version.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion version.
	 * }
	 */
	public function get_version() {
		return [
			'value' => get_bloginfo( 'version' ),
		];
	}

	/**
	 * Is multisite.
	 *
	 * Whether multisite is enabled or not.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value Yes if multisite is enabled, No otherwise.
	 * }
	 */
	public function get_is_multisite() {
		return [
			'value' => is_multisite() ? 'Yes' : 'No',
		];
	}

	/**
	 * Get site URL.
	 *
	 * Retrieve cohesion site URL.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion site URL.
	 * }
	 */
	public function get_site_url() {
		return [
			'value' => get_site_url(),
		];
	}

	/**
	 * Get home URL.
	 *
	 * Retrieve cohesion home URL.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion home URL.
	 * }
	 */
	public function get_home_url() {
		return [
			'value' => get_home_url(),
		];
	}

	/**
	 * Get permalink structure.
	 *
	 * Retrieve the permalink structure
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion permalink structure.
	 * }
	 */
	public function get_permalink_structure() {
		global $wp_rewrite;

		$structure = $wp_rewrite->permalink_structure;

		if ( ! $structure ) {
			$structure = 'Plain';
		}

		return [
			'value' => $structure,
		];
	}

	/**
	 * Get site language.
	 *
	 * Retrieve the site language.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion site language.
	 * }
	 */
	public function get_language() {
		return [
			'value' => get_locale(),
		];
	}

	/**
	 * Get PHP `max_upload_size`.
	 *
	 * Retrieve the value of maximum upload file size defined in `php.ini` configuration file.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value Maximum upload file size allowed.
	 * }
	 */
	public function get_max_upload_size() {
		return [
			'value' => size_format( wp_max_upload_size() ),
		];
	}

	/**
	 * Get cohesion timezone.
	 *
	 * Retrieve cohesion timezone.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion timezone.
	 * }
	 */
	public function get_timezone() {
		$timezone = get_option( 'timezone_string' );
		if ( ! $timezone ) {
			$timezone = get_option( 'gmt_offset' );
		}

		return [
			'value' => $timezone,
		];
	}

	/**
	 * Get cohesion administrator email.
	 *
	 * Retrieve cohesion administrator email.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value cohesion administrator email.
	 * }
	 */
	public function get_admin_email() {
		return [
			'value' => get_option( 'admin_email' ),
		];
	}

	/**
	 * Get debug mode.
	 *
	 * Whether cohesion debug mode is enabled or not.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array {
	 *    Report data.
	 *
	 *    @type string $value Active if debug mode is enabled, Inactive otherwise.
	 * }
	 */
	public function get_debug_mode() {
		return [
			'value' => WP_DEBUG ? 'Active' : 'Inactive',
		];
	}
}
