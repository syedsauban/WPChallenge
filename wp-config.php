<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ezyro_35677587_624' );
/** Database username */
define( 'DB_USER', '35677587_1' );
/** Database password */
define( 'DB_PASSWORD', '7f0H[U)8Sp' );
/** Database hostname */
define( 'DB_HOST', 'sql300.byetcluster.com' );
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
define( 'AUTH_KEY',         'ij3lgmqplazbkczvzgtjn3wzooew7yhihb4nxaddpq9rhph3m27kgnbrzsshmatd' );
define( 'SECURE_AUTH_KEY',  'chogrrnz0bmif00rhl6afjmncmmhhcfwlldk7v9ime4kct53ps7gadvqqi73nsbp' );
define( 'LOGGED_IN_KEY',    'nrdzcsypdwuywigfwwmcvdwbn73h32mlywnjeca3bcuvog2nh3tutmoofutcuwvx' );
define( 'NONCE_KEY',        'qytagrhtypmfb8jycc3ke3ovkhiyfxm1ftiqtzl68vg5pix3aq3wljtjxpepg7vc' );
define( 'AUTH_SALT',        'cglwyloy7esowzjborqsqz6k1x2y6e9o1zgiiufyvsi3cuigoij66gfpw5vy7cnv' );
define( 'SECURE_AUTH_SALT', 'g9xjv5ayrjc90t7oqrdxmt2sprwkoqa0sxhljmpxobetseh4kwvshhmbcniaz2la' );
define( 'LOGGED_IN_SALT',   '8ibz3tcrjg2gqatcmqsgbvwjqubn5cmw7pks7c6zjdyiladd52ia4tq1dfruxhsp' );
define( 'NONCE_SALT',       'vsaqpqzheeqwikkrilkqzcwkcy9cb0utae0wdsvhzfwsbcj3aowmpdebnlj69qmz' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpo2_';
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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