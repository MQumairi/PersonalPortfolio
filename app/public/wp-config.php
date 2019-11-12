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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5vMQIXMAxQwZbDN0PpcJ4Ee+Jkz7R9na000rq+wskwzAaNJYwDeKk0i5KWRDbN21koM5S1bBjdRcmZjIRxixdA==');
define('SECURE_AUTH_KEY',  'dw1Gy5pvE6qWw+mQMCvCJAXga1NN8JOp4+AkNTF/qix8BA0YYoOr+7PzpmtxDuVLiiI3b9Tz3465rX0GuOIUwg==');
define('LOGGED_IN_KEY',    'LkO1n0CcuOPc1NJE3oRZGTMRRe5GCqzbbd/IVl2ux7+n4qSuI/DLcZ9AaOXEfO/aelIb66499Sl4XxXaiWt6+A==');
define('NONCE_KEY',        '1OSGJHJ5f9DxkzsjLawOT/McahF5eCtnzaUTHBVSJZTaPecNNjYAzK3oLSNxo4RYFW8ZZA7e9JSG0tOBKVsMjQ==');
define('AUTH_SALT',        'XmRRGeeyN/F73aQQkRDnKWwlLLoMst7ZjLHwPudbGMoZfL8At9OgB5QC2YYXCPdqr01cgPzxqHYIctgMzqr5cw==');
define('SECURE_AUTH_SALT', '9xT9HiUdMxETR9HEGk6mIK/oaqjYr4xQrtFNw4VMotzSh0IVe/u8OdjH2KcOAmZXzt3577vCeKGTDTMTKBfI8w==');
define('LOGGED_IN_SALT',   'C44P8U6O6KiTbbSKxv9pAm/hI3tnbrphcrqpKUiuuACR4DiMOa58GhXA0D6LDSessYV5+ByRGTES476FaTEZHw==');
define('NONCE_SALT',       '2kOZ6uQjo5BPA83ipxB+r5Or7ZEzWZk1jOdbRxy+Gjqnyj8dM/UL1XPZPIEYjkvYT6HCjnpx6bgeH/Oa7v39fg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
