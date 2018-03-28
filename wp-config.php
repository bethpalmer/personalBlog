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
define('DB_NAME', 'bethpalm_creativeblog');

/** MySQL database username */
define('DB_USER', 'bethpalm_primary');

/** MySQL database password */
define('DB_PASSWORD', 'Zrxg$.r$0E@6');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'K[h!:Wng@uznH!Y]J8D|y|OY2(;Yf8o0gmfuSJaw_|mu.C=fb-Yn|gKD#JU<OxKE');
define('SECURE_AUTH_KEY',  'L8NLpqDVw]t;a(!:jtz7+Yu#o=P9Z#;La[KM^%1OQZA!-8^UYvs]Au:7GX#,v`o>');
define('LOGGED_IN_KEY',    '<fEbw}-Gu>LJJI7k]? tw^y]3fBawx J%N,Q FXgRBSh4ealJVi|rnpGo[Z1&b<D');
define('NONCE_KEY',        'p|!x0_X.)GC%l&bxUYU$/QL|Xb+Zlp=le)~{,Y?Soy]m(>_a]S,yn(HfTX3 :~LG');
define('AUTH_SALT',        '9a^m*nxefFINW@C=7ottYIp|.Z2|ks9+Y&N[-:]%(R{(pZsLbn}(|!`e 06I(.kt');
define('SECURE_AUTH_SALT', '/l=Bmx&,U9ojB?KPjYnf&0AAE%v:]+,d!(wZk-H4nGZ#]|N|.1@%-;9U:RxtVL1_');
define('LOGGED_IN_SALT',   'U,9#l8yy7ZIN:[JyZ.1AFoV*2Vg2*#e5L O[TkkwH9?kM6DT90:HW&`J`lgE0w~g');
define('NONCE_SALT',       '=iy*^RjI~/of]>[-?qH4&yazG ,JVY{B/DL*9v5&kX9r5FAS>+,_n-2AT@8P,7k}');

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