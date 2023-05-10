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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ctemplate' );

/** Database username */
define( 'DB_USER', 'admin11' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'roKn4S^DbttNsKgz1DW[Z<vp/NFATv:6vhO`-TiLOvyTA~xQ*%[>.c?Hf&o>nc&[' );
define( 'SECURE_AUTH_KEY',  'yA$w_G1 &TCvRD^~k_BauP|3 DG-bl/1[&::&C(MTWm_V.!BLB7#fK4ly<?CFS//' );
define( 'LOGGED_IN_KEY',    'WWAFtbhmk2)2`E2`wi821>aT/QyO>@vqX7^(yGknZ8R)~]VK3<:~sYY3&8SE[--d' );
define( 'NONCE_KEY',        '4Y0=L,&Do8WC]q,etZ?AW8ww5a^c5#-.o+HzPv~kriRW(-+lB1G.iV K|*z|>8C@' );
define( 'AUTH_SALT',        '3SLh574$#P@%Y#v<o]x3e52B=&LM0mOnHrl-^2=Yc9_!m#I$}wN]I+b8}+C7ymZC' );
define( 'SECURE_AUTH_SALT', 'Aq$_!crtei[W9bTTn$N0jn_h^xszTn8.-4rS8W,An4aSsb3;_K4,Ve&!)P`@;,@X' );
define( 'LOGGED_IN_SALT',   'qp%I-NUJ3|:Rm=^5SY];h!DSWhd1v.;]qB7DkD< Al*+9R=c`79VUxS-l Jj(->P' );
define( 'NONCE_SALT',       '-+U)+_t?>e#Lu4*~u$H<`^3H3/>*J6+yP9NV=|9iTG+ZnZcSZTkxrL_x,;0$a!ya' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
