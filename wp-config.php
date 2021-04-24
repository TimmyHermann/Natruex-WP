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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'J_DTKvLlX<gL<,fbF1dx^-rG6{c3Vf4ug[J^|g;WfyV:0c4QIysm!/Xs^Hdo4:_3' );
define( 'SECURE_AUTH_KEY',  'x^ l&o$:Fr,g{iFa0DDzszewE(lT&tXBvwen;4gs.kj9%heQi[-ttfu)JVlR94[v' );
define( 'LOGGED_IN_KEY',    'wa51`j5 Rld7/`8);pfTO10Sg|?oq&s;:ZN`NWyZ7+nETok>ctp?)3B 2VucF{<;' );
define( 'NONCE_KEY',        'M?{j;k}i3k-PTM#uOWI&=^HbP|/X<tSvw<fLI{M5D=3VbbF`d3x)_]f&@nzm=ZHN' );
define( 'AUTH_SALT',        '[mq7@emnDT?w{hmM3[P4d6Aw2UaJ&(Hc=c#U #N,}k2@ee<6O(QOk53+a>.S8IvG' );
define( 'SECURE_AUTH_SALT', ';E(#7539 E<9W`>R}/Aq5(p0%q 9S[v6`(q>W4gj-RAS~$q>!-{X/BPlC$.Mt$]x' );
define( 'LOGGED_IN_SALT',   '>X-.jd-MDNiBT}MU*Yye<LlGA8=$b-sXo_LtrU?i1J?BS@JEv:Zh9NGCoIAkUXDT' );
define( 'NONCE_SALT',       'K-DFL{nZw,G^(GzK!{*j&>mzB{X?!C$$SBEdX)nl(k1-[oq^N*4XS3tVWQF>M-w}' );

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
