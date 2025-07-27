<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp-bakauserip' );

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
define( 'AUTH_KEY',         'yG0O!mcsV;VWPB5c0l?BpFJsL[j]@pe!-)4pY-F3si#P*{[):u4 aaKs(Bpxo[`s' );
define( 'SECURE_AUTH_KEY',  '#s;*cT#$n)/?Rt230#+:+&ZpAxBPO/fXwe/xLTW~V;1gw/i5#%;T-/.T9muFhH8D' );
define( 'LOGGED_IN_KEY',    '-8KE9NG^kw2o4R<[=w*nC==>f~fx/C~@ @_C*>XyQ3&XYjO9`<|>>Aor~kFR5l`A' );
define( 'NONCE_KEY',        'o&!5Ld;ay>nh?#>VS )6CXY9 ih4ZT6Z^9YH@=hPDlo;T`T/XrZ.iS%V5j9L0bfW' );
define( 'AUTH_SALT',        '>9&A[Bpul?q$KHt{qG_oTH,Eh5?.gIlnNruJb;[jc@jo:F)7-m>H^}b{$:~Rjh<*' );
define( 'SECURE_AUTH_SALT', '|[#_O~yKbr6HP^5X]_hr3=bQsyzhQrkdUT?+A!UkJS_`b^{?58)Oo5[ZyI#fpq+`' );
define( 'LOGGED_IN_SALT',   '5tdxowReJU~WHE{xJ`~d93YRwK7B*eaijucnn4_;=K[EzsFyj(Ve(&3/1w%} H@i' );
define( 'NONCE_SALT',       'sB!/3F|<7U`2UL-$Sx8EhE2)%H-O8VGF2B~DWMI{fQ>b)rSJ]jI=_J1AGpZr_m2g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
