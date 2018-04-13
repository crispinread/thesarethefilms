<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thesear8_wp186');

/** MySQL database username */
define('DB_USER', 'thesear8_wp186');

/** MySQL database password */
define('DB_PASSWORD', '5S9[6.S1P1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'dttivtlksqq9vqabh6kc43vlgvhm6xoflewedo10a5itvgjyxfzdyhjjxq1mxv10');
define('SECURE_AUTH_KEY',  'kgvtqfqsn6zcj1bzfbbquvrxsd78amwd9tvindeznhykxalgvw7xuwmyn61s6typ');
define('LOGGED_IN_KEY',    'kvjfernosmffpk0ipxkfhgtycuvczeldpqnt2amiktieh2hbj4uii7luhmlplb1y');
define('NONCE_KEY',        'b7eqlr1lbfxgxlzewvq1f3t1iki0lfep4suws3bkibs7znvmlgz0phvnvunjywsh');
define('AUTH_SALT',        'pdwvxjtygcqt6qr2rgfu6te6b64o5mv0inr4qr5jbi8g5rktenacfrif5uaylmrh');
define('SECURE_AUTH_SALT', 'oynqxlzsxlegoslqqdzdymv5tbjzvamr4dlxgv25stnsmriqqvodt4cfkrfuxs5t');
define('LOGGED_IN_SALT',   'zxnx5izaqpfseksq8rti0eeotwnnxy6jbewnrccj617hj4c0nj5hyewnhdao96zt');
define('NONCE_SALT',       'e1mbd8ssy7vyrydairvwixcm90r3dzh9qeatflqal9pc7e9jv59butkdbuto2yji');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
