<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'imis_wp');

/** MySQL database username */
define('DB_USER', 'imis_wp');

/** MySQL database password */
define('DB_PASSWORD', 'im1.si');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'DCSXxvSu-+R$4+%0+m%H,^<LI]aZ!&W~al68~U6aqB9n82%lT`*_@O=SdzW#;8rw');
define('SECURE_AUTH_KEY',  'nvi%XcW4/f.>8N95q1T~$UvU?/K Pg!O|8:@7xXAfY!)gM/:C0tNG.:0D2h!4M6x');
define('LOGGED_IN_KEY',    '=oEU8<amD6Ay(}.)|8D8cFZ_EhBUV88-O.5S8w*/hmeXQ%z[2hPR5f*Ip4S^%2Oi');
define('NONCE_KEY',        'kKVt:U8ay2>z~^HFC}K(E%S/z*+6%27&VlC26X?q3^Tcz$Y@8Q5Y#eB-P7bJx>!c');
define('AUTH_SALT',        'jRO(r`[,U;xS,2}(+5M)[dUxS$yDuV2,_p]4@tikbe;L-ZFy+al@Nw4=}g=&T{Iz');
define('SECURE_AUTH_SALT', '1,j9:k{7Zk5A8@Wst`;}.HVYFA-,||#?T7,A+p:<o{~fzvs`00e$h<y&(t&&KCUm');
define('LOGGED_IN_SALT',   'P[504s>iTD$`1+1!3F?907|KwNy#MO[=e%f$w({^I^X6kUfJ2]08*M{!xQNc~HI5');
define('NONCE_SALT',       ')( ;[s|Ppjp5ecIDJG)DYQX<x}o_g.p.NIBQ?Rr!~T~|8<]hEU(_3xYe%n/]:URg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
