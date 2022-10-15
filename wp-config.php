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
define( 'DB_NAME', 'createape' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<r;a[Eromxb@]F2lO:=+rixnBHUI{dumi +JHx&vTLUtviR{4XJ}UaUUl<s.p4wT' );
define( 'SECURE_AUTH_KEY',  'UHQ<{DV-A$!xg(aH78!f&hLG*SjW  v>#;LnC!z~qn3VxJh;2XJn!?Ug7NW`OHbP' );
define( 'LOGGED_IN_KEY',    'h)~eaG~{Pz-/HmOEGnmP|4/ztOGnB+++G;3e7/_0[/WWs@H)qmwn`{fp1A%5XVQ=' );
define( 'NONCE_KEY',        ')m|::CZg(BK9tn[,,a{a+n:%X/1E9QVp1]2Qx~Z;m2NdTJQdusF>Y/Fo$){(cTif' );
define( 'AUTH_SALT',        '=NqstZ({lE|p+F6,l){AH}2D+v<l-yzMe=&ZgQ#`R:s!}3-.1x^I38Q[*<#cpI.V' );
define( 'SECURE_AUTH_SALT', 'T?8b#DyiB6 IK39lL7Wr*%%{d1=FdG0(b6^Y?*+~$:[bFXSb5n1nr>10tt#i2ecy' );
define( 'LOGGED_IN_SALT',   ':tYbn&!m;3GnKR0<7KxpuuBnXUBZ5C?{uEN1`13f!}xTwI);Gr#5T0Z1ldA T*2:' );
define( 'NONCE_SALT',       '{i`N~}oznG>;~#U@Ps@#EQAsqn+bLcq Le%*f2!nZ^x_/kU($H,},Hkh9Y4O`_-z' );

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
