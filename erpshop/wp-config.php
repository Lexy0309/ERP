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
define( 'DB_NAME', 'erp_db' );

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
define( 'AUTH_KEY',         '9jPN:B!1[5dp+ZBID+i,Nl[(^3_2le3qM!oZ6u$hLc>JUDK:cj^Fx$^enXYg0u<V' );
define( 'SECURE_AUTH_KEY',  'C41K;?c[U>y&b,NAFIsHyzeY%bQjU.cbYcW983E=DUu`Cod7VVrl>/#T}aMxShaU' );
define( 'LOGGED_IN_KEY',    '[OXLem&uAAaxCJdCOK&xkZce%AdI2:z]81K59*2_%!b7N^t^04kXs<T-wKYf8POU' );
define( 'NONCE_KEY',        '%Kq-!&2/7}3Kp+&i76qR,6U!//gGQhLiEJxDw<ILMp!0NZ#cQM6kX=ebL]$ jLQE' );
define( 'AUTH_SALT',        'Bjc0g+kBYH[|E%58EW<(GZ4ul)LJ-F*<sxqyS@kWOs=]ELNm@z_0vS@CnD.9xd*G' );
define( 'SECURE_AUTH_SALT', '=c<KJO/0]o-EuAxV&EU%y=d u6ILwpw+_,,.la}C=DL|qs7kohp~Fq9W(?o:[L.r' );
define( 'LOGGED_IN_SALT',   'iD]$ALg9R=]j5H<u0zJqg3)i1m4.LRTMM6zT^~$rx}2ZxSHbe}z;y]87W6~$VtYb' );
define( 'NONCE_SALT',       ':K>:kBSj-HnV~FRPf VL+dOT*gOD0^ #{zz!i/o;hz9~#|*LQ.#Z#~%:vgX1@aKn' );

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
