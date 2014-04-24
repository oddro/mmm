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
define('DB_NAME', '3m_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'merdeka123');

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
define('AUTH_KEY',         'xD!@dW}NT7JKDua& wRJqR5n)xhEmn9^f.tO|q6Jc}!{mq(?KX9%([&ue-S0-F[:');
define('SECURE_AUTH_KEY',  '0[+LuD #V&;|:F$|kQ[t8u`v:o8):F+bN<6#S-PxbK{zSi+f[L-OG6n,>*+!y|zU');
define('LOGGED_IN_KEY',    '^cP?xnE6~K&}-kI[8hAry*|Nl/ =nr+h|zmrbQF(.)4/i65ri]q-5MhdGDw&9#+(');
define('NONCE_KEY',        '=DD#Zt|%,n2v:FPn?h:>X>iNc_VWdV<Yq/FF4pho5,!37xn)vd001|zFB73&{38:');
define('AUTH_SALT',        'Ex(>Mj$QJU307-j ;_be*?~g04<fALWTe0Ik1^m2_]98~!5LO5Y@ax08?z`qshJD');
define('SECURE_AUTH_SALT', 'Ixi59VhFc+%5$Q|nuO-cTfVhX3=WP+dNSi.~a]YP4aAU=?yuwnrR+r/?dlg$uC>[');
define('LOGGED_IN_SALT',   '{O<Y5R(jKy7{nsg|d3:,Qu=vcKlX9sQfi)mK{yp( f!zSBxk!0@ct>I+bhh-+dNn');
define('NONCE_SALT',       '7[YLUaU~9VvHL21qo *+`onbK=q+}ohFEj?KxNQ-(<4i>~%<?z59@])|n`I]NSpG');

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
