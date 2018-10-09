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
if(file_exists(dirname(__FILE__.'/local.php'))){  #local database settings

    define( 'DB_NAME', 'local' );
    define( 'DB_USER', 'root' ); /** MySQL database username */
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST', 'localhost' ); /** MySQL hostname */
} else { #live database settings
    define( 'DB_NAME', 'natalias_universitydata' );
    define( 'DB_USER', 'natalias_wp373' ); /** MySQL database username */
    define( 'DB_PASSWORD', 'NataliaProject96' );
    define( 'DB_HOST', 'localhost' ); /** MySQL hostname */

}
// ** MySQL settings ** //

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
define('AUTH_KEY',         '3a30W4hQtLqqLUiw2zjeWCajuTcviu5q9QIbHsPRQIGRRY74D2M/Z8VWI0gVChcOU9O5oYhYxrze1g1EXhektg==');
define('SECURE_AUTH_KEY',  'oLEioN3UEDiIwRmISM/EC2aJN/M1jR7JXN13fBBRYKsnW4/bznrO+3jqBDfprPzQzey2CFxZ0zl5lSP1TAzgKA==');
define('LOGGED_IN_KEY',    '/saRMJXuBiDMLcnZnQ54wfLM1wVSedOmLXQjsIv3uXYhlnGWYCOfmWPZMBA9vqkjAUFgpMtOAkRAOR3Vg7ciug==');
define('NONCE_KEY',        '5Zk12N5QSHQdZNIcff350Zj/7ZyvnQybu5QW3YfDDPz5CfQfsp7n1vuxyFdBkkUoJC7YvFRtQPtGgJbZOMGhjw==');
define('AUTH_SALT',        'NY9clO3NHyLZgiu3aEkvXCHCgsLDMPJNgIQM7lAAPddIWwcUZHXei/X6FGplHMWLrvTRNiLzltQX+/r7e/Z/3g==');
define('SECURE_AUTH_SALT', 'mk/l6E4tBPminJgR3WPJKXiitTle/EdXiKhs2wdrqNuIuL5A+QAC590FNwrDaoKNAFhwdU52Yf2FcpQZum9utg==');
define('LOGGED_IN_SALT',   '2EVz3YCcVLsC1GiYb12TZk07np93fpKerp31VtBDI3VTmH9zjqoBJkrI946HMe41IuF2RrG4ST/IiC400MpRtQ==');
define('NONCE_SALT',       'h3w+DTnLrVcx5G10DdR9MOC+a6JLC1Uhqry717o9JGj/NMXta+dUMmbb2BShbB7LeAcE09K4JahWBV5hW/Jweg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
