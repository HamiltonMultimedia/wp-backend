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
define('DB_NAME', 'wp_backend');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^a:`^:ofdH_ 1Dvx5M%]5;%92tji{O+wR8SJ8~MX9hY.)+U_3yF7SZ,7z84Jyfmf');
define('SECURE_AUTH_KEY',  'qY@C)$&.3o}*f`XdF;gPU}[{<3=ECk&F33=hJ)2PN9QG;%1mVs|*3WKyZ@>$ZR<s');
define('LOGGED_IN_KEY',    'qWPxXEi705E{DPJhdaVDd^ZH;&3<?r,8bh:@<z1#n1V3u^K4!_YaU$2K*^N;}N5+');
define('NONCE_KEY',        'PU*}A38DG+QR<D{mg0}26h-dm|r]tc c7mM,lxU_0aVz56+-DxOtU%CY)UN.rn7>');
define('AUTH_SALT',        'VOYf4;Z91B6RA(0r&82$XjF0ZTlpSXI4i<^sKJsQ|fJdY_>^gN{O>`-x9!gw83C9');
define('SECURE_AUTH_SALT', '@~!v=6i:`HDNs?,.JX]z]294&F^d[W&%{HAH`Q4-adC|L8g8)#@Xjwm>-;JJ5|y5');
define('LOGGED_IN_SALT',   'FglAzl;o]an^QT9v[>U.L7^i}DeFz=dw;xZ8aW1!k_hR^09eVzE>xo={t&*m)Tj;');
define('NONCE_SALT',       'moG{`x<RoPYd^iU$J(Nje?D};ay![LeL,at/W!HdZ!J{vpmd74.{<LnHP_/BRv C');

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
