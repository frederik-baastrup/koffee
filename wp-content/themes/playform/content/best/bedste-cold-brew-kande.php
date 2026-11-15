<?php
/**
 * Ny købsguide (15. nov. 2026). Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-cold-brew-kande',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'cold brew-kande',
	'title'    => 'Cold brew-kande: Vores bud på de 5 bedste',
	'excerpt'  => 'Med en cold brew-kande trækker kaffen langsomt i koldt vand og bliver blød, rund og klar til køleskabet. Her er vores bud på de 5 bedste cold brew-kander og -bryggere fra de butikker, vi samarbejder med.',
	'more_cat' => 'cold-brew',
	'intro'    => <<<'HTML'
<p>Cold brew er kaffe, der aldrig har mødt kogende vand. Groft malede bønner trækker i koldt vand i mange timer, og resultatet er en kaffe med mere sødme og langt mindre bitterhed end almindelig iskaffe. Det smarte er, at arbejdet sker af sig selv: Du sætter kanden i køleskabet om aftenen og har kold kaffe klar næste morgen – og typisk til flere dage.</p>
<p>Her er vores bud på de 5 bedste cold brew-kander og bryggere fra de butikker, vi samarbejder med. Der er en enkel japansk klassiker, en elegant flaske, en rummelig kande til hele familien, en elektrisk løsning og en dråbebrygger til dig, der vil helt i dybden. Nederst finder du råd om bønner, formaling og bryggetid.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4977642143449',
			'price'   => 139,
			'name'    => 'Hario Mizudashi Cold Brew kaffekande',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Enkel og prisvenlig cold brew-kande fra Hario, hvor kaffen trækker i koldt vand i 8–12 timer.',
			'why'     => <<<'HTML'
<p>Mizudashi betyder koldbrygning på japansk, og navnet siger det hele: Det her er en kande, der kun er lavet til én ting. Du kommer groftmalet kaffe i, hælder koldt vand på og lader den stå. Efter 8–12 timer er smagen trukket ud af bønnerne, og du har en blød, rund kaffe, der næsten har noter af chokolade.</p>
<p>Det er netop enkelheden, der gør den til vores samlede favorit. Der er ingen dele, der skal samles, ingen strøm og intet besvær – og prisen gør det let at prøve cold brew af uden at investere stort. Den fås desuden i flere farver.</p>
HTML,
			'good'    => [ 'Dig, der vil i gang med cold brew', 'Kold kaffe til hverdag' ],
			'less'    => [ 'Store selskaber' ],
		],
		[
			'ean'     => '4977642033443',
			'price'   => 199,
			'name'    => 'Hario Cold Brew kaffeflaske med filter',
			'role'    => 'Den elegante flaske',
			'reviews' => [],
			'verdict' => 'Smuk kaffeflaske med indbygget filter, hvor bønnerne trækker i koldt vand i flere timer eller natten over.',
			'why'     => <<<'HTML'
<p>Hvis kanden også skal se godt ud, når den står på bordet, er Harios kaffeflaske et oplagt valg. Den slanke flaskeform giver et mere elegant udtryk end en klassisk kande, og filteret sidder inde i flasken, så du ikke skal bruge en separat si eller filterpose.</p>
<p>Fremgangsmåden er lige så enkel som i Mizudashi-kanden: kaffe i filteret, koldt vand på, og lad bønnerne trække i flere timer eller natten over. Bagefter kan du servere direkte fra flasken. Den fås i flere farver, så du kan vælge den, der passer bedst til dit køkken.</p>
HTML,
			'good'    => [ 'Dig, der vil servere direkte fra flasken', 'Et pænt køkken- og spisebord' ],
			'less'    => [ 'Dig, der vil brygge store mængder ad gangen' ],
		],
		[
			'ean'     => '0699965330088',
			'price'   => 250,
			'name'    => 'Bodum BEAN Iskaffebrygger 1,5 l',
			'role'    => 'Til store portioner',
			'reviews' => [],
			'verdict' => 'Rummelig iskaffebrygger på 1,5 liter med ekstra låg, der er nem at gøre ren.',
			'why'     => <<<'HTML'
<p>Drikker flere i husstanden kold kaffe, eller vil du gerne have en god portion klar til hele weekenden, er Bodums BEAN-brygger værd at se nærmere på. Den rummer 1,5 liter, så du kan brygge en stor portion ad gangen og stadig have plads til at fortynde med vand eller mælk.</p>
<p>Med følger et ekstra låg, og bryggeren er nem at rengøre – et punkt, der betyder mere, end man tror, når kanden bruges flere gange om ugen. Den sorte farve giver et roligt og enkelt udtryk på bordet.</p>
HTML,
			'good'    => [ 'Familier og storforbrugere', 'Dig, der brygger til flere dage ad gangen' ],
			'less'    => [ 'Den lille køleskabsdør' ],
		],
		[
			'ean'     => '0810102261816',
			'price'   => 799,
			'name'    => 'Instant Cold Brew kaffemaskine',
			'role'    => 'Den elektriske',
			'reviews' => [],
			'verdict' => 'Elektrisk cold brew-maskine, der både laver koldbrygget kaffe og iste.',
			'why'     => <<<'HTML'
<p>Instant har lavet en egentlig maskine til koldbrygning i stedet for en kande, der skal stå og passe sig selv. Det er valget til dig, der godt kan lide cold brew, men hellere vil have et apparat på køkkenbordet end en kande, der skal stå og trække.</p>
<p>Maskinen kan både lave koldbrygget kaffe og iste, så den kan bruges til mere end kaffe hele sommeren. Som apparat skal den have en plads med strøm i nærheden, så tænk over, hvor den skal stå, før du vælger den frem for en enkel kande.</p>
HTML,
			'good'    => [ 'Dig, der vil have en maskine frem for en kande', 'Både kaffe og iste' ],
			'less'    => [ 'Det lille køkkenbord', 'Dig, der vil holde det helt enkelt' ],
		],
		[
			'ean'     => '4977642730601',
			'price'   => 2719,
			'name'    => 'Hario Vanddripper Clear koldbryg 2–6 kopper',
			'role'    => 'Luksusvalget',
			'reviews' => [],
			'verdict' => 'Dråbebrygger til 2–6 kopper med justerbar dryphane og integreret metalfilter – til både kaffe og te.',
			'why'     => <<<'HTML'
<p>Hario Vanddripper Clear er for dig, der vil gå et skridt videre end den klassiske cold brew-kande. I stedet for at bønnerne ligger i vand, drypper koldt vand langsomt gennem kaffen, dråbe for dråbe. Metoden kaldes ofte cold drip, og den giver en silkeblød og klar kaffe med mange nuancer.</p>
<p>Med den justerbare dryphane bestemmer du selv, hvor hurtigt vandet løber, og det integrerede metalfilter betyder, at du ikke skal bruge papirfiltre. Den laver 2–6 kopper og kan også bruges til te. Den gennemsigtige konstruktion gør bryggeprocessen til et lille skue på køkkenbordet – og prisen afspejler, at det er udstyr til den dedikerede kaffeentusiast.</p>
HTML,
			'good'    => [ 'Kaffenørden, der vil eksperimentere', 'Cold drip-kaffe og te' ],
			'less'    => [ 'Det stramme budget' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige cold brew-kande</h2>
<p>Den bedste cold brew-kande er den, der passer til, hvor meget du drikker, og hvor meget besvær du gider. Til de fleste er en enkel kande med filterindsats nok: Den er billig, fylder lidt og kræver kun, at du husker at sætte den i køleskabet. Drikker I meget kold kaffe, giver en større kande mening, så du ikke skal brygge hver dag. Vil du nørde mere, kan en dråbebrygger eller en elektrisk løsning være pengene værd. Se alle <a href="/kaffebrygning/cold-brew/">cold brew-bryggere</a> med aktuelle priser.</p>
<h3>Filter og rengøring</h3>
<p>Kig på, hvordan filteret er lavet. Et fint filter giver en klarere kaffe med mindre bundfald, og et filter, der kan tages helt ud, er nemmere at skylle. Kaffegrums sætter sig let i hjørner, så en kande med få dele er den, du får brugt.</p>
<h3>Plads i køleskabet</h3>
<p>Cold brew trækker i mange timer, og det sker bedst i køleskabet. Tænk derfor over højde og form. En slank kande eller flaske kan stå i køleskabsdøren, mens en stor kande kræver en hylde.</p>
<h2>Bønner og formaling til cold brew</h2>
<p>Cold brew trækker længe, så kaffen skal males groft – omtrent som groft havsalt. Er den for fin, bliver kaffen grumset og kan smage overekstraheret. Har du en kværn, kan du justere formalingen selv; se vores guides til <a href="/manuel-kaffekvaern/">manuel kaffekværn</a> og <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a>. Mellem- og mørkristede bønner giver de klassiske noter af chokolade og nød, mens lyse bønner giver en mere frugtig cold brew. Se <a href="/kaffe/hele-kaffeboenner/">hele kaffebønner</a>.</p>
<h2>Sådan brygger du cold brew i en kande</h2>
<p>Fyld den grove kaffe i filteret, hæld koldt vand langsomt over, så alle bønner bliver våde, og sæt kanden i køleskabet. Lad den trække i 8–24 timer – jo længere tid, jo kraftigere smag. Tag filteret op, når kaffen smager, som du vil have den, så den ikke trækker videre. Brygger du stærkt, har du et koncentrat, som kan fortyndes med vand, mælk eller isterninger.</p>
<p>Holdbarheden er en af de store fordele: Cold brew i en lukket kande kan typisk holde sig nogle dage i køleskabet, men den smager friskest de første par dage.</p>
<h2>Cold brew, iskaffe eller noget helt tredje?</h2>
<p>Cold brew er ikke det samme som iskaffe. Iskaffe brygges som regel varmt og køles derefter ned over is, mens cold brew aldrig bliver varmet op. Det giver to forskellige smagsprofiler, og mange kan lide begge dele. Kan du bedre lide den friske, syrlige smag fra varm brygning, er en <a href="/pour-over-kaffebrygger/">pour over-kaffebrygger</a> værd at se på. Skal den kolde kaffe med ud af huset, kan en <a href="/bedste-termokande/">termokande</a> også holde den kold.</p>
HTML,
	'faq'      => [
		[ 'Hvor længe skal cold brew trække?', 'Typisk 8–24 timer i køleskabet. Kortere tid giver en mild kaffe, længere tid en kraftigere smag. Mange cold brew-kander er lavet til at stå natten over.' ],
		[ 'Hvilken kaffe er bedst i en cold brew-kande?', 'Groftmalet kaffe giver det bedste resultat. Mellem- og mørkristede bønner giver noter af chokolade og nød, mens lyse bønner giver en mere frugtig cold brew.' ],
		[ 'Hvor længe kan cold brew holde sig?', 'I en lukket kande i køleskabet kan cold brew typisk holde sig nogle dage, men den smager friskest de første par dage. Tag filteret med kaffen op, når bryggetiden er slut.' ],
		[ 'Kan man lave te i en cold brew-kande?', 'Ja, mange bruger kanden til koldbrygget te også. Skyl filteret godt mellem kaffe og te, så smagene ikke blander sig.' ],
		[ 'Er cold brew mindre syrlig end almindelig kaffe?', 'Koldt vand trækker færre af de syrlige og bitre stoffer ud af bønnerne, så de fleste oplever cold brew som blødere og mindre syrlig end varm kaffe.' ],
	],
];
