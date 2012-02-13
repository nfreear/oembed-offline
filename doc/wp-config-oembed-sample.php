<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
#define('WP_DEBUG', false);
define('WP_DEBUG', true);


#define('ENABLE_CACHE', true);

//Proxy: http://wpengineer.com/1227/wordpress-proxysupport/
//   http://core.trac.wordpress.org/browser/trunk/wp-includes/class-http.php?rev=13484#L1124
#define('WP_PROXY_USERNAME', null);
#define('WP_PROXY_PASSWORD', null);
#define('WP_PROXY_BYPASS_HOSTS', 'localhost, www.example.com');



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



/**
 * Add oEmbed providers: includes YouTube (HTML5), OU podcast etc.
 *
 * wp_oembed_add_provider( $format, $provider, $is_regex = false );
 *
 * http://codex.wordpress.org/Function_Reference/wp_oembed_add_provider
 */

wp_oembed_add_provider( '#http://(www\.)?youtube.com/watch.*#i', 'http://embed.open.ac.uk/oembed', true );

wp_oembed_add_provider( 'http://podcast.open.ac.uk/*/*', 'http://embed.open.ac.uk/oembed' );
##wp_oembed_add_provider( 'http://podcast.open.ac.uk/*/*', 'http://embed.open.ac.uk/oembed?theme=ouice-dark' ); #It works!!

wp_oembed_add_provider( 'http://lamscommunity.org/*', 'http://embed.open.ac.uk/oembed' );
wp_oembed_add_provider( 'http://prezi.com/*', 'http://embed.open.ac.uk/oembed' );
wp_oembed_add_provider( 'http://docs.google.com/*', 'http://embed.open.ac.uk/oembed' );
//wp_oembed_add_provider( 'http://spreadsheets.google.com/*', 'http://embed.open.ac.uk/oembed' );

