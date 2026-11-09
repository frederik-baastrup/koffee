<?php
/**
 * Omskrevet fra det gamle koffee.dk (/bedste-kaffemaskine/). Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-kaffemaskine',
	'date'     => '2021-10-05 10:00:00',
	'keyword'  => 'kaffemaskine',
	'title'    => 'Kaffemaskine: Vores bud på de 5 bedste filterkaffemaskiner',
	'excerpt'  => 'Den rigtige kaffemaskine giver dig god filterkaffe hver morgen uden besvær. Her er vores bud på de 5 bedste kaffemaskiner fra de butikker, vi samarbejder med – fra klassikeren til termomodellen og budgetvalget.',
	'more_cat' => 'kaffemaskiner',
	'intro'    => <<<'HTML'
<p>Filterkaffe er stadig danskernes hverdagskaffe. Men to kaffemaskiner kan give vidt forskellig kaffe med de samme bønner. Det handler om, hvor varmt vandet er, hvor jævnt det rammer kaffen, og hvad der sker med kanden bagefter. En maskine, der brygger for koldt eller for langsomt, giver tynd eller bitter kaffe – hver eneste dag.</p>
<p>Her er vores bud på de 5 bedste kaffemaskiner fra de butikker, vi samarbejder med. Der er en klassiker til dig, der vil have den bedste filterkaffe, en model med termokande, et retrovalg, en maskine, der også kan lave cold brew, og et stærkt valg til et mindre budget. Nederst kan du læse, hvad du skal kigge efter, før du vælger.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8712072536111',
			'price'   => 2699,
			'name'    => 'Moccamaster Optio',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Håndlavet filterkaffemaskine, der brygger en hel kande på cirka 6 minutter ved 92–96 °C – og også kan brygge en halv kande med samme omhu.',
			'why'     => <<<'HTML'
<p>Moccamaster Optio er topmodellen fra det hollandske mærke, der har håndlavet kaffemaskiner siden 1968. Den brygger ved 92–96 °C, og en fuld kande på 1,25 liter er klar på omkring seks minutter. Det er netop den kombination af varme og tempo, der giver en kop med fylde uden bitterhed.</p>
<p>Det særlige ved Optio er knappen til en halv kande. Brygger du kun til dig selv, tilpasser maskinen bryggeprocessen og varmepladens temperatur til den mindre vandmængde. Så smager tre kopper lige så godt som ti.</p>
<p>Drypstoppet er automatisk, når du tager kanden ud, og maskinen slukker selv efter 40 minutter. Du får den hos flere af vores butikker, så det kan betale sig at sammenligne prisen.</p>
HTML,
			'good'    => [ 'Dig, der vil have den bedste filterkaffe', 'Husstande, der brygger både lidt og meget', 'En maskine, der skal holde i mange år' ],
			'less'    => [ 'Dig, der vil holde kaffen varm i timevis uden varmeplade' ],
		],
		[
			'ean'     => '7044876022783',
			'price'   => 2299,
			'name'    => 'Wilfa CM9B-T125 Termokaffemaskine',
			'role'    => 'Bedst med termokande',
			'reviews' => [],
			'verdict' => 'Stilren termobrygger til 10 kopper, hvor den dobbeltvæggede kande holder kaffen varm i op til 3,5 timer.',
			'why'     => <<<'HTML'
<p>Drikker du kaffen over flere timer, er en termokande vejen frem. Wilfa CM9B-T125 brygger 1,25 liter, svarende til 10 kopper, direkte ned i en dobbeltvægget termokande. Den holder kaffen varm i op til 3,5 timer – uden en varmeplade, der langsomt koger smagen ud af kaffen.</p>
<p>Det gør den oplagt til morgener, hvor resten af familien står op i forskudt tempo, eller til hjemmearbejdsdagen, hvor du vil have kaffe klar ved skrivebordet. Kanden kan du bære med ind i stuen eller ud på terrassen.</p>
<p>Designet er stilrent i mat sort, så maskinen passer ind i de fleste køkkener og ikke råber op på køkkenbordet.</p>
HTML,
			'good'    => [ 'Kaffe, der skal holde sig varm længe', 'Hjemmearbejde og weekendmorgener', 'Dig, der vil bære kanden med rundt' ],
			'less'    => [ 'Dig, der vil se kaffen i en glaskande' ],
		],
		[
			'ean'     => '9312432030106',
			'price'   => 2009,
			'name'    => 'Sage Precision Brewer SDC400',
			'role'    => 'Mest alsidig',
			'reviews' => [],
			'verdict' => 'Kaffemaskine, hvor du vælger mellem hurtig brygning, kaffe af Gold Cup-kvalitet og koldbrygget kaffe.',
			'why'     => <<<'HTML'
<p>Sage Precision Brewer er til dig, der ikke kun vil have én slags kaffe. Du vælger selv, om maskinen skal brygge hurtigt, gå efter Gold Cup-kvalitet eller lave koldbrygget kaffe. Det giver dig en hverdagskande om morgenen og cold brew til iskaffen om sommeren fra samme maskine.</p>
<p>Gold Cup er en anerkendt standard for, hvordan filterkaffe bør brygges, så smagen bliver afbalanceret. Har du købt gode bønner fra en lokal rister, får du med den indstilling mere ud af dem.</p>
<p>Den passer godt til dig, der kan lide at eksperimentere, og som gerne vil prøve kræfter med kaffe på andre måder end den klassiske kande. Er du mest til den samme kop hver dag, kan du nøjes med en enklere model.</p>
HTML,
			'good'    => [ 'Dig, der vil eksperimentere med smagen', 'Cold brew og iskaffe om sommeren', 'Gode bønner fra en lokal rister' ],
			'less'    => [ 'Dig, der bare vil trykke på én knap' ],
		],
		[
			'ean'     => '8017709280512',
			'price'   => 1395,
			'name'    => 'Smeg DCF02 Retro kaffemaskine',
			'role'    => 'Bedst til designet',
			'reviews' => [],
			'verdict' => 'Kaffemaskine i 50’er-stil med timer, LED-display med ur, plads til 10 kopper og genanvendeligt filter.',
			'why'     => <<<'HTML'
<p>Smeg DCF02 er kaffemaskinen til dig, der vil have noget smukt stående på køkkenbordet. Retrodesignet i 50’er-stil er lige så meget et møbel som et apparat, og den sorte udgave passer ind, også i et moderne køkken.</p>
<p>Under overfladen er der rigeligt med praktiske funktioner. Med timeren og autostart vågner du til en færdig kande. LED-displayet viser uret, og en vandstandsindikator hjælper dig med at ramme den rigtige mængde. Den brygger op til 10 kopper.</p>
<p>Filteret er genanvendeligt, så du sparer papirfiltre. Anti-dryp-funktionen gør, at du kan snuppe en kop midt i brygningen, og maskinen slukker selv efter 40 minutter. Skridsikre fødder holder den på plads.</p>
HTML,
			'good'    => [ 'Køkkener, hvor design betyder noget', 'Dig, der vil vågne til færdig kaffe', 'Dig, der vil spare papirfiltre' ],
			'less'    => [ 'Dig, der vil have mest mulig maskine for pengene' ],
		],
		[
			'ean'     => '4006508215270',
			'price'   => 649,
			'name'    => 'Melitta Excellent 4.0',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Klassisk kaffemaskine i retrodesign med manuelt drypstop og en kande med niveaumarkeringer – til et lille budget.',
			'why'     => <<<'HTML'
<p>Melitta Excellent har i mange år været et sikkert valg til hverdagskaffen, og version 4.0 bygger videre på den opskrift. Du får en kaffemaskine i retrodesign med en kapacitet på 1,25 liter – nok til hele familien eller en stor termokop til turen.</p>
<p>Kanden har niveaumarkeringer, så du let kan se, hvor meget vand du skal hælde i. Det er en lille detalje, der gør det nemmere at ramme den samme styrke hver dag. Drypstoppet er manuelt, så du kan stoppe brygningen og tage en kop, før kanden er fuld.</p>
<p>Betjeningen er enkel, og der er ingen menuer at fare vild i. Den passer til dig, der vil have god filterkaffe uden at betale for funktioner, du aldrig bruger.</p>
HTML,
			'good'    => [ 'Det lille budget', 'Første kaffemaskine', 'Dig, der vil have enkel betjening' ],
			'less'    => [ 'Dig, der vil have timer eller termokande' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige kaffemaskine</h2>
<p>Næsten alle kaffemaskiner kan brygge en kande kaffe. Forskellen ligger i detaljerne: temperaturen, hvor jævnt vandet fordeles, og hvordan kaffen holdes varm bagefter. Start med at tænke over, hvor meget kaffe I drikker, og hvor længe kanden står fremme. Se alle <a href="/kaffemaskiner/">kaffemaskiner</a> med aktuelle priser.</p>
<h3>Temperatur og bryggetid</h3>
<p>Filterkaffe smager bedst, når vandet rammer kaffen ved omkring 92–96 grader, og en hel kande er brygget på nogle få minutter. Er vandet for koldt, bliver kaffen tynd og sur. Trækker brygningen for længe, bliver den bitter. Kig efter maskiner, der nævner bryggetemperatur eller en certificering fra et kaffeinstitut – det er et godt tegn på, at producenten har tænkt over smagen.</p>
<h3>Glaskande eller termokande?</h3>
<p>En glaskande på varmeplade er klassisk, og du kan se, hvor meget der er tilbage. Men varmepladen fortsætter med at varme kaffen, og efter en halv time begynder smagen at blive flad. En termokande holder kaffen varm uden varme nedefra, så den smager friskere længere. Drikker I kaffen over flere timer, er en <a href="/kaffemaskiner/kaffemaskine-med-termokande/">kaffemaskine med termokande</a> det bedste valg. Har du allerede en glaskande, kan du hælde kaffen over på en god <a href="/bedste-termokande/">termokande</a>.</p>
<h3>Størrelse og halv kande</h3>
<p>De fleste maskiner brygger 8–12 kopper. Bor du alene eller drikker I kun et par kopper, så kig efter en funktion til en halv kande – den justerer brygningen, så en lille mængde ikke løber for hurtigt igennem. Til én kop ad gangen findes der også <a href="/kaffemaskiner/kaffemaskine-til-1-kop/">kaffemaskiner til 1 kop</a>.</p>
<h3>Friskmalet giver mere smag</h3>
<p>Kaffe mister aroma hurtigt, når den er malet. Køb <a href="/kaffe/hele-kaffeboenner/">hele kaffebønner</a> og mal dem lige før brygning med en <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a> eller en <a href="/manuel-kaffekvaern/">manuel kaffekværn</a>. Vil du have det hele i én maskine, så se vores guide til <a href="/kaffemaskine-med-kvaern/">kaffemaskine med kværn</a>. Et godt udgangspunkt er omkring 60 gram kaffe pr. liter vand – en <a href="/kaffevaegt/">kaffevægt</a> gør det nemt at ramme hver gang.</p>
<h3>Afkalkning og rengøring</h3>
<p>Kalk i maskinen sænker temperaturen og forlænger bryggetiden, og så smager kaffen dårligere. Afkalk jævnligt – oftere, hvis du bor i et område med hårdt vand – og skyl kanden og filterholderen efter brug. Se <a href="/baristaudstyr/afkalkning/">afkalkning og rengøring</a>.</p>
<h3>Andre måder at brygge på</h3>
<p>Er du til en mere håndholdt kop, så se vores guide til <a href="/pour-over-kaffebrygger/">pour over-kaffebrygger</a>. Drømmer du om espresso og cappuccino, så start med <a href="/espressomaskine-med-kvaern/">espressomaskine med kværn</a>. Og er du i tvivl om, hvor meget kaffe der er godt for dig, kan du læse <a href="/er-kaffe-sundt/">er kaffe sundt?</a></p>
HTML,
	'faq'      => [
		[ 'Hvilken kaffemaskine giver den bedste kaffe?', 'En maskine, der brygger ved den rigtige temperatur og ikke bruger for lang tid på en kande. Moccamaster og maskiner med certificeret bryggeteknik er kendt for det. Bønnerne og formalingen betyder dog lige så meget som maskinen.' ],
		[ 'Er en termokande bedre end en glaskande?', 'Hvis kaffen skal stå længe, ja. En varmeplade fortsætter med at varme kaffen, så smagen bliver flad. En termokande holder varmen uden at koge kaffen.' ],
		[ 'Hvor ofte skal man afkalke en kaffemaskine?', 'Det afhænger af, hvor hårdt vandet er, og hvor meget du brygger. Mange afkalker hver eller hver anden måned. Følg producentens anvisning, og afkalk med det samme, hvis maskinen begynder at brygge langsommere.' ],
		[ 'Hvor meget kaffe skal man bruge til en kande?', 'Et godt udgangspunkt er omkring 60 gram kaffe pr. liter vand. Juster derefter efter smag. Vil du vide mere om, hvad du drikker, så læs om, hvor meget koffein der er i en kop kaffe.' ],
	],
];
