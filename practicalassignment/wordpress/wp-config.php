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
define( 'DB_NAME', 'wp_info306_lab_session1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(~@~Kj#Tq2<o.ouocwr:3+YW<#FL3 I#V;8yY041xBSI%O/b4=_VqY,fcw;xlSqi' );
define( 'SECURE_AUTH_KEY',  'R<(C[GCFrz!QqT?XQ1c&_ZJTzX@8^:yIgt7(IP>qfz~Hm{xgPSoo5g1F;JfR$lD%' );
define( 'LOGGED_IN_KEY',    'I_}sK@X1+607cV-!>X23Q>>n%sw98ABz:+dpFtPt%W/5:XX|)pRr|lx>DFJZjeG4' );
define( 'NONCE_KEY',        '+]oD]D%,m:f{F)LGr1Z0-1JPm~_{@R:Ds}vbFij+%b-$qKLwp{fi^*%BmUyjp#e/' );
define( 'AUTH_SALT',        'm~]s;Q+/S~>2*UR0v}8!i`MyEfWdH0f(6=x$**MhrL+w{Bt1K!Y2&eZ9}q?(xaQK' );
define( 'SECURE_AUTH_SALT', '^z5q.=>s3qIqxNbP9uXD~lp?my$Fj!4.=8*liFKvg5,o_}@Q>5F:_?q  BX }DSg' );
define( 'LOGGED_IN_SALT',   'Kz##Q;p%o5&%$5 ~Q|$*=]s}Qv7INM#*W|?L^$B;;R?LD02|P:c~/I0[<5I=RlH$' );
define( 'NONCE_SALT',       'w-n/Okmog:mztc3e2nD)9v!I9Us>0S8(6+@,0YH~mj[8{>#Lc343Wk|@2Uj+t!FE' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
