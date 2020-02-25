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
define( 'DB_NAME', 'dzairflix_db' );

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
define( 'AUTH_KEY',         'yhR=:leVWr8% 5E.]c5Mg#&hq2ljL.j!p2ad7]H#7lU`6v^PjuL{PIwF@oM68O(p' );
define( 'SECURE_AUTH_KEY',  '6baFXY(kJwEfMs!qI[z;p#y_YZV/!J^5CG*xTXV2YVtNEaP0U`RN@aJ0b.?)zV$A' );
define( 'LOGGED_IN_KEY',    '?SN@JG**pi8@tOh9QzV:M7o#:_1(Il14XHq)3n@w:SbOCs[i,nL`bq5dB$VgMPo ' );
define( 'NONCE_KEY',        'sCxwj6Td@kRy3?:Xh-4YL%F$mJ7z<Vqd|0>`g(NzYe{ YmA0K.~~v[/G=2q2^|Qw' );
define( 'AUTH_SALT',        '~<WxWTiQmJjgrJ7*U=JX2w9+)OF9,1e}-umgsh<SB~x..RE]a<$QneL~-f`_!{wM' );
define( 'SECURE_AUTH_SALT', '[JmPAC)q7N:T=X9Iy4qz!FUnfI?ctt{!F[w+C%%Eo_Uyb! 7+VcAO!(_s}f|m0uo' );
define( 'LOGGED_IN_SALT',   '8e36+cw}%Zf)voqaT_#dg$LqN/^`^1w+Z|`TRO:jMWAr]Tc8d:k{x4mXF,h#p)j}' );
define( 'NONCE_SALT',       '|>l_=GxEiFc)Z^I=)Ovs0@*a!OJL#*dI^py/>>J/1^bak) ]@AI7wRVOE<;=<).6' );

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
