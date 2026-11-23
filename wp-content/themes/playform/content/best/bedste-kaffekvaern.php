<?php
/**
 * Ny købsguide (bred guide om kaffekværne). Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-kaffekvaern',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'kaffekværn',
	'title'    => 'Kaffekværn: Vores bud på de 5 bedste',
	'excerpt'  => 'Friskmalede bønner er den nemmeste vej til en kop kaffe med mere duft og smag. Her er vores bud på de 5 bedste kaffekværne fra de butikker, vi samarbejder med – elektriske og manuelle, til filter og espresso.',
	'more_cat' => 'kaffekvaerne',
	'intro'    => <<<'HTML'
<p>Kaffe begynder at miste sin aroma kort efter, at bønnerne er malet. Derfor gør en kaffekværn ofte en større forskel for smagen end en ny kaffemaskine. Når du maler lige før brygningen, får du hele duften med i koppen – og du kan selv bestemme, hvor fint kaffen skal males til netop din bryggemetode.</p>
<p>Her er vores bud på de 5 bedste kaffekværne fra de butikker, vi samarbejder med. Listen spænder bredt: en alsidig elektrisk kværn med display, et prisvenligt valg til hverdagen, en nem kværn til nybegynderen, en flagskibsmodel i flot design og en håndkværn til stille morgener og tur. Nederst får du vores råd til, hvordan du vælger den rigtige kaffekværn.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9312432029797',
			'price'   => 1979,
			'name'    => 'Sage BCG820 The Smart Grinder Pro',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Alsidig elektrisk kaffekværn med display og IQ-teknologi, der giver overblik over hele kværningen.',
			'why'     => <<<'HTML'
<p>Sage BCG820 – også kendt som The Smart Grinder Pro – er kværnen til dig, der vil kunne det hele med én maskine. Et display viser dig, hvad der sker undervejs, så du hurtigt lærer at ramme den formaling og mængde, du kan lide. Med IQ-teknologien er Sages tanke, at kværningen skal være nem at styre i hverdagen.</p>
<p>Med sine mange muligheder er den et godt bud, hvis du skifter mellem en hurtig espresso om morgenen og en kande filterkaffe i weekenden. Den fås også i en koksgrå udgave, hvis den børstede stålfarve ikke passer i dit køkken.</p>
HTML,
			'good'    => [ 'Dig, der brygger på flere måder', 'Espresso derhjemme' ],
			'less'    => [ 'Dig, der kun vil bruge et par hundrede kroner' ],
		],
		[
			'ean'     => '3016661147449',
			'price'   => 399,
			'name'    => 'OBH Nordica Coffee Grinder Precision',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Prisvenlig elektrisk kværn med 9 indstillinger fra fin til grov – fra espresso over filter til stempelkande.',
			'why'     => <<<'HTML'
<p>Vil du i gang med friskmalet kaffe uden at bruge mange penge, er OBH Nordica Coffee Grinder Precision et fornuftigt sted at starte. Den har 9 indstillinger, så du kan gå fra fint malet kaffe til espresso, over filter og til en grov formaling til stempelkanden.</p>
<p>Kværnsystemet er bygget til at undgå, at bønnerne bliver for varme under kværningen, så mere af aromaen bliver i kaffen. Det er en enkel og overskuelig kværn til hverdagen, og den fås hos flere af de butikker, vi samarbejder med.</p>
HTML,
			'good'    => [ 'Det mindre budget', 'Filterkaffe og stempelkande i hverdagen' ],
			'less'    => [ 'Dig, der vil finjustere espresso i meget små trin' ],
		],
		[
			'ean'     => '4001627001438',
			'price'   => 1000,
			'name'    => 'Graef CM 702',
			'role'    => 'Bedst til nybegynderen',
			'reviews' => [],
			'verdict' => 'Brugervenlig elektrisk kaffekværn til dig, der vil prøve kræfter med at male dine egne bønner.',
			'why'     => <<<'HTML'
<p>Graef CM 702 er tænkt til dig, der har drukket færdigmalet kaffe i årevis og nu vil smage forskellen på friskkværnede bønner. Kværnen er lavet til at være nem at gå til, så du ikke skal bruge lang tid på at lære den at kende, før kaffen smager godt.</p>
<p>CM 702 ligger i den gyldne middelvej mellem de helt billige kværne og de dyre specialmodeller. Det gør den til et trygt valg, hvis du vil have en kværn, der kan følge med, når din interesse for kaffe vokser.</p>
HTML,
			'good'    => [ 'Dig, der lige er begyndt at male selv', 'Den daglige kop filterkaffe' ],
			'less'    => [ 'Den erfarne hjemmebarista' ],
		],
		[
			'ean'     => '8712072495128',
			'eans'    => [ '8712072495128', '8712072495104', '8712072495111' ],
			'price'   => 1899,
			'name'    => 'Moccamaster KM5 Burr',
			'role'    => 'Designvalget',
			'reviews' => [],
			'verdict' => 'Håndlavet flagskibskværn fra Moccamaster, helt redesignet og med et stærkt, genkendeligt udtryk.',
			'why'     => <<<'HTML'
<p>Moccamaster KM5 Burr er den nyeste kværn i Moccamaster-familien og mærkets flagskib. Den er håndlavet, og designet er gjort helt om, så den passer til den kendte stil, mange forbinder med mærkets kaffemaskiner.</p>
<p>Har du allerede en Moccamaster på køkkenbordet, er KM5 Burr den naturlige makker, der får de to til at se ud som et sæt. Den fås i flere farver, så du kan matche din maskine eller dit køkken. Det er en investering, men du får en kværn, der er bygget til at stå fremme i mange år.</p>
HTML,
			'good'    => [ 'Dig, der har en Moccamaster', 'Køkkener, hvor designet tæller' ],
			'less'    => [ 'Det stramme budget' ],
		],
		[
			'ean'     => '0719812001807',
			'price'   => 470,
			'name'    => 'Oxo Brew manuel kaffekværn',
			'role'    => 'Bedste håndkværn',
			'reviews' => [],
			'verdict' => 'Manuel kaffekværn fra Oxo, lavet til at give friskmalet kaffe med præcision – også væk fra køkkenet.',
			'why'     => <<<'HTML'
<p>Oxo Brew er en håndkværn til dig, der godt kan lide at styre kaffen selv og ikke har brug for strøm til det. Den er bygget med fokus på præcision, så du kan male bønnerne til den bryggemetode, du bruger den dag.</p>
<p>Fordi den ikke skal sættes i en stikkontakt, er den let at have med i sommerhuset, på kontoret eller på tur. En håndkværn larmer heller ikke, så den passer godt til dig, der brygger en eller to kopper ad gangen og nyder den lille pause, det er at male bønnerne.</p>
HTML,
			'good'    => [ 'Stille morgener', 'Små mængder og kaffe på farten' ],
			'less'    => [ 'Dig, der brygger store kander hver dag' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan finder du den bedste kaffekværn</h2>
<p>Den bedste kaffekværn er den, der passer til den måde, du brygger kaffe på. Start med at tænke over, hvor meget kaffe du laver om dagen, og om du mest drikker filterkaffe, espresso eller noget helt tredje. Se alle <a href="/kaffekvaerne/">kaffekværne</a> med aktuelle priser.</p>
<h2>Elektrisk eller manuel kaffekværn</h2>
<p>En elektrisk kaffekværn er hurtig og bekvem, især når du skal male til en hel kande. En manuel kaffekværn er stille, kompakt og kan tages med overalt, men den kræver lidt arbejde med håndtaget. Mange vælger en elektrisk kværn til hverdagen og en håndkværn til tur og sommerhus. Læs mere i vores guides til den bedste <a href="/elektrisk-kaffekvaern/">elektriske kaffekværn</a> og den bedste <a href="/manuel-kaffekvaern/">manuelle kaffekværn</a>.</p>
<h2>Skærende knive eller kværnskiver</h2>
<p>De billigste kværne hakker bønnerne med en roterende kniv. Det går hurtigt, men kornene bliver ujævne, og du kan ikke rigtig styre, hvor fint kaffen bliver. En kaffekværn med kværnskiver (burr) maler bønnerne mellem to skiver i en fast afstand, så kornene bliver mere ens. Det giver en jævnere og mere forudsigelig smag, og det er derfor, de fleste kaffeentusiaster vælger den type.</p>
<h2>Formaling og bryggemetode</h2>
<p>Hver bryggemetode har sin formaling. Espresso kræver en meget fin formaling, filterkaffe en mellemfin, og stempelkande og cold brew en grov. Brygger du kun filterkaffe, er nogle få trin nok. Skal din kaffekværn også kunne lave espresso, skal du kunne justere i små trin. Er espresso det vigtigste, kan en dedikeret <a href="/kaffekvaerne/espressokvaern/">espressokværn</a> være værd at overveje.</p>
<h2>Pleje og rengøring</h2>
<p>Kaffens olier sætter sig i kværnen og kan med tiden give en harsk smag. Børst kværnen ren jævnligt, og tøm beholderen for gamle bønner. Brug aldrig vand på selve kværnværket, medmindre producenten skriver, at det er i orden. Opbevar bønnerne lufttæt i en <a href="/baristaudstyr/kaffedaase/">kaffedåse</a>, og find friske <a href="/kaffe/hele-kaffeboenner/">hele bønner</a> til din nye kværn.</p>
HTML,
	'faq'      => [
		[ 'Kan man smage forskel med en kaffekværn?', 'Ja. Friskmalede bønner har mere duft og smag end færdigmalet kaffe, fordi aromaen forsvinder hurtigt efter kværningen. Mange oplever, at en kaffekværn løfter kaffen mere end en dyrere kaffemaskine.' ],
		[ 'Hvilken kaffekværn er bedst til espresso?', 'Til espresso skal kværnen kunne male meget fint og justeres i små trin. Vælg en kaffekværn med kværnskiver og mange indstillinger, eller en dedikeret espressokværn.' ],
		[ 'Er en manuel kaffekværn bedre end en elektrisk?', 'Ikke nødvendigvis. En god manuel kværn maler lige så ensartet som en elektrisk, men den er langsommere. Den er bedst til små mængder og til tur, mens en elektrisk kaffekværn er nemmest til hele kander.' ],
		[ 'Hvor fint skal kaffen males til filterkaffe?', 'Til filterkaffe skal kaffen være mellemfin, cirka som groft sand. Smager kaffen bitter, så mal lidt grovere. Smager den tynd eller syrlig, så mal lidt finere.' ],
		[ 'Hvordan gør man en kaffekværn ren?', 'Tøm den for bønner, og børst kværnværket og udløbet rent med en tør børste. Rensetabletter til kaffekværne kan fjerne olierester. Undgå vand på kværnværket, medmindre producenten skriver, at det tåler det.' ],
	],
];
