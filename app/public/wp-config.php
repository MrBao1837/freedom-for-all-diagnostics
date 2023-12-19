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
define( 'AUTH_KEY',          '~?7P2[4U|DP#Hv;}IG~s!ui [ZK4WdcGpd1SGNKQqs}`zS3/-E5u2pm3cS[Qm^.N' );
define( 'SECURE_AUTH_KEY',   'O{PVfkTaF#etJp[u3Xw6W.Rg8KL?ZS07@5qKlAVP_l3 o_#`frpI~06-MsR/iCWR' );
define( 'LOGGED_IN_KEY',     'bf)3ffraGL#5T;W%TgR{1&NaRZ1)cm$VM-[F2e>o.7]7I-b;UFUl,+Yn6}HtXJ-<' );
define( 'NONCE_KEY',         '|agxWCk@G)EYH/@y0Vr;J2)sIC!o>6<<$HDaH48/`6Zp_a@D C|fN6}!&sdX#A6J' );
define( 'AUTH_SALT',         '6jngHt@rr{Wz!Ct)Hf!&$@?c0UQ&&isq~Ht9UU1k-TzOLyR^?V(# $bGxiiz@Or:' );
define( 'SECURE_AUTH_SALT',  '2l,WV`T<0&-$wV}(^FT*+%U+v*/x-{Jo_C;8H`Sk3YBBUxVn]SblT;x o[j1-K9f' );
define( 'LOGGED_IN_SALT',    'a*U+T/Xw!@4~EK,OoV8,$&Vx%=?nUmyRTPV8:e)&B47r8UPgd5]&AT;])1$mLflP' );
define( 'NONCE_SALT',        '5+GT`))7,p~syRwcbvjQ<K$o^u=8TAm:69 igM6R5W*~MK/EPQ*TRG@gjX@+New$' );
define( 'WP_CACHE_KEY_SALT', '/LNXZ39._b($YFP>/$SK=;R_.a2W<-?bPV=7Nd5DM+%LB`Y769&LX!C67psVJ_2I' );


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
