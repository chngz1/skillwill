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
define( 'AUTH_KEY',          'v22F?&-.6ftjk$-(7%`7r{V(/X.G*N(^mwD[Ow2Xn=]TIj{hcWn( .y(>kPc#iHb' );
define( 'SECURE_AUTH_KEY',   'h vzNg7fha9porg ln,)orW:|{KqA0J9nkZnw87:x-p{qs{{u;Wst)%hg#,+Bg]G' );
define( 'LOGGED_IN_KEY',     '6m<j,pDxLC0_6n4P>KH*].vD7EwTV( 0d*-*jxu,pl*h39k0|ZIF[,6=m;(;IrQt' );
define( 'NONCE_KEY',         ' h0UK+IfobwD6b=},)j`GZc,0xjJxLDJz/Jf21F;w;=pJCetCX-b?M4f2:H6*mNi' );
define( 'AUTH_SALT',         'o^TH>|R{Qmkbod68$!Otkc% .Z$yC?!~pj,Ged3^%9=Of SM=1Ck4-X<HO5]v|s9' );
define( 'SECURE_AUTH_SALT',  '1(Oq?P$2=$V&_ROZN5u]isuSH: }(!uEYlm:bpu~=FiKjb-q%vVinp0},B~PpG|4' );
define( 'LOGGED_IN_SALT',    '2dKd?/Cl[S_FQ2KP,uXPgJbNC-s __)g R-^SF4uGN|(nT4w/)jW0E_EF*p%*39$' );
define( 'NONCE_SALT',        '3C8`YPlP(kQ$RYlMNr|[LT6Crj^>bWUrR>YJSpj.WL!,oD&aDr=]vpl}chpU,zTD' );
define( 'WP_CACHE_KEY_SALT', ' t7B+#Y]y:c<KwdO4a3asFX]w8$N>?Ty) $M>u~LOmgN^E$:peP3vG^Z6OrcWc?K' );


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
