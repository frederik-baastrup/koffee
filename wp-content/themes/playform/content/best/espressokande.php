<?php
/**
 * Omskrevet fra det gamle koffee.dk (/espressokande/, 2021). Ny tekst; Moka Express er den eneste model fra den gamle guide, og her i en anden størrelse.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'espressokande',
	'date'     => '2021-10-12 10:00:00',
	'keyword'  => 'espressokande',
	'title'    => 'Espressokande: Vores bud på de 5 bedste til komfuret',
	'excerpt'  => 'En espressokande giver dig stærk, aromatisk kaffe på komfuret uden maskine og uden strømstik. Her er vores bud på de 5 bedste espressokander fra de butikker, vi samarbejder med – også til induktion.',
	'more_cat' => 'espressokande',
	'intro'    => <<<'HTML'
<p>Du behøver ikke en espressomaskine for at få en lille, kraftig kop kaffe. En espressokande – også kaldet mokkakande eller italiensk kaffebrygger – står på komfuret og presser vandet op gennem kaffen med damptryk. Den fylder ingenting, holder i årevis og laver kaffe, der minder om espresso, på få minutter.</p>
<p>Det vigtigste valg er, om kanden skal kunne bruges på induktion, og hvor mange kopper du vil lave ad gangen. Herunder er vores bud på de 5 bedste espressokander fra de butikker, vi samarbejder med, fra den ikoniske klassiker til kanden, der giver crema. Nederst får du gode råd om størrelse, materiale og brygning.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8006363011631',
			'price'   => 315,
			'name'    => 'Bialetti Moka Express 6 kopper',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Den ottekantede klassiker, der brygger med damp, tryk og varme – nem at bruge og nok til hele morgenbordet.',
			'why'     => <<<'HTML'
<p>Bialetti Moka Express er kanden, de fleste ser for sig, når de hører ordet espressokande. Den ottekantede form har været en del af italienske køkkener i generationer, og princippet er stadig det samme: vand i bunden, kaffe i tragten, toppen på – og så klarer damp, tryk og varme resten.</p>
<p>Størrelsen til 6 kopper er god, når I er flere, eller når du vil lave kaffe til en cappuccino med opskummet mælk. Husk, at en "kop" i en espressokande er en lille espressokop, ikke et krus.</p>
<p>Den er enkel, billig og nem at få reservedele til. Har du gas eller en almindelig kogeplade, er det her det sikre valg.</p>
HTML,
			'good'    => [ 'Dig, der vil have originalen', 'Flere kopper ad gangen', 'Gas og almindelige kogeplader' ],
			'less'    => [ 'Induktion uden adapterplade' ],
		],
		[
			'ean'     => '8006363029094',
			'price'   => 549,
			'name'    => 'Bialetti mokkabrygger til induktion 6 kopper',
			'role'    => 'Bedst til induktion',
			'reviews' => [],
			'verdict' => 'Mokkabrygger med to lag, hvor det ydre lag af rustfrit stål gør den klar til induktionskogepladen.',
			'why'     => <<<'HTML'
<p>Har du induktion, er det her espressokanden, du skal kigge på. En klassisk kande i aluminium virker ikke på induktion, men denne Bialetti er bygget med to lag, hvor den ydre del er af rustfrit stål. Så kan kogepladen varme den op helt normalt.</p>
<p>Du får stadig den traditionelle måde at brygge på og den kraftige, aromatiske kaffe, du kender fra mokkakanden. Den passer til 6 kopper, så der er nok til et par stykker eller til en stor latte.</p>
<p>Det er et nemmere valg end at købe en adapterplade til en kande i aluminium, og den kan selvfølgelig også bruges på andre komfurer.</p>
HTML,
			'good'    => [ 'Induktionskogeplader', 'Dig, der vil have den klassiske bryggemåde', 'Flere kopper ad gangen' ],
			'less'    => [ 'Dig, der kun laver en enkelt kop' ],
		],
		[
			'ean'     => '8006363040563',
			'price'   => 638,
			'name'    => 'Bialetti Brikka 4 kopper',
			'role'    => 'Bedst til crema',
			'reviews' => [],
			'verdict' => 'Mokkabrygger med en beholder med silikonemembran, der giver en fyldig crema på kaffen.',
			'why'     => <<<'HTML'
<p>Bialetti Brikka er til dig, der savner cremaen. En almindelig espressokande giver stærk kaffe, men sjældent det lysebrune skumlag, du kender fra espressomaskinen. Brikka har en beholder med en silikonemembran, som giver en fyldig crema, der ellers er forbeholdt maskiner.</p>
<p>Smagen er stadig mokkakandens: kraftig, rund og aromatisk. Cremaen giver kaffen en blødere mundfølelse, og den ser flot ud i koppen, når du serverer for gæster.</p>
<p>Med plads til 4 kopper passer den til et par personer. Den er et godt bud, hvis du gerne vil tættere på espresso uden at investere i en <a href="/manuel-espressomaskine/">manuel espressomaskine</a>.</p>
HTML,
			'good'    => [ 'Dig, der vil have crema', 'To personer', 'Gæster og efter middagen' ],
			'less'    => [ 'Dig, der vil have den helt enkle klassiker' ],
		],
		[
			'ean'     => '8003299412662',
			'price'   => 670,
			'name'    => 'Alessi Pulcina 3 kopper',
			'role'    => 'Bedst design',
			'reviews' => [],
			'verdict' => 'Espressokande i aluminium og rustfrit stål med en skulpturel form, der gør den til et blikfang på komfuret.',
			'why'     => <<<'HTML'
<p>Alessi Pulcina er espressokanden til dig, der vil have noget smukt at se på hver morgen. Formen er kunstnerisk og helt sin egen, og kanden er et designstykke, der også får lov at stå fremme, når den ikke er i brug.</p>
<p>Den er lavet af aluminium og rustfrit stål, og den brygger efter det samme princip som andre espressokander: vand i bunden, kaffe i midten og den færdige kaffe i toppen.</p>
<p>Med plads til 3 kopper er den lavet til en eller to personer. Den er også en flot gave til den, der allerede har det meste i køkkenet. Server kaffen i rigtige <a href="/espressokopper/">espressokopper</a>, så er stemningen hjemme.</p>
HTML,
			'good'    => [ 'Designelskere', 'En til to personer', 'Gaven' ],
			'less'    => [ 'Store kander til mange' ],
		],
		[
			'ean'     => '4004094246364',
			'price'   => 299,
			'name'    => 'Westmark Brasilia 3 kopper',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Enkel espressokande med sikkerhedsventil, varmeisolerende håndtag og silikonepakning – til gas, el og keramisk plade.',
			'why'     => <<<'HTML'
<p>Westmark Brasilia er den fornuftige espressokande til en eller to kopper. Den har det, en god kande skal have: en sikkerhedsventil, et håndtag, der isolerer mod varmen, og en pakning i silikone, der lukker vandkammeret tæt.</p>
<p>Den kan bruges på gas, elektriske og keramiske kogeplader, men ikke på induktion. Kanden skal vaskes i hånden, og det er alligevel det bedste for en espressokande, fordi kaffens olier er med til at give smagen.</p>
<p>Westmark er et tysk mærke inden for køkkenredskaber. Brasilia sælges af flere af de butikker, vi samarbejder med, så du kan vælge den billigste.</p>
HTML,
			'good'    => [ 'Lavt budget', 'En til to kopper', 'Gas og keramisk kogeplade' ],
			'less'    => [ 'Induktion', 'Opvaskemaskinen' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en espressokande</h2>
<p>En espressokande har tre kamre: bunden til vand, en tragt til kaffen og en top, hvor den færdige kaffe samles. Når vandet koger, presser dampen det op gennem kaffen. Det er enkelt, men nogle valg gør en stor forskel. Se alle <a href="/kaffebrygning/espressokande/">espressokander</a> med aktuelle priser.</p>
<h3>Induktion eller ej?</h3>
<p>Kander i aluminium virker ikke på induktion, fordi induktion kræver et magnetisk materiale i bunden. Har du induktion, så vælg en kande med stålbund eller en kande, der er beregnet til induktion. Alternativet er en adapterplade, men den gør brygningen langsommere.</p>
<h3>Aluminium eller rustfrit stål?</h3>
<p>Aluminium leder varmen godt og er det klassiske materiale. Det er let og som regel billigt, men skal vaskes i hånden. Rustfrit stål er mere robust, tåler ofte mere og kan bruges på flere typer komfurer.</p>
<h3>Hvor mange kopper?</h3>
<p>Størrelsen angives i espressokopper, og en kop er kun en lille slurk. En kande til 3 kopper er god til en person, der vil have en dobbelt espresso eller en cappuccino. Til 2–3 personer skal du op på 6 kopper. Kanden fungerer bedst, når du fylder den helt op, så vælg den størrelse, du bruger mest.</p>
<h3>Sådan brygger du</h3>
<p>Fyld vand i bunden op til ventilen – gerne varmt vand, så kaffen ikke står og bliver bitter, mens vandet varmes op. Fyld tragten med kaffe uden at presse den sammen, skru kanden godt til, og sæt den på mellemvarme. Tag den af, så snart kaffen begynder at boble og sprutte. Kaffen skal males fint, men lidt grovere end til espresso. Du kan male den selv med en <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a> eller en <a href="/manuel-kaffekvaern/">manuel kaffekværn</a>.</p>
<h3>Vedligehold</h3>
<p>Skyl kanden i varmt vand uden sæbe, og lad den tørre adskilt. Skift pakningen, når den bliver hård eller utæt, og tjek, at ventilen ikke er stoppet. Så holder en espressokande i mange år.</p>
<p>Vil du have mælk i kaffen, så se vores guide til <a href="/bedste-maelkeskummer/">mælkeskummere</a>. Og er du i tvivl om, hvor stærk kaffen er, så læs om <a href="/hvor-meget-koffein-er-der-i-en-kop-kaffe/">koffein i en kop kaffe</a>.</p>
HTML,
	'faq'      => [
		[ 'Er en espressokande det samme som en mokkakande?', 'Ja. Espressokande, mokkakande, mokkabrygger og italiensk kaffebrygger er forskellige navne for den samme kande, der brygger kaffe på komfuret med damptryk.' ],
		[ 'Laver en espressokande rigtig espresso?', 'Ikke helt. Trykket er lavere end i en espressomaskine, så kaffen bliver stærk og aromatisk, men typisk uden den samme crema. Kander som Bialetti Brikka er lavet til at give mere crema.' ],
		[ 'Kan man bruge en espressokande på induktion?', 'Kun hvis bunden er magnetisk, fx i rustfrit stål, eller hvis kanden er beregnet til induktion. En kande i aluminium kræver en adapterplade.' ],
		[ 'Hvorfor smager kaffen fra min espressokande bittert?', 'Det skyldes ofte for høj varme, eller at kanden står for længe på pladen. Brug mellemvarme, start med varmt vand, og tag kanden af, så snart den begynder at sprutte.' ],
		[ 'Kan man vaske en espressokande i opvaskemaskinen?', 'Kander i aluminium bør vaskes i hånden. Nogle kander i stål tåler opvaskemaskinen – tjek producentens anvisning.' ],
	],
];
