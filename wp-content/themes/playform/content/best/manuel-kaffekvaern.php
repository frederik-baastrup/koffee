<?php
/**
 * Omskrevet fra det gamle koffee.dk (/manuel-kaffekvaern/, 2021). Ny tekst og nye produkter.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'manuel-kaffekvaern',
	'date'     => '2021-10-07 10:00:00',
	'keyword'  => 'manuel kaffekværn',
	'title'    => 'Manuel kaffekværn: Vores bud på de 5 bedste håndkværne',
	'excerpt'  => 'En håndkværn giver dig friskmalet kaffe helt uden strøm og støj – i køkkenet, i sommerhuset og på tur. Her er vores bud på de 5 bedste manuelle kaffekværne fra de butikker, vi samarbejder med.',
	'more_cat' => 'manuel-kaffekvaern',
	'intro'    => <<<'HTML'
<p>Der er noget særligt ved at dreje sine egne bønner. Duften fylder køkkenet, der er ingen motor, der larmer, mens resten af huset sover, og du har styr på hvert trin fra bønne til kop. En manuel kaffekværn er samtidig det billigste sted at få en kværn, der maler jævnt – og den kan komme med overalt.</p>
<p>Prisforskellen mellem håndkværne er stor, og det mærkes mest på, hvor fint og ensartet de maler. Herunder er vores bud på de 5 bedste manuelle kaffekværne fra de butikker, vi samarbejder med, fra den enkle startmodel til håndkværnen, kaffefolk drømmer om. Nederst kan du læse, hvad du skal kigge efter.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4260113435663',
			'price'   => 1494,
			'name'    => 'Comandante C40 MK4',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Tysk præcisionskværn, der maler til espresso, filter og stempelkande – med glasbeholder og låg til den malede kaffe.',
			'why'     => <<<'HTML'
<p>Comandante C40 MK4 er håndkværnen til dig, der vil have det bedste resultat og gerne drejer selv for at få det. Den kan indstilles hele vejen fra den fine maling til espresso over filterkaffe til den grove til stempelkande. En kværn, der dækker det hele, er sjælden blandt håndkværne.</p>
<p>Den malede kaffe falder ned i en glasbeholder med låg, og låget holder aromaen inde, til vandet er klar.</p>
<p>Comandante er et tysk mærke, der har specialiseret sig i håndkværne. Den koster mere end de andre her, men den er bygget til at holde i mange år.</p>
HTML,
			'good'    => [ 'Dig, der vil have fin og jævn maling', 'Både espresso og filter', 'Kaffe på tur uden at gå ned i kvalitet' ],
			'less'    => [ 'Dig, der skal male til mange kopper hver dag' ],
		],
		[
			'ean'     => '4977642708358',
			'price'   => 250,
			'name'    => 'Hario Skerton',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Klassisk japansk håndkværn med keramisk kværnværk, der skiftes fra groft til fint efter bryggemetoden.',
			'why'     => <<<'HTML'
<p>Hario Skerton er for mange det første skridt væk fra færdigmalet kaffe. Den maler med et keramisk kværnværk, og du bestemmer selv, hvor fint kaffen skal være: groft til cold brew og stempelkande, finere til filter og pour over.</p>
<p>Hario er det japanske mærke bag V60-tragten, så kværnen passer naturligt ind, hvis du er i gang med pour over.</p>
<p>Den er billig, enkel og nem at gå til. Skerton sælges af flere af de butikker, vi samarbejder med, så du kan vælge den laveste pris.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Pour over og stempelkande', 'Dig, der er ny med hele bønner' ],
			'less'    => [ 'Dig, der skal male fint til espresso hver dag' ],
		],
		[
			'ean'     => '719812001807',
			'price'   => 670,
			'name'    => 'Oxo Brew manuel kaffekværn',
			'role'    => 'Bedst på farten',
			'reviews' => [],
			'verdict' => 'Håndkværn bygget til at følge med – til sommerhuset, kontoret og turen.',
			'why'     => <<<'HTML'
<p>Oxo Brew manuel kaffekværn er lavet til dig, der ikke vil undvære friskmalet kaffe, når du er væk hjemmefra. Den er tænkt til sommerhuset, kontoret og rygsækken, og den kræver hverken stikkontakt eller batteri.</p>
<p>Oxo er kendt for køkkenredskaber, der er nemme at holde på og bruge, og den tankegang går igen her. Kværnen er bygget til præcis maling, så du kan ramme den grovhed, din bryggemetode kræver, også når du er på farten.</p>
<p>Tag den med på næste tur sammen med en tragt eller en kedel til <a href="/baalkaffe/">bålkaffe</a>, og du får en kop, der smager som hjemme – eller bedre.</p>
HTML,
			'good'    => [ 'Sommerhus og camping', 'Kontoret', 'Dig, der vil have god kaffe overalt' ],
			'less'    => [ 'Dig, der mest vil have kværnen som pynt i køkkenet' ],
		],
		[
			'ean'     => '4006528040012',
			'price'   => 979,
			'name'    => 'Zassenhaus Brasilia',
			'role'    => 'Bedst design',
			'reviews' => [],
			'verdict' => 'Klassisk kaffemølle i mørkbejdset bøg fra en af de mest kendte kværnproducenter.',
			'why'     => <<<'HTML'
<p>Zassenhaus Brasilia er kaffemøllen, der får lov at stå fremme. Den er lavet i mørkbejdset bøg i den klassiske stil, mange kender fra deres bedsteforældres køkken, og den giver køkkenbordet et varmt, gammeldags præg.</p>
<p>Zassenhaus er et tysk mærke og regnes blandt de førende producenter af kværne. Møllen er ikke kun pynt: du maler dine bønner friske, lige før du brygger, og får hele aromaen med i koppen.</p>
<p>Den er et godt valg til dig, der laver filterkaffe eller stempelkande i ro og mag og sætter pris på ting, der er smukke at bruge. Den er også en oplagt gave til kaffeelskeren.</p>
HTML,
			'good'    => [ 'Klassisk køkken', 'Gaven til kaffeelskeren', 'Rolige weekendmorgener' ],
			'less'    => [ 'Rejser og tur', 'Dig, der vil male hurtigt' ],
		],
		[
			'ean'     => '5039179001728',
			'price'   => 350,
			'name'    => 'Aerolatte manuel kaffekværn',
			'role'    => 'Nem med forindstillinger',
			'reviews' => [],
			'verdict' => 'Håndkværn med faste indstillinger til de almindelige bryggemetoder, så du ikke skal gætte dig frem.',
			'why'     => <<<'HTML'
<p>Aerolatte manuel kaffekværn er til dig, der gerne vil male selv, men ikke vil bruge tid på at finde den rigtige grovhed. Den har forudindstillinger til de mest almindelige bryggemetoder, så du vælger bare, hvad du skal lave.</p>
<p>Skal det være espresso, almindelig brygget kaffe eller stempelkande, drejer du til det trin, og så er du i gang. Det fjerner den største usikkerhed for begyndere, som tit maler for groft eller for fint i starten.</p>
<p>Den er enkel og billig, og den er et godt valg, hvis du skal have en ekstra kværn til sommerhuset eller vil prøve, om en håndkværn er noget for dig.</p>
HTML,
			'good'    => [ 'Begyndere', 'Dig, der skifter mellem flere bryggemetoder', 'Ekstra kværn til sommerhuset' ],
			'less'    => [ 'Dig, der vil finjustere i små trin' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en manuel kaffekværn</h2>
<p>En god håndkværn maler bønnerne mellem to skiver i en fast afstand, så kornene bliver lige store. Det er det vigtigste for smagen. Resten handler om, hvad du brygger, hvor meget du maler, og om kværnen skal med på tur. Se alle <a href="/kaffekvaerne/manuel-kaffekvaern/">manuelle kaffekværne</a> med aktuelle priser.</p>
<h3>Keramik eller stål?</h3>
<p>Kværnværket i en håndkværn er typisk af keramik eller stål. Keramik er hårdt og holder skarpheden længe, og det er almindeligt i de billigere kværne. Stål findes i mange af de dyrere modeller og kan skæres meget præcist, så maling bliver jævn – også helt ned til espresso.</p>
<h3>Kan den male til espresso?</h3>
<p>Mange håndkværne er bedst til filter, pour over og stempelkande. Espresso kræver en meget fin maling og små justeringstrin. Vil du lave espresso, så vælg en kværn, der tydeligt kan det, eller kig efter en <a href="/manuel-espressomaskine/">manuel espressomaskine</a> og en kværn, der passer til den. Til <a href="/espressokande/">espressokanden</a> på komfuret skal kaffen være fin, men ikke så fin som til espresso.</p>
<h3>Hvor meget skal du male?</h3>
<p>En håndkværn er god til en eller to kopper, men det tager tid at male til en hel kande. Laver du kaffe til hele familien hver morgen, er en <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a> et bedre valg. Kig også på, hvor meget beholderen til den malede kaffe kan rumme.</p>
<h3>Til hjemmet eller på tur?</h3>
<p>En slank kværn i metal er let at pakke og tåler at ligge i rygsækken. En klassisk kaffemølle i træ er smuk på køkkenbordet, men hører hjemme der. Tænk over, hvor du mest skal bruge den.</p>
<h3>Vedligehold</h3>
<p>Børst kværnværket og beholderen fri for kaffestøv med jævne mellemrum, og hold kværnen tør. Skil den kun ad, som producenten beskriver, så indstillingen ikke forskubbes.</p>
<p>Brygger du med tragt, så se vores guide til <a href="/pour-over-kaffebrygger/">pour over kaffebryggere</a> og vej kaffen med en <a href="/kaffevaegt/">kaffevægt</a>. Find også <a href="/kaffe/hele-kaffeboenner/">hele kaffebønner</a> at male.</p>
HTML,
	'faq'      => [
		[ 'Er en manuel kaffekværn bedre end en elektrisk?', 'Ikke nødvendigvis, men for pengene får du ofte en mere jævn maling i en god håndkværn end i en billig elektrisk. Til gengæld tager den længere tid, og den er mindre egnet til store mængder.' ],
		[ 'Hvor lang tid tager det at male kaffe i hånden?', 'Det afhænger af kværnen, mængden og hvor fint du maler. Groft til stempelkande går hurtigere end fint til espresso. Til en enkelt kop er det typisk et lille minuts arbejde.' ],
		[ 'Hvordan indstiller jeg grovheden?', 'De fleste håndkværne har et hjul eller en møtrik, du drejer på. Start i midten, bryg en kop og juster: bitter smag betyder for fint, sur eller tynd smag betyder for groft.' ],
		[ 'Kan man vaske en håndkværn?', 'Kværnværket skal helst holdes tørt, så børst det rent. Beholdere i glas eller plast kan ofte skylles, men tjek producentens anvisning først.' ],
	],
];
