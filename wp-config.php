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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/wordpress/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'product_info');

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
define('AUTH_KEY',         'H `SX4eQ;`I$kG(P,M)CNnM&Hv^gq}mHHpkpv}$*0#g&wJYaKHZ~j;%grv0_p[jz');
define('SECURE_AUTH_KEY',  '~t06r4ob*>JJ]@n[;_QJ4cfC$Q2<)zpoi`;rZr!EE~7:mF}9avt@}+3;:Eppk6op');
define('LOGGED_IN_KEY',    '9?~*Xs2` x]?rVw k4Sk;m[L2w4;IO SlP^*=k{]jPT(DK{?ZjI{DwZW.GuX~BDu');
define('NONCE_KEY',        'Ij4cR;&Esv_6?JI?|C(ty^T,QSKz&4o JGXYLr&-fr13zp}es)x?w(-vn:yY|6`_');
define('AUTH_SALT',        ':X_bh@WSWI7g)|& jnX**NnSLRVM&Dk_TgyRG5up5Z_{$t^7%8Gaxk*>=c>g?9+?');
define('SECURE_AUTH_SALT', 'R8)-8~xLv88$B1m{Dh>SMTI^Ga*V-G;_Gv[_--yCz&gk]+-sl^BCnA5X#Y@4V{}!');
define('LOGGED_IN_SALT',   ';<eyS48xw1o!qUiz#eiEasas;z</4Q%T(&+5r= X)O>/j;A{X{n]B%#n<++PuVIY');
define('NONCE_SALT',       '%lZ1F_HL1N=4,%_}%lOhb({4|>4,i!hocp.<lx=*[_:-h9f5lAdqf{ET-W3+mE9+');

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
