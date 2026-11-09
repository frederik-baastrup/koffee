<?php
/**
 * Omskrevet fra det gamle koffee.dk (/kaffevaegt/, 2022). Ny tekst og nye produkter.
 * Kun 3 modeller: feedsne havde 9. nov. 2026 kun to egentlige kaffevægte med EAN på lager (NOD, Escali) plus én køkkenvægt med timer.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'kaffevaegt',
	'date'     => '2022-06-06 10:00:00',
	'keyword'  => 'kaffevægt',
	'title'    => 'Kaffevægt: Vores bud på de 3 bedste med timer',
	'excerpt'  => 'En kaffevægt med timer er det billigste redskab, der gør din kaffe mere ens fra dag til dag. Her er vores bud på de 3 bedste kaffevægte fra de butikker, vi samarbejder med.',
	'more_cat' => 'kaffevaegt',
	'intro'    => <<<'HTML'
<p>Smager din kaffe fantastisk den ene dag og flad den næste? Så er det sjældent bønnerne, der er problemet. Det er mængden. En måleske rammer forskelligt fra gang til gang, fordi bønner og malet kaffe fylder forskelligt alt efter ristning og maling. En vægt måler det, der betyder noget: gram kaffe og gram vand.</p>
<p>En kaffevægt har som regel også en timer, så du kan styre, hvor hurtigt du hælder, og hvor længe kaffen trækker. Herunder er vores bud på de 3 bedste fra de butikker, vi samarbejder med, og nederst forklarer vi, hvordan du kommer i gang med at veje.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350101118122',
			'price'   => 329,
			'name'    => 'NOD Kaffevægt 0,1',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Vægt med 0,1 g nøjagtighed, 3 kg kapacitet og indbygget timer – nok til både espressodosen og en stor kande.',
			'why'     => <<<'HTML'
<p>NOD Kaffevægt er det enkle og sikre valg. Den vejer med en nøjagtighed på 0,1 g, og det er præcis det, du har brug for, når en espressodosis skal rammes på grammet, eller når du vil kunne gentage en god kop pour over.</p>
<p>Med en kapacitet på 3 kg kan du stille en hel kande med tragt ovenpå uden at nå loftet. Timeren er bygget ind, så du styrer både mængde og bryggetid fra den samme skærm.</p>
<p>Du kan skifte mellem gram, ounce og milliliter. Det er praktisk, hvis du følger opskrifter fra udenlandske kaffefolk, eller når du vil måle vandet direkte i kanden.</p>
HTML,
			'good'    => [ 'Espresso og pour over', 'Dig, der vil i gang med at veje', 'Store kander med tragt ovenpå' ],
			'less'    => [ 'Dig, der vil have færdige bryggeprogrammer' ],
		],
		[
			'ean'     => '857817000286',
			'price'   => 541,
			'name'    => 'Escali Versi kaffevægt',
			'role'    => 'Bedst til pour over',
			'reviews' => [],
			'verdict' => 'Kaffevægt med timer og 4 forprogrammerede pour over-indstillinger, der guider dig gennem brygningen.',
			'why'     => <<<'HTML'
<p>Escali Versi er til dig, der brygger pour over og gerne vil have lidt hjælp undervejs. Vægten har 4 forprogrammerede indstillinger til pour over, så du ikke selv skal holde styr på forholdet mellem kaffe og vand.</p>
<p>Den har en høj kapacitet og en timer, der er tænkt til kaffe og te. Det gør den nem at bruge til begge dele: vej tebladene, start uret, og tag dem op, når tiden er gået.</p>
<p>Er du ny med V60, Chemex eller en anden tragt, fjerner Versi meget af gætteriet de første uger. Og når du kender dine egne opskrifter, kan du stadig bruge den som en almindelig vægt med timer.</p>
HTML,
			'good'    => [ 'Pour over-begyndere', 'Kaffe og te', 'Dig, der vil have hjælp til forholdet' ],
			'less'    => [ 'Dig, der kun skal veje espresso' ],
		],
		[
			'ean'     => '4006664164306',
			'price'   => 379,
			'name'    => 'Gefu Preziso køkkenvægt',
			'role'    => 'Til køkken og kaffe',
			'reviews' => [],
			'verdict' => 'Køkkenvægt i rustfrit stål med tidsmåling, op til 3 kg og vejning i hele gram.',
			'why'     => <<<'HTML'
<p>Gefu Preziso er ikke en ren kaffevægt, men en køkkenvægt med tidsmåling. Den er et godt bud, hvis du vil have én vægt, der både kan veje mel til bagningen og kaffe til morgenkanden.</p>
<p>Den vejer op til 3 kg i hele gram og viser både gram og ounce. Til filterkaffe, pour over og stempelkande er hele gram fint nok, og med tidsmålingen kan du holde øje med, hvor længe kaffen trækker.</p>
<p>Skal du lave espresso, hvor en tiendedel gram gør en forskel, så vælg i stedet en af de to kaffevægte ovenfor. Huset i rustfrit stål og plast er nemt at tørre af, når der er spildt kaffe eller vand.</p>
HTML,
			'good'    => [ 'Filterkaffe og stempelkande', 'Én vægt til både bagning og kaffe' ],
			'less'    => [ 'Espresso, hvor du skal veje på 0,1 g' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en kaffevægt</h2>
<p>En kaffevægt skal kunne tre ting: veje præcist, have en timer og reagere hurtigt, når du hælder. Alt andet er bonus. Se alle <a href="/baristaudstyr/kaffevaegt/">kaffevægte</a> og resten af vores <a href="/baristaudstyr/">baristaudstyr</a>.</p>
<h3>0,1 gram eller hele gram?</h3>
<p>Til espresso bruger man få gram kaffe, og en halv gram mere eller mindre kan ændre, hvordan shottet løber. Her skal vægten vise tiendedele. Til filterkaffe, pour over og stempelkande er hele gram nok, fordi mængderne er større.</p>
<h3>Timer</h3>
<p>Når du brygger pour over, styrer tiden en stor del af smagen. Med en timer på vægten kan du se gram og sekunder på samme tid, mens du hælder. Til espresso bruger du timeren til at se, hvor lang tid shottet tager.</p>
<h3>Størrelse og kapacitet</h3>
<p>Skal vægten stå under en espressomaskine, skal den være lille nok til at passe ind under portafilteret. Skal den bære en kande med tragt og vand, skal kapaciteten være høj nok. Mål pladsen, før du køber.</p>
<h3>Sådan kommer du i gang</h3>
<p>Et godt udgangspunkt til filterkaffe er omkring 60 gram kaffe pr. liter vand. Stil kanden og tragten på vægten, nulstil, kom kaffen i, nulstil igen, og hæld vandet på, mens du holder øje med grammene. Smager kaffen for stærk, så brug lidt mindre kaffe næste gang – og omvendt. Når du har fundet din opskrift, kan du gentage den hver dag.</p>
<h3>Det passer sammen med</h3>
<p>En vægt giver mest mening sammen med friskmalet kaffe. Se vores guides til <a href="/elektrisk-kaffekvaern/">elektriske kaffekværne</a> og <a href="/manuel-kaffekvaern/">manuelle kaffekværne</a>, og brygger du med tragt, så se <a href="/pour-over-kaffebrygger/">pour over kaffebryggere</a> og en <a href="/kaffebrygning/kedel-til-kaffe/">kedel til kaffe</a>. Er du nysgerrig på, hvad grammene betyder for koffeinen, så læs <a href="/hvor-meget-koffein-er-der-i-en-kop-kaffe/">hvor meget koffein der er i en kop kaffe</a>.</p>
HTML,
	'faq'      => [
		[ 'Kan jeg bruge en almindelig køkkenvægt til kaffe?', 'Ja, til filterkaffe og stempelkande er en køkkenvægt, der vejer i hele gram, fint nok. Til espresso skal vægten vise tiendedele af et gram, og en timer er en stor hjælp til pour over.' ],
		[ 'Hvor meget kaffe skal jeg bruge pr. liter vand?', 'Mange starter med omkring 60 gram kaffe pr. liter til filterkaffe og pour over og justerer derfra efter smag.' ],
		[ 'Hvorfor er der en timer på en kaffevægt?', 'Fordi tiden betyder meget for smagen. Til pour over styrer du, hvor hurtigt du hælder og hvor længe kaffen trækker. Til espresso kan du se, hvor lang tid shottet tager.' ],
		[ 'Skal jeg veje bønnerne eller den malede kaffe?', 'Vægten er den samme, så du kan veje bønnerne, før du maler. Så maler du kun det, du skal bruge, og resten holder sig friskt i dåsen.' ],
	],
];
