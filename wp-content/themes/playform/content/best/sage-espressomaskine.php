<?php
/**
 * Omskrevet fra det gamle koffee.dk (/sage-espressomaskine/, 2021). Ny tekst og nye produkter.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'sage-espressomaskine',
	'date'     => '2021-10-09 10:00:00',
	'keyword'  => 'Sage espressomaskine',
	'title'    => 'Sage espressomaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'Sage har en espressomaskine til både begynderen og nørden – fra den lille Bambino til den automatiske Oracle Jet. Her er vores bud på de 5 bedste Sage espressomaskiner, og hvordan du vælger mellem dem.',
	'more_cat' => 'sage-espressomaskine',
	'intro'    => <<<'HTML'
<p>Sage er blevet et af de mest populære mærker blandt danske hjemmebaristaer. Det skyldes især, at de har en model til hvert trin: små, hurtige maskiner uden kværn, maskiner med kværnen bygget ind og topmodeller, der klarer det meste af arbejdet for dig. Problemet er, at navnene ligner hinanden, og det kan være svært at se, hvad der egentlig adskiller dem.</p>
<p>Herunder er vores bud på de 5 bedste Sage espressomaskiner fra de butikker, vi samarbejder med – én fra hver vigtig del af serien. Nederst forklarer vi forskellen på Bambino, Barista og Oracle, så du hurtigt kan se, hvilken familie der passer til dig.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9312432030144',
			'price'   => 4499,
			'name'    => 'Sage The Barista Express BES875',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Sages klassiker med kværnen bygget ind – til espresso og cappuccino med friskmalede bønner hver dag.',
			'why'     => <<<'HTML'
<p>The Barista Express er den Sage, de fleste begynder med, og den er stadig et af de bedste bud på en alt-i-én maskine. Kværnen sidder i maskinen, så du går direkte fra hele bønner til espresso. Det handler om at bevare de naturlige olier og aromaer i bønnerne, og det gør du bedst ved at male lige før brygning.</p>
<p>Du doserer, tamper og starter selv shottet, så du lærer håndværket undervejs. Damplansen giver dig mulighed for at skumme mælk til cappuccino og latte. Er du i tvivl om, hvilken Sage du skal vælge, er det svært at gå galt i byen med denne.</p>
HTML,
			'good'    => [ 'Første Sage med kværn', 'Espresso og cappuccino', 'Dig, der vil lære håndværket' ],
			'less'    => [ 'Dig, der vil have kaffe på ét tryk' ],
		],
		[
			'ean'     => '9355973001631',
			'price'   => 2499,
			'name'    => 'Sage The Bambino SES450',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Lille og hurtig: ThermoJet-opvarmning gør maskinen klar til at brygge på 3 sekunder.',
			'why'     => <<<'HTML'
<p>The Bambino er den mindste og billigste Sage espressomaskine, og den passer til dig, der vil have rigtig espresso uden at fylde hele køkkenbordet. Den bruger Sages ThermoJet-opvarmning og er klar til at brygge på 3 sekunder. Du skal altså ikke vente på, at maskinen bliver varm, før morgenkoppen kan komme i gang.</p>
<p>Bambino har ingen indbygget kværn, så du skal bruge en separat kværn eller malet kaffe. Det giver dig til gengæld frihed til at vælge kværnen selv og opgradere den senere. Det er en fin begyndermaskine og et godt valg til et lille køkken.</p>
HTML,
			'good'    => [ 'Lille køkken', 'Lavt budget', 'Dig, der vil have kaffe hurtigt' ],
			'less'    => [ 'Dig, der ikke vil købe kværn ved siden af' ],
		],
		[
			'ean'     => '9355973007428',
			'price'   => 4000,
			'name'    => 'Sage The Bambino Plus SES500',
			'role'    => 'Lille med blød start',
			'reviews' => [],
			'verdict' => 'Kompakt Sage, der øger vandtrykket gradvist i starten af brygningen – som de store, kommercielle maskiner.',
			'why'     => <<<'HTML'
<p>The Bambino Plus er den større bror til Bambino og stadig enkel og kompakt. Den store forskel ligger i starten af brygningen: maskinen øger vandtrykket gradvist, ligesom de bedste kommercielle espressomaskiner.</p>
<p>Det lyder teknisk, men fordelen er let at forstå. Når kaffen fugtes blidt, før det fulde tryk sætter ind, trækker vandet mere jævnt igennem. Det giver en mere afbalanceret espresso og tilgiver lidt mere, hvis tampingen ikke var helt lige. Ligesom Bambino har den ingen kværn, så du skal bruge en ved siden af. Til gengæld kan du vælge en kværn, der passer til dit budget.</p>
HTML,
			'good'    => [ 'Lille køkken', 'Dig, der vil have en mere afbalanceret espresso', 'Begyndere, der vil lidt mere' ],
			'less'    => [ 'Dig, der ikke vil købe kværn ved siden af' ],
		],
		[
			'ean'     => '9312432030151',
			'price'   => 6690,
			'name'    => 'Sage The Barista Touch SES880',
			'role'    => 'Nemmest at bruge',
			'reviews' => [],
			'verdict' => 'Touch-skærm, indbygget kværn og automatisk mælkeskum – baristakaffe uden at skulle kunne det hele selv.',
			'why'     => <<<'HTML'
<p>The Barista Touch er til dig, der vil have kaffe i caféklasse, men ikke har lyst til at lære hver eneste detalje. Maskinen har en intuitiv touch-skærm, hvor du vælger din drik, en indbygget kværn og automatisk skumning af mælken.</p>
<p>Det betyder, at du får det bedste fra to verdener: friskmalede bønner og portafilter som på en rigtig espressomaskine, men med en skærm, der guider dig. Du kan stadig selv skrue på tingene, når du får mod på det. Den er et godt valg til en husstand, hvor flere skal kunne lave deres egen kaffe.</p>
HTML,
			'good'    => [ 'Familier og flere brugere', 'Cappuccino og latte', 'Dig, der vil have det nemt' ],
			'less'    => [ 'Puristen, der vil styre alt manuelt' ],
		],
		[
			'ean'     => '9355973120097',
			'price'   => 14999,
			'name'    => 'Sage The Oracle Jet',
			'role'    => 'Mest automatik',
			'reviews' => [],
			'verdict' => 'Sages bud på automatisk specialkaffe: præcisionsteknologi og hastighed, så alle i huset kan lave kaffe i høj klasse.',
			'why'     => <<<'HTML'
<p>Oracle Jet er Sages topmodel til dig, der vil have specialkaffe uden besvær. Maskinen er bygget til at flytte grænsen for automatik, ydeevne og hastighed, så specialkaffe bliver tilgængelig for alle i huset – ikke kun for den, der har øvet sig.</p>
<p>Den kombinerer præcisionsteknologi med avancerede funktioner, der tager sig af mange af de trin, du ellers selv skulle klare. Du får stadig portafilteret og følelsen af en rigtig espressomaskine, men med langt færre ting at holde styr på. Det er en investering, men også en maskine, der kan tage over fra caféturene.</p>
HTML,
			'good'    => [ 'Dig, der vil have specialkaffe uden besvær', 'Flere kaffedrikkere i huset', 'Dig, der drikker meget kaffe' ],
			'less'    => [ 'Lavt budget', 'Dig, der elsker selve håndværket' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige Sage espressomaskine</h2>
<h3>Bambino: lille og uden kværn</h3>
<p>Bambino-familien er Sages mindste maskiner. De varmer hurtigt op med ThermoJet og fylder ikke meget. Til gengæld har de ingen kværn, så du skal købe en ved siden af. Det er et godt valg, hvis du har lidt plads, eller hvis du allerede har en kværn. Se vores guide til <a href="/elektrisk-kaffekvaern/">elektriske kaffekværne</a>.</p>
<h3>Barista: kværnen bygget ind</h3>
<p>Barista-familien (Express, Pro, Touch og Impress-modellerne) har kværnen bygget ind. Du går fra bønne til kop i én maskine. Jo højere op i serien, jo mere hjælp får du: skærme, automatisk mælkeskum og hjælp til doseringen. Vil du sammenligne med andre mærker, så se vores guide til <a href="/espressomaskine-med-kvaern/">espressomaskiner med kværn</a>.</p>
<h3>Oracle: mest automatik</h3>
<p>Oracle-modellerne er toppen af Sages sortiment. De har kværn og portafilter som de andre, men automatiserer flere af de trin, der kræver øvelse. Det er maskinerne til dig, der vil have resultatet uden at skulle lære håndværket først.</p>
<h3>Sage eller noget andet?</h3>
<p>Sage er stærk på brugervenlighed og hjælp undervejs. Vil du hellere have en klassisk italiensk maskine, som du selv skal styre, så se vores guide til <a href="/semiautomatisk-espressomaskine/">semiautomatiske espressomaskiner</a>. Er du til det helt manuelle, så se <a href="/manuel-espressomaskine/">manuelle espressomaskiner</a>.</p>
<h3>Pas godt på maskinen</h3>
<p>Brug det vandfilter, der passer til din model, rens bryggegruppen og damplansen jævnligt, og afkalk, når maskinen beder om det. Du finder midler og tilbehør under <a href="/baristaudstyr/afkalkning/">afkalkning og rengøring</a>. En <a href="/kaffevaegt/">kaffevægt</a> og friske <a href="/kaffe/espressoboenner/">espressobønner</a> løfter kaffen på alle modellerne.</p>
<p>Se alle <a href="/espressomaskiner/sage-espressomaskine/">Sage espressomaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvilken Sage espressomaskine er bedst til begyndere?', 'The Bambino er den billigste vej ind, men kræver en separat kværn. The Barista Express er den mest oplagte alt-i-én maskine, fordi kværnen er bygget ind.' ],
		[ 'Hvad er forskellen på Barista Express og Barista Touch?', 'Begge har indbygget kværn. Barista Touch har derudover en touch-skærm og automatisk mælkeskum, så den er nemmere at bruge, men koster mere.' ],
		[ 'Er Sage og Breville det samme?', 'Ja, Sage er det navn, mærket Breville bruger i Europa. Maskinerne bygger på de samme modeller.' ],
		[ 'Skal jeg købe en kværn til min Sage?', 'Kun hvis du vælger en Bambino. Barista- og Oracle-modellerne har kværnen bygget ind.' ],
	],
];
