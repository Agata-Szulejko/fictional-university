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
define( 'AUTH_KEY',          'U:F X&gl:hCdRqOCACnd?h6s}p0aHLPbD>=8~]7G9=<LiBK/$$X|E!v9}W>ew-1o' );
define( 'SECURE_AUTH_KEY',   '.&%8-%^$]SrnWSmS{~{=E#!Z6WwzGlJcjjL=#EOpP.a:L9|Lh]c ^N!]=^~SlIZ_' );
define( 'LOGGED_IN_KEY',     'QMm,~VeY(R&:+*7[G/WuNQ])r${5]sH1CLd0beX&jrQS@:HXsdE]P4`h_O&c<i d' );
define( 'NONCE_KEY',         '?zID1G(KoOVKjzj2+f}yw;DxRZhMS;7t~Pk|]vSeF*[JE96{&SL8kr+2~Q}]6//u' );
define( 'AUTH_SALT',         'Hr4[!#w2 TYL*[,D<(p6^@V=qg;yHip/00bkFh4a^0?-~ykj+Zf67d:7sg;/SV+v' );
define( 'SECURE_AUTH_SALT',  'bYI(-9T+0rAk#rD2/h1Jy)E<ntpMU(N46ZU.8IhCBf:R7SICwO^13)u+>X6Oi:sQ' );
define( 'LOGGED_IN_SALT',    'pg<5u`:zEBQ5~%ugYGEHM?!n[V09X5k(*R/S]NT]S#C:BR;wXKhkqr^E`7vk6tnF' );
define( 'NONCE_SALT',        'IX^W>)@$l<R_[%Vx?}_),:1CZR@bHaQ,Kl]rqJE3l3%`.Qfn07D4D=]F9;)9IWun' );
define( 'WP_CACHE_KEY_SALT', '710RF}^WE4L#m4)#OmB:,Y^1?SIKtSB;a?w!Sr3%sHhqu%Qyv~Lx-6yU(b??E~LN' );


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
