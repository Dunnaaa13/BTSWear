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
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '> Ly@a>)GB{A`hOMBIr|&OW;k;i){2m?qJ^&tWnDi;:F:mnPtWO(eN9U)0cn2*-=');
define('SECURE_AUTH_KEY',  'JE@O3S)rKC%>%Izl:A=iOU}$={?Zod7d`UdR0J5euhk2!=uB~drUJW/D?~OU=aaa');
define('LOGGED_IN_KEY',    'nM=B.3U{wTI8qeoi:im2]OP9lam~qmM17NxQ]%s -|A4OKooMU{{bt< j^!Qb>)p');
define('NONCE_KEY',        '[+<-o)D;`P/8yzH#8!h%hMMss*f&>(Lu*SvoZ!jqv3skgIRHyu28JZYfzdw5nGpY');
define('AUTH_SALT',        '?L+;Uvw8/$>bXd-jt7|A,;GxjP&v{]L?WUv;I=UF_ixG,2:=:d@c^[]uu<6QT6D/');
define('SECURE_AUTH_SALT', '(x~almnW?1dF*}*zX^^yu)p3@)K@d(:$IGTvX5[n/h&+^PRn!WFBJnMnoUcqQ$l[');
define('LOGGED_IN_SALT',   'cP,KxBd{~NBobyo@R++;_-n9Y^trR8M$B_3y$zltYt-Fe[to$t:8[4-nR7~%(~((');
define('NONCE_SALT',       'bZX@+Rdp`fZ1rh_IT_4nOJGix9i=fyKQ~`0^kBuIW3*Z_rIP5qV7bOCs6rBIs|3#');

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
