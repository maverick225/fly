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
define('DB_NAME', 'fly2_flightbooking');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DFeQMxp|1A!JoVh;<I?Vp7|~[]J5*.XQ|$WaMTOA!>6Z]%T6rg9V7[zFiyV-1{TW');
define('SECURE_AUTH_KEY',  '|{t}x|1oP-{ki4$=6aY>F:_2-C`5eXk1e-+XExh7k tk=Nj=](x)^-i^<@O/+??5');
define('LOGGED_IN_KEY',    'hbY mh 4z n|GuBRy*B#ksHI.G8.!B|5{)V0%g)t7=dPNn1s8W>7#P]u^Bb|(GC_');
define('NONCE_KEY',        'PdD#F;5Wi!scKeuj-v(qSzV:r6?9Rw%}*IQl*haT,?-.YT:n4TMsb,:xuZjRpC-k');
define('AUTH_SALT',        'YPaEp=.GkODiN+LP{VtsBe}7XuSYeT0NZf3HG<Hp`USc8_1#rjH&&Wnl{)rnKAZj');
define('SECURE_AUTH_SALT', '-ZSUwS^bWIkl(^SVa4WP8|FaLT~REY9$jcQ+=S?d*(@v|kIFD*@G_T#ApzMN,EX*');
define('LOGGED_IN_SALT',   '98?+~+V+!$ru:9MtPAQY/Kfj<>L-VAZI%Y,+ErvGrO9bP*t?7y ;m,uOENc_-_q{');
define('NONCE_SALT',       'PB[*xjhu]Z<?6tRMNFhmMN<%0^-^TWT!x%~&c~*pg@a&GfH>!O]h:)&-cM-+;]-G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
