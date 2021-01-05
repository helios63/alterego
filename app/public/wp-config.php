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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '08okKYVSR/J5pCHLMnccVLqtMXH7GsJbqgAuzdkRFXVBcauVVeTtm36VSZ5v3MDFG8Tv0OIihT8CBmkkAzw1+A==');
define('SECURE_AUTH_KEY',  'e0ggQEqvKoNz1QhQHP/g5I2ayt49VzkwOOLkVUVLCVKP0oE2mT47ol/rV3HRc5ggJ43UWgwgxyMBaZIvbuddPw==');
define('LOGGED_IN_KEY',    'iFb07b1tp/S1WcDKoFBP+rNYZCwJIV2s29v80sKWPKlu80TczeJOhNZsJhNx4tezhUibmi685i2TfBz3astfAg==');
define('NONCE_KEY',        'v5+o5hP6DrlkzDm7X713378zcm1OkdwmkrO4vfGSQ7tE7i0hBkuNLYlmKwqgy6d4QZ7KeJ8DXYsVSEYqGEszOg==');
define('AUTH_SALT',        'NFhOPAjYjewmN5um9A21V8/KgPwZ4gd5eUO8C3zl28xkoER01pL+fd+B9a/DjUMPrT97mfUnEctAlDLzHfkIyQ==');
define('SECURE_AUTH_SALT', 'QXCoSYq7vJMB76Ou3M//Vy/kfA7Eaikm/lZ3TDHdM6OLaImcUeNNz3m/lL835KryO4T3jdc82jk3IKe0AUZ4Xg==');
define('LOGGED_IN_SALT',   'ep+r8HBmkuWHGUu+5yAb8+7EjUgxeWAvO4NqTtT/CYJNpKJcUq3s0BBi6jDXcjvA9pR5WXlMnf5EW5z7OXNDmw==');
define('NONCE_SALT',       'MagYBMgvOg46+VdfQJWgHyu/91uMsH4djT0cMcT9Azch7axmNuGHtR7yG27udOUNYE33EPUrtziOK1w8e6AWkQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
