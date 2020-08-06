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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jT;>? P6kZaHuM3uV)KH- ;+hkeVI,dpxFQM[z$bL9sB|6E|!B2V?y!VzAwBvX/$' );
define( 'SECURE_AUTH_KEY',  ')W?0Gk73!/JDm]O,fDW7Qu$r0IcR;SRLrTER>R]}fI{DN-|hcT63t:)]v{5%kQFO' );
define( 'LOGGED_IN_KEY',    'DCy7M{r:ste1Kz`HwQuAB1><^k`T-~Cq5u>XP]*n=bQtnfFkmKs[3r,]ZWu{BgA&' );
define( 'NONCE_KEY',        ';nq.TRz>ex/Dg/7WA K[:IV vh;%@7_vrmKp<<CZd,]uR^7c9}Pmwl~[3Y~1=OIG' );
define( 'AUTH_SALT',        '`MsYphh]zS^%|J0 vd]*mV:4M|G.2j{vuoX89<G27CrHz8DU0(:W,s_ji4n8 S7v' );
define( 'SECURE_AUTH_SALT', '<kY{G2Pg[/3//GXOidGmkM9oR+jWC@3,SeR##z-JoDOt$^!?8M`ky]LTXqf1%5>C' );
define( 'LOGGED_IN_SALT',   'ZH|HuA}; iq=1qf+?]JYG#=mlKBmEN>(Y?Js-yRB&nf#Adr*c CHs+KJ-auq=wa5' );
define( 'NONCE_SALT',       'G:l)^GkOjb=YmB4_L}9gPl7=MIP*^b;OX+(Cp$kNKgYT@p6cX~o[w=[2?.-^FM;F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
