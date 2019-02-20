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
define('DB_NAME', 'gondola');

/** MySQL database username */
define('DB_USER', 'gondola');

/** MySQL database password */
define('DB_PASSWORD', 'Logigear1');

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
define('AUTH_KEY',         '6G^lCEy{,Fg77t+CtU-Q+-eB)<ix5%qON@r !Aj-UsK&X}2eO8S48eST5p]N6Zwl');
define('SECURE_AUTH_KEY',  '*grtQ(60SsMgS:+8!U/z4J3U/<0E@isV krc*BkDNL&5SF|( Y+*h$;Z<*il^$IE');
define('LOGGED_IN_KEY',    'U92g9yEStxR2O);`56knpkikU@c;s=I9ak(FLW6#dD@Nf2MYsvq:SOjlq&Z7HTI`');
define('NONCE_KEY',        ':aWnD)kW-(*jC!1T}p~fdq3qOA$C]rcHRy[%^%&rsoq=cknk`(us,|8C>3t(il^P');
define('AUTH_SALT',        '~EOqNw[{1HK:D&#D|Qp~>c#~K~j=]o-)GO,aKE*EuhL;r pJ:2MGuK[^Q^GHv{Bh');
define('SECURE_AUTH_SALT', 'QvyEEs?=;*F>~;+mJ/:;1XC8P*1{Zx98=NP~af%zlSkAj?dYUaBa`#G`t,,b3<rr');
define('LOGGED_IN_SALT',   'DC-:=hq7o^GYz^$_r#J>RTWA+j^h$m0Hfn[cgAhu0.+1|d1XTlq`946MO%)%(X;(');
define('NONCE_SALT',       '`&M9EU/D*9Irj&F6Moycb/=g/xv>4]>?d2qPhf-N@bTiZ[B[B|~7!<0#m,uLyp!Q');

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
