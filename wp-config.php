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
define('DB_NAME', 'peak');

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
define('AUTH_KEY',         '_;}P|iB6>~-50X4V:8l`OCB}lRyh?%xoC@WfT@>9{kvQRkU65b.@%W$(8!=0qp !');
define('SECURE_AUTH_KEY',  'v77j7kAh  X[~Oz.bz@`$ijV,-T9J{;Z)t#/iL8;]F59RD3~:-?FYD}p;O{ij:/ ');
define('LOGGED_IN_KEY',    'w18@m<{~>SJ0lM)kNJ$x>Z/|hd+ZU};q`D9E8xna)oN<=tBSB8I>9N#Qq]0tHPt*');
define('NONCE_KEY',        'cbhzBZ19$edNJVu _{hi/tG~2JjVp}h.8moQ0MoN9n?@%i)9rU)}87U9E^E]k6;c');
define('AUTH_SALT',        'aan0[Rj`W`|:PR~uh((l_L/pEt*96rtQijlQ).X|@V5;4u9EpnTjl;-0sAU`kMoL');
define('SECURE_AUTH_SALT', '{X2hn/m#2vd6IH,$G(<J$QtwSmIN.q7|U,&;H2hFz%aBBqvy:R9ZLToR(ma/O]zt');
define('LOGGED_IN_SALT',   'l;AY^XGM/-}r^Z_J01<Xag~qT%Y,.jWPqT(>Yjv+_2jfEGJNq]{,F;lfuMzf#ho#');
define('NONCE_SALT',       '9mdZMJ|eI6=h.]=l_QP/aSt=>hcxu)P(i?cr;@G6YG:On3,&M-y9;=O]r;g,>r;p');

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
