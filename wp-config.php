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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbcrle9zo1ybas' );

/** Database username */
define( 'DB_USER', 'uijujcafcca8d' );

/** Database password */
define( 'DB_PASSWORD', 'xhe2olf9f2cd' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'av3}sv[`JhZrSad2pA_wJ!.N~jlG>(Hhi^x:jXKu-c70RQ:0~.IY5n2z,4Pq:.Ei' );
define( 'SECURE_AUTH_KEY',  '8Ev{6WMzg5*m5_PkT__V0jO!RxhxaTxaGCxe/Rx@H0;b(G[q+Z@<5=6i=ln?@??y' );
define( 'LOGGED_IN_KEY',    '#oARN>o<`Q+--}:b!,[oRDol3nM~f!B3Vwdu3b/Eu5cg_1^TW$`KhXV0CY!@4kg+' );
define( 'NONCE_KEY',        'X)Q6&Bn@>+Jl[hzF&/*a_HNgj.Z2kv!u+OnC<V+L|jE=OEE:y42Y;~>TOz#E/0tR' );
define( 'AUTH_SALT',        'h`}&RFrb,,ZL6_V^5Q~%EcV /uBZpqBFbFfUCy.M:Y%aGuW&|W9qNr.rXsj[`AIe' );
define( 'SECURE_AUTH_SALT', 'Kbr~NZvB;XfQ.[(f>*862S1@.CFBLt:~4lX$?$lU *iquIl9Y`lUbk`bMt*=l>{%' );
define( 'LOGGED_IN_SALT',   'L-i< 7sCL)^Iw3`>e)fvKg;?-P-&/NW3B^ttb|vHVO]#*|IYMIQk(HC9%:$6BlUy' );
define( 'NONCE_SALT',       '4o?-nh,etpo&m-O<;wCS&(iQ2y8I1dl%39vu8[VqnFsudxa7SlzMrpivMTk4yzSj' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
