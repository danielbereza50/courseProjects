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
define( 'DB_NAME', 'keystone_wp' );

/** MySQL database username */
define( 'DB_USER', 'keystone_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jfNuMbrmDxA8' );

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
define( 'AUTH_KEY',          's;[Y5DZ}l5vo8w@DwWFI#Sydf+.X2nNZo!}@0`i{#f)>LNfdNv{I^_|2j=Z=d]8/' );
define( 'SECURE_AUTH_KEY',   '(@WZ$R;0Cv~S}p[6@jHo6wXyujd-h41&RjG+3FOx8M4W`yITC>.VneV}&$4J|Mks' );
define( 'LOGGED_IN_KEY',     'yJ8iI>m1[V8&*_G?Bc2psP5&Z7_(CzPO/e1>5Xsg&?_8k3ltKgQXD&JoBHLF)Z=2' );
define( 'NONCE_KEY',         'D?6BJ^{@<P`m&pyu)2x=Ahb$jdQ8/u z6`4.]ga=@fH)dTTv4c.znoL,edbKt`C2' );
define( 'AUTH_SALT',         'sS`MZ8e~n)z/tA2?_%|h4XEN:=|I|vnb9UE@UEN3;T[YPN_xjDZJ;yleYCr7-3[(' );
define( 'SECURE_AUTH_SALT',  '-:^B 9zvG7^lGhym-J$obhMGJOHhdXw,|Fh3<>I0{?_kO2{|oE|85vtmimuJ8{vF' );
define( 'LOGGED_IN_SALT',    'iq@}CY;s%O<bro]%A&#fMk[b5PTWJHr/K%![@pA%Q!!4Z- Y{<Dvqx]!eQ7Lfyqu' );
define( 'NONCE_SALT',        '8 {VUaz-sMS%WY{TU]5CvCoGoa.t)j~M4C>FPs&G Em72Oj!kq4 -|w=+>{=rki/' );
define( 'WP_CACHE_KEY_SALT', '#j>DMqJPfxQy#9`62XN?[%G#.`aJJ nv~P;/n|wSg.tp-Cc{P**pG.q;|Pc!<eAc' );

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
