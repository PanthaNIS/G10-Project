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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nischtha_wp703' );

/** MySQL database username */
define( 'DB_USER', 'nischtha_wp703' );

/** MySQL database password */
define( 'DB_PASSWORD', '9S6!t6pHN!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'tnqwuesh8df6vvjaeazned7q3xeemwmvhukuudmhynjilujvfteejnjinac0vlwy' );
define( 'SECURE_AUTH_KEY',  'uwqvqvcihgeu3vhmoqcubpsp1n805nzzbk17jjixuucylgm9vea3qwlwxp8xwfnj' );
define( 'LOGGED_IN_KEY',    'byiogh5wzkr7tpcxocuaqxckoiwwqvfyknaid7y6lvbi13k8o3b6kixt4cxup78l' );
define( 'NONCE_KEY',        'sdytzpiamsbqd9fxuetgzffwmz37azjduhkw4tfyc5g9isf3jwz0tzhg8dus7wtt' );
define( 'AUTH_SALT',        'djesyiladymqujqqdxakqxipbvvl9szvpuaivhurvgyxr7v8rjzxfyvgkmdf4rzt' );
define( 'SECURE_AUTH_SALT', 'linfuk0bmg3ydivi9tgytrnmob3ekfzonxhumk52yvxjwoh1pejvthwajue9jlpd' );
define( 'LOGGED_IN_SALT',   'czgchhrt2x9fmavzu4wv8l30eiq8xqinashx0x01nyusagxeqzigpdge5mqd0jcy' );
define( 'NONCE_SALT',       'dowcbm9x23sqg2wtoumywt54uf3pqx96jgyutxgnrcuphvw0brmejcgimgrs8fey' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxe_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
