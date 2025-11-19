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
define( 'AUTH_KEY',          'x-G27=`Z*vX{A~uLi7d[:84EF~rVaKS3=@Qq4+`#,xAUx`^HUGxtuNE5+rs>]g2p' );
define( 'SECURE_AUTH_KEY',   '/_5Ko9@V3zoQJ0&(<C-cphnI:2Y)*agpC=tNB+r+pvBJ_usPtDxvaQpK{0JD1Ljm' );
define( 'LOGGED_IN_KEY',     'nJk%Q@_s{c~kIb $r.FN&w].f^+xrMNG{~L.R!9#_V)9<7Vmpogz3Q*D(2<k08Ke' );
define( 'NONCE_KEY',         '^UO7X*syo<!2YQq#7M`M9,XEZ%i-@,>2?7N ;-^<x*~Reo?rPq69r%(%fVoJ&$*A' );
define( 'AUTH_SALT',         '*LO;u6Ggq-dx6HRj@N~.br{v3+7Xr^]ejGgi6R@|Yy-%U-{@o6TQ/V:3C~jO[0-b' );
define( 'SECURE_AUTH_SALT',  'FMML~g[H)d/NTBYx)lHf^]{=0-<2&y`adROCRWh&L471I)V/:^Palqx62*.~2p4W' );
define( 'LOGGED_IN_SALT',    'T|#:&yh0FfJgNw;9rw|.R#//T{@By4I,6HU!3uQa!HZ]-!10~hq#=>jW!>|.+7-9' );
define( 'NONCE_SALT',        'VFO2wTItwd{|Sd/RxZI2K5k03k]+nYDM&WwD.Go/`rp<gbGf/0=9[2w2a|=}WJK)' );
define( 'WP_CACHE_KEY_SALT', ' T5OiY?_;J cR$ikt24Dq|8]}dD6+4pUK xs~/~n/As8kehDPA0TtlyUO =*3{ d' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
