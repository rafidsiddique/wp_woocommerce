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
define( 'DB_NAME', 'wp_woocom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oE<@`~0h.EW/ ,X^R-q?^=MWo$Ch2zc0&2~1u]Q6&tC$[<fJ+B(m@$=9$_<e(ck9' );
define( 'SECURE_AUTH_KEY',  '-7LY)thp=mdV{gh@ov?&-9 1nb;,}G )%Py++EPPj_R*0W)x]ohnc;}wS^tOY,,q' );
define( 'LOGGED_IN_KEY',    'R0<GFmTFigG5Mp%N;:9}[FFuG:6tTPdxepzd.!H6plDdx)llIGA++*:g-(y!?qHM' );
define( 'NONCE_KEY',        '@Lr uus{brG6B$z<_6k|QHu|5Icgwb,)$:;on5sPu=n1S}kK*3t|I%9}HA*%46%%' );
define( 'AUTH_SALT',        '@[^fcYQ)5_M=5||AzrR)E+&~{%i7C=cqjLimo0!M;gRs:9{bcCg.U+[0R)0RHs5c' );
define( 'SECURE_AUTH_SALT', 'uDi7cp1m%9&pMC%f<$;!4YqT.{T}lzs34B~fDo4k.}RfESq4I$ncy[NLmIG9l}E:' );
define( 'LOGGED_IN_SALT',   'LX6(cnDdvoyrj-Sc%?*tFYEojE%Me0KVOG#OA@tCGII5<@s*hOx~@aVe|Wi9DRNL' );
define( 'NONCE_SALT',       'HM~e:KeH6UCxBaOrA0<!?+xeHtGn%2ZUUSWol;QP+R.5W VkvOLCYi0^]&lSm^>0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
