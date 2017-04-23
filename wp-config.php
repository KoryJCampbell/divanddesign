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
define('DB_NAME', 'divanddesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iHU1P pnEf$QR-(Al@BQ/Hf<u&5NLY8*a?XTr) H|e-B (k}*F{5C*~R}cnm3m[M');
define('SECURE_AUTH_KEY',  'x[8Vo}<hh8nN>HlPd0iZSwhxSu!JYidRx2e5kYm(d2ar*#qh-amDHwBChds6]O6I');
define('LOGGED_IN_KEY',    'RA~<Z|n/|3rz[izL&nwf:1]}oVMi1E#hNp=|A6UqaI3rgm&m;[YcteJYE:~avS<2');
define('NONCE_KEY',        '){m3i kzi@i!Vdw&QU~7LrKyBm2,iz%fZT/LEx!M=AwJ$c2`7#Bt-<Vy*(J2>evF');
define('AUTH_SALT',        '*(sn/!b!5Rs{osXJ+k3`mUHjJ;`_%a2Bf]1V|MOUNmG/vpHS^^(^W7I6?x9xBb98');
define('SECURE_AUTH_SALT', 'X^NFr/2GS5$biaLr$F6g~mZ[1z1fMG!(D=YPb2rC2|qA,q!g^m!_a?I;/F9d-oQZ');
define('LOGGED_IN_SALT',   'Yoxx3vI1Dmi`8[9TX m;ze-1ITK[.t*,qn*|2PfQ3UiVrXT7&6Pf&LcJ^0[r7.>u');
define('NONCE_SALT',       '/`(xYc{:YADC<k(7bJfix+tRjUbZp,3]CgcUH(;tI:PuRH-)9U8r52&/}=j#s${m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
