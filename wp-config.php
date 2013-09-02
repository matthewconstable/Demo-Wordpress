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
define('DB_NAME', 'test_wordpress');

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
define('AUTH_KEY',         'uOdAv40s;Q# _>R|EZXDgEJC<L@,3s3q[eQ?4GB-SRzA%eWq{S!95g7HMPG+1>,t');
define('SECURE_AUTH_KEY',  'r>g=K:(_9+WaKI%Nr+#&*k/CT2^vHb;d-cIovBm7Cf.W+di[?F)2vgA 3w= ,8iT');
define('LOGGED_IN_KEY',    'n},ykz#VhD#y//$Xl)bb*Xo[.:B7Wgaa%FXzRLrG+X|u{p}u~os49v~aR3{C*vqo');
define('NONCE_KEY',        ')*xaUZ<y;(_Qy^e/xuU+5nP;)AI*Q_%%lm]&F$f^v3jSAq?B}Rp<_Y1378Oy6M@&');
define('AUTH_SALT',        '81i,`ux?ymEwT,aeM2O /<wmG(PS9s`K|qeErFE&NNv_YsX5)_)#$kHtfMcQ3E_^');
define('SECURE_AUTH_SALT', '4eXN-]1!!$K.HV1onrIw`9dhEk%jNDf_EeMo{-7+oCp>$#=+)YCI]SqoE{<p*HuX');
define('LOGGED_IN_SALT',   'cDP6V+Urh{SoVfT&~nq*2j|;*qiut^{4UfyW+L6XC@+w-T&]=tr=yju=6tVMQWsx');
define('NONCE_SALT',       'q5nW9T!X#eI[y,5=*M%E+sn1dVp@`+UdLN~^a`*@$IFRW0HH5h9P--p<;M-SO!|%');

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
