<?php
namespace Playform\Feeds;

/**
 * Al opsætning for nichen ét sted: sitets navn, shops, kategoritræ, sorteringsregler og filtre.
 * Koffee (kaffeudstyr). Samme kode som Kitzhen, Fitbase, Pizzalicious og Outdoorland; kun denne fil er særlig for nichen.
 */
final class Config {

	/** Sitets navn og kontaktoplysninger. Bruges af temaet (playform_site()) og importens tekster. */
	public static function site(): array {
		return [
			'name'     => 'Koffee',
			'domain'   => 'koffee.dk',
			'email'    => 'kontakt@koffee.dk',
			'niche'    => 'kaffeudstyr', // "Find kaffeudstyr fra …"
			'tagline'  => 'Kaffemaskiner, espressomaskiner, kværne og baristaudstyr fra de butikker, vi samarbejder med',
			'company'  => 'Mondae',
			'cvr'      => '37208329',
			'address'  => 'Rønnevej 19 B, kl., 5270 Odense N',
			'owner'    => 'Frederik Baastrup',
			'accent'   => '#754B21', // den brune kaffebønne fra logoet
		];
	}

	/** Varer, der ikke matcher en kaffekategori, kommer slet ikke med (køkkenbutikkerne har titusindvis af andre varer). */
	public static function skip_uncategorized(): bool {
		return true;
	}

	/**
	 * Partner-ads feeds (partnerid 14854). Køkkenbutikkerne er de samme som Kitzhens; kun kaffevarerne kommer med
	 * via reglerne nedenfor. Espresso Tools og Kai Berntsen er tilføjet 9. nov. 2026. Kan overstyres med option 'playform_shops'.
	 */
	public static function shops(): array {
		$base     = 'https://www.partner-ads.com/dk/feed_udlaes.php?partnerid=14854';
		$defaults = [
			'espressotools'      => [ 'name' => 'Espresso Tools', 'url' => "$base&bannerid=118105&feedid=4449" ],
			'kai-berntsen'       => [ 'name' => 'Kai Berntsen', 'url' => "$base&bannerid=66637&feedid=1348" ],
			'koege-kafferisteri' => [ 'name' => 'Køge Kafferisteri', 'url' => "$base&bannerid=79640&feedid=1878" ],
			'kitchenone'         => [ 'name' => 'KitchenOne.dk', 'url' => "$base&bannerid=79283&feedid=1862" ],
			'hvidevareshoppen'   => [ 'name' => 'HvidevareShoppen.dk', 'url' => "$base&bannerid=56457&feedid=1000" ],
			'barlife'            => [ 'name' => 'Barlife.dk', 'url' => "$base&bannerid=46609&feedid=651" ],
			'kitchen-gadget'     => [ 'name' => 'Kitchen Gadget', 'url' => "$base&bannerid=107557&feedid=3406" ],
			'kitchentech'        => [ 'name' => 'Kitchentech.dk', 'url' => "$base&bannerid=114562&feedid=4050" ],
			'kirlund'            => [ 'name' => 'Kirlund', 'url' => "$base&bannerid=116914&feedid=4306" ],
			'sumisu'             => [ 'name' => 'Sumisu', 'url' => "$base&bannerid=112338&feedid=3823" ],
			'gourmetshoppen'     => [ 'name' => 'Gourmetshoppen.com', 'url' => "$base&bannerid=80950&feedid=1925" ],
		];
		$custom = get_option( 'playform_shops' );
		return is_array( $custom ) && $custom ? $custom : $defaults;
	}

	/**
	 * Koffees kategorier. 'match' testes først mod produktnavnet, derefter mod butikkens kategori.
	 * Rækkefølgen betyder noget: den første kategori, der matcher, vinder (kopper før espressomaskiner, så
	 * "espressokop" ikke bliver en maskine; tilbehør før maskiner, så "portafilter til Sage" ikke bliver en maskine).
	 * Slugs må aldrig starte med "bedste-" – det er forbeholdt guides på roden (se permalinks.php).
	 */
	public static function categories(): array {
		$parts = 'reservedel|spare ?part|pakning|o-ring|låg til|glaskande til|kande til|beholder til|dryp ?bakke|holder til|knap til|slange til';
		return [
			'kopper-termo'    => [ 'name' => 'Kopper & termokander', 'match' => 'espressokop|espresso ?kop|kaffekop|kaffe ?kop|cappuccinokop|lattekop|latteglas|latte ?glas|cortadoglas|cortado ?glas|\bkrus\b|kaffekrus|termokrus|thermokrus|termokop|termokande|thermokande|termoflaske|termo ?flaske|to ?go ?krus|travel ?mug|espressoglas|shotglas til espresso|kop med underkop|underkop', 'not' => 'måleskop|målebæger|mælkekande|skummer|tekop|børnekop|vandflaske|tumbler|lowball|drikkeflaske|vandflaske|straw|børnekrus|\d+ ?kopper|kaffebrygger|stempelkande|chemex|tragt|maskine|øl|vin|ølkrus|snaps' ],
			'maelkeskummere'  => [ 'name' => 'Mælkeskummere', 'match' => 'mælkeskummer|maelkeskummer|mælke ?skummer|mælkeskum|milk ?frother|aeroccino|skumkande|mælkekande|mælke ?kande|milk ?pitcher|barista ?kande|steaming ?pitcher|cremio', 'not' => $parts . '|kapselmaskine|maskine' ],
			'baristaudstyr'   => [ 'name' => 'Baristaudstyr', 'match' => '\btamper|portafilter|stampermåtte|\bklude?\b.*barista|barista.*klud|bundløs|naked portafilter|knock ?box|knockbox|bankekasse|kaffevægt|kaffe ?vægt|espresso ?vægt|barista ?vægt|drip ?scale|kaffeskala|\bwdt\b|distribut(ør|or)|leveler|dosering|doseringsring|dosing ring|kaffedåse|kaffe ?dåse|kaffebeholder|kaffe ?beholder|kaffeskovl|kaffemål|afkalk|rensetablet|rengøringstablet|rensemiddel til (kaffe|espresso)|descal|cafiza|puly|blindfilter|filterkurv|si til portafilter|shower ?screen|puck ?screen|tamper ?måtte|tampemåtte|barista ?klud|gruppe ?børste|espressobørste|kaffebørste|vandfilter til (kaffe|espresso)|bwt', 'not' => 'salt|peber|vitamix|blender|fermentering' ],
			'espressomaskiner' => [ 'name' => 'Espressomaskiner', 'match' => 'espressomaskine|espresso ?maskine|espresso machine|espressobrygger|portafiltermaskine|fuldautomatisk|helautomatisk|bean ?to ?cup|barista (express|pro|touch|impress)|\boracle\b|dual boiler|\bbambino\b|\bdedica\b|magnifica|rivelia|eletta|la specialista|gaggia|rancilio|\blelit\b|rocket espresso|la pavoni|lattego|\bjura\b (e|j|z|s|ena|we|giga)|siemens eq|nanopresso|picopresso|minipresso', 'not' => $parts . '|afkalk|rens|tablet|filter|tamper|kurv|vægt|skummer|mælkekande|kop|krus|case' ],
			'kaffemaskiner'   => [ 'name' => 'Kaffemaskiner', 'match' => 'kaffemaskine|kaffe ?maskine|filterkaffemaskine|kaffebrygger(?! *(pour|v60|dripper))|moccamaster|coffee ?maker|kapselmaskine|nespresso|dolce gusto|tassimo|senseo', 'not' => $parts . '|afkalk|rens|tablet|filter til|kapsler|termokande til|vandfilter|kapselholder' ],
			'kaffekvaerne'    => [ 'name' => 'Kaffekværne', 'match' => 'kaffekværn|kaffe ?kværn|kaffemølle|kaffe ?mølle|espressokværn|coffee ?grinder|\bgrinder\b|\bkværn\b|comandante|timemore|1zpresso|baratza|eureka mignon|fellow ode|\bniche zero\b', 'not' => 'salt|peber|krydderi|ost|parmesan|muskat|kværnsæt til|' . $parts ],
			'kaffebrygning'   => [ 'name' => 'Kaffebrygning', 'match' => 'pour ?over|dripper|\bv60\b|chemex|aeropress|stempelkande|french ?press|presskande|mokkakande|mokkabrygger|espressokande|\bmoka\b|bialetti|cold ?brew|syphon|siphon|kalita|kaffefilter|filterholder|filterpapir|kaffetragt|kaffekande|kaffe ?kande|svanehals|gooseneck|elkedel|el-kedel|vandkoger|\bkedel\b|kaffe ?drypper|kaffebrygger', 'not' => $parts . '|tekande|te ?kande|maskine' ],
			'kaffe'           => [ 'name' => 'Kaffe', 'match' => 'kaffebønner|kaffe ?bønner|hele bønner|espressobønner|grønne kaffebønner|formalet kaffe|filtermalet|smagepakke|kaffeabonnement|koffeinfri kaffe|single origin|\b(espresso|kaffe)\b.*\b\d+ ?(g|gr|kg)\b|kaffekapsler|kaffe ?kapsler|\bkapsler\b|kaffepuder|instant ?kaffe|pulverkaffe|(^|> )kaffe( >|$)|smagepakker', 'not' => 'maskine|kværn|kande|krus|\bkop|dåse|beholder|filter|vægt|tamper|holder|kapselholder|skuffe|låg|case|brygger|presso\b|knock|klud|' . $parts ],
		];
	}

	/**
	 * Underkategorier = egne landingssider (lang hale), fx /espressomaskiner/fuldautomatisk-espressomaskine/.
	 * 'match' testes mod produktnavnet, 'desc' mod butikkens beskrivelse, 'not' udelukker ud fra navnet. Et produkt kan ligge i flere.
	 */
	public static function subcategories(): array {
		return [
			'kaffemaskiner' => [
				'filterkaffemaskine'         => [ 'name' => 'Filterkaffemaskine', 'match' => 'filterkaffe|moccamaster|kaffebrygger|kaffemaskine', 'not' => 'kværn|grind|kapsel|nespresso|dolce|tassimo|senseo|espresso' ],
				'kaffemaskine-med-kvaern'    => [ 'name' => 'Kaffemaskine med kværn', 'match' => 'kværn|grind|grinder|bønne', 'not' => 'espresso' ],
				'kaffemaskine-med-termokande' => [ 'name' => 'Kaffemaskine med termokande', 'match' => 'termo|thermo|stålkande', 'desc' => 'termokande|thermo' ],
				'moccamaster'                => [ 'name' => 'Moccamaster', 'match' => 'moccamaster' ],
				'kapselmaskine'              => [ 'name' => 'Kapselmaskine', 'match' => 'kapsel|nespresso|dolce gusto|tassimo|senseo|vertuo' ],
				'kaffemaskine-til-1-kop'     => [ 'name' => 'Kaffemaskine til 1 kop', 'match' => '1 kop|en kop|single ?serve|one ?cup|1-kops|personal', 'desc' => 'én kop|1 kop' ],
			],
			'espressomaskiner' => [
				'fuldautomatisk-espressomaskine' => [ 'name' => 'Fuldautomatisk espressomaskine', 'match' => 'fuldautomatisk|helautomatisk|automatisk espresso|bean ?to ?cup|magnifica|rivelia|eletta|dinamica|primadonna|\bjura\b|lattego|philips (ep|\d)|siemens eq|nivona|krups (evidence|arabica|intuition)|melitta (barista|caffeo|latticia|avanza|purista)|oracle' ],
				'semiautomatisk-espressomaskine' => [ 'name' => 'Semiautomatisk espressomaskine', 'match' => 'portafilter|semi ?automatisk|semiautomatisk|barista (express|pro|touch|impress)|bambino|dedica|gaggia classic|rancilio|\blelit\b|rocket|la specialista|dual boiler|infuser|\bsilvia\b|la marzocco|ascaso|bezzera|profitec|ecm\b', 'not' => 'fuldautomatisk|helautomatisk' ],
				'espressomaskine-med-kvaern'     => [ 'name' => 'Espressomaskine med kværn', 'match' => 'kværn|grinder|grind|barista (express|pro|touch|impress)|oracle|la specialista|fuldautomatisk|helautomatisk|magnifica|rivelia|eletta|\bjura\b|lattego' ],
				'manuel-espressomaskine'         => [ 'name' => 'Manuel espressomaskine', 'match' => 'manuel|lever|håndtag|la pavoni|\bflair\b|cafelat|\brobot\b|wacaco|picopresso|nanopresso|minipresso|staresso|håndholdt' ],
				'sage-espressomaskine'           => [ 'name' => 'Sage espressomaskine', 'match' => '^sage|\bsage\b' ],
				'delonghi-espressomaskine'       => [ 'name' => "De'Longhi espressomaskine", 'match' => "de'? ?longhi|delonghi|magnifica|dedica|eletta|rivelia|la specialista|dinamica|primadonna" ],
				'espressomaskine-med-maelkeskummer' => [ 'name' => 'Espressomaskine med mælkeskummer', 'match' => 'mælke|lattego|latte|cappuccino|damp ?lanse|steam', 'desc' => 'mælkeskum|damplanse|dampdyse' ],
			],
			'kaffekvaerne' => [
				'elektrisk-kaffekvaern' => [ 'name' => 'Elektrisk kaffekværn', 'match' => 'elektrisk|\d+ ?w\b|wilfa|baratza|eureka|fellow ode|\bsage\b|graef|bodum bistro|melitta|krups|de ?longhi|smeg|moccamaster|kitchenaid|niche|df64|bianca', 'not' => 'manuel|hånd' ],
				'manuel-kaffekvaern'    => [ 'name' => 'Manuel kaffekværn', 'match' => 'manuel|hånd|håndkværn|skerton|hario mini|hario slim|comandante|timemore|1zpresso|kinu|peugeot|zassenhaus|porlex' ],
				'espressokvaern'        => [ 'name' => 'Espressokværn', 'match' => 'espresso', 'desc' => 'espresso' ],
			],
			'kaffebrygning' => [
				'pour-over'       => [ 'name' => 'Pour over', 'match' => 'pour ?over|dripper|\bv60\b|chemex|kalita|filterholder|drypper|\bswitch\b|wave\b' ],
				'stempelkande'    => [ 'name' => 'Stempelkande', 'match' => 'stempelkande|french ?press|presskande|chambord' ],
				'espressokande'   => [ 'name' => 'Espressokande', 'match' => 'mokkakande|mokkabrygger|espressokande|\bmoka\b|bialetti|percolator|stovetop' ],
				'aeropress'       => [ 'name' => 'Aeropress', 'match' => 'aeropress' ],
				'cold-brew'       => [ 'name' => 'Cold brew', 'match' => 'cold ?brew|iskaffe' ],
				'kaffefilter'     => [ 'name' => 'Kaffefiltre', 'match' => 'filterpapir|kaffefilter|filtre\b|papirfilter|\bfilter\b', 'not' => 'holder|dripper|kande' ],
				'kedel-til-kaffe' => [ 'name' => 'Kedel til kaffe', 'match' => 'svanehals|gooseneck|pour ?over ?kedel|buono|stagg|drip kettle|kedel|elkedel|vandkoger' ],
				'kaffekande'      => [ 'name' => 'Kaffekande', 'match' => 'kaffekande|kaffe ?kande|server|kande\b', 'not' => 'stempel|espressokande|mokka|termo' ],
			],
			'maelkeskummere' => [
				'elektrisk-maelkeskummer' => [ 'name' => 'Elektrisk mælkeskummer', 'match' => 'elektrisk|aeroccino|\d+ ?w\b|induktion|cremio|automatisk', 'not' => 'kande|pitcher|batteri|manuel' ],
				'manuel-maelkeskummer'    => [ 'name' => 'Manuel mælkeskummer', 'match' => 'manuel|håndpumpe|pumpe|stempel|batteri|håndholdt|piskeris|stav', 'not' => 'elektrisk' ],
				'maelkekande'             => [ 'name' => 'Mælkekande', 'match' => 'kande|pitcher' ],
			],
			'kopper-termo' => [
				'espressokopper'   => [ 'name' => 'Espressokopper', 'match' => 'espresso|shot|cortado|ristretto|lungo|demitasse' ],
				'cappuccinokopper' => [ 'name' => 'Cappuccino- og lattekopper', 'match' => 'cappuccino|latte|flat white' ],
				'kaffekrus'        => [ 'name' => 'Kaffekrus', 'match' => '\bkrus\b|kaffekrus|\bmug\b|kaffekop|\bkop\b|kopper', 'not' => 'termo|thermo|to ?go|travel|espresso|cappuccino|latte' ],
				'termokande'       => [ 'name' => 'Termokande', 'match' => 'termokande|thermokande|kaffekande|vakuumkande', 'not' => 'krus' ],
				'termokrus'        => [ 'name' => 'Termokrus', 'match' => 'termokrus|thermokrus|to ?go|travel ?mug|termokop|thermo ?mug' ],
				'termoflaske'      => [ 'name' => 'Termoflaske', 'match' => 'termoflaske|termo ?flaske|thermo ?flask|vakuumflaske' ],
			],
			'baristaudstyr' => [
				'tamper'        => [ 'name' => 'Tamper', 'match' => 'tamper', 'not' => 'måtte|holder|station' ],
				'portafilter'   => [ 'name' => 'Portafilter', 'match' => 'portafilter|bundløs|naked', 'not' => 'kurv|si\b|børste' ],
				'kaffevaegt'    => [ 'name' => 'Kaffevægt', 'match' => 'vægt|scale' ],
				'knock-box'     => [ 'name' => 'Knock box', 'match' => 'knock ?box|knockbox|bankekasse' ],
				'afkalkning'    => [ 'name' => 'Afkalkning og rengøring', 'match' => 'afkalk|rens|tablet|descal|cafiza|puly|børste|blindfilter|rengøring' ],
				'kaffedaase'    => [ 'name' => 'Kaffedåse', 'match' => 'dåse|beholder|canister|vakuum|opbevaring' ],
				'wdt-og-dosering' => [ 'name' => 'WDT og dosering', 'match' => '\bwdt\b|distribut|leveler|dosering|dosing|puck ?screen|shower ?screen|filterkurv' ],
			],
			'kaffe' => [
				'hele-kaffeboenner'  => [ 'name' => 'Hele kaffebønner', 'match' => 'bønner|hele|beans|whole', 'not' => 'formalet|malet|kapsler|grønne' ],
				'espressoboenner'    => [ 'name' => 'Espressobønner', 'match' => 'espresso', 'not' => 'kapsler' ],
				'formalet-kaffe'     => [ 'name' => 'Formalet kaffe', 'match' => 'formalet|malet|filtermalet|ground' ],
				'koffeinfri-kaffe'   => [ 'name' => 'Koffeinfri kaffe', 'match' => 'koffeinfri|decaf' ],
				'kaffeabonnement'    => [ 'name' => 'Kaffeabonnement', 'match' => 'abonnement|subscription' ],
				'kaffekapsler'       => [ 'name' => 'Kaffekapsler', 'match' => 'kapsler|kapsel|pods|puder' ],
				'oekologisk-kaffe'   => [ 'name' => 'Økologisk kaffe', 'match' => 'økologisk|organic|øko\b' ],
			],
		];
	}

	/** Mærker, der kun laver kaffeudstyr: deres produkter uden et kategoriord i navnet lander her. */
	public static function brand_categories(): array {
		return [ 'espresso tools' => 'baristaudstyr', 'moccamaster' => 'kaffemaskiner', 'hario' => 'kaffebrygning', 'bialetti' => 'kaffebrygning' ];
	}

	/** Produkter, der aldrig skal med (navn eller butikkens kategori). */
	public static function exclude(): array {
		return [
			'gavekort|kaffeskole|kursus|workshop',
			'reservedel|spare ?part|replacement part',
			'\bguide\b|opskriftsbog|kogebog|\bbog\b|bøger',
			'salt ?(og|&) ?peber|saltkværn|peberkværn|krydderikværn|krydderimølle|muskatnød',
			'tekande|te ?kande|teæg|tebrygger|matcha|te ?si\b|tesi\b',
			'espresso ?martini|cocktail|shaker|vinglas|ølglas|moscow ?mule|tevarmer|doseringstragt|dosertragt|flaskeholder|låg til|coravin|vitamix|krydderiblanding|krydderi\b|vandflaske|drikkeflaske|mini shot|shot ?krus|skænkeprop|hældetud|\bpourer\b|doseringsmål|\bjigger\b|spiritus|whisky|gin ?glas',
			'gulvtæppe|\btæppe|plaid|forklæde|viskestykke|\bt-shirt\b|hættetrøje|kasket',
		];
	}

	/** Butikskategorier, hvor kun vores egne regler må afgøre placeringen (de siger intet om produktet). */
	public static function meaningless_shop_categories(): array {
		return [ 'brands', 'mærker', 'tilbud', 'udsalg', 'nyheder', 'gaveideer', 'gaver', 'alle produkter', 'køkken', 'køkkenudstyr', 'black friday', 'black month', 'sortiment', 'bundle', 'diverse', 'kaffe og the' ];
	}

	/**
	 * Maskinkategorier, hvor tilbehør (filtre, reservedele, låg …) i stedet skal til 'accessory_target'.
	 * Fitbase bruger det til løbebånd m.m.; Koffee bruger det ikke (reservedele er udelukket).
	 */
	public static function machine_categories(): array {
		return [];
	}

	public static function accessory_pattern(): string {
		return 'reservedel|filter til|kande til|skål til|knivblad til|tilbehør til';
	}

	public static function accessory_target(): string {
		return 'baristaudstyr';
	}

	/**
	 * Hvilke filteregenskaber Attributes skal udtrække fra teksten (se Attributes::extract()).
	 * Fitbase: foldable, incline, max_speed, max_weight, weight_kg. Koffee: ingen endnu.
	 */
	public static function attributes(): array {
		return [];
	}

	/** Prisintervaller i filtre og mega-menu: nøgle => [ label, min, max ]. */
	public static function price_bands(): array {
		return [
			'0-200'     => [ 'Under 200 kr', 0, 200 ],
			'200-500'   => [ '200–500 kr', 200, 500 ],
			'500-1500'  => [ '500–1.500 kr', 500, 1500 ],
			'1500-3000' => [ '1.500–3.000 kr', 1500, 3000 ],
			'3000-6000' => [ '3.000–6.000 kr', 3000, 6000 ],
			'6000-10000' => [ '6.000–10.000 kr', 6000, 10000 ],
			'10000-'    => [ 'Over 10.000 kr', 10000, PHP_INT_MAX ],
		];
	}

	public static function uncategorized_slug(): string {
		return 'ukategoriseret';
	}
}
