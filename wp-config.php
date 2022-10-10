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
define( 'DB_NAME', 'elmaz' );

/** Database username */
define( 'DB_USER', 'elmaz' );

/** Database password */
define( 'DB_PASSWORD', 'elmaz@68' );

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
define( 'AUTH_KEY',         '3J7Fsw{`&#0we|-9a*JF/bm{#dMb@-qzkv+/)$X7sh^2uT[d>;]4AtqkjqVB^N-D' );
define( 'SECURE_AUTH_KEY',  '?/#TtCrl)~]x/-FM!wk(^/p.^RpbKYw0k)y_&zZtlTsxUX?5p_?}I}NzQbV`:@p5' );
define( 'LOGGED_IN_KEY',    'ddu-U!~lKmTYx<nKtS/;n;}tkkoMw*1Uz#:`m90kEZQTk#0Y_:Pc69/U8bS)jG#+' );
define( 'NONCE_KEY',        'k+vX[9Yf|q~j*26ivGR>W7zFN~O~vU8W8OBgKhU@?Tsi_*55VH4{|,>JEVi/w1e]' );
define( 'AUTH_SALT',        '|Zki%$|L2X~ESU3;/ 76gYU-RI-y#O^1 #XJaoxt[IHY}UOc{ENKB]<-y$ee@6es' );
define( 'SECURE_AUTH_SALT', 'EzL2`~heDm^PUbpud&N.tFYf>jZB!<~<]Q,d}b_`FtgV4B1{NNOCTIH-#~o*]O!,' );
define( 'LOGGED_IN_SALT',   '%}Dj%x@N_42r^DaGw1>^U/r7l:;LDAm9{0lEWlS<}AQGxP#EA]A%~.V^yJg-l~<t' );
define( 'NONCE_SALT',       'mer299YE~IElESb2T`~Cn.|Tp}wtVW)}9h:=l5PLh_8Q;*6/Hq4Sqif@fi6ley=o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'elmaz_';

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
