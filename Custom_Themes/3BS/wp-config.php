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
define( 'DB_NAME', 'threebro_wp' );

/** MySQL database username */
define( 'DB_USER', 'threebro_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hsr4d3PRvnPE' );

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
define( 'AUTH_KEY',          ')zeeX@j]NUgw-WN77Hn|R*<x?/0v|rbx:#O2BzUjsb|5m;>K+vT43]QEN={y#z*d' );
define( 'SECURE_AUTH_KEY',   '5L&J09~oL$iD!I,/xbrX,{vRB#~ss>F~q6<H,C[zI4LW-Dpq5hzK&2Lv-i;U:FL_' );
define( 'LOGGED_IN_KEY',     '+r(+:]d06Trs+W3mw1)Bwp;|${vTXcS9+pV}l:{@-@YM8qp5cId1T:U$JgqfQXz^' );
define( 'NONCE_KEY',         'm]JLl&<7DN2-.vZdsRBb!1^Ha*pG^Sg7`9BenO+|Xx)RVM{4Nt!.&;F&|Jb=E{qI' );
define( 'AUTH_SALT',         'Fm&BOMb]uBn~@.nWNjk[Db|G@4j:PF}yI{N{50Uu>_4qELm,0/u<[g%QxvBU/NRN' );
define( 'SECURE_AUTH_SALT',  'Zc P7Aj>Pgmz[h/5TgfM!>v;Bf,JHH:{rqk[xd0Gbsu*JJ;pw-.}P{#0Qr/.zY:<' );
define( 'LOGGED_IN_SALT',    'nqfohCBQild{NSC7`:<9[u{jYyPAozfypks,]Q Ky<u,&.7NH45[p=mw^L{1~1*e' );
define( 'NONCE_SALT',        '3`d-(2,}}|:),5&-74c4|v=HXo()l0!s>bx*#&}7(|^JIVVQn`{nJPygLr(Mu*U}' );
define( 'WP_CACHE_KEY_SALT', '@za{w/j r,x+h<X~vEiUR%12$Mkr:fH8Uk/S^ W@Y;*U$ @}zZf_Z8TjDX) ^8f-' );

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
