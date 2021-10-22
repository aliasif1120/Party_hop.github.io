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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'partyhop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'r?HnDx%t,6F/m8S)-YVu~}Wk?2^-A`Hk;2MqA-Ei9w$x#E5)FwK~p_C?q-i2P6@t' );
define( 'SECURE_AUTH_KEY',  'xdFa`vsi$vN&_Wt+M0L_[HmQ<TE,0KKpkV.O1E<782F4`kl^8ry/. s_O#E-.6!>' );
define( 'LOGGED_IN_KEY',    'cG/2rtC4ZA,B3rPF3x|}@Fqa<codQj_S]{W4mUxQ:N8)W]:tB;ffgn_<_gVgviQV' );
define( 'NONCE_KEY',        '-&`9p}WbCQ0<YdU+j#;:4u-mT(0!4p8W}HS038^>G`-20(7?ea~RT8o~?f}5Iz|S' );
define( 'AUTH_SALT',        'c.S{SQ9;Xuwr(amc@`Oze)]gTZe<8)<%=1:XHvCg}z+Jrr(i%Y3_q<~j[~l+WBVK' );
define( 'SECURE_AUTH_SALT', 'z*b+>*]j> *AF1P.>Rb3&W/N]&p?[IDBT7=WijLE&D@.:^(,hAkVI[d !VEY/i*r' );
define( 'LOGGED_IN_SALT',   'tjz*1B6dt[{MUIf4N1X/uWN*h5Fg*nN{Fn L=?iU!P06H-$:WNo--mWXknY~/7aL' );
define( 'NONCE_SALT',       'M14!j@&Mz(po?ZF@_^:h<>SHbjpiq21e`Wfp@XV{yI~$SI)US|U}0TW~<B;%m,^l' );

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
