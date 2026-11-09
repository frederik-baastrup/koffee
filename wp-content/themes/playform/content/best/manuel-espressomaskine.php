<?php
/**
 * Omskrevet fra det gamle koffee.dk (/manuel-espressomaskine/, 2021). Ny tekst og nye produkter.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'manuel-espressomaskine',
	'date'     => '2021-10-14 10:00:00',
	'keyword'  => 'manuel espressomaskine',
	'title'    => 'Manuel espressomaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'Med en manuel espressomaskine skaber du selv trykket – med et håndtag i køkkenet eller en lille pumpe på turen. Her er vores bud på de 5 bedste manuelle espressomaskiner.',
	'more_cat' => 'manuel-espressomaskine',
	'intro'    => <<<'HTML'
<p>En manuel espressomaskine er espresso skåret helt ind til benet. Der er ingen elektrisk pumpe, der klarer trykket for dig: du presser selv vandet gennem kaffen med et håndtag eller en lille håndpumpe. Det giver en helt særlig føling med kaffen og en ro over morgenkoppen, som mange kaffeelskere ikke vil bytte for noget.</p>
<p>Der er to slags. De klassiske håndtagsmaskiner står på køkkenbordet og er smukke stykker håndværk. De håndholdte er små og kører helt uden strøm, så de kan komme med i rygsækken. Herunder er vores bud på de 5 bedste fra de butikker, vi samarbejder med – og nederst en guide til, hvad du skal tænke over.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8010072228051',
			'price'   => 5679,
			'name'    => 'La Pavoni Europiccola Lusso',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Den klassiske håndtagsmaskine i rustfrit stål med damp til mælken og en vandtank på 0,8 liter.',
			'why'     => <<<'HTML'
<p>Europiccola Lusso er den maskine, mange tænker på, når de hører ordet manuel espressomaskine. La Pavoni har lavet håndtagsmaskiner i generationer, og Europiccola er den kompakte model til hjemmet. Den er i rustfrit stål med sort håndtag og ser lige så godt ud, når den står stille, som når den er i brug.</p>
<p>Du trækker selv håndtaget og bestemmer dermed trykket og tempoet i brygningen. Der er dampfunktion, så du kan skumme mælk til cappuccino. Vandtanken på 0,8 liter passer til et par personer, der drikker et par kopper hver. Det er en maskine, du lærer at kende over tid, og som belønner dig, jo bedre du bliver.</p>
HTML,
			'good'    => [ 'Dig, der vil have det klassiske håndværk', 'Et køkken, hvor maskinen må ses', 'Et par kopper ad gangen' ],
			'less'    => [ 'Mange gæster på én gang', 'Dig, der vil have det hurtigt og nemt' ],
		],
		[
			'ean'     => '8010072228099',
			'price'   => 9229,
			'name'    => 'La Pavoni Professional 1,6 liter',
			'role'    => 'Til flere kopper',
			'reviews' => [],
			'verdict' => 'Den større La Pavoni med 1,6 liters vandtank, 950 watt og dampfunktion – i kobber med detaljer i guld.',
			'why'     => <<<'HTML'
<p>La Pavoni Professional bygger på samme idé som Europiccola, men i et større format. Vandtanken rummer 1,6 liter, så du kan lave flere kopper, inden du skal fylde op. Det er rart, når der er gæster, eller når hele familien vil have kaffe.</p>
<p>Maskinen har 950 watt og en praktisk dampfunktion til mælken. Denne udgave er i kobber med detaljer i guld, og den er lavet til at stå fremme som et smykke i køkkenet. Den kræver lige så meget håndelag som den mindre model, men giver dig mere luft til at lave en runde til alle.</p>
HTML,
			'good'    => [ 'Flere kopper ad gangen', 'Gæster og weekendbrunch', 'Et køkken med plads til et smykke' ],
			'less'    => [ 'Lavt budget', 'Et minimalistisk køkken' ],
		],
		[
			'ean'     => '8010072228174',
			'price'   => 9495,
			'name'    => 'La Pavoni Esperto Competente',
			'role'    => 'Med niveauindikator',
			'reviews' => [],
			'verdict' => 'Håndtagsmaskine fra La Pavoni med dampfunktion og indikator for vandniveauet, så du altid ved, hvor du står.',
			'why'     => <<<'HTML'
<p>Esperto Competente er La Pavonis bud på en håndtagsmaskine med lidt flere hjælpemidler. Den har dampfunktion til mælken og en indikator for vandniveauet, så du kan se, hvornår der skal fyldes op. Det lyder som en lille ting, men på en manuel maskine, hvor du har fokus på håndtaget, er det rart ikke at skulle gætte.</p>
<p>Denne udgave har detaljer i guld og er bygget til den, der vil have en maskine, der både fungerer og ser eksklusiv ud. Den er et godt valg, hvis du har drømt om en La Pavoni, men gerne vil have lidt mere overblik under brygningen.</p>
HTML,
			'good'    => [ 'Overblik under brygningen', 'Cappuccino med damp', 'Dig, der vil have en eksklusiv maskine' ],
			'less'    => [ 'Lavt budget', 'Dig, der aldrig har prøvet espresso før' ],
		],
		[
			'ean'     => '4897066230764',
			'price'   => 849,
			'name'    => 'Wacaco Picopresso',
			'role'    => 'Bedst på farten',
			'reviews' => [],
			'verdict' => 'Lille, transportabel espressomaskine til kaffeentusiasten, der vil have rigtig espresso, uanset hvor turen går hen.',
			'why'     => <<<'HTML'
<p>Picopresso er Wacacos model til den kræsne kaffedrikker, der ikke vil gå på kompromis, bare fordi man er væk hjemmefra. Den er lille og nem at have med, men den er bygget til at give resultater, der minder om en stor espressomaskine.</p>
<p>Du skaber selv trykket med håndkraft, og du skal blot have varmt vand og friskmalet kaffe med. Det gør den oplagt på kontoret, i sommerhuset, på campingturen eller på hotelværelset. Tag en håndkværn med, så har du hele setuppet i en lille taske. Det er et oplagt næste skridt, hvis du er vokset fra pulverkaffe på farten.</p>
HTML,
			'good'    => [ 'Rejser og camping', 'Kontoret', 'Dig, der vil have god espresso overalt' ],
			'less'    => [ 'Mange kopper i træk', 'Mælkedrikke' ],
		],
		[
			'ean'     => '4897066230122',
			'price'   => 499,
			'name'    => 'Wacaco Nanopresso',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Håndholdt espressobrygger uden strøm, med et pumpesystem, hvor du selv skaber trykket – let og kompakt.',
			'why'     => <<<'HTML'
<p>Nanopresso er den billigste vej til at prøve, hvordan det er at lave espresso med håndkraft. Den kører helt uden strøm og er bygget op om et pumpesystem, hvor du med hånden skaber det tryk, der skal til.</p>
<p>Den er kompakt og let, så den kan ligge i tasken hver dag uden at fylde. Hæld varmt vand og malet kaffe i, pump et par gange, og så har du en espresso. Den er et godt supplement til en kaffemaskine derhjemme, eller en sjov første manuel espressomaskine, før du beslutter dig for en større.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Tasken og turen', 'Dig, der vil prøve manuel espresso' ],
			'less'    => [ 'Mælkedrikke', 'Flere kopper på én gang' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en manuel espressomaskine</h2>
<h3>Håndtagsmaskine eller håndholdt?</h3>
<p>En håndtagsmaskine (også kaldet en lever-maskine) varmer vandet med strøm, men trykket laver du selv ved at trække et håndtag ned. Den står fast i køkkenet, kan ofte skumme mælk med damp og er bygget til at holde i mange år. En håndholdt espressomaskine har ingen strøm overhovedet. Du hælder varmt vand i og pumper trykket op med hånden. Den er lille, billig og kan komme med overalt.</p>
<p>Vil du have, at maskinen klarer trykket for dig, men stadig selv stå for håndværket, så se vores guide til <a href="/semiautomatisk-espressomaskine/">semiautomatiske espressomaskiner</a>. Vil du have det helt nemt, så se <a href="/espressomaskine-med-kvaern/">espressomaskiner med kværn</a>.</p>
<h3>Regn med en læringskurve</h3>
<p>Med en manuel maskine styrer du det hele: formaling, mængde, tamping og tryk. Det betyder, at de første kopper kan blive for sure eller for bitre. Skift én ting ad gangen, og notér, hvad der virker. En <a href="/kaffevaegt/">kaffevægt</a> og en god <a href="/baristaudstyr/tamper/">tamper</a> gør det meget nemmere at gentage en god kop.</p>
<h3>Du skal bruge en god kværn</h3>
<p>Espresso kræver fint og ensartet malet kaffe. Til en håndtagsmaskine er en <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a> praktisk i hverdagen. Til en håndholdt maskine på farten passer en <a href="/manuel-kaffekvaern/">manuel kaffekværn</a>, der kan male fint nok til espresso.</p>
<h3>Varme og vedligehold</h3>
<p>På en håndtagsmaskine bliver gruppen varmere, jo flere kopper du laver i træk. Det kræver lidt fornemmelse, og mange holder en pause eller køler gruppen ned mellem kopperne. Skyl maskinen efter brug, og afkalk efter anvisningen. Pakninger slides med tiden og skal skiftes – det er en del af at eje en maskine, der kan holde i årtier. Midler finder du under <a href="/baristaudstyr/afkalkning/">afkalkning og rengøring</a>.</p>
<p>Skal du på tur uden strøm og uden espressomaskine, så læs vores artikel om <a href="/baalkaffe/">bålkaffe</a>. Se også alle <a href="/espressomaskiner/manuel-espressomaskine/">manuelle espressomaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en manuel espressomaskine?', 'En espressomaskine, hvor du selv skaber trykket, der presser vandet gennem kaffen – enten med et håndtag eller en lille håndpumpe. Der er ingen elektrisk pumpe.' ],
		[ 'Kan en manuel espressomaskine lave lige så god espresso som en elektrisk?', 'Ja, med den rette kværn og lidt øvelse. Fordi du selv styrer trykket, kan du endda lave ting, som en almindelig pumpe ikke kan. Til gengæld er resultatet mere afhængigt af dig.' ],
		[ 'Kan jeg skumme mælk med en manuel espressomaskine?', 'Mange håndtagsmaskiner har en damplanse til mælken. De håndholdte maskiner har ikke – her kan du bruge en separat <a href="/bedste-maelkeskummer/">mælkeskummer</a>.' ],
		[ 'Skal en håndholdt espressomaskine have kogende vand?', 'Den skal have meget varmt vand, men ikke nødvendigvis kogende. Vand lige fra kedlen er en god start, og det hjælper at forvarme maskinen med lidt varmt vand først.' ],
	],
];
