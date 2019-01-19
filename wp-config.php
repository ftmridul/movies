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
define('DB_NAME', 'testmovies_db');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f^`}9^<KX^?2Y9~0J_&.rV[sr%}</`n.]{U{vBv{h<s5|.=!+[;I~fzbna[,>,uj');
define('SECURE_AUTH_KEY',  'DJ),6E@uQb+vQy*P?7YV&Nv%v@G{>#qSTl3l:iym]!rNTn@~1f|iY)&U+wt?#>S[');
define('LOGGED_IN_KEY',    'V&ksMO(N~`-:I9y#/)f4*9A4}vqwR;5?7,>0A907#Jk)&FA<V<>&2>AfnuiX0p^J');
define('NONCE_KEY',        '%0tS{@8bujER;3kP:$fw$Wmn3@TJZ$h_uxnQ9~O(S!I:UY}b?>gep)Y@R{[)Au;e');
define('AUTH_SALT',        'jN}C{#Z[<DZAS_q7m5w4K<Xwd}.SsFy[p}c:S]S[n`Z]5x!V*SbCf@|x4%_g7.fu');
define('SECURE_AUTH_SALT', 'jy!y:YO(yq.]8w`T[w7^LHvjup(P];-~q.g9=2JU7M&q|%X5S,&TN0Vx5<WkjGbD');
define('LOGGED_IN_SALT',   'vPF8j;SpA=NGs4a5#!nRv,hyQ[[}{G0OU&tp,wTSxS&2]xaqIJvHl/%1F&%}2NXg');
define('NONCE_SALT',       ' %G4JSL27Ll0nDx9d[(*e362]npscT+yPr U6(?FB/QxRwu;=i^`o)NJJelXSPGd');

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
