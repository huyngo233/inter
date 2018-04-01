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
define('DB_NAME', 'interactive_shelf');

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
define('AUTH_KEY',         ':w[E4DMNTa+u7tSH_eF:z7*_k;)=&E@$iqnj&^9iD=f!GLeJo]yh%*1@p18visjR');
define('SECURE_AUTH_KEY',  '9k1JAkY/=^~=B;it(~l-:i5|GVpx((8g@Qq+|y~6?&&A6(f*[Lu65~8ta]_QPZ9B');
define('LOGGED_IN_KEY',    '.9eYMy4#T6+7==h^E ={A(EYX/OcZY^f|Xhtxj;)~AG{gZ!%3CB]H*F,.qib]s|;');
define('NONCE_KEY',        'Vsfsf`$]p6@JsZdv/ mQ@Q)n73F;>YML=>yR_<ym?k|><2Y.^%uYwEnw]NRLilxC');
define('AUTH_SALT',        'y`6/]MT/a{(OW;X^~t(pdkq~k5VI1nd`Ux%VFgq5X|J|xXdBAN[$,5f0:qZD8+$G');
define('SECURE_AUTH_SALT', 'aHbK:8Q7Gn.#+U^~jwT>el2E|Bf7Kd*bHM%@b/O51G{_F-d(}wWZoNw_oL&L(tF{');
define('LOGGED_IN_SALT',   '@6NDGf19;Wt$WXl*~5HL|[&aT|TK<m$h?2g%?}Nnp4]K*A%^4^H{rz[bZs>8JNq:');
define('NONCE_SALT',       '>nJg+tvw>@Mi8/ROzHn8,QQu.k[Iat5p*$I_MZ-8Gt{7A*]A3SH#Tk>|.K-h=Gt!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'iter_';

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
