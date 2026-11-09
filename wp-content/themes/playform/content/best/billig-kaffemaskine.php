<?php
/**
 * Omskrevet fra det gamle koffee.dk (/billig-kaffemaskine/). Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'billig-kaffemaskine',
	'date'     => '2023-05-05 10:00:00',
	'keyword'  => 'billig kaffemaskine',
	'title'    => 'Billig kaffemaskine: Vores bud på de 5 bedste under 500 kr.',
	'excerpt'  => 'God filterkaffe kræver ikke en dyr maskine. Her er vores bud på de 5 bedste billige kaffemaskiner under 500 kr. fra de butikker, vi samarbejder med – med termokande, timer og plads til mange kopper.',
	'more_cat' => 'filterkaffemaskine',
	'intro'    => <<<'HTML'
<p>Smagen af din morgenkaffe afgøres mere af bønnerne, formalingen og en ren maskine end af prisskiltet. En enkel filterkaffemaskine brygger fint, så længe den gør det grundlæggende godt. Du betaler ekstra for design, displays og specielle bryggeprogrammer – ikke for selve kaffen.</p>
<p>Derfor har vi samlet vores bud på de 5 bedste billige kaffemaskiner fra de butikker, vi samarbejder med. Der er en model med termokande, en med timer, en med ekstra fokus på aromaen, en kompakt maskine til det lille køkken og et budgetvalg til mange kopper. Nederst får du råd til, hvordan du får mest smag ud af en billig maskine.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8710103673996',
			'price'   => 399,
			'name'    => 'Philips HD7462/20 Daily Collection',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kaffemaskine med Aroma Twister, der brygger fra 2 til 10 kopper – et sikkert hverdagsvalg i metal og sort.',
			'why'     => <<<'HTML'
<p>Philips HD7462/20 fra Daily Collection er vores bud på den bedste billige kaffemaskine, fordi den har fokus på det, der betyder noget: smagen. Aroma Twister-funktionen skal sikre en god smag i hver eneste kop, også når du brygger en hel kande.</p>
<p>Kapaciteten er 1,2 liter, og du kan brygge alt fra 2 til 10 kopper. Det gør den fleksibel: lidt til dig selv en hverdagsmorgen eller en fuld kande, når der kommer gæster til kage.</p>
<p>Finishen i metal og sort ser mere eksklusiv ud, end prisen antyder, så den kan sagtens stå fremme på køkkenbordet. Er du på udkig efter en enkel maskine, der bare skal levere, er den et godt sted at starte.</p>
HTML,
			'good'    => [ 'Hverdagskaffe til to-fire personer', 'Dig, der brygger forskellige mængder', 'Et pænt udtryk til en lav pris' ],
			'less'    => [ 'Dig, der vil holde kaffen varm i flere timer' ],
		],
		[
			'ean'     => '3045387294090',
			'price'   => 499,
			'name'    => 'OBH Nordica Pro Aroma',
			'role'    => 'Bedst med termokande',
			'reviews' => [],
			'verdict' => 'Billig kaffemaskine med termokande, der holder kaffen varm og aromatisk i op til fire timer.',
			'why'     => <<<'HTML'
<p>Det er sjældent at finde en termokande i den billige ende, men OBH Nordica Pro Aroma har en. Kanden holder kaffen varm og aromatisk i op til fire timer, så du slipper for en varmeplade, der langsomt gør kaffen bitter.</p>
<p>Det er den store fordel ved en termomodel: Du kan brygge morgenkaffen og stadig have en god kop klar til formiddagspausen. Kanden kan bæres med ind ved skrivebordet, ud på terrassen eller hen til spisebordet, når familien samles.</p>
<p>OBH Nordica er et velkendt mærke i danske køkkener, og Pro Aroma er et godt valg, hvis du arbejder hjemme eller drikker kaffen i løbet af dagen. Vil du se flere modeller, finder du dem under kaffemaskiner med termokande.</p>
HTML,
			'good'    => [ 'Hjemmearbejde', 'Kaffe, der skal holde sig i timevis', 'Dig, der vil undgå varmeplade' ],
			'less'    => [ 'Dig, der vil se, hvor meget kaffe der er tilbage' ],
		],
		[
			'ean'     => '7391091867287',
			'price'   => 341,
			'name'    => 'Champion KB400',
			'role'    => 'Bedst med timer',
			'reviews' => [],
			'verdict' => 'Kaffemaskine med timer og plads til 1,5 liter – fyld den om aftenen, og vågn til færdig kaffe.',
			'why'     => <<<'HTML'
<p>Champion KB400 er til dig, der gerne vil have kaffen klar, når vækkeuret ringer. Timeren lader dig fylde maskinen med vand og kaffe om aftenen og sætte et starttidspunkt. Når du kommer ud i køkkenet, dufter der allerede af friskbrygget kaffe.</p>
<p>Maskinen brygger op til 1,5 liter, hvilket svarer til cirka 12 kopper. Det er rigeligt til en hel familie eller en morgen med overnattende gæster.</p>
<p>Mange billige maskiner har ingen timer, så her får du en ekstra bekvemmelighed uden at betale for det. Husk at bruge friske bønner – kaffe, der har stået malet hele natten i filteret, mister lidt aroma, så mal den gerne lige før sengetid.</p>
HTML,
			'good'    => [ 'Travle morgener', 'Store familier', 'Dig, der vil have timer uden at betale ekstra' ],
			'less'    => [ 'Dig, der kun drikker en enkelt kop' ],
		],
		[
			'ean'     => '4006508218714',
			'price'   => 245,
			'name'    => 'Melitta Easy',
			'role'    => 'Bedst til små køkkener',
			'reviews' => [],
			'verdict' => 'Kompakt filterkaffemaskine til ti kopper med gennemsigtig vandbeholder og måleskala.',
			'why'     => <<<'HTML'
<p>Melitta Easy er filterkaffemaskinen til dig, der har lidt plads og ikke vil gå på kompromis med en hel kande. Designet er kompakt og smart, så den passer ind i et lille køkken, en studiebolig eller sommerhuset.</p>
<p>Den brygger ti kopper ad gangen. Vandbeholderen er gennemsigtig og har en måleskala, så du hurtigt kan se, hvor meget vand du har fyldt på. Det gør det nemt at ramme den samme styrke hver gang, når du doserer kaffen efter vandmængden.</p>
<p>Melitta er et af de mest kendte navne inden for filterkaffe, og Easy er mærkets bud på en pålidelig maskine uden dikkedarer. Den fås hos flere af vores butikker, så sammenlign prisen, før du køber.</p>
HTML,
			'good'    => [ 'Små køkkener og studieboliger', 'Sommerhuset', 'Dig, der vil have enkel betjening' ],
			'less'    => [ 'Dig, der vil have timer eller termokande' ],
		],
		[
			'ean'     => '5708642022965',
			'price'   => 229,
			'name'    => 'OBH Nordica Daybreak 2296',
			'role'    => 'Billigst til mange kopper',
			'reviews' => [],
			'verdict' => 'Enkel kaffemaskine til 1,5 liter med autosluk efter 40 minutter og antidryp-funktion.',
			'why'     => <<<'HTML'
<p>OBH Nordica Daybreak er det mest budgetvenlige valg på listen, men den har stadig plads til 1,5 liter – det svarer til 12 kopper. Den passer derfor godt, hvor der drikkes meget kaffe, men pengene er små, for eksempel i kolonihavehuset, på kontoret eller i fællesrummet.</p>
<p>Antidryp-funktionen gør, at du kan tage kanden ud og skænke en kop, før brygningen er færdig, uden at det drypper ned på varmepladen. Autosluk efter 40 minutter giver ro i maven, hvis du glemmer maskinen på vej ud ad døren.</p>
<p>Maskinen er en del af Daybreak-serien, så du kan matche den med elkedel og brødrister fra samme serie.</p>
HTML,
			'good'    => [ 'Mange kopper for få penge', 'Kontoret og fællesrummet', 'Dig, der vil have matchende køkkenapparater' ],
			'less'    => [ 'Dig, der vil have timer eller termokande' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan får du god kaffe fra en billig kaffemaskine</h2>
<p>En billig kaffemaskine kan sagtens brygge god kaffe. Det kræver bare, at du hjælper den lidt på vej. Her er det, der gør den største forskel. Se alle <a href="/kaffemaskiner/filterkaffemaskine/">filterkaffemaskiner</a> med aktuelle priser.</p>
<h3>Glaskande eller termokande</h3>
<p>De fleste billige maskiner har glaskande på en varmeplade. Det er fint, hvis kaffen drikkes inden for en halv times tid. Står kanden længere, bliver smagen flad og bitter. Drikker du kaffen over flere timer, så vælg en model med termokande, eller hæld kaffen over på en <a href="/bedste-termokande/">termokande</a>, så snart den er brygget.</p>
<h3>Timer, autosluk og drypstop</h3>
<p>En timer giver færdig kaffe, når du står op. Autosluk slukker varmepladen efter et stykke tid, så du ikke spilder strøm eller brænder kaffen på. Drypstop lader dig tage en kop midt i brygningen. Det er de tre funktioner, der gør mest for hverdagen – resten er pynt.</p>
<h3>Bønnerne betyder mest</h3>
<p>Det billigste løft af din kaffe er bedre bønner. Køb <a href="/kaffe/hele-kaffeboenner/">hele kaffebønner</a> fra en rister og mal dem lige før brygning. En <a href="/manuel-kaffekvaern/">manuel kaffekværn</a> er en billig måde at komme i gang på, og en <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a> er hurtigere til en hel kande. Brug nok kaffe – for lidt kaffe er den mest almindelige årsag til tynd filterkaffe.</p>
<h3>Hold maskinen ren</h3>
<p>Kalk og gamle kaffeolier sætter sig i alle kaffemaskiner og giver en kedelig smag. Afkalk jævnligt, og skyl kanden og filterholderen efter brug. Se <a href="/baristaudstyr/afkalkning/">afkalkning og rengøring</a> og <a href="/kaffebrygning/kaffefilter/">kaffefiltre</a>.</p>
<h3>Når du vil mere</h3>
<p>Har du lyst til at gå et skridt op, så se vores guide til den <a href="/bedste-kaffemaskine/">bedste kaffemaskine</a> eller til en <a href="/kaffemaskine-med-kvaern/">kaffemaskine med kværn</a>. Vil du hellere brygge i hånden, kan en <a href="/pour-over-kaffebrygger/">pour over-kaffebrygger</a> være et billigt alternativ med masser af smag.</p>
HTML,
	'faq'      => [
		[ 'Kan en billig kaffemaskine lave god kaffe?', 'Ja. Med friske bønner, den rigtige mængde kaffe og en ren maskine kan en billig filterkaffemaskine brygge rigtig god kaffe. Dyrere maskiner er typisk bedre til at holde en stabil temperatur og har flere funktioner.' ],
		[ 'Hvad er forskellen på en billig og en dyr kaffemaskine?', 'Dyrere maskiner har ofte mere præcis temperatur, kortere bryggetid, termokande, halv kande-funktion og bedre materialer. En billig maskine dækker det grundlæggende.' ],
		[ 'Hvor længe holder en billig kaffemaskine?', 'Det afhænger meget af, hvor godt du passer den. Regelmæssig afkalkning er det vigtigste, du kan gøre for at forlænge levetiden.' ],
		[ 'Skal jeg vælge en kaffemaskine med termokande?', 'Hvis kaffen skal holde sig i mere end en halv time, ja. Termokanden holder varmen uden at koge kaffen på en varmeplade, så smagen holder sig bedre.' ],
	],
];
