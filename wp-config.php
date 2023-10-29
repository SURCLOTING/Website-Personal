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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tokobaju' );

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
define( 'AUTH_KEY',         '06~@EP4k(#X~T6/klj74=HD359Q}eY+u#p&R;1>Q`}IH|Y=B04zK>4`_O^5hH7s?' );
define( 'SECURE_AUTH_KEY',  '`ThrjEAPEaii:5;{]zT$m]NqIXsq+!+Y*iRvs&NoFxNcYQ{q<AYh7pV$a}2PYtx(' );
define( 'LOGGED_IN_KEY',    'Pe4@.>2<8hx;nw.SUu=FPm0dT[j9c3CfBBvt|MsHkd +Xn#!YP>wPW>&VB4[W(mV' );
define( 'NONCE_KEY',        'V.#Rq4@5TXEsALo5!d8pPV(irIJ+&bLOon!Q32w(#!j[NZ]kwjy8hB=<o5{%6I71' );
define( 'AUTH_SALT',        'qx~8?<d61,2|bU^se->Mi?7?Z-{;dIPH(1brk4)TJ]j;#=nQQ^`dhfIx~FKE2_74' );
define( 'SECURE_AUTH_SALT', '*s/. shF{nx,{s.>k F90^UU9iZWq=<NSZMUPD;}g7==3r-m;SE)f4v.V%@o&~gF' );
define( 'LOGGED_IN_SALT',   '88;jx^Shiba(isCk?k_Tk/FU27l[}0eI,FAoh!DM%{gC|@7N*lY-^i$C-_W}zr@-' );
define( 'NONCE_SALT',       'drT}FS<r^5k9E&di7|X%WZDhq)^Y3%Mp]D=3$xn6i|j];nru:{->%&*xkC~>!&Ne' );

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
