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
define( 'DB_NAME', 'desafio' );

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
define( 'AUTH_KEY',         'Z]7vGZSRN:w*tJ36 Oj86br_5X}g3;$~F~`{>pDnn|`f,759%1tx<^0w6rGQ~o~Q' );
define( 'SECURE_AUTH_KEY',  'U4I@};=}JTHHJbD*/%XXIIuaoA2j+).>j9|+?fX6W,Ww)|]=nz_^#E:%~.#rs Y)' );
define( 'LOGGED_IN_KEY',    '{CD%.<!#v&7$k}fPq:8?Qu<l*Bp|@opL_VlK|zgiMe.l-;FlwD):Zt15Zfn(*<wq' );
define( 'NONCE_KEY',        'gnWIp@;yL5;#==#m0yh!$1&O1`y =Ewk^4j:*AymfCwjKa$o7d{2oxVSVKx{hc>D' );
define( 'AUTH_SALT',        '8VIzwBYIiP)-8~-}{Px!1G9t3LZaw.LTz0,:j%kdj6KQhK|$h|1EFpG{O?|Yoo`G' );
define( 'SECURE_AUTH_SALT', 'l,k3`=eB4diH,C!|^{~-}f/: Yv*0rQ||;Wu9p4C<w/_IoXsl2{i+gyYM>iads{`' );
define( 'LOGGED_IN_SALT',   '(Q=Ow]_9b~/)#vpetK8>:5m{;Np/(eY+;?#;AYo?a?;|?J9.rF*y8?6wXX4][@?[' );
define( 'NONCE_SALT',       '}_pE~jtnn->NGl&747FbT#O`{=/aiPbhQ5n/b}r8?Zg+RXSv6|;@] NKYSocH**g' );

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
