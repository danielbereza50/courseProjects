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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edgweb_wp' );

/** MySQL database username */
define( 'DB_USER', 'edgweb_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ozv0WD4aplrh' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '?#FHh7AQ4)a8-whZjr)(UwBYm2uDg[1bW-SH=>13()T=y=LLL<?]|YZH|*dXXW!U' );
define( 'SECURE_AUTH_KEY',   'bIO^:1rkK4^7n$.d2G4MdR%Du_~hmShtK}|)mqg>qsV$]v](l!Ay,N%(X? U,;A3' );
define( 'LOGGED_IN_KEY',     'ddU}WXb)-}BIaLPd;HQ [x(c9L$2*7e<k&:(W.{]$=,&_1jJ0Kq0uZp{S_Cm_@#K' );
define( 'NONCE_KEY',         '0svVf1tdkPf7)#nP e*`w0[q(:ti4z;+F0o*q&>bjC79=wpW/BGYG!2tk{Ty<4RM' );
define( 'AUTH_SALT',         'QypwO`MO4eA 7^V/ZWx=h#I^P51e_7R<XWr:NJqnr`*84::gy<Jj$YP{ Gu[+2X+' );
define( 'SECURE_AUTH_SALT',  'wV&$:3UL]R1 vITA>(o9dbWZ[$$ FXkT3LubTO42y;Hpd@8_qtr^(txrYm^/&%wG' );
define( 'LOGGED_IN_SALT',    '+FQ.-Vv_LvsKs{-(ZcmH~i,p_xzv=k5E 6l*cB0NkzFm[e4lpe`Fl@4_{|$tzft5' );
define( 'NONCE_SALT',        'HGzu)V|aK:{+@xU$rloIBmX:5;Qo},ZrH?}X(*Zuim=j2f0[q=>3OLQwvq;;w?dK' );
define( 'WP_CACHE_KEY_SALT', '[9)#/-lmM(YL+HXT@TT/Xk/hhN0UEpp49KmCZuE~;pJTIY#/|r`o9E4toVjr=vuq' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
