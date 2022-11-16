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
define('AUTH_KEY',         'N+JPeyIYiwLXed9TMEduvLCJzdW4xfCupBhI3MnBhREJRxAWIeASDW+vk89YMCGEaOdSTk1lAnLSiaAfSkXQ+A==');
define('SECURE_AUTH_KEY',  'q1hWXhaDVp7xjeotAzf+oxYjU8e+OV/FGEKEM0FZ2QU694Wiyd35QtspNAbCw1h8KwtUfo2R+YCY1WwDckvNrw==');
define('LOGGED_IN_KEY',    'b7xGc32xidujLcodkKozHCcqxKEqWLICF8hadz4NKHRrOHqH4a884Zb5/JyVbNMApr4vC32YFjZaKaTLeLgUFw==');
define('NONCE_KEY',        '064rkfG0kVvHwcd+5otbWGgVHYlJkffffW42CtxEt069/mJE5x9+VAuPsmWKPS5S/Ias9mMjDTVqhIrl5upDew==');
define('AUTH_SALT',        'SJ54lis1Od4th7h9rjSf8K2/XxLG8EQkYgJw419xcNLVZ8xVuMctNe43t0IrFxlhwIPCYzKbq0MoNs1bEWsB7A==');
define('SECURE_AUTH_SALT', '7uXmuYX9sGjo9FsPgI/EIdCtXrk/9peCfk82WR4ArHkSG0JaXRGhpshK0L4UKFLX52AV2+55FhuskckrWeO30g==');
define('LOGGED_IN_SALT',   'q8iRdKPgAsf654G1lVubjZugsW6joD4PsEDfwBz06mKvCaL7t4kYo5enPVWtIpNvQLk67DmgWveHGxiuKU+gpw==');
define('NONCE_SALT',       'Agmj5HGGx1A5gOgWfTG50IUwAf0zOHTlWS4wGNOcwh/o+ShquwfAGvSU6NFGR7IO37X1P2ccn2sHxQT4ISIUYw==');

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
