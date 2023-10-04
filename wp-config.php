<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'fOIDN8uvM5/JZXJZn45CMHvhVIGxFtfozJA+bHlRrRW2thu8DyDD0VWIiz9UQB3PsPaGGvh7kD4aTp9sd6xnaA==');
define('SECURE_AUTH_KEY',  'KiKWkSyLiob8lGWb22v7E5i13//hBqLkj62jyVjehhwCGhSV3w9p4tluHXb7/hzKYxWnifd8MVcgaa6nMoag7g==');
define('LOGGED_IN_KEY',    'Xt/eB9RrLyLxc5+091aWdFQYYlx5YCA2LzWLHftTsjZvBbyD7Texd5jp6q7A30ADUVLHGtr2HznIFVrAm6cvmA==');
define('NONCE_KEY',        '1ST2dtelnM+/AOqXwOOkJv8SL6lPkoFTP0XkHJ9w5W+p9Z9PKFqjv7oWf/2P850ewzonBKHrumpH6thBNdhDqg==');
define('AUTH_SALT',        '5SJzfLNuroK14/zKd4QEB2mWHFgewu7AsXct7Rp82uKEVE6y9sgI3viWAq/dgMJQvHnOLpxg7rXX/6p1Z4yvwg==');
define('SECURE_AUTH_SALT', 'M0crjBB8ckfnyGZ9GcLo/ZCUNn/CyIjIhvTPMXNQ8MHCF+bufxHyu1hppCzEclS4t4XrXiSrsS1fT6ZzSd83BQ==');
define('LOGGED_IN_SALT',   '/q1wpAZGOA43Z/8Hw+utORIe8+CL4kkyq00xNumlMrEpMbtpR1FFDgj7ifqdFplCYl3nnNWzAsdzxF0xZZvjmw==');
define('NONCE_SALT',       'CrGavOsoIw+esh6zXXFZl6Eu+OnvSKbPcrUgz+N4rS1ackefEyfMurdGpRzmLR8MbtbLtj9oFWj1WGExliEzkg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
