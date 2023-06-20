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
define( 'DB_NAME', 'intmkt_wp637' );
/** Database username */
define( 'DB_USER', 'intmkt_wp637' );
/** Database password */
define( 'DB_PASSWORD', '56p70F]@Ss' );
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
define( 'AUTH_KEY',         '532egmskea1hrlyjuvciulvpxw3mj4fkf4gbfmnesioqyolmdnb3lml0icmdtwuu' );
define( 'SECURE_AUTH_KEY',  '9ilnav4svqsotmes1muahv4xheoxqvyqcyy4rgiw72koggfsjnhr5vixbtjymydi' );
define( 'LOGGED_IN_KEY',    '46zxxnodifi3w6xwzjhyyemv3jvrw88kx0zislk7pl0scrio2cvwatpdc6utyd35' );
define( 'NONCE_KEY',        'pxajmneg3n0ux10vrtom8srknyxjj0hshnziha5ba8tbdwrv3ewdyn2ptjinuirm' );
define( 'AUTH_SALT',        '2mufkjtjpg5hn2oayqdd0geikmhigsezvulze35chvquigyadbo1rykm4rauf3mc' );
define( 'SECURE_AUTH_SALT', 'ktw8g5jxmm2kdbqaigdcolhi1wqrdfno72b15tctwke3tcvvujt6bdqsftzlv5p1' );
define( 'LOGGED_IN_SALT',   'h8a3udgkg5yqnaagxlk7jch7ottdsojuip3aasqk6zcugkbz9l0b3x5uncncykbp' );
define( 'NONCE_SALT',       '9rm2hvy8w1fgl6cxaqeshwlnkfkjeg2wlvsoznxicfek879bovup0ox3pc90kdhs' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpa0_';
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
