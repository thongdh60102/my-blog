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
define( 'DB_NAME', 'myblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';#!wzos{,i+>X+o=9x+l(AY-s9ePvn{FQfsvThbX)tf.PKr_gz7,zb7bk,,z53<~' );
define( 'SECURE_AUTH_KEY',  'YbT18%A^GxqD{5UxQDz#h<Q`8@J@%Uwvt@%sGw:VJWlbu1`L(p=)6 e;NU|Se<4d' );
define( 'LOGGED_IN_KEY',    'vD+7CMQtHD4Fal5!hQ`/%odkX/Xq%uru/FlP4apn.xAWE(@:c2;~T$r+L6g]L<Uv' );
define( 'NONCE_KEY',        '^:0>4!r5ztFD6p6tH=*2t;=3b-#l=.:HBFTdu.!xK%;X4AOlk:lkRv,/Ce0:-]aG' );
define( 'AUTH_SALT',        '!2<;${:SA#_0@w1$du=gCt-OUx%mx;)eqnexRL/bOe<Y$UPf$.KWVCxqZ1]xU]bX' );
define( 'SECURE_AUTH_SALT', '*q^uh8%Etz#)LCT*4N^n=/]}gcQ?CB.|TIR}Ha,[S|&+E.[ohO|dkFcM{cmofw$R' );
define( 'LOGGED_IN_SALT',   'wp/s:i2XL;^W{HSj&N`_p=fU1BbhfUK[(B,Bd~!>V7T/2HiLhN|eX3oyw%_+J/4v' );
define( 'NONCE_SALT',       'h`;8^YA :0NP&O_Svbx4VPFgC4jq:W<Dq&5IK]YADzXe*(:2]Y]46R_D1s{Ok?_H' );

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
