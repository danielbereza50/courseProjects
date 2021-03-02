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
define( 'DB_NAME', 'fish232_wp' );

/** MySQL database username */
define( 'DB_USER', 'fish232_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TzS4UXB1inxE' );

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
define( 'AUTH_KEY',          '/?9T4+:np>Une[0B]SHOzQd-MQaG>VB;$,g=+<OH*E&]sA*mQDj*]2k-0N-3]UK&' );
define( 'SECURE_AUTH_KEY',   'QzI#DLXS(O WC6`7+quS>R;+l&,IUK7c[#l[)!$!z4hXT;4e:LXA^VdSJ~!z2=GR' );
define( 'LOGGED_IN_KEY',     'jxY.;*rt]eV}_zvE77[7<+L-:|Yy`q3v W.[{0/yVfPwjLebZe>FVj@2G1YG6WfT' );
define( 'NONCE_KEY',         '|:@DaAyA<[RMi*.C)Y3L;$tPW#*I7Vvbxz4s5BJM*4Y_W;Y*i&7Mj705dO,+~d7*' );
define( 'AUTH_SALT',         'L4/}L?T85)Sc-y$N<#Taj1c/TOV9V ;wgK??Hf,q>UZ1F!7XW,Prk.Z{/GciU(W{' );
define( 'SECURE_AUTH_SALT',  'Gq3OyFfbf@$HI>Gl=iF(jm[tM0]eo39Ob^!JO)(gR)fUzZ?aHq5nez2`uQt&oywn' );
define( 'LOGGED_IN_SALT',    'K@{n&goR78P<fW*IU>Je{-N|^tiaKDz|#@XpcBYO_=VF=@+Xwij<%BFX#K;=0r.G' );
define( 'NONCE_SALT',        'r(vbe(/=vR5qxUIE{E]Sy9Ou!4)Ij8WCgQ.kB+cg(pMM9`CI@wl,CgOL7<G+48vk' );
define( 'WP_CACHE_KEY_SALT', '/Y&GLV+CwroQ6Li%KG%WY@F0y)4KHdC5/ODnUfKL53CX-RFkPj$2J4rD |T{D3],' );

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
