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
define( 'DB_NAME', 'mon_premier_site' );

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
define( 'AUTH_KEY',         'NFcXy/Uw^kFk+z0C&=+Q%4a=LCveyA?d/(a#0dEwKZtRaOtuxKLBiy&>T5{cpEW(' );
define( 'SECURE_AUTH_KEY',  'G`xEL=&([7`Q~nLC8#[.B>M<-?HfPuSE%?y(N}}2ryQ!:,asqC}webyvV}dsvm$v' );
define( 'LOGGED_IN_KEY',    'p0L/|jRZ3{ PBMswCYshC9EP_#,[NlYhS9B_w)>5UX1f)t[lD2%APAX3@VSbaUN/' );
define( 'NONCE_KEY',        'Kd87Mzk8ewg?InX,S]QAV&85b[I?,Ag:6tM|Mu1E7Zy2BZ7;I5%LJ>0&{LMH6E]{' );
define( 'AUTH_SALT',        'E4w4:XV }<6z UFO_}+XQQy1$_58!K3NY=$1c;dDWA1q9BTC+Q~$XV:^sEfrEi,=' );
define( 'SECURE_AUTH_SALT', ':+!xyQK`evG}* :zui^25)Mc`s@q&Ith}96h=$Gi9/2Nb;$(Ob;(i/Bd66~h8p%5' );
define( 'LOGGED_IN_SALT',   'R0*t`~;w`JCHcS%3[K7$b[z44k~$82N* dctG/)PxIzoRg2^txZs9+Sr)K-Y8tWe' );
define( 'NONCE_SALT',       '$& >b5:q| Ll.utb*}=6)M4ey`T@tdjndd90=Aie8<d&ojM]|y[`<PI&>U9,V*8{' );

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
