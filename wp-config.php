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
define( 'DB_NAME', 'Pagina web UTL' );

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
define( 'AUTH_KEY',         ' ln7,zeuP$cprZ[x|rzC:]h=HCE@`u*5|-/RqZR}1s-@,6QPh=DZMYs^Mn~YPT#c' );
define( 'SECURE_AUTH_KEY',  '*(k@-vU=YTCH%=(V:Q7I?cSZr3)@a|sg$xYJ3g#P;d@E4oUv q>U*]hYsW}X%ps%' );
define( 'LOGGED_IN_KEY',    'Fj!T_o*%^&9gUsQ[Dk}l$6BsPm.WX$]Ot`4R%o>}9yZQc.{#2t{XmPx]J. >{*/G' );
define( 'NONCE_KEY',        '?L[40DQ3H:%y_/VfKR.>4`~GvrH:+b-75Vy#M+A$rQyK=i-y7P(o3a;4es4YGu]!' );
define( 'AUTH_SALT',        'A~K=_:wCq:<i%{#L.J+>?Ez3?OW!n@*qP],!@#ynvm8D}uiH{O*gRl1ippMoTg}N' );
define( 'SECURE_AUTH_SALT', '}a_cz0b_^[|&@Pde1[gD|Z{S,aHHsdTG9(?YH`T<NV^VaL0@_YC/3&I17O0[`-@%' );
define( 'LOGGED_IN_SALT',   '||].J6?<mzK|Fp2*Uw`zewfT*@M!*Io>upy~92L,t$;jG0SCrs%m)}76/j@L!a.^' );
define( 'NONCE_SALT',       'YiG.tNf@}.W #;PGB5`EfW@*T73&gsgYcZ0y@DWbTFe5S03+p979na^Wx=]XcMZN' );

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
