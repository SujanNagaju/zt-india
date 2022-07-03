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
define( 'DB_NAME', 'ztsindia' );

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
define( 'AUTH_KEY',         'IC1)=My,o2^H|eO?Xk-C{Elx&9tW TM>zle^pQm6eHI&4_c%Ga2.<,xLzp1OO2|F' );
define( 'SECURE_AUTH_KEY',  '2Ym*J#=v6]OIQc-/c{G.C3T2o`al/JqnrH7*HR&cCo5lhnw-L)y&>Q^H~$SO1_^G' );
define( 'LOGGED_IN_KEY',    'SLKE]@nU`~k0k!|aS^Ew(}Jn>J`o$Pl)I,a`V8AFEhp<l$urB@*d1Vc=#1mgE?nX' );
define( 'NONCE_KEY',        '{_Emnq>ntfnB=>tPYEbW|#Ie@1@y8r5}B=qA^NW~iyJcvNC#_:9*)5.d^_DF}@6`' );
define( 'AUTH_SALT',        'NdgEVs1aB,s8&kI=b!CNe?-4-d$oz@33.:^-$%3El[Wij&2.I4One.OGmR(.2<o=' );
define( 'SECURE_AUTH_SALT', '=jJ=EsHt;!J223~TH!WD.SO[hH/7.-HttI@,s||C<1wQ^PQz;%I8Q*MB+-dUAHp9' );
define( 'LOGGED_IN_SALT',   'P ay-D+:jZMq-!l0DLzjv=O)d_SRFk8:cNZ;](&(GlF-VsevI;kbHEb11y(bZ,r%' );
define( 'NONCE_SALT',       'dZVy&=8(A 5A4][M%*(f2([k0o(( PcO.Mcxe%t]#,Bqe;yj,iCk.oUuEkQERmWI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zt_';

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
