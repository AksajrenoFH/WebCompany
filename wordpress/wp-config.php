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
define( 'DB_NAME', 'Aksa' );

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
define( 'AUTH_KEY',         'm}LH$)J|,NamSlNwXL!RMz/fBof 4~$(MLUMUmg4Va-b&3>foQd:hHffzw;=E[FS' );
define( 'SECURE_AUTH_KEY',  '*YMCE?&cJ:LU!JD =%!2}bTU70qp*jKEwR7;_pl>_$H:~=O-GK@tq*w>aL)v<V@%' );
define( 'LOGGED_IN_KEY',    'iD%F.IN37,Jz.ND-xNj/I5U:a,==`vM!p(2-/qt#eNh2*kv-(LPw(7*v_.x5lcfc' );
define( 'NONCE_KEY',        'h5[@(cK.kwB<``K<7^vr#5BePL*a@B/T$=I*oJ0mph~(4$I<t/oDX2Olq~wWbIMa' );
define( 'AUTH_SALT',        '94.-hGRRi|=V*]Ii~))G)8!crk62f0P|Aw98:P|R_qA,P-.0r?5sS,JuEH6*8U,o' );
define( 'SECURE_AUTH_SALT', ' C_K%jt`X55a{86z)nm,)Anzn[nwU(0(Hj]o+pr&eQtVdL`^#.qv]Kp:%mua]0|?' );
define( 'LOGGED_IN_SALT',   '?9C2<Ci*qkf]|KWqPZAV=3uCYQ(cYU<g^x9+G$,zZ:#C&+a^]TR~DimXuiF&1:.`' );
define( 'NONCE_SALT',       'rR(Bm, 8aOF&A@F=Fb)]Bf4;L~Ni-Y/iA4#~xT{JZV( vQsm3uGpvRf{ZNq0bO^a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
