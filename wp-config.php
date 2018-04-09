<?php
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";
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
if(file_exists(dirname(__FILE__ . 'local.php'))) {

    //live database settings
    /** The name of the database for WordPress */
    define('DB_NAME', 'c9');
    
    /** MySQL database username */
    define('DB_USER', substr(getenv('C9_USER'), 0, 16));
    
    /** MySQL database password */
    define('DB_PASSWORD', '');
    
    /** MySQL hostname */
    define('DB_HOST', getenv('IP'));
    
    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');
    
    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');
        
} else {

    /** The name of the database for WordPress */
    define('DB_NAME', 'c9');
    
    /** MySQL database username */
    define('DB_USER', substr(getenv('C9_USER'), 0, 16));
    
    /** MySQL database password */
    define('DB_PASSWORD', '');
    
    /** MySQL hostname */
    define('DB_HOST', getenv('IP'));
    
    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');
    
    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');
    
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',{i>un+|kOb:2j19afpB$-z.r_gLg.K:s+:@b2/1;a^b|B+hwm?U:+!6f(jo(qNW');
define('SECURE_AUTH_KEY',  'X][v:#<lKCj<6Pe>pd,GTF?+|6E+lX0ya*]n!eCAlY$-EIKtCNcCVVq>&G{kx1Pn');
define('LOGGED_IN_KEY',    'wdS1[|g+zx5&e+hFBDWVKG:[;Cszp+Yd?81YEgmzuB#|P@d[YxHQikHk E| {;M[');
define('NONCE_KEY',        'n8_plBPjKN[xwKU7i,KCpTqDQ-XDPJ`,IcI:*||e1s}+!Xy7shH>UNcU0NiGx4gR');
define('AUTH_SALT',        'Ngxa{L$Hg&|?%&<CH>w,VvO-p}!:Hp#%(-*@cOas+{;OnpS3hE59xz|;m,Z~|d?N');
define('SECURE_AUTH_SALT', 'm#|YJRPQ(>rnyYJsZ^k$2X~*VJw~[`NuG^ZEb~]Y:T#a%B<L0_w4,gs0*jz&U^,K');
define('LOGGED_IN_SALT',   'd)h@SG`srh:Vw:PPJSL _|2~lP|V^.w#+}wKM]t_Wo_[a2i%7Qb2CK/4w#!$9 WL');
define('NONCE_SALT',       'Tc*#,lYSK.P,r6mA0*.>1UVl+6#F~h.:Zc{j[L/HobA!S|}5<=I%ZX4a/cVXN-t2');

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
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');