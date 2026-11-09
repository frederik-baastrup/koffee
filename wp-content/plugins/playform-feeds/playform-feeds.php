<?php
/**
 * Plugin Name: Playform Feeds
 * Description: Importerer produktfeeds fra Partner-ads, sorterer dem i sitets kategorier (Config.php) og holder priser, lager og prishistorik opdateret.
 * Version: 0.1.0
 * Requires PHP: 8.1
 * Requires Plugins: woocommerce
 * Text Domain: playform-feeds
 */

defined( 'ABSPATH' ) || exit;

// Bag SiteGrounds proxy kan PHP tro, at en HTTPS-forespørgsel er HTTP. Så sender WordPress den videre til den samme
// https-adresse igen og igen (ERR_TOO_MANY_REDIRECTS). Proxyens oplysning om protokollen bruges derfor, hvis den findes.
if ( empty( $_SERVER['HTTPS'] ) || 'off' === strtolower( (string) $_SERVER['HTTPS'] ) ) { // phpcs:ignore
	$pf_proto = strtolower( (string) ( $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '' ) ); // phpcs:ignore
	if ( 'https' === $pf_proto || 'on' === strtolower( (string) ( $_SERVER['HTTP_X_FORWARDED_SSL'] ?? '' ) ) || '443' === (string) ( $_SERVER['HTTP_X_FORWARDED_PORT'] ?? '' ) ) { // phpcs:ignore
		$_SERVER['HTTPS'] = 'on';
	}
}

define( 'PLAYFORM_FEEDS_VERSION', '0.3.0' );
define( 'PLAYFORM_FEEDS_DIR', __DIR__ );

// Midlertidig fejlsøgning af omdirigeringsløkke 9. nov. 2026 (fjernes igen). Kun ikke-hemmelige indstillinger.
if ( isset( $_GET['pf_diag'] ) && '7c41' === $_GET['pf_diag'] ) { // phpcs:ignore
	header( 'Content-Type: text/plain; charset=utf-8' );
	foreach ( [ 'HTTPS', 'SERVER_PORT', 'HTTP_X_FORWARDED_PROTO', 'HTTP_X_FORWARDED_SSL', 'HTTP_X_FORWARDED_PORT', 'REQUEST_SCHEME', 'HTTP_HOST' ] as $pf_k ) {
		echo esc_html( $pf_k ), ' = ', esc_html( var_export( $_SERVER[ $pf_k ] ?? null, true ) ), "\n"; // phpcs:ignore
	}
	echo 'is_ssl = ', is_ssl() ? 'ja' : 'nej', "\n", 'FORCE_SSL_ADMIN = ', defined( 'FORCE_SSL_ADMIN' ) && FORCE_SSL_ADMIN ? 'ja' : 'nej', "\n";
	foreach ( [ 'home', 'siteurl', 'template', 'stylesheet' ] as $pf_o ) {
		echo esc_html( $pf_o ), ' = ', esc_html( (string) get_option( $pf_o ) ), "\n";
	}
	echo 'plugins = ', esc_html( implode( ', ', (array) get_option( 'active_plugins' ) ) ), "\n";
	exit;
}

require_once __DIR__ . '/src/autoload.php';

register_activation_hook( __FILE__, [ \Playform\Feeds\Install::class, 'activate' ] );

add_action( 'plugins_loaded', [ \Playform\Feeds\Plugin::class, 'boot' ] );
