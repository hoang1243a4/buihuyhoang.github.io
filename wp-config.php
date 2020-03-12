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
define( 'DB_NAME', 'huyhoang' );

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
define( 'AUTH_KEY',         '.>UNz!djYnVf%2VE#uW#gbz~W7EemfiLvh@R{E<}O2^thut;rT])EGx/A]D?>MS~' );
define( 'SECURE_AUTH_KEY',  'l{-n3s]157QmWvqVCky>D(V:[(24I+(AFYD<J-$+]*?6tI(iBpO}gl[hF*Crzb/^' );
define( 'LOGGED_IN_KEY',    '{t0>&[M b`Or9VpSGj+}mVRV6spCQ*pUswzj&1@m(i1hf+Z9$WP6|K>Qj2ojYZ7/' );
define( 'NONCE_KEY',        '/Cc.;SGtb(8IKKXAs>r?m+;q=Ms8wk<2OzKOQ8-,r5:06!1.Ae)5z{[zaI9.M[T0' );
define( 'AUTH_SALT',        '92`]1<5hqU/l6Wj{}uEY(rB)F]0g&~kRkW3Q{30PvKnw@d.p68g;uSIVVIIV`R3;' );
define( 'SECURE_AUTH_SALT', 'i6m}7BUQ]g|IYTn$~9i1eA5m=m|M=,O_}K=btSMt3d$h0i!>*mI]=5^#Tfq|FvCF' );
define( 'LOGGED_IN_SALT',   'r30i:x:Ee(VhwwYnWD-9sTm~)X=!76P;htM/<){1;(r+b5&9qRKgKFCN=KdG#B}y' );
define( 'NONCE_SALT',       '!|/Z&6CG)0Mk/t1X:iEC^@AaN__W:-D^p_90PhtF]G[jf#lqv]$4]]91B*J@R!yV' );

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
