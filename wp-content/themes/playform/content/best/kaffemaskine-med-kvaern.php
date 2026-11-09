<?php
/**
 * Omskrevet fra det gamle koffee.dk (/kaffemaskine-med-kvaern/). Kun filterkaffemaskiner med indbygget kværn – espressomaskiner har deres egen guide.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'kaffemaskine-med-kvaern',
	'date'     => '2021-10-05 10:00:00',
	'keyword'  => 'kaffemaskine med kværn',
	'title'    => 'Kaffemaskine med kværn: Vores bud på de 5 bedste',
	'excerpt'  => 'En kaffemaskine med kværn maler bønnerne lige før brygning, så du får al aromaen med i koppen. Her er vores bud på de 5 bedste filterkaffemaskiner med indbygget kværn fra de butikker, vi samarbejder med.',
	'more_cat' => 'kaffemaskine-med-kvaern',
	'intro'    => <<<'HTML'
<p>Malet kaffe begynder at miste sin aroma i det øjeblik, bønnen er knust. Derfor smager kaffe af friskmalede bønner markant mere af noget end kaffe fra en pose, der har stået åben i en uge. Problemet er, at det tager tid og fylder at have både kværn og kaffemaskine stående.</p>
<p>En kaffemaskine med kværn løser det. Du fylder bønner i toppen og vand i tanken, og maskinen maler og brygger i ét flow. Her er vores bud på de 5 bedste filterkaffemaskiner med indbygget kværn fra de butikker, vi samarbejder med – med både glaskande og termokande. Drømmer du om espresso, så se i stedet vores guide til <a href="/espressomaskine-med-kvaern/">espressomaskine med kværn</a>.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '3045380019942',
			'price'   => 949,
			'name'    => 'OBH Nordica Grind Aroma',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kaffemaskine med konisk kværn, timer og plads til 10 kopper – og den kan også bruge formalet kaffe.',
			'why'     => <<<'HTML'
<p>OBH Nordica Grind Aroma giver dig det, de fleste ønsker sig af en kaffemaskine med kværn, uden at gøre det besværligt. Den indbyggede kværn er konisk og maskinen brygger direkte på den friskmalede kaffe – hver eneste gang.</p>
<p>Med timeren kan du fylde bønner og vand på om aftenen og vågne til duften af nymalet kaffe. Kanden rummer 1,25 liter, svarende til 10 kopper, og maskinen slukker selv efter 30 minutter.</p>
<p>Løber du tør for bønner, eller har du fået en pose formalet kaffe i gave, kan du sagtens bruge den i stedet. Den fleksibilitet og timeren gør Grind Aroma til et stærkt allround-valg. Prisen svinger mellem butikkerne, så tjek prislisten.</p>
HTML,
			'good'    => [ 'Dig, der vil vågne til nymalet kaffe', 'Familier, der drikker en hel kande', 'Dig, der også vil kunne bruge formalet kaffe' ],
			'less'    => [ 'Dig, der vil holde kaffen varm i flere timer' ],
		],
		[
			'ean'     => '4008146033667',
			'price'   => 1099,
			'name'    => 'Severin Termokaffemaskine med kværn',
			'role'    => 'Bedst med termokande',
			'reviews' => [],
			'verdict' => 'Termokaffemaskine med indbygget kværn, hvor du selv justerer både kaffestyrke og malingsgrad.',
			'why'     => <<<'HTML'
<p>Severins termokaffemaskine kombinerer to ting, der hver for sig gør kaffen bedre: friskmalede bønner og en termokande. Kaffen brygges på nymalet kaffe og holdes varm uden en varmeplade, der langsomt gør den bitter.</p>
<p>Du har samtidig mere kontrol end på mange andre maskiner. Kaffestyrken kan justeres, og du kan ændre malingsgraden på bønnerne. Det betyder, at du kan finjustere smagen, når du skifter til en ny pose bønner – en lys ristning har ofte godt af en anden indstilling end en mørk.</p>
<p>Den passer til dig, der drikker kaffe over flere timer, arbejder hjemme eller bare vil have en kande, du kan tage med hen til bordet.</p>
HTML,
			'good'    => [ 'Kaffe, der skal holde sig varm', 'Dig, der vil finjustere smagen', 'Hjemmearbejde' ],
			'less'    => [ 'Dig, der vil se kaffen i kanden' ],
		],
		[
			'ean'     => '4016432427113',
			'price'   => 1169,
			'name'    => 'Gastroback Grind & Brew Pro',
			'role'    => 'Bedst til mange kopper',
			'reviews' => [],
			'verdict' => 'Kaffemaskine med integreret kværn og en glaskande på 1,5 liter til op til 12 kopper.',
			'why'     => <<<'HTML'
<p>Gastroback Grind &amp; Brew Pro er til husstande og arbejdspladser, hvor én kande ikke rækker langt. Glaskanden rummer 1,5 liter, og maskinen brygger op til 12 kopper ad gangen. Det er mere end de fleste kaffemaskiner med kværn.</p>
<p>Kværning og brygning sker i samme proces, så du trykker på start, og maskinen klarer resten. Bønnerne males lige før vandet rammer dem, så aromaen ender i kaffen og ikke i luften i køkkenet.</p>
<p>Glaskanden gør det nemt at se, hvor meget kaffe der er tilbage. Står kaffen længe, kan du med fordel hælde den over på en termokande.</p>
HTML,
			'good'    => [ 'Store familier og små kontorer', 'Weekender med gæster', 'Dig, der vil se, hvor meget kaffe der er tilbage' ],
			'less'    => [ 'Små køkkener med lidt plads' ],
		],
		[
			'ean'     => '4008146033643',
			'price'   => 1099,
			'name'    => 'Severin KA4813',
			'role'    => 'Nemmest at betjene',
			'reviews' => [],
			'verdict' => 'Kaffemaskine med indbygget kværn og touch-display – og mulighed for at bruge færdigmalet kaffe.',
			'why'     => <<<'HTML'
<p>Severin KA4813 er for dig, der vil have friskkværnet kaffe med en betjening, der føles moderne. Maskinen styres via et touch-display, så du hurtigt kan vælge det, du skal bruge, uden at lede efter små knapper.</p>
<p>Kværnen maler bønnerne lige før brygning, og du vil hurtigt kunne smage forskel på kaffe brygget på nykværnede bønner og kaffe fra en åben pose. Løber du tør for bønner, kan du bruge færdigmalet kaffe, så morgenkaffen aldrig er i fare.</p>
<p>Den er et godt valg, hvis flere i husstanden skal bruge maskinen, og du vil have en løsning, der er let at forklare. Kombinér den med gode <a href="/kaffe/hele-kaffeboenner/">hele kaffebønner</a>, så får du mest ud af kværnen.</p>
HTML,
			'good'    => [ 'Dig, der vil have enkel betjening', 'Husstande, hvor flere brygger kaffe', 'Dig, der også vil bruge formalet kaffe' ],
			'less'    => [ 'Dig, der vil have termokande' ],
		],
		[
			'ean'     => '4006508225491',
			'price'   => 1990,
			'name'    => 'Melitta AromaFresh Pro',
			'role'    => 'Premiumvalget',
			'reviews' => [],
			'verdict' => 'Kaffemaskine med kværn fra Melitta, bygget til at give de friskmalede bønner den bedste behandling under brygningen.',
			'why'     => <<<'HTML'
<p>Melitta AromaFresh Pro er til dig, der vil have friskmalet filterkaffe fra et af de mest kendte navne inden for kaffemaskiner. Hele ideen bag maskinen er at bevare friskheden fra bønnen helt ned i koppen, så de friskmalede bønner behandles skånsomt under brygningen.</p>
<p>Det er især værd at tænke over, hvis du køber gode bønner fra en lokal rister. De giver mest mening, når de males lige før brygning og ikke står og mister aroma i en dåse.</p>
<p>AromaFresh Pro fås også i en udgave med termokande, AromaFresh Pro Therm, hvis kaffen skal holde sig varm længe. Begge findes hos flere af de butikker, vi samarbejder med, så du kan sammenligne priserne.</p>
HTML,
			'good'    => [ 'Gode bønner fra en lokal rister', 'Dig, der vil have et kendt mærke', 'Daglig filterkaffe til hele husstanden' ],
			'less'    => [ 'Det stramme budget' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en kaffemaskine med kværn</h2>
<p>En kaffemaskine med kværn sparer dig for et ekstra apparat og et ekstra trin hver morgen. Men kværnen er også den del, der kræver mest af maskinen. Her er det, du skal kigge efter. Se alle <a href="/kaffemaskiner/kaffemaskine-med-kvaern/">kaffemaskiner med kværn</a> med aktuelle priser.</p>
<h3>Konisk kværn eller slagkværn</h3>
<p>En konisk kværn knuser bønnerne mellem to riller og giver en mere ensartet formaling. En slagkværn med knive hakker bønnerne og giver både fint støv og større stykker. Ensartet formaling giver en mere ren og afbalanceret smag, så en konisk kværn er at foretrække.</p>
<h3>Justerbar malingsgrad og styrke</h3>
<p>Bønner er forskellige. En lys ristning skal ofte males lidt finere end en mørk for at få nok smag ud. Kan du justere malingsgraden og mængden af bønner, kan du tilpasse maskinen til den kaffe, du køber – i stedet for at vælge kaffe efter maskinen.</p>
<h3>Glaskande eller termokande</h3>
<p>Glaskanden står på en varmeplade og passer bedst, hvis kaffen drikkes inden for en halv time. En termokande holder kaffen varm uden at koge den, så smagen holder sig længere. Drikker I kaffen hen over formiddagen, er termo det bedste valg. Læs mere i vores guide til den <a href="/bedste-termokande/">bedste termokande</a>.</p>
<h3>Mulighed for formalet kaffe</h3>
<p>Det er praktisk, hvis maskinen også kan bruge formalet kaffe. Så kan du brygge en kande koffeinfri om aftenen uden at tømme bønnebeholderen, eller klare dig, når bønnerne slipper op. Spekulerer du over koffeinen, så læs, <a href="/hvor-meget-koffein-er-der-i-en-kop-kaffe/">hvor meget koffein der er i en kop kaffe</a>.</p>
<h3>Rengøring af kværnen</h3>
<p>Kaffeolie og fint støv sætter sig i kværnen og kan give en harsk smag med tiden. Børst kværnen og bønnebeholderen af jævnligt, og afkalk maskinen som en almindelig kaffemaskine. Se <a href="/baristaudstyr/afkalkning/">afkalkning og rengøring</a>.</p>
<h3>Alternativet: maskine og kværn hver for sig</h3>
<p>Vil du have mest mulig kontrol, kan du købe en god filterkaffemaskine og en separat <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a> eller <a href="/manuel-kaffekvaern/">manuel kaffekværn</a>. Det fylder mere, men du kan skifte den ene del ud uden den anden. Se vores bud på den <a href="/bedste-kaffemaskine/">bedste kaffemaskine</a>, eller find en <a href="/billig-kaffemaskine/">billig kaffemaskine</a>, hvis du vil holde budgettet nede.</p>
HTML,
	'faq'      => [
		[ 'Smager kaffe bedre fra en kaffemaskine med kværn?', 'Kaffe fra friskmalede bønner har mere aroma end kaffe, der har stået malet. Derfor giver en kaffemaskine med kværn typisk en mere smagfuld kop end den samme maskine med formalet kaffe fra posen.' ],
		[ 'Kan man bruge formalet kaffe i en kaffemaskine med kværn?', 'Mange modeller kan, blandt andet flere af valgene her. Tjek produktsiden, før du køber, hvis det er vigtigt for dig.' ],
		[ 'Larmer en kaffemaskine med kværn?', 'Kværnen giver lyd i de sekunder, den maler. Bruger du timeren tidligt om morgenen, så tænk over, hvor maskinen står i forhold til soveværelset.' ],
		[ 'Hvad er forskellen på en kaffemaskine med kværn og en espressomaskine med kværn?', 'En kaffemaskine med kværn brygger filterkaffe i en kande. En espressomaskine med kværn presser vand gennem finmalet kaffe under tryk og laver espresso, cappuccino og latte.' ],
	],
];
