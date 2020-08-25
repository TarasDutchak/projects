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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fireart_studio_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



define( 'S3_UPLOADS_BUCKET', 'fireartstudio' );
define( 'S3_UPLOADS_KEY', 'AKIAJKC6JNGOUI7C2H2A' );
define( 'S3_UPLOADS_SECRET', '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' );
define( 'S3_UPLOADS_REGION', 'eu-central-1' ); // the s3 bucket region (excluding the rest of the URL)

// Define the base bucket URL (without trailing slash)
define( 'S3_UPLOADS_BUCKET_URL', 'https://fireartstudio.s3-accelerate.amazonaws.com' );

define( 'S3_UPLOADS_HTTP_EXPIRES', gmdate( 'D, d M Y H:i:s', time() + (10 * 365 * 24 * 60 * 60) ) .' GMT' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4y4ve8904RosGq59ZHn45H3I(Fr@4fauV@7e7#MF0a#&QLkHM!#7H2qRF)*zpiM8I');
define('SECURE_AUTH_KEY',  '1JcazXR9D0yh%5UIIb%9LRzR%ngExGkVs@VxBLf)kWbOunzY%ZGf4ZdYiP)cAavQ');
define('LOGGED_IN_KEY',    'otgLt@g53Ecz#Z7AwQsNySTIG(SHJP#YFM7f*dimBBupOUM6yw)x7XVznrp!LKuh');
define('NONCE_KEY',        'HZ3esF6(FpMCiDDs@%WkeLSV5HlOa2XXOiF^(apwYmlOs5AChSJ3dUqk^f8rW)X*');
define('AUTH_SALT',        '*l(hoO&0Q*x9G^Yd72swEV7b1z1a5fGsYhmvQtYWhx#wImHIJR&jkFmBa1D)#CJv');
define('SECURE_AUTH_SALT', '(Lx!yU7X)Pg#qKHEeF2MRHP4hO0@5)bCXPhK3tveAAazvtbUkwUfK9r*1^qPOKvc');
define('LOGGED_IN_SALT',   'OL2t&orRQFRrVBb&7P2&(AWZ7CPHEDM!ZLaTaw01UKczW3@B80Vrmox0EF0BJKTv');
define('NONCE_SALT',       ')DJv@DYzDgxHzFB3ecWyJy36^6dC@b9*yO((5^p4bA5#5@v5ILfq!(t@&vMpPWIv');

define('ALLOW_UNFILTERED_UPLOADS', true);
define('WPCF7_AUTOP', false );
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
