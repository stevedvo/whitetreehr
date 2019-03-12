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
define( 'DB_NAME', 'whitetreehr' );

/** MySQL database username */
define( 'DB_USER', 'whitetreehr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WAPCfFNppjj3' );

/** MySQL hostname */
define( 'DB_HOST', 'terraform-20180228142846314100000001.cobaghdr5fzb.eu-west-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'iDXB[IVO08}~4vNBvA^?H6*BXz43N9wcs=?-JDPy6lCtP~pA8879PN?7)I*uO+kr' );
define( 'SECURE_AUTH_KEY',  'YlD2+$-9gq1{`@M@yqq=ZV<J.)}:@cihGgiRZRGS]DsM_(<n&RLd9<h+2)RCkbor' );
define( 'LOGGED_IN_KEY',    'y9};{Oz9yE-8+Ti2/=;T&)msr%H]6cz*$n],l&RxNYSlkZ.c0t]rz3{,Iok3]Ysb' );
define( 'NONCE_KEY',        'M#[e|F5r:BDBey#Z{&u&>o.2Db1XkcFR9o*f/BjKYTlc=KqV]a&HRT=hR.yqrx}n' );
define( 'AUTH_SALT',        'ZZ3[DK!.vg-?g0A 0;`+W<eyj/w#o5j|Al?h|$sVkhPchW0vzcO-;[A:FN>Eg-#B' );
define( 'SECURE_AUTH_SALT', 'Zv!TxlY(HW6!~hfE2U##zFM}1y8gn$weT:K;I)W_st,g-2d.C&V<=g=josU@.e0{' );
define( 'LOGGED_IN_SALT',   '*9I8RT=~H.IBhbvh9ZvGw+H>CGEEm[9-.@!cw,*&1>SxNL}[z?JvZ2JmdHndhn.}' );
define( 'NONCE_SALT',       's,- @Z[68NA&=9+,dX&*KUq&YD.$bdiEr)p0f6<WUa0=Qj$b+L-SYBl1` SO:,Wz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wt_';

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
