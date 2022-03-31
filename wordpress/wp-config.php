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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '~;5|O&ZoFhZRJiX#H#ldORVA?(S+P%Oi.*n9P;1mYK%{6cFJ[N6.ia^f/ZCG#jG7' );
define( 'SECURE_AUTH_KEY',  'gqv/_@t<0dz?9SDki,-3+q(&T7?S<Ql:?.#CaBjYbrC46&$x4)Q8fY>H-En1MAw7' );
define( 'LOGGED_IN_KEY',    '?HRe|%oiq.uXF,<.xx}[=[w^:P+KT?cU9RS<:g7%7^vr S }R?. 9{CF?@zoZ_v<' );
define( 'NONCE_KEY',        'PFN4|jsO=BbLbP(b{Um!Uq>Y][J*:!<$!Mw{$Fp^&S4]Uvn3Bc#%F*v_oNvHy=V?' );
define( 'AUTH_SALT',        '/[{.muR,rqlhp#0nTc=3]<z;%Ld)>y#ia^N;*6ph?_a_{bsR-&MKdgXK9Yu.5!;j' );
define( 'SECURE_AUTH_SALT', 'Rul3(y_lud|(+/<L6O,R^PrC*-@#5U[Hmx1.bL14D;2[fMF YSWnSrG b:58]Zfd' );
define( 'LOGGED_IN_SALT',   'cqm4#42Uo# vx,=+Vlm|H3,[wHI76Vw1T(0daj!4z8^%nbQKq1;{UMueTrF;Fj56' );
define( 'NONCE_SALT',       'V72{YH30/S2bIKBJQ*&1MZRi|Iq=0>C/>ikE_b|+`J/%[i,.wF0g)/[c:BsSj={T' );

/**#@-*/

/**
 * WordPress database table prefix.
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