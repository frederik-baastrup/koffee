<?php
/**
 * Ny købsguide (15. nov. 2026). Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-termokrus',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'termokrus',
	'title'    => 'Termokrus: Vores bud på de 5 bedste',
	'excerpt'  => 'Et godt termokrus gør morgenkaffen til noget, du kan tage med – uden spild og uden lunken kaffe. Her er vores bud på de 5 bedste termokrus fra de butikker, vi samarbejder med, til bilen, toget, kontoret og gåturen.',
	'more_cat' => 'termokrus',
	'intro'    => <<<'HTML'
<p>Kaffen er sjældent bedre, end når den er nybrygget – og det er netop den, der går tabt, når du skal ud ad døren. Et termokrus holder på varmen, mens du kører, cykler eller sidder i toget, og et tæt låg betyder, at du kan putte kruset i tasken uden at frygte en brun overraskelse. Samtidig slipper du for engangskrusene fra kaffebaren.</p>
<p>Vi har samlet vores bud på de 5 bedste termokrus fra de butikker, vi samarbejder med: et kompakt to go-krus til pendleren, et prisvenligt stålkrus, der kan komme i opvaskemaskinen, et rummeligt krus til lange dage, et lille krus til dig, der brygger én kop ad gangen, og en solid model med lang garanti. Længere nede får du råd om låg, størrelse og rengøring.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5706631274180',
			'price'   => 179,
			'name'    => 'Eva Solo Urban To Go Cup 0,35 l',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kompakt to go-krus på 0,35 liter med kliklåg, formet til at passe i de fleste kopholdere.',
			'why'     => <<<'HTML'
<p>Eva Solos Urban To Go Cup rammer den balance, de fleste leder efter i et termokrus til hverdagen. Den rummer 0,35 liter – en god, stor kop kaffe – og er formet, så den passer i de fleste kopholdere. Det gør den til en oplagt makker i bilen, men den er også let at have med i tasken på vej til arbejde.</p>
<p>Låget lukkes med et klik, så du ikke skal skrue, når du sidder bag rattet eller står på perronen med hænderne fulde. Det sorte, rolige design passer ind på skrivebordet lige så godt som i cykelkurven, og modellen fås i flere farver, hvis sort ikke er dig.</p>
HTML,
			'good'    => [ 'Pendling i bil og tog', 'Dig, der vil åbne låget uden at skrue' ],
			'less'    => [ 'Dig, der vil have kaffe nok til hele arbejdsdagen' ],
		],
		[
			'ean'     => '4168430013703',
			'price'   => 140,
			'name'    => 'Tefal termokrus 0,36 l',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Prisvenligt termokrus i rustfrit stål, der er 100 % tæt og holder kaffen varm i op til 4 timer.',
			'why'     => <<<'HTML'
<p>Vil du have et termokrus, der bare gør sit arbejde, uden at betale ekstra for et designernavn, er Tefals termokrus på 0,36 liter et stærkt bud. Kruset er lavet af rustfrit stål med en manchet i silikone, så det er rart at holde om, og det er 100 % tæt. Kaffen holder sig varm i op til 4 timer, og kolde drikke holder sig kolde i op til 8 timer.</p>
<p>Låget betjenes med et tryk og kan skilles ad i to dele, så du kan komme til alle hjørner, når det skal gøres rent – og kruset tåler opvaskemaskine. Det passer til de typiske kopholdere i biler, og det fås i mange farver. Meget funktion for pengene.</p>
HTML,
			'good'    => [ 'Det mindre budget', 'Dig, der vil vaske op i maskine' ],
			'less'    => [ 'Dig, der skal have varm kaffe sidst på eftermiddagen' ],
		],
		[
			'ean'     => '1210001906631',
			'price'   => 279,
			'name'    => 'Stanley Transit Fliptop 0,47 l',
			'role'    => 'Bedst til lange dage',
			'reviews' => [],
			'verdict' => 'Rummeligt termokrus på 0,47 liter, som er 33 % lettere end traditionelle modeller i rustfrit stål.',
			'why'     => <<<'HTML'
<p>Drikker du mere end én kop, før du når frem, giver Stanley Transit Fliptop dig plads til det. Med 0,47 liter er der rigeligt til en stor filterkaffe eller en latte med ekstra mælk, og som navnet antyder, drikker du gennem et låg, der vippes op.</p>
<p>Stanley bruger det, mærket kalder AeroLight, og det gør kruset 33 % lettere end traditionelle modeller i rustfrit stål. Det er en fordel, når kruset skal bæres med fra morgen til aften – på pendlerturen, på rejsen og på kontoret. Kruset fås i flere farver.</p>
HTML,
			'good'    => [ 'Lange arbejdsdage', 'Rejser og pendling' ],
			'less'    => [ 'Dig, der kun drikker en lille kop ad gangen' ],
		],
		[
			'ean'     => '4977642222557',
			'price'   => 113,
			'name'    => 'Hario isoleret termokrus 300 ml',
			'role'    => 'Bedst til én kop',
			'reviews' => [],
			'verdict' => 'Enkelt, isoleret termokrus med låg på 300 ml fra det japanske kaffemærke Hario.',
			'why'     => <<<'HTML'
<p>Hario er et japansk mærke, som mange kaffeelskere kender fra deres udstyr til pour over, og termokruset har samme enkle og gennemtænkte linje. Det rummer 300 ml og har låg, så kaffen holder på varmen, mens du er på vej til kontoret eller ud at gå.</p>
<p>Den beskedne størrelse er faktisk en fordel, hvis du brygger én kop ad gangen. Et termokrus holder bedst på varmen, når det er fyldt, så et mindre krus passer godt til en enkelt kop fra <a href="/pour-over-kaffebrygger/">pour over-brygget</a> eller <a href="/espressokande/">espressokanden</a>. Samtidig er det det billigste krus i vores udvalg.</p>
HTML,
			'good'    => [ 'Dig, der brygger én kop ad gangen', 'Det lille budget' ],
			'less'    => [ 'Dig, der vil have en stor portion med' ],
		],
		[
			'ean'     => '5010576673961',
			'price'   => 212,
			'name'    => 'Thermos Travel Pro 0,4 l',
			'role'    => 'Med lang garanti',
			'reviews' => [],
			'verdict' => 'Termokrus i rustfrit stål med tætsluttende tryklåg og 10 års garanti på varme- og kølefunktionen.',
			'why'     => <<<'HTML'
<p>Thermos er for mange danskere selve ordet for en termoflaske, og Travel Pro er mærkets termokrus på 0,4 liter i rustfrit stål. Tryklåget slutter tæt, så indholdet bliver, hvor det skal, og stålet er hygiejnisk og nemt at holde rent.</p>
<p>Med kruset følger 10 års garanti på varme- og kølefunktionen – et godt valg, hvis du vil købe ét termokrus og bruge det i mange år. Vær dog opmærksom på, at det skal vaskes op i hånden og ikke kan komme i opvaskemaskinen.</p>
HTML,
			'good'    => [ 'Dig, der vil have lang garanti', 'Daglig brug år efter år' ],
			'less'    => [ 'Dig, der vil vaske op i maskine' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du det rigtige termokrus</h2>
<p>Det bedste termokrus er det, der passer til din hverdag. Tænk over, hvordan du kommer frem: I bilen er kopholderen afgørende, på cyklen og i tasken er et helt tæt låg vigtigst, og på kontoret betyder det mere, at kruset er rart at drikke af. Se alle <a href="/kopper-termo/termokrus/">termokrus</a> med aktuelle priser fra de butikker, vi samarbejder med.</p>
<h2>Låget gør forskellen</h2>
<p>Låget er den del af et termokrus, du bruger mest – og den del, der oftere end selve kruset giver anledning til irritation. Et kliklåg eller et tryklåg kan åbnes med én hånd, hvilket er rart i trafikken. Et skruelåg eller et låg, der beskrives som 100 % tæt, er det sikre valg, hvis kruset skal ligge ned i tasken. Kan låget skilles ad, er det lettere at holde rent, så der ikke sætter sig gamle kafferester i pakningerne.</p>
<h2>Størrelse og kopholder</h2>
<p>Et lille krus holder bedre på varmen, når det er fyldt, end et stort krus med en halv kop i bunden. Vælg derfor størrelse efter, hvor meget du faktisk drikker på vejen. Drikker du espressobaserede drikke, er et mindre krus nok, mens et større krus giver mening til filterkaffe eller latte. Kører du bil, så tjek, om kruset er formet til kopholdere – brede krus med hank passer sjældent.</p>
<h2>Sådan holder kaffen sig varm længst</h2>
<p>Skyl termokruset med kogende vand, mens kaffen brygger, og hæld vandet ud lige før kaffen kommer i. Så går kaffens varme ikke til at varme kruset op. Hold låget lukket mellem tårene, og fyld kruset så tæt på kanten, som låget tillader. Husk også, at kaffe i et termokrus ikke bliver bedre med tiden – den smager bedst inden for de første par timer.</p>
<h2>Termokrus eller termokande?</h2>
<p>Et termokrus er til dig og din egen kop på farten. Skal kaffen deles med flere, eller skal den holde til en hel dag på arbejde, er en termokande det bedre valg – se vores guide til den <a href="/bedste-termokande/">bedste termokande</a>. Til vand, te eller kolde drikke på tur kan en <a href="/kopper-termo/termoflaske/">termoflaske</a> også være et godt alternativ.</p>
HTML,
	'faq'      => [
		[ 'Hvor længe holder et termokrus kaffen varm?', 'Det afhænger af kruset og af, hvor ofte du åbner låget. Et termokrus er lavet til at holde kaffen varm på vejen og et stykke tid derefter, ikke til en hel arbejdsdag. Skal kaffen holde i mange timer, er en termokande bedre.' ],
		[ 'Kan et termokrus komme i opvaskemaskinen?', 'Nogle kan, andre ikke. Varmen i opvaskemaskinen kan skade isoleringen og pakningerne på de modeller, der ikke er lavet til det, så tjek altid produktsiden, før du sætter dit termokrus i maskinen.' ],
		[ 'Hvordan får man kaffesmag og lugt ud af et termokrus?', 'Fyld kruset med varmt vand og lidt natron eller et rensemiddel til kaffeudstyr, lad det stå et stykke tid, og skyl grundigt. Skil låget ad, hvis det kan, for det er ofte pakningen, der gemmer på den gamle smag.' ],
		[ 'Kan man have kolde drikke i et termokrus?', 'Ja. Isoleringen virker begge veje, så et termokrus holder også iskaffe og kolde drikke kolde. Mange termokrus holder faktisk længere på kulden end på varmen.' ],
		[ 'Hvilken størrelse termokrus skal jeg vælge?', 'Vælg efter, hvor meget du drikker på vejen. Til en enkelt kop sort kaffe er et mindre termokrus nok, mens et større krus passer til latte, store kopper filterkaffe og lange dage. Kruset holder bedst på varmen, når det er fyldt.' ],
	],
];
