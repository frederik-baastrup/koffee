<?php
/**
 * Omskrevet fra det gamle koffee.dk (/pour-over-kaffebrygger/, 2021). Ny tekst; Chemex er med igen i en anden størrelse.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'pour-over-kaffebrygger',
	'date'     => '2021-10-13 10:00:00',
	'keyword'  => 'pour over kaffebrygger',
	'title'    => 'Pour over kaffebrygger: Vores bud på de 5 bedste',
	'excerpt'  => 'Med en pour over kaffebrygger hælder du selv vandet over kaffen og får en ren, klar kop med masser af smag. Her er vores bud på de 5 bedste fra de butikker, vi samarbejder med – fra V60 til Chemex.',
	'more_cat' => 'pour-over',
	'intro'    => <<<'HTML'
<p>Pour over er filterkaffe, hvor du selv er maskinen. Du hælder varmt vand over den malede kaffe i en tragt, og kaffen løber langsomt gennem filteret og ned i kanden eller koppen. Det tager et par minutter, men du bestemmer selv tempoet, temperaturen og mængden – og det kan smages. Kaffen bliver ren og klar, og du får lov at opleve, hvordan to slags bønner virkelig smager forskelligt.</p>
<p>Udstyret er billigt, og det fylder næsten ingenting. Herunder er vores bud på de 5 bedste pour over kaffebryggere fra de butikker, vi samarbejder med: klassiske tragte, en kande i ét stykke, en, der slipper for papirfiltre, og en til turen. Nederst kan du læse, hvordan du kommer godt i gang.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4977642730137',
			'price'   => 125.95,
			'name'    => 'Hario V60 Glasdripper 02',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Den klassiske kegleformede tragt i varmefast glas med aftagelig holder – enkel at bruge og nem at gøre ren.',
			'why'     => <<<'HTML'
<p>Hario V60 er tragten, som moderne pour over er bygget op omkring. Den kegleformede tragt giver dig fuld kontrol: hælder du langsomt, trækker kaffen længere; hælder du hurtigt, bliver den lettere. Det gør V60 nem at begynde med og sjov at blive bedre til.</p>
<p>Denne udgave er i varmefast glas med en aftagelig sort holder. Glas tager ikke smag og er nemt at holde rent, og holderen gør tragten stabil på koppen eller kanden.</p>
<p>Størrelse 02 er den mest alsidige: den passer til en enkelt kop, men også til en lille kande. Køb V60-filtre i samme størrelse, så er du i gang.</p>
HTML,
			'good'    => [ 'Første pour over', 'En til fire kopper', 'Dig, der vil lære teknikken' ],
			'less'    => [ 'Dig, der vil have en kande med i købet' ],
		],
		[
			'ean'     => '028068001029',
			'price'   => 374,
			'name'    => 'Chemex Classic 8 kopper',
			'role'    => 'Bedst til flere',
			'reviews' => [],
			'verdict' => 'Tragt og kande i ét stykke glas, der brygger en blød, rund kaffe og bagefter står på bordet som serveringskande.',
			'why'     => <<<'HTML'
<p>Chemex er pour over til hele morgenbordet. Tragt og kande er lavet i ét, så du brygger direkte i den kande, du serverer fra. Formen med trækraven er let at kende på køkkenbordet.</p>
<p>Chemex bruger sine egne tykke papirfiltre, og det er en stor del af hemmeligheden. De holder mere af kaffens olie og bundfald tilbage, så kaffen bliver blød og rund i smagen og meget klar i koppen.</p>
<p>Størrelsen til 8 kopper er god, når I er flere, eller når du vil brygge en hel kande til frokosten. Den er også flot på bordet, når der er gæster.</p>
HTML,
			'good'    => [ 'Familien og gæster', 'Dig, der vil have en blød og klar kaffe', 'Flot servering' ],
			'less'    => [ 'Kun én kop ad gangen' ],
		],
		[
			'ean'     => '4977642728172',
			'price'   => 394.95,
			'name'    => 'Hario V60 Switch sæt 02',
			'role'    => 'Nemmest at ramme',
			'reviews' => [],
			'verdict' => 'Tragt med ventil, der kombinerer pour over med fuld udtrækning – sælges som sæt med kande.',
			'why'     => <<<'HTML'
<p>Hario Switch er til dig, der kan lide pour over, men gerne vil have et mere ens resultat uden at øve teknikken. Tragten har en ventil i bunden. Når den er lukket, trækker kaffen i vandet som i en stempelkande; når du åbner, løber kaffen igennem filteret som i en almindelig V60.</p>
<p>Det giver dig en dybere udtrækning og mere kontrol over smagsprofilen, og du behøver ikke stå og hælde i et bestemt tempo. Du kan også lade ventilen stå åben og bruge den som en helt almindelig V60.</p>
<p>Sættet kommer med kande, så du har det hele fra start. Det er et godt valg, hvis du vil have pour over-kaffe på hverdage uden at gøre det til en sport.</p>
HTML,
			'good'    => [ 'Hverdagsbrygning', 'Dig, der vil have samme smag hver gang', 'To metoder i én tragt' ],
			'less'    => [ 'Dig, der allerede har en V60 og bare vil hælde' ],
		],
		[
			'ean'     => '699965336820',
			'price'   => 339,
			'name'    => 'Bodum Pour Over 1,0 l',
			'role'    => 'Uden papirfilter',
			'reviews' => [],
			'verdict' => 'Glaskande til 1 liter med stålfilter og krave i kork, så du slipper for at købe papirfiltre.',
			'why'     => <<<'HTML'
<p>Bodum Pour Over er til dig, der vil brygge pour over uden at tænke på papirfiltre. Filteret er af stål og sidder i toppen af kanden, så du kommer kaffen i, hælder vandet over og skyller filteret bagefter.</p>
<p>Et stålfilter lader mere af kaffens naturlige olie komme igennem end papir. Kaffen bliver lidt fyldigere og med mere krop end fra en papirtragt – tættere på stempelkanden i stilen, men stadig brygget med pour over-metoden.</p>
<p>Kanden er i glas og rummer 1 liter, og kraven i kork gør den rar at holde om og hælde fra. Den er et godt valg, hvis I er et par stykker, der drikker kaffe hver dag.</p>
HTML,
			'good'    => [ 'Dig, der vil undgå papirfiltre', 'Fyldig kaffe med krop', 'To til fire personer' ],
			'less'    => [ 'Dig, der vil have helt klar kaffe uden bundfald' ],
		],
		[
			'ean'     => '6939236373142',
			'price'   => 209,
			'name'    => 'Stanley Perfect-Brew',
			'role'    => 'Bedst på tur',
			'reviews' => [],
			'verdict' => 'Robust pour over-brygger til 0,6 liter, der kan bruges hjemme, i naturen og på stranden.',
			'why'     => <<<'HTML'
<p>Stanley Perfect-Brew er pour over-bryggeren til dig, der vil have god kaffe med ud. Den er lavet til at kunne bruges både hjemme og ude – på stranden, i shelteret eller ved bålet – og den sættes oven på din termokande eller dit krus.</p>
<p>Du kommer kaffen i, hælder varmt vand over, og så løber kaffen direkte ned i det, du skal drikke af. Så har du en frisk kop på stedet uden at slæbe en hel kande med.</p>
<p>Stanley er kendt for termokander og krus til friluftslivet, og bryggeren passer naturligt ind i det udstyr. Læs også vores artikel om <a href="/baalkaffe/">bålkaffe</a>.</p>
HTML,
			'good'    => [ 'Camping og vandreture', 'Stranden og sommerhuset', 'Dig, der har en termokande' ],
			'less'    => [ 'Store kander til mange' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en pour over kaffebrygger</h2>
<p>Alle pour over-tragte gør det samme: holder et filter med kaffe, mens du hælder vand over. Forskellen ligger i formen, materialet og filteret, og det påvirker både smagen og hvor nem den er at bruge. Se alle <a href="/kaffebrygning/pour-over/">pour over kaffebryggere</a> og vores øvrige udstyr til <a href="/kaffebrygning/">kaffebrygning</a>.</p>
<h3>Tragt, kande eller sæt?</h3>
<p>En tragt alene sættes på din kop eller kande og er billigst. En kande med indbygget tragt, som Chemex, er praktisk, når du laver kaffe til flere. Et sæt med tragt og kande giver dig det hele på én gang, hvis du starter fra bunden.</p>
<h3>Papirfilter eller stålfilter?</h3>
<p>Papirfiltre holder olie og fint bundfald tilbage, og det giver en ren og klar kaffe. Stålfiltre lader mere komme igennem, så kaffen får mere fylde og krop – og du slipper for at købe filtre. Vælger du papir, så brug de filtre, der passer til din tragt. Se <a href="/kaffebrygning/kaffefilter/">kaffefiltre</a>.</p>
<h3>Glas, keramik, plast eller metal?</h3>
<p>Glas og keramik er smukke og tager ikke smag, men kan gå i stykker. Keramik holder godt på varmen, når den er skyllet med varmt vand. Plast er billigt, let og robust, og metal er det oplagte valg på tur.</p>
<h3>Det skal du også bruge</h3>
<p>En <a href="/kaffebrygning/kedel-til-kaffe/">kedel med svanehals</a> gør det langt nemmere at hælde roligt og præcist. En <a href="/kaffevaegt/">kaffevægt</a> med timer hjælper dig med at ramme den samme opskrift hver gang. Og kaffen skal males mellemgroft – helst lige før brygning i en <a href="/manuel-kaffekvaern/">manuel kaffekværn</a> eller en <a href="/elektrisk-kaffekvaern/">elektrisk kaffekværn</a>.</p>
<h3>Sådan kommer du i gang</h3>
<p>Skyl filteret med varmt vand, så smagen af papir forsvinder, og hæld vandet ud. Kom kaffen i, og hæld lidt vand over, så kaffen lige bliver våd. Vent et halvt minut, mens den bobler og afgiver gas, og hæld så resten af vandet på i rolige cirkler. Et godt udgangspunkt er omkring 60 gram kaffe pr. liter vand, som du justerer efter smag.</p>
<p>Holder du kaffen varm til senere, så se vores guide til <a href="/bedste-termokande/">termokander</a>. Og vil du vide mere om kaffe og helbred, så læs <a href="/er-kaffe-sundt/">er kaffe sundt?</a></p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på pour over og filterkaffe fra en maskine?', 'Princippet er det samme, men ved pour over styrer du selv vandets temperatur, mængde og tempo. Det giver mere kontrol over smagen, mens en maskine gør det samme hver gang uden din indblanding.' ],
		[ 'Hvor groft skal kaffen males til pour over?', 'Mellemgroft, lidt finere end til stempelkande. Løber vandet for hurtigt igennem, og smager kaffen tynd, så mal finere. Løber det for langsomt, og smager kaffen bitter, så mal grovere.' ],
		[ 'Hvilken temperatur skal vandet have?', 'Lige under kogepunktet. Lad kedlen stå et øjeblik efter, den har kogt, før du hælder.' ],
		[ 'Hvad betyder 01, 02 og 03 på en V60?', 'Det er størrelsen. 01 er til en kop, 02 til en til fire kopper og 03 til flere. Køb filtre i samme størrelse som tragten.' ],
	],
];
