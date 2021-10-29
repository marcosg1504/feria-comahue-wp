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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'login' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'zJ#;DCk7wx@_[Ew)a6 QnZQDPNx][LdaV2<vuZZUiceTEs=eOve7C@I0*PEx9m4#' );
define( 'SECURE_AUTH_KEY',  '6*P#=^lkBbsuuw,EOMy%vdw~6DX[k-U7Y49-^S2*r%9t+di@`vmWQK:9R6c7Njv!' );
define( 'LOGGED_IN_KEY',    '5-y1WvTpE1Z3N*7K}RG?/vTIyvxH[7lGe`4^|*6kuiaTvxJQ1LGo`<uIa qh3/vW' );
define( 'NONCE_KEY',        ')_eQa3RoX:ezSRt])P%_Qq~a,vI9<(&w$YyR_f75<]GSkt@UuZn{Tdw/LN6cA()=' );
define( 'AUTH_SALT',        'u0BD{TI{dpl44bX B5Ye8uO$Evc(N82NAj_K.XhueBDc_j2.t(Pwtxxp2yU6ZH1h' );
define( 'SECURE_AUTH_SALT', 'a 3D(7J!96+96HHDux)fvUU?N|GiM f9.FM@)h>ANn7X.UxbEfa8FIH A#oFMUjd' );
define( 'LOGGED_IN_SALT',   'ZhG0f[hh3I_jYU2!@.+7iR1@KXtC!W$,:~|Nx.=ir,MmELb!Z^&[=tN_aB!jIKfN' );
define( 'NONCE_SALT',       '8[Uj{]3DY=150tgz7Zh#S#u{6]G<-3=]/h3;Y@z#,wj,k$Te&DB`^A*~IwIdzzl]' );

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
