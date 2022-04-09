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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '1234567890' );

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

define('AUTH_KEY',         '_GDV@R>aPJSHExZ|?xLKgdQIN@S-JP|*%CN9Ugz+Y<vIKH8U60K-Qd.wj=_f6-6o');
define('SECURE_AUTH_KEY',  't3b0{Ctde2fkz#KuNS<T:KD:x>@Mxih45o(/,8)N6fcm$!xKxDVn%|0@}t)mA@*W');
define('LOGGED_IN_KEY',    'jN1:8S|h)yNVKC-/vUO{i?jVv-YkP>^j$?Etg) @Q+3RbG}qog&Tk.3+-GTIkf~,');
define('NONCE_KEY',        '_RAo$;  0NF{|:*(cru5^ftIAvK6BM>&>aN);a*|)E$ogsbzt;=x_iOB/koS]6~h');
define('AUTH_SALT',        '5-(.yP]ioErnOdSV!K0~XeP1 {^i.^[.Zpzmsd7~1rP$e,J)-mZcr8X**b+PsB/]');
define('SECURE_AUTH_SALT', 'Ru8;:J.7/Z}Hv|XKnLrKNQFYv6Ht|B%)3)`d({u5++F%(0+srAPdzwc0nP4A#/-@');
define('LOGGED_IN_SALT',   '1gl]hhXYIlcT&0![O]Y{z7%8B7c#a|rl^hRZmzH-#w)?l0a={=nZO`x;+S<&v8((');
define('NONCE_SALT',       '.^ 9y^u3/EAd9/%HE|H,7NOd+~#zseORrW;If -4_IJOx.]5_* 8ZTH(hR+**7w%');

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