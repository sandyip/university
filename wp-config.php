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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tek_university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zfw-`gDIT=|_%+.cn$V2GC(XQ0R;-&*? a~T*.QALLV|?W&DASiH=Y9UlHrfg!([');
define('SECURE_AUTH_KEY',  'CRfcm`t: f@PM+|_Fhwmu1a@)D6kg?y$[s6)f9ct_R-V1(:N}X$fHdPkg^U--wpr');
define('LOGGED_IN_KEY',    'KR:q)|O47B*?@u%2+dK3 ePQCyfj7=$5oduap6|LrHQ(}CQiG|eWy~$q6@&((@e_');
define('NONCE_KEY',        'Bj.-~}uo5.@k1QBp<(+-F|q>[k|PW}?d8#kuH->Kn,G!q<Dd44#X:PXjFB8+TG-h');
define('AUTH_SALT',        'ChZgu2jD2Q0+&FY4m<R21R/|rrYcCa/zaiJ{-Z)?1:.^(T>6Tm!Y.lp4Gj&LSQQR');
define('SECURE_AUTH_SALT', 'rE&GQ Lcg)rq`j)xq-r~l^ZGuC2?1-Vwb|`S{^2xDL5+ib~*s-P=@>l)6G>2T^_>');
define('LOGGED_IN_SALT',   '.#-$,^nnm-|b=B<XJmgq^D)lHat|Q,zKz%<r./gD5~8O5-+u!&Cl[3[9|?sl!Yy4');
define('NONCE_SALT',       'V,GI%w]W|qScMiQ:Xx`BUA?yl>ngwH#X;<-Y[?[&:>C{2+i5fCTh@&%Gs+O/|Giu');
/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
