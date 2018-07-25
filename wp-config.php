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
define('DB_NAME', 'experiment');

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
define('AUTH_KEY',         'SJcO)+HHlQ[tWM=)0,qU&R80RdBN7OAr<iyDiHF}>u*@Nu3kTiLpt]MYz*%P>5R0');
define('SECURE_AUTH_KEY',  '#X}b?fVo>nQEY_a0l`>],:<%XRAC~TNPFY*KI^&i)b$&&;u%l6T:!Sg`>&Fb8G-|');
define('LOGGED_IN_KEY',    '/BE_j#W+6o&tkiB7jgxVEXp?&zNkTN$WhPz.IojSL!FTW|ASxt}%emLRPPa{lJWm');
define('NONCE_KEY',        ':pC}50PA&aMOdyaY{4 cYzr1`gV6C~k[iU37yzjeZUYT@r!idp<_2-E&JFd8Jltm');
define('AUTH_SALT',        'gPmGh0sKOYK2*H{S}{Klwm(SF^Km-1k{vAgu!E-Bd5n(^sDwTlr3  RohN}@6ziS');
define('SECURE_AUTH_SALT', '!/B<zEv-}QaWJ|#1ym(+CIiOD6u63n?KgXM%1py]{z1,8!y3Tfl+mch&0 g5xbLg');
define('LOGGED_IN_SALT',   'Kf2UxwolZns<b(O=,qvhrV]uJc7y!:Z+yV;#Bs}S_~Lo,JVje{6$kr}-X~!#L>`i');
define('NONCE_SALT',       ' ?#A`cE>NpDTh5 C]sIy0y<fq-MNYr3okLi/qm=t1obv.+p[|mv=aHR<sWyc<OUU');

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
define('FS_METHOD','direct');