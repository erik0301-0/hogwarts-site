<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projeto_wp_1' );

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
define( 'AUTH_KEY',         'K?SN+L{c5|{PxD6z~s%/H[<cnNLXz[[4<W`j*6q6FKxTTr!5.F?bQgb14Dr>T!v-' );
define( 'SECURE_AUTH_KEY',  'b*UjyFbut>s*=vRpAHNy1AJKdkIunz}# r}G )60FK<3rJg}$@lS9_pOY;p;j t.' );
define( 'LOGGED_IN_KEY',    '>1G|c&|IcIsS|#xFfM}{)~u*Ywz45ten6wJxU0Cwq83#DQ0p]*:`DMmn|9lly?m=' );
define( 'NONCE_KEY',        'LTz{3+@%^a:oqy]=9bdkU.4s)._[8A]HBEI(0=:Oth3^9:nfa_&ILfJ~LMuq]d^b' );
define( 'AUTH_SALT',        '&$a?Q2O&)%<-Y.:Qy?|kCMBo@T$:pfQO8,@hZYz8^I0?)xf,A|/ylg%/hmojO{r[' );
define( 'SECURE_AUTH_SALT', ']j?mG8~oDbtrA& G)h=Y ;mTA/gW:-iqe,MkIDr/d0dK?/K2dkHu:;<3&7bFIqbD' );
define( 'LOGGED_IN_SALT',   'V_sv!>Ie$h9A8O7}~C}`eN?!b}8tS4 Fi}Cb{T`M]WW@1?(lRCqDh]}*:6[tH7ed' );
define( 'NONCE_SALT',       'o0tsiWr)B9E9:QrX8~W&/n^&P=A~F?c,XpHbg+sH9qr1lxyaVPE2oLpHJsYihk8@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_p1_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
