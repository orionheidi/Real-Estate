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
define( 'DB_NAME', 'real_estate' );

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
define( 'AUTH_KEY',         '?~)7p&8D0U0NOg^i9g[H{vn*A1U4MCSJP7*~Ddy^JC,~d?%Z<53j8H<uT)xRL}u$' );
define( 'SECURE_AUTH_KEY',  'gHPnJ#3{3EAeo=_%Z;4HL<1CT<QUrh?rF{gmvIce=SHJj^<S|<pR/=7:V634!BI;' );
define( 'LOGGED_IN_KEY',    'rIIVPuzakI`RQFcUhgYFz)6 *;mUjRw>;bPqt*,>@LdNZP{b2oJ.A]8xgHjE%Thl' );
define( 'NONCE_KEY',        'GO`H&F3^[=y77Q4QS]8kp=|WkRQz=bSbvX$23l>Y-l=*xK3](=vN7M!vKB~KcZ~B' );
define( 'AUTH_SALT',        '?T^tDv4vd8m%=hVM;%g]h:}5!<(JcE.`?Ka^bBwN6 66(_rT:3[X&dVR(x|:SWUb' );
define( 'SECURE_AUTH_SALT', 'f/*tBP.nxdSC8}~2&$ZPfhexu!$<3L QvzI8[2)>!_!;N/r1dzr1o|0C:zZ0~+Ri' );
define( 'LOGGED_IN_SALT',   'YZ(`PWNzOz:/):Rh|</ xMk90F9u}~C$l$Z gCA)&$U<h|r:l8{;P*:v<:r9D>uR' );
define( 'NONCE_SALT',       '@@C/ju8y<>Q=&rtprFiAJ-=.a]zYi|!|.uTl@6LE&_fzoN769,c*!C0?W!zn09[&' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
