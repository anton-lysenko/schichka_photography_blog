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
define('DB_NAME', 'photography_blog');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'LiS0135');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'windows1251');

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
define('AUTH_KEY',         'vwC2ltc$9T2#+Y9i9GIX2cHiA)YO,C65XuLhd|s/vG`f.7SQ^&E~z_V7B}lDZ4|y');
define('SECURE_AUTH_KEY',  '0_A*62mV[r]UPs@)Xz  `x7Oj`$|AS7{C#<#rzbs|UjO?$M[)3=,OKy*d5uT1Ay@');
define('LOGGED_IN_KEY',    'B++N4kroW2>C8! #mDl/o.n3r]Oqi?+Vn`D0lTVN1)X`@w3DX,`5X=HahO,E8!!3');
define('NONCE_KEY',        '_Hr+hE)Wd:+b,S3!{r|.t?;CjV%#%R*3K8tk-n>gO.E!2ExM]-!7l?b@S_lu1Ip5');
define('AUTH_SALT',        '[&h7U-u7k8%&(K}ESgcAI9=KTw<1Oj4yDS^62el7xzR1H+dF;Ez0P?|ME|VT,y:H');
define('SECURE_AUTH_SALT', 'd9jY*41gIUnt.p El1kP7q%ohuhe>zA1&i))|:o+1[bJ3n:q;|Gq#m,(zuM~.7?0');
define('LOGGED_IN_SALT',   '!-pJMf5k|$8Zqe^`OU(g`|t?j>ldczi:?8E}`FYqEI:>`<O##0Eo/G{oIYru{T7,');
define('NONCE_SALT',       '>QDP`LNC5zeM?b7I>XSPA<+A[MG)g6%bQKSWiHYBg==SwJ+9ymK0fA2wY]<Pz946');

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
