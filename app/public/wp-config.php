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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'xLGwjWCRHVULV0QjudMQ1Jr8lGvMg4Pz9q98B09yGoTL3fd0dt7jlDagsKUk2Lfg6YVtf+PnlB54OREDFOw3PQ==');
define('SECURE_AUTH_KEY',  'B27bq3FYJQ9ye+QZnZ5nwonGh2tY6z2XBfZZ7T3sJe53JHft54688Kn0goW/ck6VV2OcRs81e8TFrqmcreialA==');
define('LOGGED_IN_KEY',    'iTuxV+WIERkFcBYhCxJAU5UfANOT1LOcfasRO049E5NiqqejCtfvEojfrEep5bUKwq1bSoXZzn7AzVEQDzGT8A==');
define('NONCE_KEY',        '5f5xB2dq5D8ExLUofq6DqABalsu5h6pl/z1BfN7V8aSWKpx5EaiRqHEqkXKUAGp2Sb6CfeLolXtG3FB5ka0EbQ==');
define('AUTH_SALT',        'MZNV2HihKtdARoNxWDVyc5WmUBKO4J2ggmszqSgnfCVUsgwsJ6d4AO44p1Qq7EZl/ob8mSagzFz2BXI7av7ANw==');
define('SECURE_AUTH_SALT', 'y2AJeSzLmNuUnCj7AKFCfyW0/mP43eeZbzjQkKVRRRebb2XgtxywNHqmvHYY/386QA651sKgwjp659l0mSJ9vQ==');
define('LOGGED_IN_SALT',   '0UaBjgDaTF4uiKcfndEtApyJeWcc73JQ+DaJsrwNvyTmqILeO3BOP+TbiZzNgQHR7QJIbsv7FFX2CyVngh7WUg==');
define('NONCE_SALT',       '+QPLEyr6VVdNZThN7yKvbEKzuXMP5+Jq0zhZhAPQNQxYFrTVwzN8utyYhIIBPNWSWNW5EMgMs1GoCUdKUnglMQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
