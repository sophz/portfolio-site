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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',[B{^f|+z7Zv.lg&Fl^ou/*dC:7/JI_8gWyZ1vAsd!U#|a>mw8aI*[d!Td$=lY0J' );
define( 'SECURE_AUTH_KEY',  'P)seWG;bEpuk454$n,nyXH5~-Mz;Q?`&;1X94N,RR0^K3s[&11PfN)*:gCx2UfuP' );
define( 'LOGGED_IN_KEY',    'Q]lgz{RNc tB=;lh[8J[.I)IPq?6@];q~LzMy3D<ZC:N11bYvPR-nA!}/dpa. #E' );
define( 'NONCE_KEY',        'ly6g!Oy2x.M`z%h_Jy5%PA34 slLK0%F28Mc7N7JcfY:MP-.x_<ow5%X@$a@=ZQm' );
define( 'AUTH_SALT',        'mwy<Lr%^ps!,pI)L}CZvjf~.)]I2{-yWu(@@[yJVmn$2C}WLu(DP$2eM{t>BRG83' );
define( 'SECURE_AUTH_SALT', 'HEaulgY1g]71G6LWv1ASRNWbzgbkOICK2e=0ix#Iy<Xnb(>M$3Th1y rwG7u3!(6' );
define( 'LOGGED_IN_SALT',   'AVDTk,u{7N(kT S-)d$_QFr^VY7Oc%731l[fU@7(N`Z=hK?9XJ]YjAm)ISW W-^t' );
define( 'NONCE_SALT',       '%`)Tq`;5;9W}4Z8v23&7GU1Q2vXJu1q&dwyMn>I0^t[dWRmh8m4!g~@$ei=hv{*g' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
