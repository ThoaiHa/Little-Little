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
define( 'DB_NAME', 'damsenpark' );

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
define( 'AUTH_KEY',         'l<!N1!$UO}$%rWBUb}rvmHcaf&*YP4xtC0#`,$OsNYl~0ww<M}N?%iEt9/0&drj{' );
define( 'SECURE_AUTH_KEY',  '=`h1gEPjkh}GY1JRJ+XWt5-1ea>&XS% ba]z8T_oog..yoiNu00|<ZV_tXeRK<;G' );
define( 'LOGGED_IN_KEY',    'SR(5R0!dF_Z^R85][{*V(,c3^!ner{Nu{:prLy.{/ryD[kh#&COqe(=%88z]|X.F' );
define( 'NONCE_KEY',        'BJH5o:mTdbMbH2-CLg[T=7kDx`k^cn|i$2p%6w=rZyA;<~uJ?f$zf&g+SyP_{[2=' );
define( 'AUTH_SALT',        'owT*>zmkRxh3k:n?X$fdrfpS/G{K;mZK`uq&mntU4-DPeEhEQ<}+]a)9ga`3G4n@' );
define( 'SECURE_AUTH_SALT', 'D< #OC)aBYe73$d~+,Ml0/0;_)f6wYm{JS20DzO@>r7K`$>P )S*%28o[REd+ 4}' );
define( 'LOGGED_IN_SALT',   'c[]ZK~lMjU}nRjdwb^>4#5!L^x.2WlL*lY8_mNb>x1_9n*T:B!1oDZbY3243Jw~}' );
define( 'NONCE_SALT',       'PV/]mb>E)U[No1~xa=Ou=G2@Zn3gv`D2H-]2<szjg0ZNk)y!wNVOlX:5*qpwxD>0' );

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
