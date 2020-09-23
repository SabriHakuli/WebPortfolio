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
define( 'DB_NAME', 'webportfolio_db' );

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
define( 'AUTH_KEY',         'fG~>gOB%$D::BG-EFCCwCcltxFE3Kv1lO]mld~Jt;%:d^i9Tlv>A<<C$8=|`s@!(' );
define( 'SECURE_AUTH_KEY',  'KV3G~Op[0ZLbD=]sU8b{3@1bwW@Y=ngZ~qSO]sP^<vJBHo$9a+eY2D$;Rya3J~ug' );
define( 'LOGGED_IN_KEY',    '9N$*i:bf&gl*ziIk/G{K-kth`CQlM@$!Vn&#tI~Y;ky,x$Q.`?c vkX-r%h7CE}d' );
define( 'NONCE_KEY',        '4,Ij1iA<7>$q%FMoWEi^8/(CW@_>rg%*i?!OPm^E6mP5Mni3SRCBFBw78N5jt#dk' );
define( 'AUTH_SALT',        'X|(y~p~9]4yJ-9YpEUiehgVs4)j(.N*+&k1?|jN}XveQ+Q; ]b~Jul`f`aX`HIKJ' );
define( 'SECURE_AUTH_SALT', '3TIK!($YONpiv)?j5#o5Vkd(C<Dn)/qC10xOQo^jw&nq>:}t`)$ix$N`xa=5_TL~' );
define( 'LOGGED_IN_SALT',   '{PXUIS?&f,50iRmmr-_baBDC(?f:vB`~t1jINcmiC|p3F$cWYq^fJuK8RQu2k2(_' );
define( 'NONCE_SALT',       'PuleU]znC3|{kE IbXt|L%!54 J+YU%^`6Hs9};cMVw]];j9k$ky[2Eh_{U>8Gsg' );

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
