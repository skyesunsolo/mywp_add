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
define('DB_NAME', 'my_hotel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '799c94ffbd8ad83e');

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
define('AUTH_KEY',         'xS{2_8?LUK6&k_G6N|/v_WQXgMnC*8Q1*PpYP3BPpK0kf98p`?:6R4,>.#Pm!6 s');
define('SECURE_AUTH_KEY',  ')>?dkX8;%3i8f*OeB1`c&#0cqF6c}jr7LaEaWGQNB(+5MlCHz* @F;tc+w<K5f$H');
define('LOGGED_IN_KEY',    'PachRJd?B0we_aGftC6@X;%j+VFrp>yz=#i%VuvG1cHedWb@5Bg%~PD]Da6nR$=.');
define('NONCE_KEY',        'vG#mn n,W6tQAT.R/1h7&.OQkg?CXTmvS}8!eRXtuU4+f+TaQU`<#z</GX26a9`_');
define('AUTH_SALT',        'XlY`TJ5^]RO^wdzNN$ @DYAILJ6n2FL8$f1QV6EZ7h1n%<b}Bt&Q,$blM{}-kf9V');
define('SECURE_AUTH_SALT', 'j52$B.:GZqUOm+KiXA/nQydjG3`U~~L/rF5O`!7a2!kQ}(! 6sfCX1#@&(-l61z4');
define('LOGGED_IN_SALT',   '`hbAge53Yb*|j3z6vsrJ4vN0qv#s8?f <[6:bg[@1Z#$(Q2a@JL9+rE!8ej*=S(%');
define('NONCE_SALT',       'G|MDTJai{[8_8^H41s[keJmN;[q6coDUQZ<Z7}GeIA*vz[aiX427FeN0/XG3pNQJ');

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
