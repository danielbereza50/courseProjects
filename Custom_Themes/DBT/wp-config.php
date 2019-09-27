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
define( 'DB_NAME', 'dbt232_wp' );

/** MySQL database username */
define( 'DB_USER', 'dbt232_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '-#5OH#yX@LiI' );

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
define( 'AUTH_KEY',         'PI,`TBlr^%{V})MV~|V>X&f($kyvcq`{LwKx|RK2GSm+F@e0PDhM*&{8pGkX9)C.' );
define( 'SECURE_AUTH_KEY',  'v=I$.1lPZnoR7d@OMtQ}2|w.+QydvdcOG5e{cFIZDt{B$->1[O]TU?-3[^vkHy i' );
define( 'LOGGED_IN_KEY',    'o!PXYiMX)o=ge&%Vhfy&luEkIr=i:SOLB5<9!cGk>rLb(EP!kbt4IbVe!E2,i8cA' );
define( 'NONCE_KEY',        'CL|?16RPta#G4(jh,V]:XxGp2i|xEU=lt-X5NZwCy@}~y^pbWr}/Fe7SVp-V$ZkE' );
define( 'AUTH_SALT',        '48?}=z9_[stR mX/V| .6PzD~2s%[G)Rz)MV|(?US<2`@s}2Y*3<Dm{9}/p.yPD*' );
define( 'SECURE_AUTH_SALT', 'OSLzxcb4nZ8N@@nh^~mdhYz%o}u*i2W>5WBdLI@G^h$n^S7(JA0j,[Mwy5E^IK?7' );
define( 'LOGGED_IN_SALT',   'Yid}{A&&IlKdXW0W/h}{~#6aTR$M0uX$|_&V/ZXAeC%:Rtg=b_2~B[uS-I /t?3f' );
define( 'NONCE_SALT',       '1p5Vvz+ioU?&u;8[b?m}LqJ<NV<#kua{5}y1#%|Z[!*Z=o@@,t|!xVeF,blY{rAd' );

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
