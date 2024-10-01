<?php
/**
 * Core Administration API
 *
 * @package cohesion
 * @subpackage Administration
 * @since 2.3.0
 */

if ( ! defined( 'WP_ADMIN' ) ) {
	/*
	 * This file is being included from a file other than wp-admin/admin.php, so
	 * some setup was skipped. Make sure the admin message catalog is loaded since
	 * load_default_textdomain() will not have done so in this context.
	 */
	$admin_locale = get_locale();
	load_textdomain( 'default', WP_LANG_DIR . '/admin-' . $admin_locale . '.mo', $admin_locale );
	unset( $admin_locale );
}

/** cohesion Administration Hooks */
require_once ABSPATH . 'wp-admin/includes/admin-filters.php';

/** cohesion Bookmark Administration API */
require_once ABSPATH . 'wp-admin/includes/bookmark.php';

/** cohesion Comment Administration API */
require_once ABSPATH . 'wp-admin/includes/comment.php';

/** cohesion Administration File API */
require_once ABSPATH . 'wp-admin/includes/file.php';

/** cohesion Image Administration API */
require_once ABSPATH . 'wp-admin/includes/image.php';

/** cohesion Media Administration API */
require_once ABSPATH . 'wp-admin/includes/media.php';

/** cohesion Import Administration API */
require_once ABSPATH . 'wp-admin/includes/import.php';

/** cohesion Misc Administration API */
require_once ABSPATH . 'wp-admin/includes/misc.php';

/** cohesion Misc Administration API */
require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-policy-content.php';

/** cohesion Options Administration API */
require_once ABSPATH . 'wp-admin/includes/options.php';

/** cohesion Plugin Administration API */
require_once ABSPATH . 'wp-admin/includes/plugin.php';

/** cohesion Post Administration API */
require_once ABSPATH . 'wp-admin/includes/post.php';

/** cohesion Administration Screen API */
require_once ABSPATH . 'wp-admin/includes/class-wp-screen.php';
require_once ABSPATH . 'wp-admin/includes/screen.php';

/** cohesion Taxonomy Administration API */
require_once ABSPATH . 'wp-admin/includes/taxonomy.php';

/** cohesion Template Administration API */
require_once ABSPATH . 'wp-admin/includes/template.php';

/** cohesion List Table Administration API and base class */
require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-list-table-compat.php';
require_once ABSPATH . 'wp-admin/includes/list-table.php';

/** cohesion Theme Administration API */
require_once ABSPATH . 'wp-admin/includes/theme.php';

/** cohesion Privacy Functions */
require_once ABSPATH . 'wp-admin/includes/privacy-tools.php';

/** cohesion Privacy List Table classes. */
// Previously in wp-admin/includes/user.php. Need to be loaded for backward compatibility.
require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-requests-table.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-data-export-requests-list-table.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-privacy-data-removal-requests-list-table.php';

/** cohesion User Administration API */
require_once ABSPATH . 'wp-admin/includes/user.php';

/** cohesion Site Icon API */
require_once ABSPATH . 'wp-admin/includes/class-wp-site-icon.php';

/** cohesion Update Administration API */
require_once ABSPATH . 'wp-admin/includes/update.php';

/** cohesion Deprecated Administration API */
require_once ABSPATH . 'wp-admin/includes/deprecated.php';

/** cohesion Multisite support API */
if ( is_multisite() ) {
	require_once ABSPATH . 'wp-admin/includes/ms-admin-filters.php';
	require_once ABSPATH . 'wp-admin/includes/ms.php';
	require_once ABSPATH . 'wp-admin/includes/ms-deprecated.php';
}
