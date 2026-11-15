<?php
/**
 * Ny købsguide 15. nov. 2026. Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-afkalkningsmiddel',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'afkalkningsmiddel',
	'title'    => 'Afkalkningsmiddel: Vores bud på de 5 bedste',
	'excerpt'  => 'Kalk giver lunken kaffe, lange bryggetider og kortere levetid for maskinen. Her er vores bud på de 5 bedste afkalkningsmidler til kaffemaskiner og espressomaskiner fra de butikker, vi samarbejder med.',
	'more_cat' => 'afkalkning',
	'intro'    => <<<'HTML'
<p>Danmark har mange steder hårdt vand, og det kan din kaffemaskine mærke. Kalken lægger sig som en hvid hinde på varmelegemet og i rørene, så vandet bliver mindre varmt, brygningen tager længere tid, og kaffen mister fylde. Et godt afkalkningsmiddel opløser belægningen, før den når at gøre skade, og er en af de billigste måder at holde maskinen kørende i mange år.</p>
<p>Her er vores bud på de 5 bedste afkalkningsmidler fra de butikker, vi samarbejder med. Der er tabletter, der kan bruges på tværs af apparater, en billig flaske med citronsyre og tre midler, som maskinproducenterne selv har lavet til deres egne kaffe- og espressomaskiner. Nederst finder du råd om, hvor tit du skal afkalke, og hvordan du vælger det rigtige middel.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4242005455089',
			'price'   => 69,
			'name'    => 'Bosch/Siemens afkalkningstabletter 6 x 18 g',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Seks afkalkningstabletter, der kan bruges i både kaffemaskine, espressomaskine og elkedel.',
			'why'     => <<<'HTML'
<p>Har du flere apparater med vand i køkkenet, er det praktisk med ét middel, der kan klare dem alle. Tabletterne fra Bosch og Siemens er lavet til kaffemaskiner, espressomaskiner og elkedler, så du kan bruge den samme pakke til filtermaskinen, kedlen og espressomaskinen.</p>
<p>Pakken rummer seks tabletter på hver 18 g. Tabletter er nemme at dosere, fordi du ikke skal måle noget op: Du opløser blot en tablet i vand efter anvisningen og kører afkalkningen. De fylder lidt i skabet og kan ikke vælte og løbe ud som en åben flaske.</p>
HTML,
			'good'    => [ 'Husstande med flere apparater', 'Dig, der vil have nem dosering' ],
			'less'    => [ 'Dig, hvis maskinproducent kræver sit eget middel' ],
		],
		[
			'ean'     => '4006508192618',
			'price'   => 30,
			'name'    => 'Melitta Anti Calc afkalker 250 ml',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Flydende afkalker af 100 % citronsyre til kaffemaskiner og elkedler – til en meget lav pris.',
			'why'     => <<<'HTML'
<p>Melitta Anti Calc er det billigste valg på listen, og det er et godt bud til den almindelige filterkaffemaskine og elkedlen. Den flydende afkalker består af 100 % citronsyre, som er en af de mest udbredte syrer til at opløse kalk i husholdningen.</p>
<p>Flasken rummer 250 ml, og du finder doseringen bag på den. Det er en enkel løsning til dig, der bare vil have kalken ud af maskinen uden at bruge mange penge. Til en dyr fuldautomatisk espressomaskine bør du dog tjekke, hvilket middel producenten anviser.</p>
HTML,
			'good'    => [ 'Filterkaffemaskiner og elkedler', 'Det lille budget' ],
			'less'    => [ 'Fuldautomater med krav om et bestemt middel' ],
		],
		[
			'ean'     => '8720389000386',
			'price'   => 129,
			'name'    => 'Philips flydende afkalker 2 x 250 ml',
			'role'    => 'Bedst til Philips og Saeco',
			'reviews' => [],
			'verdict' => 'Flydende afkalker til espressomaskiner fra Philips og Saeco, som også kan bruges til Gaggia.',
			'why'     => <<<'HTML'
<p>Har du en espressomaskine fra Philips eller Saeco, er det oplagt at bruge det middel, der er lavet til netop de maskiner. Afkalkeren passer til alle espressomaskiner fra de to mærker og kan også bruges til espressomaskiner fra Gaggia.</p>
<p>Pakken indeholder to flasker på 250 ml, hvilket svarer til to afkalkninger. Mange af maskinerne fra disse mærker har et indbygget afkalkningsprogram, der guider dig igennem, så du blot hælder flasken i vandbeholderen og følger skærmen.</p>
HTML,
			'good'    => [ 'Espressomaskiner fra Philips og Saeco', 'Ejere af en Gaggia' ],
			'less'    => [ 'Filterkaffemaskiner og elkedler' ],
		],
		[
			'ean'     => '5701081713401',
			'price'   => 55,
			'name'    => 'Moccamaster afkalker',
			'role'    => 'Bedst til Moccamaster',
			'reviews' => [],
			'verdict' => 'Lugtfri afkalker, som Moccamaster har udviklet til at rense varmelegemet i sine egne kaffemaskiner.',
			'why'     => <<<'HTML'
<p>En Moccamaster er bygget til at holde i mange år, men kun hvis varmelegemet bliver holdt fri for kalk. Moccamasters egen afkalker er specialfremstillet til mærkets kaffemaskiner og er lugtfri, så du ikke skal skylle længe for at slippe af med en sur eftersmag.</p>
<p>Moccamaster råder selv til at afkalke efter hver 40. brygning eller hver 14. dag ved normal, regelmæssig brug. Holder du den rytme, bliver vandet ved med at nå den rette temperatur, og du forlænger maskinens levetid. Se også vores guide til den <a href="/bedste-kaffemaskine/">bedste kaffemaskine</a>.</p>
HTML,
			'good'    => [ 'Ejere af en Moccamaster', 'Dig, der ikke vil have lugt i maskinen' ],
			'less'    => [ 'Espressomaskiner med eget afkalkningsprogram' ],
		],
		[
			'ean'     => '7610917707515',
			'price'   => 435,
			'name'    => 'Jura afkalkningstabletter 36 stk.',
			'role'    => 'Bedst til Jura',
			'reviews' => [],
			'verdict' => 'Storpakke med 36 fosfatfri afkalkningstabletter, som Jura har lavet til sine egne kaffemaskiner.',
			'why'     => <<<'HTML'
<p>Juras fuldautomater er en stor investering, og mærkets egne tabletter er lavet til at passe til maskinernes afkalkningsprogram. Tabletterne opløser kalken og forsegler samtidig maskinen, så ny kalk bygger sig langsommere op. De er fri for fosfat.</p>
<p>Med 36 tabletter i pakken er det det dyreste køb på listen, men også det, der rækker længst. Det er et fornuftigt valg, hvis du har en Jura og vil have afkalkning til lang tid på én gang. Overvejer du en ny maskine, kan du læse vores guide til <a href="/espressomaskine-med-kvaern/">espressomaskine med kværn</a>.</p>
HTML,
			'good'    => [ 'Ejere af en Jura', 'Dig, der vil købe ind til lang tid' ],
			'less'    => [ 'Dig, der kun skal afkalke en enkelt gang' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du det rigtige afkalkningsmiddel</h2>
<p>Det vigtigste er, at midlet passer til din maskine. Slå op i manualen, og se, hvad producenten skriver om afkalkning. Har din espressomaskine et indbygget afkalkningsprogram, er det som regel bygget op om producentens eget middel, og så er det det sikre valg. Til en almindelig filterkaffemaskine eller elkedel kan et universelt afkalkningsmiddel fint gøre arbejdet. Du kan se alle produkter i kategorien <a href="/baristaudstyr/afkalkning/">afkalkning og rengøring</a>.</p>
<h3>Flydende eller tabletter</h3>
<p>Flydende afkalker er hurtig at hælde i og nem at dosere til små og store maskiner. Tabletter fylder mindre, holder sig godt og gør doseringen helt enkel, fordi én tablet svarer til én omgang. Begge dele virker – vælg den form, som din maskine er lavet til, eller som du synes er nemmest.</p>
<h2>Hvor tit skal du afkalke?</h2>
<p>Det afhænger af, hvor hårdt vandet er, og hvor meget du brygger. I områder med meget kalk og ved daglig brug skal maskinen afkalkes oftere end i et sommerhus, der kun bruges i weekenden. Mange maskiner giver selv besked, når det er tid. Tegn på kalk er længere bryggetid, mere støj, lunken kaffe og hvide aflejringer i vandbeholderen.</p>
<h2>Sådan afkalker du en kaffemaskine</h2>
<p>Bland afkalkningsmidlet med vand efter anvisningen, og hæld det i vandbeholderen. Kør en brygning uden kaffe og filter, og lad gerne opløsningen stå lidt i maskinen undervejs, så den kan virke. Skyl derefter med rent vand to til tre gange, så der ikke er rester af midlet i den næste kande kaffe.</p>
<p>På en espressomaskine starter du normalt maskinens afkalkningsprogram og følger trinene. Husk at tage et eventuelt vandfilter ud først, hvis manualen siger det.</p>
<h2>Eddike, citronsyre eller afkalker?</h2>
<p>Citronsyre er et almindeligt og effektivt middel mod kalk og findes i flere færdige afkalkere. Eddike bruger mange som husråd, men det kan sætte lugt i maskinen, og flere producenter fraråder det, fordi det kan slide på pakninger og slanger. Et færdigt afkalkningsmiddel er doseret til formålet og er det trygge valg til en dyr maskine.</p>
<h2>Afkalkning er ikke det samme som rengøring</h2>
<p>Afkalkning fjerner mineraler fra vandet. Kaffeolier og fedt fra mælk kræver noget andet: rensetabletter til bryggeenheden og et middel til mælkesystemet. Har du en espressomaskine eller en <a href="/bedste-maelkeskummer/">mælkeskummer</a>, er det en god idé at holde begge dele ved lige.</p>
HTML,
	'faq'      => [
		[ 'Hvad er det bedste afkalkningsmiddel til kaffemaskinen?', 'Det, der passer til din maskine. Til espressomaskiner med afkalkningsprogram er producentens eget middel det sikre valg. Til filterkaffemaskiner og elkedler fungerer et universelt afkalkningsmiddel godt.' ],
		[ 'Hvor tit skal man afkalke en kaffemaskine?', 'Det afhænger af vandets hårdhed og hvor meget du brygger. Følg producentens råd – Moccamaster anbefaler for eksempel hver 40. brygning eller hver 14. dag ved normal brug.' ],
		[ 'Kan man bruge eddike til at afkalke en kaffemaskine?', 'Det er et udbredt husråd, men eddike kan give lugt og slide på pakninger. Et afkalkningsmiddel lavet til formålet er det sikreste til din maskine.' ],
		[ 'Kan jeg bruge det samme afkalkningsmiddel til kaffemaskine og elkedel?', 'Ja, flere midler er lavet til begge dele, for eksempel tabletterne fra Bosch/Siemens og Melittas flydende afkalker.' ],
		[ 'Skal man skylle efter afkalkning?', 'Ja. Kør to til tre omgange med rent vand bagefter, så der ikke sidder rester af afkalkningsmidlet i maskinen.' ],
	],
];
