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
define('DB_NAME', 'wordpress_g3bilcoig1');

/** MySQL database username */
define('DB_USER', 'CsMZ4e6C7PQ39G8');

/** MySQL database password */
define('DB_PASSWORD', '7uUvVJ6Dkc1XdLSn');

/** MySQL hostname */
define('DB_HOST', 'voxeducom.ipagemysql.com');

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
define('AUTH_KEY', '!OxCyL{x_lhumbEJA&ZEX_NH)WW>izmKxT[HMm@>zeo^_q!ged(IzssPPak[*Mm}AEVcL*pj$VY@HgO|>b@Z)OPkvGqJcT[b-C?TR-{GMA(z>|=hwMnGXX^LvMD<XzJT');
define('SECURE_AUTH_KEY', 'K{+@[|j|bGuCiIn/ZsT<FI$;c/<Y{>(gLegCF{{RWi]PnzPYhby=>!U@yok+EvvUcqt=}Mty;zn]/>%>^qKHFO*j(WGTCupr|EsV+T=>uqC%FDIGxp{GP[[Sd-@XVViX');
define('LOGGED_IN_KEY', 'Y[n^pYcy(Sjs/jc!;+?][t{RwhPbAs/*SwNnZo/*?JKcgWSTHcHa>q%|&wkmi*{U-{@DnRt*<xiVJE/feSYxYhW|K=yhfQ[=hRV&TsMjR^(^?moHzVg&t?kMvUl{{$}X');
define('NONCE_KEY', 'hq_!PfZm_jwvTekcEavWDA<@qqg$Db?)a*]ydO^$?eUAsP$pxshA}EgjmENW(zgZb^Pha;;Y(nc^+VRP^p(rvFp?t$$noFxnNZkrZgJYHy^{wBjrDa%-A=BLMonQH;H@');
define('AUTH_SALT', 'IuGCgYCnRtbfi](Rsx|pirhv)vEM?%bbnKLf;(}FR-$};sr?C/z^H@t{uumkEU-R@BiaO;e}==y(TU-t[wvxP?R{@&aiCU)?gbs*r]{nfP)^UTK|<>)l>zMCPJfHZHHi');
define('SECURE_AUTH_SALT', 'e]EjUPSqX$XsY({eYOu@XS){pmgtN$Zo^bi-HfF-EtBHvCQ;aR?k^Lv=bEx{(rk-;e[SYE}K]|;Grc{lidK-_WM_aR+/>Q@ckXvmHFZ%Vhz|BmjGMHai<-[bUKBnN_m^');
define('LOGGED_IN_SALT', ']dORQY!qQ/SQRL}>$qEIumz<odh>N^Y)M!AMN}NuY**b!Jeop@&ija]|]cmY<;-Cu^(d;%TPEQbI>!!DhD=R[AWeF_ve|tOC?^O/(^B[>s!&sMHv%ZwOQop=t(*AUOSB');
define('NONCE_SALT', '*E!r(d{^MBfQc>]M{;)^}{d@M||{g<qjSlx;xtnnUDf@P&Ov{[|RDjFl/+Xx%YfJ>RVgbhu{+zLqHbjR){>Me^%_l|FZ<EOG$-|^AHr[-n[x;sUg/@e)pEeex|UD<HHZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rand_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
} */
