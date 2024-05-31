<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fictional_university' );

/** Database username */
define( 'DB_USER', 'tiago' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=#% )k.$KTK$3Z:5-akw`=uhHPlm/|{G^~tZ2ehgYbvasvqMqb`$5m?)Fy`d3 mz' );
define( 'SECURE_AUTH_KEY',  's!R3U%jsLAppK|hO$6J[MCMBJ UL|}9KtU%X|wU;`%^9YQ6*A>FF|$f53P_J>+jU' );
define( 'LOGGED_IN_KEY',    ']&Q6j8bXw0{WfTQHf!a78tu2N*z_/lcm8Uia8ch]MsIt6a#%~AB#jiJ j->,$q}W' );
define( 'NONCE_KEY',        'nF`-*{&c?[Dm+IKD8Q&TLY>1s&#*vWHrqCK3rR44~l{T#mCZ* oN`rS>v>{,$OcG' );
define( 'AUTH_SALT',        'FL7*6j~Mji/Slw[<)`XNMY2x{iprG%y:G*g`g*<u_I)hrbOFpa&*cKx%l$4{vqX=' );
define( 'SECURE_AUTH_SALT', 'TURG&)eAuyyW1YuM/V_)3/ a,I`9hdcWasY* SQp+bC_}Q:*Di?GQ6YK~e&4Kv u' );
define( 'LOGGED_IN_SALT',   'c1rzf!5ZPkpR3N,%ABqi:*MC*`XB9nr6ZuE1r9jCn&.R^S+KDHAUmSMCw{es.8s;' );
define( 'NONCE_SALT',       '/WY@q}*rHzm4192VN?;6:}>0=%diqp{,f*%Mr>4NtPNrPSX&`}2GKI1ipGjTJ|:i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */
define('WP_HOME', 'http://localhost/fictional-university');
define('WP_SITEURL', 'http://localhost/fictional-university');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
