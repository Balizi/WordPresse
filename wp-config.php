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
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'X{B)2$2u8m&w^fri4lzjE,1?O3#weC~UKQjWEO7mF[|BPD%=mCk.{#dB<=oBpI6D' );
define( 'SECURE_AUTH_KEY',  '3E:=v`P[+/>z<S?Xs=V!VpFmeSr^5}){)aczaDy[X5>Di%!L*0n(yRK)]^IbF9_|' );
define( 'LOGGED_IN_KEY',    '2El+4A]Ej}`xvS9{k.Pu_[ybme8%I~X?Ktv,f7Y6-^xpT[(BvY;nXp1zt]J/k&G9' );
define( 'NONCE_KEY',        'o1fW~.d1nmNQBBNV3bRzNT;%g0-fPIv^>}R:q;f[?mu,&%z,ONM)f/h663yLi`wy' );
define( 'AUTH_SALT',        'ol|*{z~F jc2ZGo;,l=fyN.$ei-2}huW~koy2Sd%e=-xty!>d6*7U|$HJn!W%.Ts' );
define( 'SECURE_AUTH_SALT', 'p*sA&q+,`ZbjIYs#1)/=]s=t3R2G}U>EU`f;CYvF%%4C$8bS$Eu3#XYw{[:><=?R' );
define( 'LOGGED_IN_SALT',   'I0B`m~61pINq=izJfXbb)MMSZiX+7U/Vmy) Oyh}W&_&>;U~7A5O7#N9T3!]tVSh' );
define( 'NONCE_SALT',       './L0i]}klC|<t61< MN^ZOgn).$a-1(58/A?}Bn]Cp~U~&tE<q*KO7@Z1$._YZrv' );

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
