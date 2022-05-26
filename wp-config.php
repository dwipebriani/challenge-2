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
define( 'DB_NAME', 'drone_id' );

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
define( 'AUTH_KEY',         '^ RRzpG=82bWKU5%VXy9gxvJl6 *An`vSfbrtb=DS_gda-nxhY0,/h hEoDQ`R1u' );
define( 'SECURE_AUTH_KEY',  '@XF&a&Y|mTnRLt4txM5wVB8Wb>zAFHZI}0JRKH`IO!4EJlIJl+C/;)Xq[N 8g*Qs' );
define( 'LOGGED_IN_KEY',    'D3C&*q5@PM[C;tE(=X0n*iOxY)PIjRs?Rt,oWS^f$jBYpdYI8K-=K23]CAH9+?wN' );
define( 'NONCE_KEY',        'ZqHAIEUlH ^ne*-2P7j8LB(kqkIpXayC<Ee$0]@]enegSd<-Ln;4@c26<]Uh%DcD' );
define( 'AUTH_SALT',        'EfPNuUAiyra*lFU4+5 g+aaNI+RF[X9^x2ayr~9X}Voj|9OhZ]o;<XMHfN3LbL:l' );
define( 'SECURE_AUTH_SALT', 'wv{!^P:<is c^OkQmRhI6iF1`dp][1;S)PCY->UeIhzNZ7uc<YE8_A@{t[C?c_b]' );
define( 'LOGGED_IN_SALT',   'Ul@U`gW79A$:S`Pt!f9:gw4b&XEhw~]oVFKUZL!4rHaRuVu;BfW)<i6`/U+>- _>' );
define( 'NONCE_SALT',       'QMjT~KI5L%XvuIg7hs9IgERg7m`1?~F:d feR@mPltONA*.xD+$8;h5fq]b}FJn)' );

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
