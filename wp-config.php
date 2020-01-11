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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'UlV5JAure6kjh1+ypsqbhWNhn5Pr7XP4sQAXLT7S0Dg6rbdfjvzDIu+boevpNmBf0Yk3wCJO3EUuoTMb72myGQ==');
define('SECURE_AUTH_KEY',  'APRaQq5pTAstaD0IkAAZgmo7iMJT1PgEApLP0O2CRQeaoA/NJzwAC8Tt5M7jr1KJEffHCGWek+LNS7HCCkO7RA==');
define('LOGGED_IN_KEY',    'wTuRIxYQMptu1OVz7HU2y/H1ZjH9jzhhQcohzMUyGFD10pKipAuJsZDlOF+OhArXi8OPdjQueVuJz716aDB5Mg==');
define('NONCE_KEY',        'w0d9sNt3n6rJgHMr5vms3CIrtN8HMtEtf43sUPsp1zjy4mSDuOQ2wVRBkSQub/93SE82J/+MEzMVwRAwNTsHuQ==');
define('AUTH_SALT',        'SVZwGq2bdgkHDk96s8OfrbjeA9Vnn0hy42QERVgJPRGJXi67skoYThoiUN/UQiuc5zQtK50zzwVl/BytoOYraw==');
define('SECURE_AUTH_SALT', 'f0Pec3Lrx9/u9TZmt7kS8VSlwoaclHFjMKCh89DOexhSlxlZNBGfMfXtzc9e+RW3C31Gq2jKWpKNPGaYVEO0tg==');
define('LOGGED_IN_SALT',   'xD1XVJ/+lUgDsWmPyjaItoP5CET61br9jfhQVLK6uK/dNRbLADQLPb/blUzgf4DjDfIYgi746verrv+If3N0TQ==');
define('NONCE_SALT',       'IwJ0gwQm91UxqAYDytVEooh7pj8LTFXti8Ee5wxopyjGVuPf1McXByHekP8y4u4fxO3AqjMP1k0od9TrT/JRJw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
