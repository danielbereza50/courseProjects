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
define( 'DB_NAME', 'edgweb1i_wp' );

/** MySQL database username */
define( 'DB_USER', 'edgweb1i_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'OhdiGFnXULmM' );

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
define( 'AUTH_KEY',          'Y>& a0MH1NpCDM6c:6bY$B$z/O4$`Vr?SM+A!_}9M8teV>O`b4iHO~Dx]eh:A%xp' );
define( 'SECURE_AUTH_KEY',   '$z[=l&$$Y`X!kdto<*5dz]&0C}m<2A3jTE<uw&Ut%PYrNahOgArKVAz*lNp9ojZj' );
define( 'LOGGED_IN_KEY',     'XQ|~]17U`W}gf-9[:P|(~|c%bKRJEjJE0}J*|TllA]NLbIbUfbT:5|O?lq_eb`dI' );
define( 'NONCE_KEY',         '2knxwTCSRzFY4AOy}ks$UA4&J[gk0e|]|x/~058[_k],,L:hJ!43EO8zjyIuAloo' );
define( 'AUTH_SALT',         'u5.R|Y#Z?nhFh2IFZPKY7B52aF<&]wgQ2:%`:P#U8!|#{ikhmBbzuq(iTUwKr%V4' );
define( 'SECURE_AUTH_SALT',  '+Z{~C.|$#Nq+Cvd.2<:J.),Zb]FJRs4I;!?|_@sK|pFdh1@VL@c<kjt7$q$[sy@M' );
define( 'LOGGED_IN_SALT',    'KYoXOVZx0AQaM)D>UHfiiWss`(>AP=i+eqXpyg8Y}`<d3?&ZRe$`7Pyi<,biMF7F' );
define( 'NONCE_SALT',        '/ %q==5(4vWw#9{^UBBdbUci:W8SFVc;~Ta!ZVZ_ZGS&<?dd!^6;lzv)RS)#`x+3' );
define( 'WP_CACHE_KEY_SALT', ',5slt]X%(m[:TvE S.}a)1$cp$qy$L#7YJ(<<*>9,;JQedMK%HS:!)w]g6I}ATS!' );

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
