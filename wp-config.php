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
define( 'DB_NAME', 'gcmj' );

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
define( 'AUTH_KEY',         ':Q-D-0,Jt.TR@p0.y,zN~IPOK}i&@8M_k~~ohx6BG%4u2~3~Wv@VA{)%<BcM?I57' );
define( 'SECURE_AUTH_KEY',  '[_LFV(BM>h+p|8x+cXBNh8ELhf1+Qp*up9A6I[s!czp_n`>m( (h?1ju-pTjxE2{' );
define( 'LOGGED_IN_KEY',    'e&of.hKROGA3,60Bi))vfMw$xSJ;!w>Aq*LGxIR5.OI8`!+HqP*.Y=I$T(JRp(MN' );
define( 'NONCE_KEY',        '0yJQt0b%grk{V@75tb86K4@?C/]:o-z|1baiP[.*jP2spdY PpjO`pF^DdW~x*4r' );
define( 'AUTH_SALT',        'c7!BWbj)?,B~5.6XF~ ~d}TL1jFizYqJ<(5gG}JK!yss00`6T7Nh~XCK9)_oZ9.&' );
define( 'SECURE_AUTH_SALT', 'B)hl0xOx>^h|&|oUE5lG?ijoEw8}=UBU1IaFFp5,~v>Yr97ACh!|Nmz $$4`3Vb%' );
define( 'LOGGED_IN_SALT',   '(><u)nS<kY9q53QPz CHtor)L*S+zzu.3vKy^>D9YnkL0[4/o|teI]o`y!^t/*KR' );
define( 'NONCE_SALT',       'A+4C_}Snt26^1Q3|.F8`&hF$LqA067&hpeIlRKwU8~cQ?z0)~pl2.dcY G`5`sbn' );

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
