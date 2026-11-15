<?php
/**
 * Ny købsguide (15. nov. 2026). Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-moccamaster',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'Moccamaster',
	'title'    => 'Moccamaster: Vores bud på de 5 bedste',
	'excerpt'  => 'Hvilken Moccamaster skal du vælge? Her er vores bud på de 5 bedste Moccamaster-modeller fra de butikker, vi samarbejder med – fra klassikeren med glaskande til termomodellen, enkeltkoppen og den dobbelte til kontoret.',
	'more_cat' => 'moccamaster',
	'intro'    => <<<'HTML'
<p>Moccamaster er blevet næsten synonym med god filterkaffe. Maskinerne har et kantet, nøgternt design og gør én ting: brygger en kande kaffe hurtigt og jævnt. Men modellerne er ikke ens. Nogle har glaskande og varmeplade, andre brygger direkte ned i en termokande, og der findes både en udgave til en enkelt kop og en dobbelt maskine til arbejdspladsen.</p>
<p>Her er vores bud på de 5 bedste Moccamaster-modeller fra de butikker, vi samarbejder med. Vi har valgt én af hver slags, så du kan finde den Moccamaster, der passer til din hverdag. Nederst gennemgår vi forskellene, og hvad du bør overveje, før du køber.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8712072537408',
			'price'   => 1899,
			'name'    => 'Moccamaster Automatic, sort',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Den klassiske Moccamaster med glaskande: 1,25 liter, svarende til 10 kopper, på 6 minutter – med drypstop og autosluk.',
			'why'     => <<<'HTML'
<p>Automatic er den Moccamaster, de fleste har i tankerne, når de tænker på mærket. Den brygger en fuld kande på 1,25 liter – omkring 10 kopper – på 6 minutter. Det er hurtigt nok til morgenstress og stort nok til, at der også er kaffe til gæsterne, når nogen kigger forbi.</p>
<p>Drypstoppet lukker for filteret, når du tager kanden ud, så du kan skænke den første kop, før bryggningen er færdig. Autosluk slukker maskinen af sig selv, så du ikke skal tænke på varmepladen, når du går. Den sorte udgave fås hos flere af vores butikker, og modellen findes også i andre farver.</p>
HTML,
			'good'    => [ 'Familien, der drikker en kande om dagen', 'Dig, der vil have en enkel og robust maskine' ],
			'less'    => [ 'Dig, der tit kun brygger et par kopper' ],
		],
		[
			'ean'     => '8712072536135',
			'price'   => 2299,
			'name'    => 'Moccamaster Optio, sølv',
			'role'    => 'Mest fleksibel',
			'reviews' => [],
			'verdict' => 'Topmodellen med glaskande, der kan brygge både en hel og en halv kande – 1,25 liter på 6 minutter.',
			'why'     => <<<'HTML'
<p>Optio ligner Automatic, men har én vigtig ekstra funktion: Du kan vælge at brygge en halv kande. Maskinen tilpasser selv bryggningen til den mindre mængde vand, så kaffen ikke bliver tynd eller overudtrukket, bare fordi du kun skal bruge et par kopper. En hel kande på 1,25 liter er klar på 6 minutter.</p>
<p>Den har automatisk drypstop og slukker selv efter 40 minutter. Optio fås i et væld af farver, så den kan matche køkkenet. Er I ofte to om morgenen og flere i weekenden, er den halve kande grund nok til at vælge Optio frem for Automatic.</p>
HTML,
			'good'    => [ 'Husstande, hvor mængden skifter fra dag til dag', 'Dig, der vil have farve i køkkenet' ],
			'less'    => [ 'Dig, der vil holde kaffen varm uden varmeplade' ],
		],
		[
			'ean'     => '8712072794313',
			'price'   => 2399,
			'name'    => 'Moccamaster Automatic Thermo 1,25 l, poleret sølv',
			'role'    => 'Bedst med termokande',
			'reviews' => [],
			'verdict' => 'Brygger 10 kopper direkte ned i termokanden på 6 minutter – kaffen holder sig varm i 2–3 timer uden varmeplade.',
			'why'     => <<<'HTML'
<p>Automatic Thermo brygger kaffen direkte ned i en termokande i stedet for en glaskande på varmeplade. Det betyder, at kaffen ikke står og bliver varmet videre, men holder sig varm i kanden i op til 2–3 timer. Du kan bære kanden med hen til bordet eller ind i stuen, og der er stadig god kaffe, når de sidste gæster kommer.</p>
<p>Maskinen har et kobbervarmelegeme på 1450 W og brygger 10 kopper på 6 minutter. Både maskine og kande er i poleret, rustfrit stål. Husk at forvarme termokanden med varmt vand, så kaffen holder temperaturen længst. Vil du se flere maskiner af samme slags, kan du læse vores guide til <a href="/kaffemaskine-med-termokande/">kaffemaskine med termokande</a>.</p>
HTML,
			'good'    => [ 'Dig, der drikker kaffen over flere timer', 'Kaffebordet med gæster' ],
			'less'    => [ 'Dig, der vil se kaffen i en glaskande', 'Det mindre budget' ],
		],
		[
			'ean'     => '8712072692336',
			'price'   => 1500,
			'name'    => 'Moccamaster Cup-one, mat sort',
			'role'    => 'Bedst til én kop',
			'reviews' => [],
			'verdict' => 'Moccamaster til en enkelt kop, der brygger direkte ned i dit krus og slukker af sig selv.',
			'why'     => <<<'HTML'
<p>Cup-one er Moccamaster i lille format. I stedet for en kande brygger den én kop direkte ned i dit eget krus. Det passer til dig, der bor alene, eller som drikker filterkaffe på andre tidspunkter end resten af husstanden og ikke vil brygge en hel kande, der bliver stående.</p>
<p>Maskinen har ikke et varmeelement under koppen og slukker automatisk. Du får altså frisk kaffe hver gang i stedet for kaffe, der har stået. Er du mere til en hurtig kop med et tryk, kan du også se andre maskiner i kategorien <a href="/kaffemaskiner/kaffemaskine-til-1-kop/">kaffemaskine til 1 kop</a>.</p>
HTML,
			'good'    => [ 'Singlehusstanden', 'Hjemmekontoret' ],
			'less'    => [ 'Dig, der skal lave kaffe til flere ad gangen' ],
		],
		[
			'ean'     => '8712072592551',
			'price'   => 5399,
			'name'    => 'Moccamaster Manual Double',
			'role'    => 'Bedst til kontoret',
			'reviews' => [],
			'verdict' => 'Den dobbelte Moccamaster, der brygger op til 20 kopper – 2,5 liter – på seks minutter.',
			'why'     => <<<'HTML'
<p>Manual Double er den klassiske Moccamaster i dobbelt udgave. Den brygger op til 20 kopper, svarende til 2,5 liter, på seks minutter. Det er maskinen til kontoret, værkstedet, klubhuset eller andre steder, hvor kaffen går hurtigt, og hvor ingen gider vente på næste kande.</p>
<p>Den er lavet til miljøer med stort kaffeforbrug, og prisen afspejler det. Derhjemme er den for meget for de fleste, men skal du købe én maskine, der kan klare morgenmødet, er den værd at kigge på. Se også flere modeller under <a href="/kaffemaskiner/kaffemaskine-til-kontoret/">kaffemaskine til kontoret</a>.</p>
HTML,
			'good'    => [ 'Kontorer og mødelokaler', 'Foreninger og klubhuse' ],
			'less'    => [ 'Den almindelige husstand' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige Moccamaster</h2>
<p>Alle Moccamaster-modeller brygger filterkaffe efter samme princip, så forskellen ligger mest i, hvordan du vil servere kaffen, og hvor meget du laver ad gangen. Start med at tænke over, hvor mange kopper du typisk brygger, og hvor længe kaffen skal holde sig. Se alle <a href="/kaffemaskiner/moccamaster/">Moccamaster-maskiner</a> med aktuelle priser.</p>
<h3>Glaskande eller termokande</h3>
<p>En Moccamaster med glaskande holder kaffen varm på en varmeplade. Det er fint, hvis kaffen drikkes inden for den første halve time, men står den længe, begynder smagen at blive bitter. En termomodel brygger direkte ned i en isoleret kande uden varmeplade, så kaffen bevarer smagen længere og kan tages med rundt i huset.</p>
<h3>Hel eller halv kande</h3>
<p>Brygger du tit kun et par kopper, er en model med funktion til halv kande en fordel. Den tilpasser bryggningen til den mindre mængde vand. På en maskine uden den funktion kan en lille portion blive løbet for hurtigt igennem.</p>
<h2>Hvilken størrelse Moccamaster passer til dig?</h2>
<p>Den almindelige Moccamaster brygger en kande på 1,25 liter, og det rækker til de fleste familier. Er du alene, eller drikker du kaffe på skæve tidspunkter, giver en model til én kop mere mening. På arbejdspladsen er en dobbelt maskine det sikre valg, så der ikke opstår kø ved kaffemaskinen. Leder du efter en anden filterkaffemaskine end Moccamaster, kan du se vores guide til den <a href="/bedste-kaffemaskine/">bedste kaffemaskine</a>.</p>
<h2>Få mere ud af din Moccamaster</h2>
<p>En god maskine kan ikke redde gammel kaffe. Køb hellere kaffebønner i mindre poser og mal dem lige før bryggningen – en <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a> gør det nemt. Brug friskt, koldt vand, og skyl filterholderen efter hver brug. Se også vores udvalg af <a href="/kaffe/">kaffe</a>.</p>
<h2>Afkalkning og vedligehold</h2>
<p>Kalk i vandet sætter sig i maskinen og gør, at vandet bliver mindre varmt og løber langsommere igennem. Det kan smages i koppen. Afkalk derfor din Moccamaster jævnligt, især hvis du bor i et område med hårdt vand. Se <a href="/baristaudstyr/afkalkning/">afkalkning og rengøring</a>. Glaskander og andre reservedele kan købes separat, så en Moccamaster kan holde i mange år.</p>
HTML,
	'faq'      => [
		[ 'Hvilken Moccamaster er bedst?', 'Det afhænger af, hvordan du drikker kaffe. Automatic er det sikre valg til de fleste familier, Optio er bedst, hvis du ofte brygger en halv kande, og Automatic Thermo er bedst, hvis kaffen skal holde sig varm i flere timer.' ],
		[ 'Hvad er forskellen på Moccamaster Automatic og Optio?', 'Begge brygger en kande på 1,25 liter. Optio har derudover en funktion til at brygge en halv kande, hvor maskinen tilpasser bryggningen til den mindre mængde vand.' ],
		[ 'Hvor ofte skal man afkalke en Moccamaster?', 'Det afhænger af, hvor hårdt vandet er, og hvor tit du brygger. Mange steder i Danmark er vandet hårdt, så afkalk hellere for ofte end for sjældent – og altid, hvis bryggetiden bliver længere.' ],
		[ 'Skal jeg vælge en Moccamaster med termokande?', 'Ja, hvis kaffen skal holde sig over længere tid, eller du vil kunne bære kanden med rundt. Drikker du kaffen med det samme, er en Moccamaster med glaskande billigere og fuldt ud tilstrækkelig.' ],
		[ 'Kan man brygge én kop i en Moccamaster?', 'Ja, med Moccamaster Cup-one, der brygger direkte ned i dit krus. På de store modeller giver en halv kande-funktion et bedre resultat end at brygge meget små mængder.' ],
	],
];
