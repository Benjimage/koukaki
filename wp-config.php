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
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         'tU;=)|6CadL]]2fLD|kbI,JK]YmMStq-ZhP3{0*?0cZ?>1iq0tu%!B%*$v]rU3d}' );
define( 'SECURE_AUTH_KEY',  '`Bq{jsOHm&OgK5PJhf 9JE*f`QURHhCEX#0[*kbUAz*>&,aS;#{cQql+Oi3VaCl3' );
define( 'LOGGED_IN_KEY',    'WpJVdM =#7q.VWzVSTpKA6<|{p-Z_ W<}>S].N(%[oPnW1rudr?4J=:}csyTD@I~' );
define( 'NONCE_KEY',        'RIg#.NZL#J(.K?d,wZ7_Yw&%4Up1_1yY+.5#gyE]glokFShlPEnda+]ht^<Dx me' );
define( 'AUTH_SALT',        'xIxMMy~V>:RJ.& |}b&H {[BGQm$d67|hAi:C*n:>XA>>lxCJbrN<t>zQ]Tx]VDP' );
define( 'SECURE_AUTH_SALT', '0Cu3ollGN8/jx3{vKR0m$urA=-j32w9gB6BsOrsN-i+u,]0q&nWW+`Y0cLt:Q5@M' );
define( 'LOGGED_IN_SALT',   '9]U|~t,*q#7mitDQsy[p0{g=H31N./90-GyECaWAdi:1>KkezTxAU%t=Sg-cC61M' );
define( 'NONCE_SALT',       '!YS)dh!kaT!^P=X|M&/F+r8)zhPCy)cDIJvVh/W6||ZRdKK:QXwfHi4cvPPxSZ$ ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
