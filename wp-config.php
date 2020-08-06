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
define( 'DB_NAME', 'Automobex' );

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
define( 'AUTH_KEY',         'D( JAL^ qq+fK=x6G|?ffrzN3i(.#pGq:~Z;<%=?)uv@WJ]|,Ea(WT}JG9E]z?|H' );
define( 'SECURE_AUTH_KEY',  's)=Z2enM_~uA/Xl%D_~A2&o0s.Q!L8hY.bC6q8zmotrd-#P%Hp0}2~oJLyo&nadU' );
define( 'LOGGED_IN_KEY',    '42sZW/q|DFUBQZ B L&X#z*MR`Aq)k v/#{osV8BW9NNih5n8A.#iuSVAb+/s$8~' );
define( 'NONCE_KEY',        'UR%u]yJ1f6@yY!(9YZI=RR=hemYC]sb,+2mm_=;M/tPX[T9F]|4j8}m^V-vwPOKz' );
define( 'AUTH_SALT',        'fy8Ii $J=T6LsNC)q6,7NVy@Y@R62$z |t3LGM-4Lz_x)#)<SJbCg~2/(FqO{J?h' );
define( 'SECURE_AUTH_SALT', 'L+F]pDbwp$}CQ^hUn}Fcqt9s~ws* {TMj^LP#U5FN~&&[Ql #jp5oOH.#Rn@-{^m' );
define( 'LOGGED_IN_SALT',   'gBk=$`A_<)TnXh}EGT3OwKy-LE_H [m#5n?EYUZi n[K>>D*G}@ATD>#J6.9Zm](' );
define( 'NONCE_SALT',       ';4%?Pt6!*w@.$TS-Bc~>3%|a]!oB&Trx{E*$l07yJlpZ)Be*p*)ZJ0w.f(1$otBK' );

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
