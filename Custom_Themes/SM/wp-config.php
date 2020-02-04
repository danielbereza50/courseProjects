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
define( 'DB_NAME', 'edgweb3_wp' );

/** MySQL database username */
define( 'DB_USER', 'edgweb3_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PdYZq3AtH3s4' );

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
define( 'AUTH_KEY',          '_4G9$z//IU8R=r{VY+]&;Qn*94&7S]0KJ}CS<k2J*&?=^C!@}zZ~I?Mx!1S2$pbH' );
define( 'SECURE_AUTH_KEY',   'hI3u!jNPP{Ve )sY&aYo9OV3TiQ.oa3e?QN 54i3l{5ooy?/^c)_`LF6ZKvwf%[w' );
define( 'LOGGED_IN_KEY',     '!3{&u?~`zKvd2_M+xwvtR.V[SSu^z/U%J$UJ^/];JJAd4Kdw&}aZ2x%r;4^Iu`H2' );
define( 'NONCE_KEY',         'U,Q)p)1TP6X)pW6^76B_YclDByai3_(fDo|oQ>D(k=vCPcMAy!sl4 [~JS$Rp(ty' );
define( 'AUTH_SALT',         'bqG#mHOY^y{FL}Ut.$D^g}E;*%haH& S(w4(Hew-HrHG?uPS;]6[Z{rlpL%)eh5p' );
define( 'SECURE_AUTH_SALT',  'uk%JZTQqv@os>%B)=U|Cj.CWykOym(MP^RI3?dtx#e8U+,RhWsGv_Y[osk^|?bM-' );
define( 'LOGGED_IN_SALT',    'mz1Y%</H].`M vZv=olI31jRKPm5/(yo%_5Q38`c_{?!zM.3v*%JjP)>4h|]y!AO' );
define( 'NONCE_SALT',        ':&6`0?N|1Fw 9w;C&*nr^aM?q+gFcH<^Hl?%$##_hGy6]H{E0I_eg+d?SV93B$8Y' );
define( 'WP_CACHE_KEY_SALT', 'MT*U=A{,#+K<F@O1BD1|kvp$f.}4E28:q)u)c!hqZ]:oTTy[Lzt,%P+Rg&|L.-Uk' );

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
