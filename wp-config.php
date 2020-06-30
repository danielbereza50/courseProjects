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
define( 'DB_NAME', 'pulse' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', 'root' );
/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:8889' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!_Cu~IU90|6P+~16!!+w|-bzMN;$t?^%W}U#U{.9Zp)v/b!.jc@H^/B]2z:v5L,p' );
define( 'SECURE_AUTH_KEY',   'X_tUi>h6-]0|`jIUYeo6*=L1y[eE?x3cZZ>%VuO:eE:>&}JyP:CYl#+N<wOtSnyb' );
define( 'LOGGED_IN_KEY',     'ytp1Sz9U,gfrsX]h^!~J:6/tv,^M=f|3<pOL,Sx8%0,omTZU:@I-Gld[yx-QNR|0' );
define( 'NONCE_KEY',         'mP#AN>_9{`_ZS61-$Zkdd##Byf<{P}eR2:.Cix>idiP}b+AgBks$18j`EKG%:{wD' );
define( 'AUTH_SALT',         'a) Vrx <Ca_v,NP/<o%5!pa#BR>Ti8$knt#d3|pGZE^w?PS!Q;2vLio%5o(:1CYg' );
define( 'SECURE_AUTH_SALT',  'I>L^I![hwrlFEm(B%a@ 89kgI}i]KyQT^[o~?y(eYEsElBRZD4Bb64AB}wg/yx~j' );
define( 'LOGGED_IN_SALT',    't=bRSoz^b#.<@j$yeW,[Gt#J43%weQ=I>4OB}_w(7i$!=E0=1DEy;q7hBW2)x1T3' );
define( 'NONCE_SALT',        '}!f.&O=QG1kGSQ9HRx,s9q0Kj0#e|x4~@KDr:Dpdsrl2|,[w6za$j_ID;c%k<Lpo' );
define( 'WP_CACHE_KEY_SALT', '@v75x)ddIL@iVKYVPTd{Uy-~hQtxCXOZz,h%ntf~s4AJ*b*[KC(*CVY!?}yh4>YM' );
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


