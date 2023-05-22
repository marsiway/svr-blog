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

define( 'DB_NAME', 'bookdatabase' );


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

define( 'AUTH_KEY',         'dL~eeKYl&b{;3kg8Jl,?#w3OyWInqiSvn xr<i`X9={+2d7l&IlZl-gSi)C~R5-g' );

define( 'SECURE_AUTH_KEY',  '|7]^r/$v;MnBbq0Rw(V!P/rQGM{4W(Ia=^35B.B|zr>v`^:`#`L,b{n>#a9zwt#m' );

define( 'LOGGED_IN_KEY',    '7|YLt]3{,3LWMOG sG?lh1U.[?I5kR0eeR7K;X]ZTv:>9a151mi-KJ[}a;SHnX$j' );

define( 'NONCE_KEY',        '}RyF<T2%a[mk0.vH%eY!qN8FS,,<YM8]50Xh5sij;ud,Vq>Bt(>:MHUBIUGC?=3h' );

define( 'AUTH_SALT',        'FYLnK@=r&M92$uJ,Wyc(l.CEH)fW(~UN!E.u}n$7rphzr/lc]Exl(&G.1-4{b;(=' );

define( 'SECURE_AUTH_SALT', 'u7xBmj1Z;to}%z*sxohzL8~sD@!xkO8JyyL}wB+?1|G!i<P[:KLq[[e>N={s$Wx9' );

define( 'LOGGED_IN_SALT',   '2A.nmU#!sW 0U5 .`([_TYuO^gA2mI(^U ofWW16Q51a)usx%p!q6DFvuCL*v~vH' );

define( 'NONCE_SALT',       '4vj,AFfg2tA$s_6$mS|G7H&M~t:BJx5wN+ctjJtf5^Er62.}D9tXB8hLt:`8}9[b' );


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

/* Add any custom values between this line and the "stop editing" line. */




define( 'WP_DEBUG', false );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

define( 'WP_DEBUG_LOG', true );

define( 'SCRIPT_DEBUG', true );

define( 'SAVEQUERIES', true );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

