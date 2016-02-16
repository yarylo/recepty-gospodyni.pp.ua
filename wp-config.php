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
define('DB_NAME', 'u573970966_rcpt');

/** MySQL database username */
define('DB_USER', 'u573970966_rcpt');

/** MySQL database password */
define('DB_PASSWORD', 'rcptCE052600');

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
define('AUTH_KEY',         'k{`_+l0Jvg4ForfV~%9f2*G^Nx; A(O]Pa) V|XryD,wdSY:S}E[(TQf$Suzky}K');
define('SECURE_AUTH_KEY',  '5ABNMRrqG$c_);EMA+`mE%ARw<WXXi+/(Z;HZM|Y,7 )70H3U+d&Cj~JZJ>($is2');
define('LOGGED_IN_KEY',    'U+H$mm^dyi$kmb;PR>t6{{KH{nsc1J3u4po<5+@!^bh[WO$D(y0_>Prlunnq=Pw+');
define('NONCE_KEY',        'FV~T5%mIu5b=A3NUdTKY}y#Yjd$,Ni8MSGE{;>bra Xq%aAD</^P2Qhn!chP_V/f');
define('AUTH_SALT',        'JO[ aq2oA~$n+lf-Rec2G.WD184/E*6^f+9EPyFX~VE|Z%+cuJjNcX@MtQr5pi9-');
define('SECURE_AUTH_SALT', 'J5JA,XNqG`u6A$GlU-qg-w=(kJ$ptFeF}%IC?<ue(HnYC!$w|Qpi)n_;7nKl4Z9%');
define('LOGGED_IN_SALT',   'H-+wh>ua4D0.;xDXk( rO z*Q#p`!7J~T>kDv,$6_6}IuWfPq1:&m~CgF,?R* )D');
define('NONCE_SALT',       '`*2.UC>%A=q=N.rH(T1-#lwSKctM?W--=YPTYbjlDK|kcA,C:(?2qf!ESxH+@ pG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rcpt_';

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
