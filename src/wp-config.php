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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '=-}2QoLnvfnW3m5W/FnhM9~B|k9M1c:4rUuUOll{WckJWpaeW[P9bL8ivDp=p{j@' );
define( 'SECURE_AUTH_KEY',  'rSh]PZjfH&(YMhe2[Ptl3=#>DUMDyMaK^P;*{;-(_My,Po?+h-0gG:VK}VF+3AIO' );
define( 'LOGGED_IN_KEY',    ':rlgIZ($Nhrf6+]PEfmPqWhy-#;pS zq)?(PSC;NenzgFcMUT2|{)tTbUC^#VAb!' );
define( 'NONCE_KEY',        '4Xtph]SJ&/L]QmEj%=C?*>9<S-l]C7ZV)f%o):Q,[D]B<]K&PjK+v.I]Vu92^rr~' );
define( 'AUTH_SALT',        '{<$OAOCcdw93r2JW#Gx:vicCX7WFmC2o^}D/w;v8?s,=3)dP[{*DR2TY~iblg<Iz' );
define( 'SECURE_AUTH_SALT', 'eUQ]Gz1K%:A6^0U&{V#Rx9)O+vU4HNV~(#ZVBi,P}ze|4&q&bAN:YH0N#~<xlNa5' );
define( 'LOGGED_IN_SALT',   'usw`L~hHImmeI-!al/GzXl1V0$p=aEN!q-B`^Y-[&xJM?G{!S=Mko( ;/*73La{8' );
define( 'NONCE_SALT',       'e76]V1AF]}rIL.CdL>5k8c&BSD8l&]TQc 89-F>XK5/P-*!g$?bd&k|P1uu6{O$w' );

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

/* Add any custom values between this line and the "stop editing" line. */
define('FS_METHOD', 'direct');

define('WP_REDIS_HOST', 'redis-server');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PREFIX', 'dolanan');
define('WP_REDIS_DATABASE', 0); // 0-15
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
