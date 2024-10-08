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
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FORCE_SSL_LOGIN', 'true');
define( 'FORCE_SSL_ADMIN', 'true');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.aU@}%+`5^eMQ|s+Ms+tlB#SCU-TLRb-kW_Z(AU5K|L>8M{oK{QRldav6qBPF]W~');
define('SECURE_AUTH_KEY',  'Esuv?4iN1G]i![!l(fk)j[N`dg_@;?ue~ZhAZyer5A6:%!`VW5Pvvad<@[ZeQ6|9');
define('LOGGED_IN_KEY',    '`~d)95SENPDLN}>|elu7~T:ow^FguqQ+awD#;6ET^T46$a^3B;yROD9ybQ,)}Y8#');
define('NONCE_KEY',        '(HI_|3JKR[+flT8C9Lq=+WGtdtg7+IJZ89*-yJ.J-ADWlGjnYP%|En5D@DU3n>*R');
define('AUTH_SALT',        ',VeoAjUBk/nJ&@USQ,#67}~*-a~;l0NB9+EtQ6QL~@DG@$3~]w9:y,8DQ2acKnkt');
define('SECURE_AUTH_SALT', 'iQ#]7]+a!jY1~8e~+{.<5)0Skm,Qif4sIQbBh`N,B=igXXET,W>Fd|[=WGGynTQX');
define('LOGGED_IN_SALT',   '3j+LD4|*[H~z/EYWLm{-&R1z!<Q%hQ*w|meBnBX^$[r@Dv@p*H*TD)@C]S)f;Lp=');
define('NONCE_SALT',       'N-#EZ+v?25 [Ir F7:|jY@y:N?C_0}|z~$$U(%UiJ$/D[EmK}TWr{~J?g$si@j~8');

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
