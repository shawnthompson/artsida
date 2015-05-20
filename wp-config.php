<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Lester2003');

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
define('AUTH_KEY',         'Nb]|4FHat236-2W?x)7.xfWmUaG8!XR[M?/Hu#sSt.hnm7bOR7Lb?Nh..Xl5IQ;p');
define('SECURE_AUTH_KEY',  'VY++/!LRlDOqV!1x/z:A}$VZ+w%uxT2(>G|4p|F6b:W!0_z<ty3`sK^YDU~]ZtXQ');
define('LOGGED_IN_KEY',    'AtEAINY)lPtOf6nXt2]5}8pp5]*{]5OgLj4/5Z[-$Bjdmh;?NKLdZWs_dD IsEGe');
define('NONCE_KEY',        'Z,(obY+(i;$y(U7{3Kgt+V260Fy+|f3PL:UE)tclyMK wg%dt_t)UAc*e=uw:;FG');
define('AUTH_SALT',        'sP|[ !|VfzT ]3aaAT&p_=c8h@La{g_FI;5rev81sJ|ItOr1+[dH`t|+RpdQ+*mc');
define('SECURE_AUTH_SALT', 'zLA%:<&ijlYZ+-Weol*}mdV^y**&H+x52mW*$>Og@Aa+!lCY[S{^SW#v}zH}/ngb');
define('LOGGED_IN_SALT',   'SJ{A,QSPm1Wf;a+]K(qFf+8_7BMP}_~ddn8%a0&uZj#|)DO7-Qx6/$@WgF~M?&Y.');
define('NONCE_SALT',       'a?LHZ^$`qn<4lo4v&ZRhVP^EbXGf[QysS+#nBNbta/?@rdUW.4b%]Q<I&x)eSBU7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test_';

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
