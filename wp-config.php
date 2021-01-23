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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          'O8C)Ck}8-=S;+09R*P(|aC3dZST)k2,to!=8AR|ymRVkWN}Q,zY&1N.pb`XC~(T=' );
define( 'SECURE_AUTH_KEY',   'mPhq~DlHc0uqX/Fw.NgV5wR@&^uibd-i)TQ~}Fti. `%0 Qon?3I&tei?7h@`=YE' );
define( 'LOGGED_IN_KEY',     '`b=x~i3DS$m23xiae5TD2#-6YFR{YWGUs5np.EEr;i%K&>gf8a;L/!c)zI_ZeW4u' );
define( 'NONCE_KEY',         'N4;mL+l>G&JX+z*;% %MHdz-}_T3^!=KzD{.gQ60,_n4nY3,!boq)yDM,D!-$*fp' );
define( 'AUTH_SALT',         '{g}0USgO4w{l:f7[X%jOy;b-j;gBEC:8X<*Qx!` cN[)}liary:K@sgYm!A`8~$`' );
define( 'SECURE_AUTH_SALT',  'xJ$-UP, D{@vBhKOaNOYTnv)0 8|dHs8l(xE;ysC}iF43StUT.MY]bi*Xf97>2,5' );
define( 'LOGGED_IN_SALT',    'zBqnFdSGh<L7($;aB2-T_%9;CEz?SqAIg*0]7`*V$(7:5I^,R3?4cAT K]0B=oKo' );
define( 'NONCE_SALT',        ':6akP5UjKrJ(EpEOy,.Oxtp*0q%DSB%.y+`H8pKGdk=1F2Gb>/UpeHt]]$#gGshQ' );
define( 'WP_CACHE_KEY_SALT', 'LWO|y`6`FL14=G5b=o& g@?ncRzT}= B](8s->#0?pF^j%QNF$P|8dcoo^kBtz$#' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
