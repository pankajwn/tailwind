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
define( 'DB_NAME', 'tailwind' );

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
define( 'AUTH_KEY',         '?B8q{+{n@;qAj<?IKhG`FM7kF;wYRo-*9D^IPL+mCAnQ7qq(oknFAX,@f;pyL(m`' );
define( 'SECURE_AUTH_KEY',  '=^M; >0zU*~v`l_Jm?JEp^iea<X<ncD^fn2z`M/!^CV8h-eT7NvK7%Z`cfm7Cw*|' );
define( 'LOGGED_IN_KEY',    'JqW3kpWS *fCdIF>0?i?wav^$!5<FUk9[*VwN&C6GJQl!0u2;[r=U+RFB<Zo[*9M' );
define( 'NONCE_KEY',        'vIGjXp/Hu]f3*ynr^]&&/RM)#%-(S{2qY7X{/7N/m-]3x`22)#6Y!},C!]z#*(hF' );
define( 'AUTH_SALT',        'xuK9;4]Y$!zcOtBMNYcX_i&yChc`3-@Jv5U<WJ~$6aq&3;2E_=_h2}DIj.n3E:j6' );
define( 'SECURE_AUTH_SALT', '8Jg0~Xpy_l025X39h$S9hf^wK9F&SGJB{Cr<;+QBgqe?pTA`Y{giBzoe[Z*%J&->' );
define( 'LOGGED_IN_SALT',   '>B?rd>om[RDFX/aHrr PeQL2%;wQvp-il:dCgp7!f]X[%HL`rC+bxZiYdz9Z=i=q' );
define( 'NONCE_SALT',       '^NUgG[BF-88;A;0{;kGqW;_{6rn#q: s~`~8C!kd%9?n>$+D.0KZ,:yi]f^T?XFC' );

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
