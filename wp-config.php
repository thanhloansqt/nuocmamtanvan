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
define('DB_NAME', 'khu13_nuocmam');

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
define('AUTH_KEY',         '|w[L]MYT 3Sw 6vzByG[y2|oTxE+UC3&G+os+9&;=UqT9RT*|C_NGv#X|A}y@=v7');
define('SECURE_AUTH_KEY',  'v%-k:/3[@5/&ZHrg&3ih&Pp)p~+y:q>|I,s7Si%S4-85S<d2B!aJX&->QwMIN5X)');
define('LOGGED_IN_KEY',    '+7$-yJ;Je1gO?[PJ`JBpOSE/^ CVM5fY_Mx<YIYpg*C&_S3 #1KN}LY+E^susw++');
define('NONCE_KEY',        'b2XVtZ=gwv;&Cg>$ ,7G#JD^|FH}Os#Sjq(kTW)dJUN3S@}+&l{Q--gAL6WfKG):');
define('AUTH_SALT',        'olfQ6H,fIQ&V;|x||Q:L%NnMIF&AIHMCW-Y%(|6?5O+t-hUKiSaYP,0R/6^2Q{ax');
define('SECURE_AUTH_SALT', 'U5*|LGv2/|FJP:j.aP_RV}owHJz}[1]SG{4{yzXFa72SjMT-t(mD-*dImp^J<iFL');
define('LOGGED_IN_SALT',   'ut(y*/l$nLv52Pkh?$^|&635`]Y-^tX:O=7Xf$d{{.!2zrt+JgZL I7&&nQ_-pjT');
define('NONCE_SALT',       'LUc.*EC/0G5[[?+Fk]iO~mpe%bp4U^=X:iyv[}s|Nu%d~]Es-5B|Fm} yY_XrAY0');

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
