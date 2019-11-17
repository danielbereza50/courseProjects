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
define( 'DB_NAME', 'edgweb2_wp' );

/** MySQL database username */
define( 'DB_USER', 'edgweb2_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iAJSpfX8WGeP' );

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
define( 'AUTH_KEY',          'b{z|X%x;m~61~JrfDa~g4^J#$]-yUM=@T+j&#qQcS),:J]3J.R).uY&;~j,d,Zcc' );
define( 'SECURE_AUTH_KEY',   'oPzewc.A#8zVNF:/qD7|BUV9q&[WTS2:&I0WbQ#$cdAMyy7B1>C6dVenCw?Nmtt%' );
define( 'LOGGED_IN_KEY',     'TbIyS]f[wJl7`0oKgmWZkE{sTXzJ-~=VLB~PUHb!c-o;G={_Ybz#:A) ^;:D//@O' );
define( 'NONCE_KEY',         ' d@v>>UtiC>.)%)6xE>*)j>MI;u6(Nh5MuvQ^Vy_yy%{zEzE?[FME,Sky=svtmAY' );
define( 'AUTH_SALT',         '=^#N&-X=.`qi6KN}7Ri8I_hfne|jr^x]hCc#DMRpb{+a)KY5CV`Jwr{`BGbz1X[4' );
define( 'SECURE_AUTH_SALT',  'lk@ &1Gh3;>f<?7A@p?unDVu];MW}38LLC+TSG#tX*D] >m,hKv`wG(%Hu55[SMi' );
define( 'LOGGED_IN_SALT',    '{`Bw%xz?KsqKjvLr@a^yUF*FyV*X~N.5PM_RQjzraeU:dW6`8de?mGyd+]Hsu{n7' );
define( 'NONCE_SALT',        '#e09|7LxvW&Jmsnl K[DFv.*]JS)Q|h>UP$r;Fkr{(W66jUu M?z%;<9S`U/xumm' );
define( 'WP_CACHE_KEY_SALT', 'BH>i_C|i8S[YtVR&THvmj5WB~eS}7E^l(}r:YYfM#N&S|_SA7!QEQrqqK8ebr>v_' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', WP_DEBUG );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
