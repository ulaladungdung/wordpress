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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Q5e8/TXSUmGJH^7&Klq.Y)Y-5oObOCx[JV2#GsF|p#nC)m38,BQIk1+y^2y_U*KK');
define('SECURE_AUTH_KEY',  'N=5$-/3s<ab6~NdKJi!P-miT1+67?}15Rc=LHIy^1gkxhQ!&YWgUgsKb5_[}h.2[');
define('LOGGED_IN_KEY',    'UF_cKK Hi;W,NmPf9-q3D(QRDE=U;%pdC}3Qsi;*:7uJyCUu3JEE#}qR-:a$DeGV');
define('NONCE_KEY',        'dyhLTn0ib*C_dK7Ej&c8u6E8u7|RInv3Em=i=)Ia-|$oMY6`kXr[z $O:,6PIO:%');
define('AUTH_SALT',        'eZVG%|),FCG:9fQcp|krJ@9#%9kpaM&-crku2x~PEW_<706]YEB|?AB;0>m|xQ8+');
define('SECURE_AUTH_SALT', '{riz?NFc!hF4#4 Kur4T;+$[{Ph+q$gGf?ChEp=RV944xnBSAI50tQ=Y%=Vh:pXc');
define('LOGGED_IN_SALT',   '3<HCak&0^)-$S]z}-o[z>EFsu*wom 5O(/-bjmpT1i}j@`<VDT;ac3p@.*2/Fnut');
define('NONCE_SALT',       'H[[>T4,Z4k^&Kv7,W(~%#S e Q(]E}I}pJ2p*gj$R8iHokLEShCrNr?uJ $Iu6xp');

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
