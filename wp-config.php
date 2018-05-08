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
define('DB_NAME', 'gagnpreet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ';E&#kA|.5:jjR7TlNoBumAC~g*AZt~96EVu]$!(yfczWE=@KU8[K>i?gn5c>k5^/');
define('SECURE_AUTH_KEY',  'hRT{1x+s`I8+~Moivg$lIsRhm2``~|T=4pE>IfP8^k0riq4&ybmlGaGtVNA?B)tk');
define('LOGGED_IN_KEY',    '+AuIY4nwVa9F}3g:7[vTE9#w{]`wek(Sx[|N`bB(Hv[E`>[,%Bv7_rTqCF3^VXd$');
define('NONCE_KEY',        'Oqu6ME..;#r~]Co:x_}}XZ^PFyy)%|!K4l>%N_E`Z&pt7-f`X#vs0q)IWMy3@4*4');
define('AUTH_SALT',        'G|=g-Q@9Y7loF|79S`2bY8!*Bu5O*WxJ+g1*TO cL.}e^%^HQWQhif+P?D-opKig');
define('SECURE_AUTH_SALT', 'U6,@n@>OF 2LiFMR3v P}5`%>.1]h7|@r]q(*Bdrf%foZ>8,8H2u9V5|=c3r9,+:');
define('LOGGED_IN_SALT',   '{EG=S:I6l@O7_xkEF26`V;#fc]}s<xM/ZQiR0o IXOt3_]x.fU#mH ]2B(^bQc%S');
define('NONCE_SALT',       'D[=lU-rbl)B;|?!EnKV&vt]!nZxMF~qa#H${R2=wX6;DtA< UvkV=v&okM`[y()1');

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
