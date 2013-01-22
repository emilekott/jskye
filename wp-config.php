<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
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
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'tUL2d}l1JB;opl`R++]S2zUi@.97IoTXvoGdZl,+VMMb;t:{id@y+R-E2#b!S]VZ');
define('SECURE_AUTH_KEY',  'H:!pYtR5Iu{E~A`@:2$;QLRQ5gNOoT|DG{~-wX7@^,FhhD}{6$vYk,,sqKjek&af');
define('LOGGED_IN_KEY',    'Oq}R^]dND&x}k)}U~#Y4 Y^S$6$pq[b!rlyIH%&-`4/^s(e8[RW*@_CN<eqcIZzn');
define('NONCE_KEY',        'NI.?Sw?QcGW+]?WhhV~SEDUYU,(c1/6x8AVz#TPi` IFq%SR%l.L=_[fLR}q#|2w');
define('AUTH_SALT',        'RM^}nrRz9oD<a6Jr%H4a^s9y$fG6]6tlwcI;:;c|d(Ab|$@t{}:u[z$*nh/$2>E%');
define('SECURE_AUTH_SALT', 'zb8NRx^5Ud^*U!iMq3q+SrY5glh$A$(n%3<rT^:^o<T2]~0_/N$>ZX_p@)8FI&^6');
define('LOGGED_IN_SALT',   'Q(+Rv^^8+!_<]d,N@Pl|1}->8k)HOaQ>((:2b^{.[;F4i](VX,6Q* IVw<V|@uJ_');
define('NONCE_SALT',       '_g`$*gp/jezO$5-:BS&F4|iXJ D}z(y/kG{iTs|FRZk_X$cdeU9|Gl;}{6L5 /[#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
