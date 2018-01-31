<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';


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
define( 'WPCACHEHOME', '/home/livingas/public_html/travisbuck.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'livingas_tbuck');
/** MySQL database username */
define('DB_USER', 'livingas_tbuck');
/** MySQL database password */
define('DB_PASSWORD', 'Cd4Uduqg3Es');
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
define('AUTH_KEY',         'x)K-T+W;J<o0(l}GDZ`]?oQ:ba-/9Af+d!oH7d<E?CV795l$Z6(JTHSnIoXhG,a[');
define('SECURE_AUTH_KEY',  '#w)MI|6<cB+D-V<A{R|OP_R:#8{exmyI)Z]##PMH+2f^B$q;^+g/`.hXR`y]3@}M');
define('LOGGED_IN_KEY',    'SwGS~hZ^(g_ &]=+xY_~[(WSs}?C7`EB<Z(<s6XAsjsFF<GZ!2}Zzrcp{Kvm_ zr');
define('NONCE_KEY',        '`r9H:(Dg4uY!Gi5C+H&qQDppQnTG;HZeBD)eAr)CEqH,L}!+Zx$Qk>}J/u.$N1QP');
define('AUTH_SALT',        ')ZryP.NeHW-Rw+e.(u6&rxi-iy8|r! &]^7)#%~NRC]K[nPe0r$Rvjy+_F@lQ,3|');
define('SECURE_AUTH_SALT', '|aW)H+=>E8J/Fm6#8t)D=oR#5b5|La$B?Xd3*ll^BV+.^rsHUCU(iX{qz,.1:^dJ');
define('LOGGED_IN_SALT',   'QV::LB9Bzm@XvTz3R[-R-q*i kX4vqUj0b+`#fg[vG:R2I:D-Lb;n {J_S%w`ZJ{');
define('NONCE_SALT',       'r8U,gT_xZa+=Q1I+|*r!qRbRIleEW|*%>R1%FT%%(+gK67xI=lnB+-St!PUMD+H;');
/**#@-*/
define('WP_MEMORY_LIMIT', '128M');

define('WP_HOME', 'http://travisbuck.com'); // no trailing slash
define('WP_SITEURL', 'http://travisbuck.com');  // no trailing slash
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
