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
define('DB_NAME', 'new');

/** MySQL database username */
define('DB_USER', 'krishna');

/** MySQL database password */
define('DB_PASSWORD', 'krishna');

/** MySQL hostname */
define('DB_HOST', 'mysql-connect');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oingaeph3boveuzaidoh7caevotaiweiBaasiaPai1die8jie1phae1pah8chagh6');
define('SECURE_AUTH_KEY',  'iep1ieb0rei2ohchi0iekohth0SheihohFu8Joutoo9Dicog9hoophaog2Ahcheek');
define('LOGGED_IN_KEY',    'opee2eMeeb9oe6oshah1phoaReibaegh9chi0PieceeSeRuuQuahshooC6aef5aid');
define('NONCE_KEY',        'piezei0aehie9neGhaitu4caeraedashu4rahChiew4rolaingoh3dohvie3oqu2v');
define('AUTH_SALT',        'laeG4phee6oobei5oohie4ich5xaigap6eixeetiephukiesui0eeloozimei7iec');
define('SECURE_AUTH_SALT', 'shah2aighah7huviechah5eechaes8Ow1pephiK5ugheivie8seipeeXexaighuac');
define('LOGGED_IN_SALT',   'Voe7mei9aiC4soqu9Ahchai5quuz3eephooTao0SeiF0oz4aighu2sooruyohha8i');
define('NONCE_SALT',       'jaip0ieD5haireoqu8choowohDoP4ongooBer4oophoap6ouVaihah7tieha7aese');

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
