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
define('DB_NAME', 'kkwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'A>mJ@Yf0CQGx5,sje)71>6|/x#gjdDU[5|v1:=`r|EZqPRWg~3~!HZ=QqBEy)<$L');
define('SECURE_AUTH_KEY',  'K&|2sL1lJBAb8|Q:yUFd31Y~=]T+|s=U+1P Y-*HV[Cb;ywfT|Fc|CXX;,sCg2&Y');
define('LOGGED_IN_KEY',    '#^o:}n+%@%+t``Iw@Ck5*/:,gKQ+IzW>ObRW^0{>0L&{ZkN=h;+YTun)[Uob#L9u');
define('NONCE_KEY',        'r!uOma=/><K+E-gDPeGUqBoR6+s#rVLK1k;+qdHBPTGl}cM:d&Fwb4(L~yt5K&w%');
define('AUTH_SALT',        '7wC|9b S-S9DuI^mKnG2?6hNVoQ2;(1bKl4^;!NM ]Er UdzO.:A:/hi=CGslrYO');
define('SECURE_AUTH_SALT', 'ZOcP<;</1u(}TO)}4Z6y.`YSc).@]h:HL&^,$(?eJE2U.,kFxT[`(.[[![4+IP#[');
define('LOGGED_IN_SALT',   '%n0k`F6tKR#>O6x-n/@||Uty;b,-(Y#_l|}0`Ix>?:J]/+sT@;G.,A;lv+G1Iaxi');
define('NONCE_SALT',       'U*K[D8:kO<ZlBh+DV@#yzcr|@E^01pNs)VM:i!>zGN>TDOOpya)Z+q-QwfB_@Xqp');

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
