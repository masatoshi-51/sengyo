<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Qn3{GY`By/w@^Mq<xik:0oCx0_t8= uS&#(MyW1OqhQ8%!QQ@9KnK$s1A7Zl{be|' );
define( 'SECURE_AUTH_KEY',   '/V/oymj_6+&W/}f:~ZL9X@!crZ;EI*%t& iwH{<J|Z#sM1WsOCLg5%p+|T!NoDD+' );
define( 'LOGGED_IN_KEY',     '8k:}UhfL3I[qg=bNpNw%Q,/Lm=%$U;b{m88M>qEn!z18lEZz:LbNQyoi/)uFJh9.' );
define( 'NONCE_KEY',         'n2,Be2IA-yE<Npn2-*eHpTgqub{Z%uOHl~>{$.t>=Xfd]rA:[#AaW|2iZi~{N8_R' );
define( 'AUTH_SALT',         'P#zQ[[|T4tTNw UPY8GmE$dG6sr+_obX,anyev0~zGM(|Y^az)7Ox|(>5c4>YL1T' );
define( 'SECURE_AUTH_SALT',  'jdiwp{G!N876zk696yzb;{=(dD|7OIVg#X<8.2hAe.Z7H#(`;1HHI[p~n,b_05f8' );
define( 'LOGGED_IN_SALT',    'a54>i7yHbSF2GK%z0~eBUj[23+-aVao?n_twF/,QK}-u}9_8yx>q}{nwM}[=:.40' );
define( 'NONCE_SALT',        'C9Ix l}PS8WOREq[:B(SozMcZ4hp[ke<qY[hB_j7pf@gB4sBO6v>^zjNwZzatE!M' );
define( 'WP_CACHE_KEY_SALT', '=~uRk_i<uXoz-~KbZ:-us(`N$6UKCBi|36$C;_>u9^Z/[l9NYs1)Li|EN#*n*0Fi' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
