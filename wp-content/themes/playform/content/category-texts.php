<?php
/**
 * Introtekster, SEO-tekster og FAQ til kategorierne og underkategorierne (landingssiderne) på kaffesitet.
 * Kun generel købsrådgivning – ingen påstande om konkrete produkter og ingen opfundne tal (projektregel 2).
 * Seedes af playform_seed_category_texts() og kan derefter rettes under Produkter › Kategorier.
 * Tomme felter udfyldes ved næste udrulning, felter med tekst røres aldrig (redaktørens rettelser vinder).
 * Formuleringerne er skrevet til dette site og må ikke kopieres til søstersitesne (duplicate content).
 *
 * @return array<string,array{intro?:string,seo?:string,faq?:array<int,array{0:string,1:string}>}>
 */

defined( 'ABSPATH' ) || exit;

return [
	// Hovedkategorier.
	'kaffemaskiner'    => [
		'intro' => 'Filterkaffemaskiner, maskiner med kværn eller termokande og kapselmaskiner – til dig, der vil have god kaffe uden besvær. Sammenlign modeller fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Kaffemaskine – find den, der passer til din morgen</h2><p>For de fleste danske hjem er kaffemaskinen den maskine i køkkenet, der bliver brugt allermest. Her har vi samlet kaffemaskiner fra de butikker, vi samarbejder med, så du kan se udvalget, priserne og lagerstatus ét sted. Data hentes morgen og aften, og når du har fundet din maskine, gennemfører du købet hos butikken.</p><h3>Filter, kværn eller kapsel?</h3><p>En klassisk <a href="/kaffemaskiner/filterkaffemaskine/">filterkaffemaskine</a> brygger en hel kande på én gang og er det oplagte valg, når flere drikker kaffe om morgenen. En <a href="/kaffemaskiner/kaffemaskine-med-kvaern/">kaffemaskine med kværn</a> maler bønnerne lige før bryggningen, så du får mere smag ud af dem. En <a href="/kaffemaskiner/kapselmaskine/">kapselmaskine</a> laver én kop ad gangen på kort tid, men kapslerne gør hver kop dyrere end kaffe fra en pose bønner.</p><h3>Glaskande eller termokande</h3><p>En glaskande står på en varmeplade, som holder kaffen varm, men lang tid på pladen kan give en bitter smag. En <a href="/kaffemaskiner/kaffemaskine-med-termokande/">termokande</a> holder på varmen uden plade, så kaffen smager mere frisk, når du skænker kop nummer to.</p><h3>Det skal du også tænke på</h3><p>Se på, hvor mange kopper maskinen brygger, om den kan lave en mindre portion, og hvor nem den er at afkalke. Har du hårdt vand, er regelmæssig afkalkning en af de bedste måder at holde maskinen kørende og kaffen velsmagende.</p>',
		'faq'   => [
			[ 'Hvilken kaffemaskine skal jeg vælge?', 'Start med, hvor meget kaffe I drikker. Til mange kopper ad gangen er en filterkaffemaskine det enkleste. Til én kop ad gangen kan en kapselmaskine eller en lille filtermaskine passe bedre. Vil du have mest smag ud af bønnerne, så se på en maskine med kværn.' ],
			[ 'Er en termokande bedre end en glaskande?', 'En termokande holder kaffen varm uden varmeplade, så smagen holder sig bedre over tid. En glaskande på varmeplade er ofte billigere, men kaffen kan blive bitter, hvis den står længe.' ],
			[ 'Hvor tit skal en kaffemaskine afkalkes?', 'Det afhænger af, hvor hårdt dit vand er, og hvor meget du bruger maskinen. Følg producentens anvisning – mange maskiner giver selv besked, når det er tid.' ],
		],
	],
	'espressomaskiner' => [
		'intro' => 'Fuldautomatiske, semiautomatiske og manuelle espressomaskiner – fra maskiner, der klarer alt på et tryk, til portafiltermaskiner, hvor du selv er barista. Se udvalget fra vores partnerbutikker.',
		'seo'   => '<h2>Espressomaskine – fra et tryk på knappen til rigtig barista-håndværk</h2><p>En espressomaskine presser varmt vand gennem fintmalet kaffe under højt tryk, og det giver den koncentrerede, fyldige kop med crema på toppen. Her finder du espressomaskiner fra de butikker, vi samarbejder med, med priser og lagerstatus, der opdateres to gange i døgnet. Selve købet foregår hos butikken.</p><h3>Fuldautomatisk eller semiautomatisk?</h3><p>En <a href="/espressomaskiner/fuldautomatisk-espressomaskine/">fuldautomatisk espressomaskine</a> maler bønnerne, brygger og skummer ofte også mælken for dig. Den er nem i hverdagen og oplagt, hvis flere i husstanden skal bruge den. En <a href="/espressomaskiner/semiautomatisk-espressomaskine/">semiautomatisk maskine med portafilter</a> kræver, at du selv doserer, tamper og skummer – til gengæld har du fuld kontrol over resultatet.</p><h3>Husk kværnen</h3><p>Espresso stiller store krav til formalingen. Har maskinen ikke en indbygget kværn, så regn en god <a href="/kaffekvaerne/espressokvaern/">espressokværn</a> med i budgettet. Vil du have det hele i én maskine, så se på <a href="/espressomaskiner/espressomaskine-med-kvaern/">espressomaskiner med kværn</a>.</p><h3>Mælkedrikke</h3><p>Drikker du cappuccino, latte eller flat white, er mælkesystemet vigtigt. En damplanse giver dig selv kontrollen over skummet, mens et automatisk mælkesystem gør det for dig. Se <a href="/espressomaskiner/espressomaskine-med-maelkeskummer/">espressomaskiner med mælkeskummer</a>.</p>',
		'faq'   => [
			[ 'Hvad er forskellen på en fuldautomatisk og en semiautomatisk espressomaskine?', 'En fuldautomatisk maskine maler, doserer og brygger selv – ofte også med mælkeskum. På en semiautomatisk maskine fylder du selv kaffe i portafilteret og styrer processen, hvilket kræver mere øvelse, men giver mere kontrol.' ],
			[ 'Skal jeg købe en kværn til min espressomaskine?', 'Hvis maskinen ikke har en indbygget kværn, ja. Espresso kræver en fin og jævn formaling, og friskmalede bønner giver en markant bedre kop end færdigmalet kaffe.' ],
			[ 'Kan man lave almindelig sort kaffe på en espressomaskine?', 'Du kan lave en americano ved at fortynde en espresso med varmt vand. Mange fuldautomatiske maskiner har også en knap til en større kop kaffe.' ],
			[ 'Hvordan vedligeholder man en espressomaskine?', 'Skyl og rengør efter brug, rens damplansen efter hver mælkeskumning, og afkalk efter producentens anvisning. Fuldautomatiske maskiner har ofte et rengøringsprogram.' ],
		],
	],
	'kaffekvaerne'     => [
		'intro' => 'Elektriske og manuelle kaffekværne samt espressokværne. Friskmalede bønner giver mere smag i koppen – find kværnen fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Kaffekværn – den nemmeste vej til bedre kaffe</h2><p>Kaffe begynder at miste aroma kort efter, den er malet. Maler du bønnerne lige før, du brygger, får du derfor mere smag ud af dem – uanset om du laver filterkaffe, stempelkaffe eller espresso. Her har vi samlet kaffekværne fra vores partnerbutikker med opdaterede priser og lagerstatus.</p><h3>Kegle- eller skivekværn frem for slagkværn</h3><p>En kværn med kværnskiver eller keglekværn knuser bønnerne til en ensartet størrelse, og det giver en jævn ekstraktion. En billig slagkværn med kniv hakker bønnerne i uens stykker, og det kan give en kop, der både smager bittert og surt.</p><h3>Elektrisk eller manuel?</h3><p>En <a href="/kaffekvaerne/elektrisk-kaffekvaern/">elektrisk kaffekværn</a> er hurtig og nem, når du maler til en hel kande hver morgen. En <a href="/kaffekvaerne/manuel-kaffekvaern/">manuel kaffekværn</a> fylder mindre, larmer ikke og kan komme med på tur – men kræver lidt arm, især til fin formaling.</p><h3>Til espresso</h3><p>Espresso kræver en meget fin og præcis justering. En <a href="/kaffekvaerne/espressokvaern/">espressokværn</a> er bygget til netop det, så du kan finjustere formalingen, til shottet smager, som det skal.</p>',
		'faq'   => [
			[ 'Hvorfor skal jeg male kaffen selv?', 'Malet kaffe mister aroma hurtigt. Når du maler lige før bryggningen, får du mere af bønnernes smag med i koppen.' ],
			[ 'Hvad er forskellen på en kværn og en slagkværn?', 'En rigtig kværn med skiver eller kegle maler bønnerne til ensartede partikler. En slagkværn hakker dem med en kniv, så nogle stykker bliver meget fine og andre grove, hvilket giver en ujævn kop.' ],
			[ 'Kan jeg bruge den samme kværn til filter og espresso?', 'Nogle kværne kan begge dele, men espresso kræver en meget fin og præcis justering. Tjek i produktbeskrivelsen, hvilke bryggemetoder kværnen er beregnet til.' ],
		],
	],
	'kaffebrygning'    => [
		'intro' => 'Pour over, stempelkander, espressokander, Aeropress, cold brew, filtre og kedler – alt til at brygge kaffe i hånden. Se udvalget fra vores partnerbutikker.',
		'seo'   => '<h2>Kaffebrygning i hånden – enkelt udstyr, stor smag</h2><p>Du behøver ikke en dyr maskine for at lave fremragende kaffe. Med en dripper, en stempelkande eller en espressokande kan du brygge en kop, der er præcis, som du kan lide den. Her har vi samlet bryggeudstyr fra de butikker, vi samarbejder med – priser og lagerstatus hentes to gange i døgnet.</p><h3>Vælg din bryggemetode</h3><p><a href="/kaffebrygning/pour-over/">Pour over</a> giver en ren og klar kop, hvor du selv styrer vandet. En <a href="/kaffebrygning/stempelkande/">stempelkande</a> giver en fyldig kop med mere krop og er meget nem at bruge. En <a href="/kaffebrygning/espressokande/">espressokande til komfuret</a> laver en stærk, koncentreret kaffe. <a href="/kaffebrygning/aeropress/">Aeropress</a> er kompakt og alsidig, og <a href="/kaffebrygning/cold-brew/">cold brew</a> trækker langsomt i koldt vand og giver en blød kaffe til varme dage.</p><h3>Det lille ekstra</h3><p>En <a href="/kaffebrygning/kedel-til-kaffe/">kedel med svanehals</a> gør det meget nemmere at hælde vandet jævnt ud over kaffen ved pour over. Og glem ikke de rigtige <a href="/kaffebrygning/kaffefilter/">kaffefiltre</a> til din dripper.</p>',
		'faq'   => [
			[ 'Hvilken bryggemetode giver den bedste kaffe?', 'Det handler om smag. Pour over giver en ren og let kop, stempelkande en fyldigere kop med mere krop, og en espressokande en stærk og koncentreret kaffe. Prøv dig frem.' ],
			[ 'Hvilken formaling skal jeg bruge?', 'Som tommelfingerregel groft til stempelkande og cold brew, mellem til pour over og filter, og fint til espressokande og Aeropress. Justér efter smagen.' ],
			[ 'Behøver jeg en særlig kedel?', 'Til stempelkande og espressokande er en almindelig elkedel fin. Til pour over gør en kedel med svanehals det meget lettere at hælde præcist.' ],
		],
	],
	'maelkeskummere'   => [
		'intro' => 'Elektriske og manuelle mælkeskummere samt mælkekander til damplansen – til cappuccino, latte og kakao derhjemme. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Mælkeskummer – cafédrikke uden en dyr maskine</h2><p>Med en mælkeskummer kan du lave cappuccino, latte og varm kakao derhjemme – også selvom din kaffemaskine ikke har en damplanse. Her finder du mælkeskummere og mælkekander fra vores partnerbutikker, så du kan sammenligne dem side om side.</p><h3>Elektrisk eller manuel</h3><p>En <a href="/maelkeskummere/elektrisk-maelkeskummer/">elektrisk mælkeskummer</a> varmer og skummer mælken for dig på et tryk, og mange kan også lave kold mælkeskum til iskaffe. En <a href="/maelkeskummere/manuel-maelkeskummer/">manuel mælkeskummer</a> – en lille piskestav eller en kande med stempel – er billig og fylder næsten ingenting.</p><h3>Har du en damplanse?</h3><p>Så er en <a href="/maelkeskummere/maelkekande/">mælkekande i rustfrit stål</a> det vigtigste tilbehør. Den rigtige størrelse og en spids tud gør det nemmere at få en fin, blank mælk og måske tegne et hjerte i koppen.</p>',
		'faq'   => [
			[ 'Kan man skumme plantemælk?', 'Ja, men resultatet varierer meget fra mærke til mærke. Mange plantedrikke findes i en barista-udgave, der er lavet til at skumme bedre.' ],
			[ 'Hvordan rengør man en elektrisk mælkeskummer?', 'Skyl den lige efter brug, før mælken tørrer ind. Tjek i produktbeskrivelsen, om beholderen kan tages af og kommes i opvaskemaskinen.' ],
			[ 'Hvilken størrelse mælkekande skal jeg vælge?', 'Vælg efter, hvor mange drikke du laver ad gangen. En lille kande passer til én cappuccino, en større til to drikke eller en stor latte.' ],
		],
	],
	'kopper-termo'     => [
		'intro' => 'Espressokopper, cappuccinokopper, kaffekrus, termokander, termokrus og termoflasker – til kaffen derhjemme og på farten. Se udvalget fra vores partnerbutikker.',
		'seo'   => '<h2>Kopper, krus og termo – kaffen skal også serveres godt</h2><p>Den rigtige kop gør en forskel. En tykvægget espressokop holder på varmen, et latteglas viser lagene frem, og et godt termokrus holder kaffen varm på vej til arbejde. Her har vi samlet kopper, krus og termoprodukter fra de butikker, vi samarbejder med.</p><h3>Til hjemmet</h3><p>Vælg <a href="/kopper-termo/espressokopper/">espressokopper</a> til de små, stærke shots og <a href="/kopper-termo/cappuccinokopper/">cappuccino- og lattekopper</a> til mælkedrikkene. Til hverdagskaffen er et solidt <a href="/kopper-termo/kaffekrus/">kaffekrus</a> svært at slå, og en <a href="/kopper-termo/termokande/">termokande</a> holder kaffen varm, når der er gæster.</p><h3>På farten</h3><p>Et <a href="/kopper-termo/termokrus/">termokrus</a> med tæt låg er det oplagte valg til bilen eller cyklen, mens en <a href="/kopper-termo/termoflaske/">termoflaske</a> er bedst, når kaffen skal holde sig varm i mange timer på tur.</p>',
		'faq'   => [
			[ 'Hvorfor er espressokopper så tykke?', 'Den tykke væg holder på varmen, så den lille mængde espresso ikke bliver kold med det samme. Forvarm gerne koppen, før du brygger.' ],
			[ 'Hvad er forskellen på et termokrus og en termoflaske?', 'Et termokrus er lavet til at drikke direkte af undervejs. En termoflaske er typisk større og tættere og er bygget til at holde på varmen i længere tid.' ],
			[ 'Kan et termokrus komme i opvaskemaskinen?', 'Det varierer. Mange termokrus skal vaskes i hånden for at bevare isoleringen og pakningerne – se producentens anvisning.' ],
		],
	],
	'baristaudstyr'    => [
		'intro' => 'Tampere, portafiltre, kaffevægte, knock boxes, kaffedåser, WDT-værktøj og midler til afkalkning og rengøring – udstyret, der løfter din espresso. Fra vores partnerbutikker.',
		'seo'   => '<h2>Baristaudstyr – de små ting, der gør den store forskel</h2><p>Når du først har en espressomaskine, er det ofte det lille udstyr omkring den, der løfter koppen fra god til rigtig god. Her finder du baristaudstyr fra de butikker, vi samarbejder med – med priser og lagerstatus, der opdateres to gange om dagen.</p><h3>Dosering og tamping</h3><p>En <a href="/baristaudstyr/kaffevaegt/">kaffevægt</a> gør det let at bruge samme mængde kaffe hver gang, og et <a href="/baristaudstyr/wdt-og-dosering/">WDT-værktøj eller en doseringsring</a> fordeler kaffen jævnt i kurven. En <a href="/baristaudstyr/tamper/">tamper</a> i den rigtige størrelse giver en jævn kage, så vandet ikke finder den nemmeste vej igennem.</p><h3>Rengøring og opbevaring</h3><p>En <a href="/baristaudstyr/knock-box/">knock box</a> samler de brugte kaffekager, og <a href="/baristaudstyr/afkalkning/">afkalkning og rengøringsmidler</a> holder maskinen i form. Opbevar bønnerne lufttæt og mørkt i en <a href="/baristaudstyr/kaffedaase/">kaffedåse</a>, så de holder på aromaen længere.</p>',
		'faq'   => [
			[ 'Hvilken størrelse tamper skal jeg have?', 'Tamperen skal passe til diameteren på din portafilterkurv. Mål kurven eller se i maskinens specifikationer – en tamper, der er for lille, giver en ujævn kage.' ],
			[ 'Hvad er et WDT-værktøj?', 'Et værktøj med tynde nåle, som du rører kaffen i portafilteret med, før du tamper. Det bryder klumper og fordeler kaffen jævnt.' ],
			[ 'Hvorfor skal jeg bruge en kaffevægt?', 'Fordi samme mængde kaffe og vand hver gang gør det muligt at gentage en god kop – og at rette en dårlig. Det er især nyttigt til espresso og pour over.' ],
		],
	],
	'kaffe'            => [
		'intro' => 'Hele kaffebønner, espressobønner, formalet kaffe, koffeinfri og økologisk kaffe, kapsler og kaffeabonnementer fra de butikker og risterier, vi samarbejder med.',
		'seo'   => '<h2>Kaffe og kaffebønner – det vigtigste i koppen</h2><p>Den bedste maskine i verden kan ikke redde dårlige bønner. Her finder du kaffe fra de butikker og risterier, vi samarbejder med – fra hele bønner til espresso over formalet kaffe til filtermaskinen og kapsler til kapselmaskinen.</p><h3>Hele bønner eller formalet?</h3><p><a href="/kaffe/hele-kaffeboenner/">Hele kaffebønner</a> holder på aromaen længere, og når du maler dem lige før bryggningen, får du mest smag med. Har du ikke en kværn, er <a href="/kaffe/formalet-kaffe/">formalet kaffe</a> det nemme valg – vælg en formaling, der passer til din bryggemetode.</p><h3>Til espresso</h3><p><a href="/kaffe/espressoboenner/">Espressobønner</a> er ofte ristet, så de giver en fyldig kop med god crema, men mange bønner kan bruges til både filter og espresso. Prøv dig frem, og læs risteriets beskrivelse.</p><h3>Koffeinfri, økologisk og abonnement</h3><p>Se også <a href="/kaffe/koffeinfri-kaffe/">koffeinfri kaffe</a> til aftenkoppen, <a href="/kaffe/oekologisk-kaffe/">økologisk kaffe</a> og <a href="/kaffe/kaffeabonnement/">kaffeabonnementer</a>, hvor friske bønner kommer med posten.</p>',
		'faq'   => [
			[ 'Hvordan opbevarer man kaffebønner?', 'Lufttæt, mørkt og ved stuetemperatur. En kaffedåse med tæt låg er ideel. Køleskabet er ikke et godt sted, fordi bønnerne kan trække fugt og lugt.' ],
			[ 'Hvad er forskellen på espressobønner og almindelige kaffebønner?', 'Der er ingen fast definition. Bønner, der sælges til espresso, er ofte ristet, så de passer til den korte og koncentrerede bryggning, men du kan sagtens bruge dem til andet.' ],
			[ 'Hvor længe holder kaffebønner?', 'Se datoen på posen. Kaffe smager typisk bedst inden for nogle uger efter ristning, og når posen først er åbnet, går det hurtigere.' ],
		],
	],

	// Underkategorier: kaffemaskiner.
	'filterkaffemaskine'          => [
		'intro' => 'Filterkaffemaskiner, der brygger en hel kande på én gang – den klassiske løsning til hjemmet og kontoret. Sammenlign modeller fra vores partnerbutikker.',
		'seo'   => '<h2>Filterkaffemaskine – klassisk kaffe til mange kopper</h2><p>Filterkaffemaskinen er en klassiker i danske køkkener, og det er der en god grund til: Den er nem at bruge, brygger mange kopper på én gang og giver en ren, klar kaffe. Her finder du filterkaffemaskiner fra de butikker, vi samarbejder med.</p><h3>Det skal du kigge efter</h3><p>Se på kapaciteten, og om maskinen kan brygge en mindre portion uden at kaffen bliver tynd. Vandtemperaturen betyder meget for smagen – for koldt vand trækker for lidt smag ud. Overvej også, om du vil have <a href="/kaffemaskiner/kaffemaskine-med-termokande/">termokande</a> eller glaskande, og om en <a href="/kaffemaskiner/kaffemaskine-med-kvaern/">indbygget kværn</a> giver mening for dig.</p>',
		'faq'   => [
			[ 'Hvor meget kaffe skal man bruge i en filterkaffemaskine?', 'Følg anvisningen på kaffeposen eller fra maskinens producent, og justér efter smag. En kaffevægt gør det nemt at ramme den samme styrke hver gang.' ],
			[ 'Hvorfor smager min filterkaffe bittert?', 'Ofte fordi kaffen har stået længe på varmepladen, eller fordi maskinen trænger til afkalkning. Prøv også en lidt grovere formaling.' ],
		],
	],
	'kaffemaskine-med-kvaern'     => [
		'intro' => 'Kaffemaskiner med indbygget kværn, der maler bønnerne lige før bryggningen – mere smag uden ekstra apparat på køkkenbordet. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Kaffemaskine med kværn – friskmalet hver morgen</h2><p>En kaffemaskine med indbygget kværn maler bønnerne, lige før vandet løber igennem. Det giver mere aroma i koppen end færdigmalet kaffe, og du slipper for en separat kværn på køkkenbordet. Her har vi samlet modellerne fra vores partnerbutikker.</p><h3>Fordele og ulemper</h3><p>Det er praktisk at have det hele i én maskine. Til gengæld er en separat kværn ofte nemmere at justere og rengøre, og den kan bruges til andre bryggemetoder. Kig efter, om formalingen kan justeres, og om kværnen er nem at gøre ren.</p>',
		'faq'   => [
			[ 'Kan man bruge formalet kaffe i en maskine med kværn?', 'Mange modeller har mulighed for at slå kværnen fra og bruge formalet kaffe. Se i produktbeskrivelsen.' ],
		],
	],
	'kaffemaskine-med-termokande' => [
		'intro' => 'Kaffemaskiner med termokande, som holder kaffen varm uden varmeplade – så kop nummer to smager lige så godt som den første. Fra vores partnerbutikker.',
		'seo'   => '<h2>Kaffemaskine med termokande</h2><p>En termokande holder kaffen varm ved hjælp af isolering i stedet for en varmeplade. Det betyder, at kaffen ikke koger videre og bliver bitter, og at du kan tage kanden med til bordet eller mødelokalet. Her finder du kaffemaskiner med termokande fra de butikker, vi samarbejder med.</p><h3>Tip</h3><p>Skyl termokanden med varmt vand, før du brygger. Så holder den kaffen varm endnu længere.</p>',
	],
	'moccamaster'                 => [
		'intro' => 'Moccamaster-kaffemaskiner fra hollandske Technivorm i mange farver og udgaver. Se modellerne fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Moccamaster – et designikon på køkkenbordet</h2><p>Moccamaster er blevet et kendt syn i mange danske køkkener med sit enkle design og de mange farver. Her har vi samlet Moccamaster-maskinerne fra vores partnerbutikker, så du kan sammenligne udgaver, farver og priser. Se også de øvrige <a href="/kaffemaskiner/filterkaffemaskine/">filterkaffemaskiner</a>, hvis du vil se alternativer.</p>',
	],
	'kapselmaskine'               => [
		'intro' => 'Kapselmaskiner til Nespresso, Dolce Gusto og andre systemer – en kop ad gangen på kort tid. Se udvalget fra vores partnerbutikker.',
		'seo'   => '<h2>Kapselmaskine – hurtig kaffe uden spild</h2><p>En kapselmaskine laver én kop ad gangen med færdigdoseret kaffe. Det er nemt, hurtigt og giver ingen kaffegrums at gøre rent. Her finder du kapselmaskiner fra de butikker, vi samarbejder med.</p><h3>Vælg system med omtanke</h3><p>Kapslerne passer kun til det system, de er lavet til, så tjek, hvilke kapsler der passer, og hvad de koster. Prisen pr. kop er typisk højere end ved kaffe fra en pose bønner. Se også vores udvalg af <a href="/kaffe/kaffekapsler/">kaffekapsler</a>.</p>',
	],
	'kaffemaskine-til-1-kop'      => [
		'intro' => 'Små kaffemaskiner, der brygger en enkelt kop – til singlehusstanden, kontoret eller dig, der bare vil have én kop frisk kaffe. Fra vores partnerbutikker.',
	],

	// Underkategorier: espressomaskiner.
	'fuldautomatisk-espressomaskine' => [
		'intro' => 'Fuldautomatiske espressomaskiner, der maler, brygger og ofte skummer mælk på et tryk. Sammenlign modellerne fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Fuldautomatisk espressomaskine – barista på knapper</h2><p>En fuldautomatisk espressomaskine har kværnen bygget ind og klarer hele processen selv: Den maler bønnerne, doserer, tamper og brygger. Mange modeller kan også lave cappuccino og latte med et automatisk mælkesystem. Her har vi samlet fuldautomatiske maskiner fra vores partnerbutikker.</p><h3>Det skal du kigge efter</h3><p>Overvej, hvilke drikke du laver mest, og om du vil have et automatisk mælkesystem eller en damplanse. Se på, hvor nem maskinen er at rengøre – en bryggeenhed, der kan tages ud og skylles, gør vedligeholdelsen lettere. Og tjek, om der er en separat beholder til formalet kaffe, hvis du af og til vil have koffeinfri.</p>',
		'faq'   => [
			[ 'Er en fuldautomatisk espressomaskine besværlig at holde ren?', 'Den kræver daglig tømning af grumsbeholder og drypbakke, rengøring af mælkesystemet og regelmæssig afkalkning. Mange maskiner har programmer, der guider dig igennem.' ],
			[ 'Kan man justere styrken?', 'Ja, de fleste fuldautomatiske maskiner lader dig justere mængden af kaffe, vandmængden og ofte også formalingen.' ],
		],
	],
	'semiautomatisk-espressomaskine' => [
		'intro' => 'Semiautomatiske espressomaskiner med portafilter – til dig, der selv vil styre dosering, tamping og mælkeskum. Fra vores partnerbutikker.',
		'seo'   => '<h2>Semiautomatisk espressomaskine – kontrollen er din</h2><p>På en semiautomatisk espressomaskine fylder du selv malet kaffe i portafilteret, tamper og starter bryggningen. Det kræver lidt øvelse, men giver dig fuld kontrol over resultatet, og mange synes, at netop det er det sjove. Her finder du maskiner med portafilter fra de butikker, vi samarbejder med.</p><h3>Det skal du overveje</h3><p>Se på, om maskinen har én eller flere kedler, eller et termoblok-system – det påvirker, hvor hurtigt du kan skifte fra espresso til mælkeskum. Husk at budgettere med en <a href="/kaffekvaerne/espressokvaern/">espressokværn</a>, hvis maskinen ikke har en indbygget, og med en ordentlig <a href="/baristaudstyr/tamper/">tamper</a>.</p>',
		'faq'   => [
			[ 'Er en semiautomatisk espressomaskine svær at bruge?', 'Der er en indlæringskurve. Med en god kværn, en vægt og lidt tålmodighed kommer de fleste hurtigt godt i gang.' ],
		],
	],
	'espressomaskine-med-kvaern'  => [
		'intro' => 'Espressomaskiner med indbygget kværn – både fuldautomatiske og portafiltermaskiner, hvor kværnen sidder i maskinen. Se udvalget fra vores partnerbutikker.',
		'seo'   => '<h2>Espressomaskine med kværn – alt i én maskine</h2><p>En espressomaskine med indbygget kværn sparer plads og gør det nemt at male friske bønner til hver kop. Her har vi samlet både <a href="/espressomaskiner/fuldautomatisk-espressomaskine/">fuldautomatiske maskiner</a> og portafiltermaskiner med kværn fra de butikker, vi samarbejder med. Kig efter, hvor fint kværnen kan justeres – espresso stiller store krav til formalingen.</p>',
	],
	'manuel-espressomaskine'      => [
		'intro' => 'Manuelle espressomaskiner med håndtag og bærbare espressobryggere – til dig, der vil lave espresso uden strøm eller på tur. Fra vores partnerbutikker.',
		'seo'   => '<h2>Manuel espressomaskine</h2><p>En manuel espressomaskine bruger din egen kraft i stedet for en pumpe. Det kan være en klassisk maskine med håndtag til køkkenbordet eller en lille bærbar brygger, der kan komme med i rygsækken. Her finder du manuelle modeller fra de butikker, vi samarbejder med. Husk, at du skal bruge friskmalet kaffe med fin formaling – se vores <a href="/kaffekvaerne/manuel-kaffekvaern/">manuelle kaffekværne</a>.</p>',
	],
	'sage-espressomaskine'        => [
		'intro' => 'Espressomaskiner fra Sage – fra kompakte portafiltermaskiner til modeller med indbygget kværn. Se udvalget fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Sage espressomaskine</h2><p>Sage har et bredt udvalg af espressomaskiner til hjemmet, fra små maskiner med hurtig opvarmning til større modeller med indbygget kværn. Her har vi samlet Sage-maskinerne fra vores partnerbutikker, så du kan sammenligne priser og udgaver. Se også alle <a href="/espressomaskiner/semiautomatisk-espressomaskine/">semiautomatiske espressomaskiner</a>.</p>',
	],
	'delonghi-espressomaskine'    => [
		'intro' => 'Espressomaskiner fra De\'Longhi – fuldautomatiske maskiner og portafiltermaskiner. Sammenlign modellerne fra vores partnerbutikker.',
		'seo'   => '<h2>De\'Longhi espressomaskine</h2><p>De\'Longhi laver både fuldautomatiske espressomaskiner og maskiner med portafilter. Her finder du modellerne fra de butikker, vi samarbejder med, med opdaterede priser og lagerstatus. Se også alle <a href="/espressomaskiner/fuldautomatisk-espressomaskine/">fuldautomatiske espressomaskiner</a>.</p>',
	],
	'espressomaskine-med-maelkeskummer' => [
		'intro' => 'Espressomaskiner med damplanse eller automatisk mælkesystem – til cappuccino, latte og flat white derhjemme. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Espressomaskine med mælkeskummer</h2><p>Drikker du mest mælkedrikke, er mælkesystemet lige så vigtigt som selve espressoen. En damplanse giver dig kontrollen og mulighed for latte art, mens et automatisk system skummer mælken for dig. Her finder du espressomaskiner med mælkeskummer fra vores partnerbutikker. Husk at rense damplansen eller mælkesystemet efter hver brug.</p>',
	],

	// Underkategorier: kaffekværne.
	'elektrisk-kaffekvaern'       => [
		'intro' => 'Elektriske kaffekværne til filter, stempelkande og espresso – friskmalet kaffe på få sekunder. Se udvalget fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Elektrisk kaffekværn</h2><p>En elektrisk kaffekværn er den hurtigste vej til friskmalet kaffe – især når du maler til en hel kande hver morgen. Her har vi samlet elektriske kværne fra vores partnerbutikker. Vælg en kværn med kegle eller kværnskiver frem for en slagkværn, så formalingen bliver jævn, og se efter, hvor mange trin formalingen kan justeres i, og om den passer til din bryggemetode.</p>',
		'faq'   => [
			[ 'Larmer en elektrisk kaffekværn meget?', 'Det varierer fra model til model. Står du tidligt op i et hus med sovende, kan en manuel kværn være et stille alternativ.' ],
		],
	],
	'manuel-kaffekvaern'          => [
		'intro' => 'Manuelle kaffekværne og håndkværne – stille, kompakte og gode at tage med på tur. Fra vores partnerbutikker.',
		'seo'   => '<h2>Manuel kaffekværn</h2><p>En manuel kaffekværn kræver lidt arbejde, men giver friskmalet kaffe uden strøm og uden larm. Mange håndkværne har en keglekværn, der maler jævnt, og de fylder så lidt, at de kan komme med i sommerhuset eller på campingturen. Her finder du manuelle kværne fra de butikker, vi samarbejder med. Maler du til espresso, så tjek, at kværnen kan justeres fint nok.</p>',
	],
	'espressokvaern'              => [
		'intro' => 'Espressokværne med fin og præcis justering, så du kan ramme den rigtige formaling til din espresso. Se udvalget fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Espressokværn</h2><p>Espresso er den bryggemetode, der stiller de største krav til kværnen. Selv små ændringer i formalingen kan ændre smagen markant, så en espressokværn skal kunne justeres meget præcist. Her har vi samlet espressokværne fra vores partnerbutikker. Kværnen har stor betydning for resultatet – så sæt gerne en del af budgettet af til den, når du køber espressomaskine.</p>',
	],

	// Underkategorier: kaffebrygning.
	'pour-over'                   => [
		'intro' => 'Drippere, V60, Chemex og andet pour over-udstyr til en ren og aromatisk kop. Se udvalget fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Pour over – håndbrygget kaffe i sin reneste form</h2><p>Ved pour over hælder du varmt vand over kaffen i en dripper med filter. Du styrer selv vandet, tempoet og mængden, og resultatet er en klar kop, hvor bønnernes smag træder tydeligt frem. Her finder du drippere og pour over-udstyr fra vores partnerbutikker. Supplér med <a href="/kaffebrygning/kaffefilter/">filtre</a>, der passer til din dripper, og en <a href="/kaffebrygning/kedel-til-kaffe/">kedel med svanehals</a>.</p>',
		'faq'   => [
			[ 'Hvad skal jeg bruge for at lave pour over?', 'En dripper, filtre der passer til den, friskmalet kaffe og varmt vand. En kedel med svanehals og en kaffevægt gør det nemmere at ramme den samme kop igen.' ],
		],
	],
	'stempelkande'                => [
		'intro' => 'Stempelkander (french press) i glas og stål – nem kaffe med fyldig smag. Fra vores partnerbutikker.',
		'seo'   => '<h2>Stempelkande</h2><p>Stempelkanden er en af de nemmeste måder at lave god kaffe på: kaffe og vand i kanden, vent et par minutter, tryk stemplet ned. Fordi kaffen trækker direkte i vandet uden papirfilter, får du en fyldig kop med mere krop. Her finder du stempelkander fra de butikker, vi samarbejder med. Brug en grov formaling, så der kommer mindre bundfald i koppen.</p>',
	],
	'espressokande'               => [
		'intro' => 'Espressokander og mokkakander til komfuret – stærk, italiensk kaffe uden maskine. Se udvalget fra vores partnerbutikker.',
		'seo'   => '<h2>Espressokande til komfuret</h2><p>En espressokande – også kaldet mokkakande – brygger kaffe ved at presse kogende vand op gennem kaffen med damptryk. Resultatet er en stærk og koncentreret kaffe, der minder om espresso. Her har vi samlet espressokander fra de butikker, vi samarbejder med. Har du induktionskomfur, så tjek, at kanden kan bruges på induktion.</p>',
		'faq'   => [
			[ 'Kan man bruge en espressokande på induktion?', 'Kun hvis bunden er magnetisk, typisk i rustfrit stål. Klassiske kander i aluminium virker ikke på induktion uden en adapterplade.' ],
		],
	],
	'aeropress'                   => [
		'intro' => 'Aeropress og tilbehør – den kompakte kaffebrygger, der kan lave alt fra stærk kop til mild filterkaffe. Fra vores partnerbutikker.',
		'seo'   => '<h2>Aeropress</h2><p>Aeropress er en lille, let kaffebrygger, hvor du presser kaffen gennem et filter med et stempel. Den er hurtig, nem at gøre ren og alsidig, og fordi den tåler lidt af hvert, er den populær både på kontoret og på rejsen. Her finder du Aeropress og tilbehør fra de butikker, vi samarbejder med.</p>',
	],
	'cold-brew'                   => [
		'intro' => 'Cold brew-kander og udstyr til iskaffe – kaffe, der trækker langsomt i koldt vand og giver en blød, rund smag. Fra vores partnerbutikker.',
		'seo'   => '<h2>Cold brew</h2><p>Cold brew laves ved at lade groftmalet kaffe trække i koldt vand i mange timer. Resultatet er en blød kaffe med mindre syre, som er perfekt over is på en varm dag. Her finder du cold brew-kander og udstyr fra de butikker, vi samarbejder med.</p>',
	],
	'kaffefilter'                 => [
		'intro' => 'Kaffefiltre i papir, stof og metal til filterkaffemaskiner, drippere og Chemex. Se udvalget fra vores partnerbutikker.',
		'seo'   => '<h2>Kaffefiltre</h2><p>Filteret påvirker mere, end man skulle tro. Papirfiltre giver en ren kop uden bundfald, mens filtre i metal eller stof lader flere olier slippe igennem og giver mere krop. Her finder du kaffefiltre fra de butikker, vi samarbejder med. Tjek altid, at størrelse og form passer til din maskine eller dripper.</p>',
	],
	'kedel-til-kaffe'             => [
		'intro' => 'Kedler med svanehals og elkedler til kaffe – nogle med temperaturstyring. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Kedel til kaffe</h2><p>Til pour over er en kedel med svanehals næsten uundværlig: Den smalle tud gør det let at hælde vandet langsomt og jævnt ud over kaffen. En elkedel med temperaturstyring giver dig desuden mulighed for at ramme den temperatur, der passer til dine bønner. Her har vi samlet kedler fra vores partnerbutikker.</p>',
	],
	'kaffekande'                  => [
		'intro' => 'Kaffekander og serveringskander i glas og keramik – til at servere kaffen fra dripperen eller maskinen. Fra vores partnerbutikker.',
	],

	// Underkategorier: mælkeskummere.
	'elektrisk-maelkeskummer'     => [
		'intro' => 'Elektriske mælkeskummere, der varmer og skummer mælken på et tryk – mange kan også lave kold skum. Se udvalget fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Elektrisk mælkeskummer</h2><p>En elektrisk mælkeskummer er det nemmeste tilbehør, hvis din kaffemaskine ikke selv kan skumme mælk. Hæld mælken i, tryk på knappen, og vent et øjeblik. Her finder du elektriske mælkeskummere fra vores partnerbutikker. Tjek, om den kan lave både varm og kold mælkeskum, og om beholderen er nem at gøre ren.</p>',
	],
	'manuel-maelkeskummer'        => [
		'intro' => 'Manuelle mælkeskummere – batteridrevne piskestave og kander med stempel. Billigt, enkelt og fylder næsten ingenting. Fra vores partnerbutikker.',
	],
	'maelkekande'                 => [
		'intro' => 'Mælkekander i rustfrit stål til damplansen – til fint mælkeskum og latte art. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Mælkekande</h2><p>Har din espressomaskine en damplanse, er en mælkekande i rustfrit stål et must. Stålet gør det let at mærke temperaturen med hånden, og en spids tud hjælper, når du vil hælde latte art. Vælg størrelse efter, hvor mange drikke du laver ad gangen. Her finder du mælkekander fra vores partnerbutikker.</p>',
	],

	// Underkategorier: kopper og termo.
	'espressokopper'              => [
		'intro' => 'Espressokopper og -glas til shots, cortado og ristretto. Se udvalget fra de butikker, vi samarbejder med.',
	],
	'cappuccinokopper'            => [
		'intro' => 'Cappuccinokopper, lattekopper og latteglas – med plads til mælkeskum og latte art. Fra vores partnerbutikker.',
	],
	'kaffekrus'                   => [
		'intro' => 'Kaffekrus og kaffekopper til hverdagskaffen – i keramik, porcelæn og stentøj. Se udvalget fra de butikker, vi samarbejder med.',
	],
	'termokande'                  => [
		'intro' => 'Termokander, der holder kaffen varm i timevis – til morgenbordet, mødet og gæsterne. Fra vores partnerbutikker.',
		'seo'   => '<h2>Termokande</h2><p>En god termokande holder kaffen varm uden at koge den videre, så smagen holder sig. Her finder du termokander fra de butikker, vi samarbejder med. Se efter et låg, der er nemt at betjene med én hånd, og som kan skilles ad til rengøring. Skyl kanden med varmt vand, før du hælder kaffen i – så holder den varmen endnu bedre.</p>',
	],
	'termokrus'                   => [
		'intro' => 'Termokrus og to go-krus med tæt låg – til kaffen i bilen, på cyklen og på kontoret. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Termokrus</h2><p>Et termokrus er lavet til at drikke direkte af undervejs. Kig efter et låg, der lukker tæt, så du ikke spilder i tasken, og et krus, der passer i bilens kopholder. Her finder du termokrus fra vores partnerbutikker.</p>',
	],
	'termoflaske'                 => [
		'intro' => 'Termoflasker, der holder kaffen varm på lange ture og arbejdsdage. Se udvalget fra vores partnerbutikker.',
	],

	// Underkategorier: baristaudstyr.
	'tamper'                      => [
		'intro' => 'Tampere i forskellige størrelser til portafiltermaskiner – en jævn kage giver en jævn espresso. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Tamper</h2><p>Tamperen presser den malede kaffe sammen i portafilteret, så vandet løber jævnt igennem. Mange maskiner leveres med en simpel plastiktamper, og en tungere tamper i metal, der passer præcist til din kurv, er en af de billigste opgraderinger, du kan lave. Her finder du tampere fra vores partnerbutikker. Mål din kurv, før du køber.</p>',
	],
	'portafilter'                 => [
		'intro' => 'Portafiltre og bundløse portafiltre til espressomaskiner – tjek altid, at det passer til din model. Fra vores partnerbutikker.',
	],
	'kaffevaegt'                  => [
		'intro' => 'Kaffevægte med timer til espresso og pour over – så du kan gentage den gode kop. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Kaffevægt</h2><p>En kaffevægt gør det nemt at bruge den samme mængde kaffe og vand hver gang, og mange har en indbygget timer, så du også kan holde øje med bryggetiden. Til espresso er en lav vægt, der kan stå under portafilteret, praktisk. Her har vi samlet kaffevægte fra vores partnerbutikker.</p>',
	],
	'knock-box'                   => [
		'intro' => 'Knock boxes til de brugte kaffekager fra portafilteret. Se udvalget fra vores partnerbutikker.',
	],
	'afkalkning'                  => [
		'intro' => 'Afkalkningsmidler, rensetabletter, børster og blindfiltre – hold din kaffemaskine i god form. Fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Afkalkning og rengøring af kaffemaskinen</h2><p>Kalk og kaffeolier sætter sig i alle kaffemaskiner med tiden, og det påvirker både smagen og maskinens levetid. Regelmæssig afkalkning og rengøring er derfor en af de bedste ting, du kan gøre for din maskine. Her finder du afkalkningsmidler, rensetabletter og rengøringsudstyr fra vores partnerbutikker. Brug altid et middel, der er godkendt til din maskine.</p>',
	],
	'kaffedaase'                  => [
		'intro' => 'Kaffedåser og lufttætte beholdere, der holder bønnerne friske længere. Fra vores partnerbutikker.',
	],
	'wdt-og-dosering'             => [
		'intro' => 'WDT-værktøj, distributører, doseringsringe og puck screens – til en jævnere espresso. Fra de butikker, vi samarbejder med.',
	],

	// Underkategorier: kaffe.
	'hele-kaffeboenner'           => [
		'intro' => 'Hele kaffebønner fra risterier og kaffebutikker – mal dem selv lige før bryggningen for mest smag. Se udvalget fra de butikker, vi samarbejder med.',
		'seo'   => '<h2>Hele kaffebønner</h2><p>Hele bønner holder på aromaen meget længere end formalet kaffe. Køb en pose, mal lige det, du skal bruge, og opbevar resten lufttæt. Her finder du hele kaffebønner fra vores partnerbutikker og risterier. Læs beskrivelsen af ristning og oprindelse for at finde en kaffe, der passer til din smag og din bryggemetode.</p>',
	],
	'espressoboenner'             => [
		'intro' => 'Espressobønner til portafilter- og fuldautomatiske maskiner. Fra de butikker og risterier, vi samarbejder med.',
	],
	'formalet-kaffe'              => [
		'intro' => 'Formalet kaffe til filtermaskine, stempelkande og espressokande – klar til brug. Fra vores partnerbutikker.',
	],
	'koffeinfri-kaffe'            => [
		'intro' => 'Koffeinfri kaffe til aftenkoppen – som hele bønner, formalet eller i kapsler. Fra de butikker, vi samarbejder med.',
	],
	'kaffeabonnement'             => [
		'intro' => 'Kaffeabonnementer, hvor friskristede bønner kommer med posten. Se tilbuddene fra vores partnerbutikker.',
	],
	'kaffekapsler'                => [
		'intro' => 'Kaffekapsler til Nespresso, Dolce Gusto og andre systemer. Tjek, at kapslerne passer til din maskine. Fra vores partnerbutikker.',
	],
	'oekologisk-kaffe'            => [
		'intro' => 'Økologisk kaffe – hele bønner og formalet. Se udvalget fra de butikker og risterier, vi samarbejder med.',
	],
];
