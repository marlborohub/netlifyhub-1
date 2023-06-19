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
define( 'DB_NAME', 'netlifyhub-1' );

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
define( 'AUTH_KEY',         'm@)]KVhvWU1{w+vV[$[5ZC@]QV4g#|QDprx/em^4?7sTGO%A~$r[M<I_{Jd~p/YE' );
define( 'SECURE_AUTH_KEY',  '}#<mFy<h_+k9mV?,2v3`g?8z4?ZB#}`5rUTeKg&F)n4TFtrGRTiJ1J8h;Gwy4hZW' );
define( 'LOGGED_IN_KEY',    '5)TPbp6C)D_0(>%YK&l7epXp9k;.sWe_E|(EJNY[IHO/| -bWxjH6Vmd|6<_W.B5' );
define( 'NONCE_KEY',        '~44x?9fKl@doN6{:a@G*3,I7Zu.Khna(~}gM9-PIg1ilL*sag2jSJFT/0(/wMs A' );
define( 'AUTH_SALT',        'XMb&bpfzJ+Gv(Q@|)/YYOi<ql*|HVTAWPVxXdICaj#m$Mh@jP3?>AD`,RII`3w#7' );
define( 'SECURE_AUTH_SALT', 'lunu$3!tCdCNCT*-i4[xDDP9 ?[-8yDBa2q)XrA_QocJ)5jN)apEHZu*,hf4Qe G' );
define( 'LOGGED_IN_SALT',   'r{+XH]`#k96OOU8_[s,mK-]TEt)m13*fEuG ]JP]s]kz73n,!<Iu)TJ-LT0bI[__' );
define( 'NONCE_SALT',       '9SgI`v:f8h[&(e|b@d;a?[I_5yfL3L90hA&w36gRrV5Fg_hMC4X1yOJc16)O k$O' );

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
