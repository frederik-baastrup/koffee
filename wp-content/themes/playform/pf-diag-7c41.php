<?php
// Midlertidig fejlsøgning af omdirigeringsløkke (fjernes igen). Viser kun ikke-hemmelige indstillinger.
header( 'Content-Type: text/plain; charset=utf-8' );
foreach ( [ 'HTTPS', 'SERVER_PORT', 'HTTP_X_FORWARDED_PROTO', 'HTTP_X_FORWARDED_SSL', 'HTTP_X_FORWARDED_PORT', 'REQUEST_SCHEME', 'HTTP_HOST' ] as $k ) {
	echo $k, ' = ', var_export( $_SERVER[ $k ] ?? null, true ), "\n";
}
define( 'SHORTINIT', true );
require dirname( __DIR__, 3 ) . '/wp-load.php';
echo 'FORCE_SSL_ADMIN = ', var_export( defined( 'FORCE_SSL_ADMIN' ) ? FORCE_SSL_ADMIN : null, true ), "\n";
foreach ( [ 'home', 'siteurl', 'template', 'stylesheet', 'permalink_structure', 'playform_launched' ] as $o ) {
	echo $o, ' = ', var_export( get_option( $o ), true ), "\n";
}
echo 'active_plugins = ', implode( ', ', (array) get_option( 'active_plugins' ) ), "\n";
