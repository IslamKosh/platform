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
define('DB_NAME', 'islamkosh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'commonrbs');

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
define('AUTH_KEY',         '{dqv$vo2^s)T|l?mbuKl[HvrDv^k}|M6|~rg74 %U[0>wfe3w7pL}wn4|W-eAH(T');
define('SECURE_AUTH_KEY',  '0y~^<DiB|Tu@R;&6-lUAdOUhaG_BJclPz0l|,b?<E,<xl&Fz Y.x!/+aByJ+$]IC');
define('LOGGED_IN_KEY',    'zBCN`BFql:6k7Hy% R^qWTi3;~ yh-EHAO*yK33F$00d#3;Fp!-1l,0K8MJb)Bt]');
define('NONCE_KEY',        'jp(Z`+FeQ8v/b4rQTx#c6c|rK3&|!Eva+pwIU.t|+``+ +Ji+*Tl))Y[@XKa]-%p');
define('AUTH_SALT',        '?[$&zpJ~Fa@d[PU(=13lQ|MJpR29+|$ZIj=l^?dDLzXVoD0#Pz4-RCBeQ^Aau&hB');
define('SECURE_AUTH_SALT', 'Jx?^9p,Py@9@!;|8.K6`[]+ac=[81nbn>o,mmFZd+0Fr{0#_ac[#B1o|u(|$vRju');
define('LOGGED_IN_SALT',   '/k|g-MHp4f9@+@8x2,ESO=-_&s&lrLZ:Z+ZP8Mh@#A{B8Bgek90-o--t&9:=6>v`');
define('NONCE_SALT',       'SX$N6:i@`}d9`7JrjB&CaFH9(ZWoQ@}y2WTiCzk%RCCty3ZO2Y%od;(fM!,8KA,-');

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

define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
