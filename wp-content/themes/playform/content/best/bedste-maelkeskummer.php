<?php
/**
 * Omskrevet fra det gamle koffee.dk (/bedste-maelkeskummer/, 2021). Ny tekst og nye produkter.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-maelkeskummer',
	'date'     => '2021-10-06 10:00:00',
	'keyword'  => 'mælkeskummer',
	'title'    => 'Mælkeskummer: Vores bud på de 5 bedste',
	'excerpt'  => 'Med en mælkeskummer laver du cappuccino og latte uden en dyr espressomaskine. Her er vores bud på de 5 bedste mælkeskummere – elektriske, manuelle og en lille batterimodel.',
	'more_cat' => 'maelkeskummere',
	'intro'    => <<<'HTML'
<p>Cremet mælkeskum er det, der forvandler en espresso til en cappuccino, en latte eller en cortado. Har din kaffemaskine ingen damplanse, eller vil du bare have det nemmere, er en mælkeskummer den hurtigste vej til caféfornemmelsen derhjemme. Den kan også bruges til varm kakao, chai og kolde kaffedrikke.</p>
<p>Herunder er vores bud på de 5 bedste mælkeskummere fra de butikker, vi samarbejder med. Der er elektriske modeller, der varmer og skummer på et tryk, en klassisk manuel med stempel og en lille batteridrevet til lommepengene. Nederst finder du en guide til at vælge rigtigt.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4008146033209',
			'price'   => 649,
			'name'    => 'Severin Spuma 500 ml',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Elektrisk mælkeskummer, der varmer og skummer med induktion – og kanden i rustfrit stål kan tages ud bagefter.',
			'why'     => <<<'HTML'
<p>Severin Spuma er til dig, der laver mælkedrikke hver dag og vil have det til at gå hurtigt. Den varmer og skummer mælken på kort tid ved hjælp af induktion. Med 500 ml er der plads til mælk til flere kopper på én gang, så den passer også, når der er gæster.</p>
<p>Kanden er i rustfrit stål og kan tages ud, når mælken er klar. Det gør det nemt at hælde og nemt at gøre rent bagefter. Du får en blød og cremet skum til både cappuccino og café latte, uden at du skal stå og holde øje med en gryde.</p>
HTML,
			'good'    => [ 'Mælkedrikke hver dag', 'Flere kopper ad gangen', 'Nem rengøring' ],
			'less'    => [ 'Dig, der kun laver en enkelt kop i ny og næ' ],
		],
		[
			'ean'     => '4006508215614',
			'price'   => 517,
			'name'    => 'Melitta Cremio 2',
			'role'    => 'Nem med ét tryk',
			'reviews' => [],
			'verdict' => 'Mælkeskum på et enkelt tryk – varmt til cappuccino og macchiato eller koldt til desserter og iskaffe.',
			'why'     => <<<'HTML'
<p>Melitta Cremio 2 er til dig, der bare vil trykke på en knap og gå videre. Du hælder mælk i, trykker, og maskinen klarer resten. Skummet passer til både macchiato og cappuccino.</p>
<p>Den kan også lave koldt mælkeskum. Det er oplagt til desserter og som et let topping på iskaffe om sommeren. Det er en enkel og overskuelig model, der gør det, den skal, uden mange indstillinger – et godt valg som første elektriske mælkeskummer. Den passer fint ved siden af en <a href="/espressokande/">espressokande</a> eller en kapselmaskine uden damplanse, hvor den tilføjer det, der mangler til en rigtig cappuccino.</p>
HTML,
			'good'    => [ 'Første elektriske mælkeskummer', 'Koldt skum til iskaffe', 'Dig, der vil have det enkelt' ],
			'less'    => [ 'Dig, der vil have mange programmer' ],
		],
		[
			'ean'     => '727015145563',
			'price'   => 200,
			'name'    => 'Bodum Latteo',
			'role'    => 'Bedst manuelle',
			'reviews' => [],
			'verdict' => 'Manuel mælkeskummer med stempel, der giver let og luftigt skum på omkring 30 sekunder – helt uden strøm.',
			'why'     => <<<'HTML'
<p>Bodum Latteo er til dig, der hellere vil have en enkel kande end endnu et apparat med ledning. Du pumper stemplet op og ned, og på cirka 30 sekunder er mælken blevet til et let og luftigt skum.</p>
<p>Designet er enkelt og stilrent, så den kan stå fremme ved siden af stempelkanden eller espressokanden. Vil du have skummet varmt, varmer du mælken, før du skummer. Den er billig, har ingen dele, der kan gå i stykker elektrisk, og passer godt til sommerhuset. Skummet bliver luftigt, så det er godt til cappuccino.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Dig uden plads til flere apparater', 'Sommerhuset' ],
			'less'    => [ 'Dig, der vil have det på et tryk' ],
		],
		[
			'ean'     => '5039179000004',
			'price'   => 145,
			'name'    => 'Aerolatte Original',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Lille batteridreven mælkeskummer i rustfrit stål med holdbart skaft og slidstærk motor.',
			'why'     => <<<'HTML'
<p>Aerolatte Original er den nemmeste måde at komme i gang på. Det er en lille stavskummer, du stikker ned i koppen eller kanden. Den har en solid konstruktion i rustfrit stål, et holdbart skaft og en slidstærk motor, så den kan holde til at blive brugt hver dag.</p>
<p>Piskeriset har Aerolattes oprindelige design og egner sig godt til mælk. Den fylder næsten ingenting i skuffen, og du kan bruge den til alt fra cappuccino til varm kakao. Varm mælken først, hvis du vil have varmt skum. Den er også en god gave til kaffeelskeren.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Lille køkken', 'En kop ad gangen' ],
			'less'    => [ 'Dig, der vil have mælken varmet automatisk' ],
		],
		[
			'ean'     => '8017709316082',
			'price'   => 1695,
			'name'    => 'Smeg MFF01',
			'role'    => 'Designvalget',
			'reviews' => [],
			'verdict' => 'Mælkeskummer i rustfrit stål med induktionsvarme og tykt skum – i Smegs genkendelige design.',
			'why'     => <<<'HTML'
<p>Smeg MFF01 er til dig, der vil have en mælkeskummer, som ser lige så godt ud som resten af køkkenet. Den er lavet i rustfrit kvalitetsstål og bruger induktionsvarme til at varme mælken op.</p>
<p>Resultatet er et tykt og lækkert skum til din kaffe eller kakao, og du kan vælge mellem flere forskellige indstillinger, alt efter hvad du skal lave. Den passer især godt, hvis du i forvejen har en Smeg-elkedel eller -espressomaskine og vil have tingene til at matche. Den er dyrere end de fleste, men du betaler for et apparat, der må stå fremme.</p>
HTML,
			'good'    => [ 'Design og farver', 'Tykt skum til cappuccino og kakao', 'Køkkener med andre Smeg-apparater' ],
			'less'    => [ 'Lavt budget' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en mælkeskummer</h2>
<h3>Elektrisk, manuel eller batteri?</h3>
<p>En <a href="/maelkeskummere/elektrisk-maelkeskummer/">elektrisk mælkeskummer</a> varmer og skummer mælken på samme tid, ofte på ét tryk. Den er nemmest i hverdagen og giver det mest ensartede skum. En <a href="/maelkeskummere/manuel-maelkeskummer/">manuel mælkeskummer</a> med stempel kræver lidt armkraft, men er billig, holdbar og kører uden strøm. En lille batteridrevet stav er den billigste løsning og fin til en enkelt kop, men den varmer ikke mælken.</p>
<p>Har du en espressomaskine med damplanse, skal du i stedet bruge en <a href="/maelkeskummere/maelkekande/">mælkekande</a> i rustfrit stål. Den giver mest kontrol og er det, baristaer bruger til latte art.</p>
<h3>Hvilken mælk skummer bedst?</h3>
<p>Det er proteinet i mælken, der holder på boblerne, og fedtet, der giver den cremede smag. Sødmælk giver et blødt og fyldigt skum, mens skummetmælk giver mere luft, men mindre smag. Plantedrikke skummer forskelligt – kig efter varianter, der er lavet til kaffe, ofte kaldet barista-udgaver.</p>
<h3>Undgå at koge mælken</h3>
<p>Mælk smager sødest, når den er varm, men ikke kogende. Bliver den for varm, får den en kogt smag, og skummet falder sammen. De fleste elektriske mælkeskummere stopper selv, når mælken er varm nok. Bruger du en manuel model, så varm mælken forsigtigt.</p>
<h3>Rengøring</h3>
<p>Skyl mælkeskummeren lige efter brug, før mælken når at sætte sig. Elektriske modeller med aftagelig kande er nemmest at holde rene. Tjek altid, om kanden må komme i opvaskemaskinen, før du putter den derind.</p>
<p>Mangler du kaffen til skummet? Se vores guides til <a href="/espressomaskine-med-kvaern/">espressomaskiner med kværn</a>, <a href="/sage-espressomaskine/">Sage espressomaskiner</a> og <a href="/espressokande/">espressokander</a> til komfuret. Server det hele i <a href="/kopper-termo/cappuccinokopper/">cappuccino- og lattekopper</a>, og se alle <a href="/maelkeskummere/">mælkeskummere</a>.</p>
HTML,
	'faq'      => [
		[ 'Kan man skumme plantedrik i en mælkeskummer?', 'Ja, men resultatet afhænger af drikken. Barista-varianter af havre- og sojadrik er lavet til at skumme og giver det bedste resultat.' ],
		[ 'Hvad er forskel på mælkeskum til cappuccino og latte?', 'En cappuccino har et tykkere lag skum, mens en latte har mere varm mælk og et tyndere lag skum på toppen. Mange elektriske mælkeskummere har en indstilling til hver.' ],
		[ 'Kan man lave koldt mælkeskum?', 'Ja, mange elektriske mælkeskummere kan skumme uden varme. Det er oplagt til iskaffe og desserter. Med en manuel model skummer du bare kold mælk.' ],
		[ 'Er kaffe med mælk sundt?', 'Kaffe i moderate mængder regnes for en del af en almindelig sund kost, og mælken bidrager med protein og calcium. Læs mere i artiklen <a href="/er-kaffe-sundt/">Er kaffe sundt?</a>' ],
	],
];
