<?php
/**
 * Ny købsguide (15. nov. 2026). Fakta om produkterne kommer kun fra butikkernes produktdata. Vi har ikke selv afprøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-kapselmaskine',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'kapselmaskine',
	'title'    => 'Kapselmaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'En kapselmaskine giver dig en frisk kop kaffe på under et minut – uden at male bønner eller rense filtre. Her er vores bud på de 5 bedste kapselmaskiner fra de butikker, vi samarbejder med: Nespresso, Dolce Gusto og et fleksibelt alternativ.',
	'more_cat' => 'kapselmaskine',
	'intro'    => <<<'HTML'
<p>Der er en grund til, at kapselmaskinen står i så mange køkkener: Du sætter en kapsel i, trykker på en knap og har en kop kaffe kort efter. Ingen kværn, intet kaffegrums på bordpladen og ingen kande, der skal vaskes op. Samtidig kan du skifte mellem en mild morgenkop, en kraftig espresso og en cappuccino uden at skulle kunne noget som barista.</p>
<p>Valget står mest mellem kapselsystemerne, for maskinen binder dig til en bestemt type kapsler. Derfor har vi samlet vores bud på de 5 bedste kapselmaskiner fra de butikker, vi samarbejder med – fra Nespressos Vertuo og Original over Dolce Gusto til en maskine, der også tager malet kaffe. Nederst finder du en guide til, hvad du skal overveje, før du vælger.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8004399015838',
			'price'   => 1099,
			'name'    => 'Nespresso Vertuo Next 1 l, hvid',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Alsidig Vertuo-maskine, der klarer alt fra en stor morgenkop til espresso og gran lungo.',
			'why'     => <<<'HTML'
<p>Vertuo Next er et godt bud for de fleste, fordi den favner bredt. Du kan starte dagen med en stor kop kaffe, tage en espresso efter frokost og en gran lungo om eftermiddagen – maskinen kan brygge flere forskellige kopstørrelser, og udvalget af kaffetyper til Vertuo-systemet er stort.</p>
<p>Vertuo-kapslerne har en kode, som maskinen læser, så den selv tilpasser bryggningen til den kapsel, du sætter i. Du skal altså ikke selv holde styr på mængden af vand. Vandbeholderen rummer 1 liter, og den hvide udgave passer ind i et lyst køkken.</p>
HTML,
			'good'    => [ 'Husstande, hvor man drikker forskellige slags kaffe', 'Dig, der både vil have store kopper og espresso' ],
			'less'    => [ 'Dig, der vil bruge kapsler fra mange forskellige producenter' ],
		],
		[
			'ean'     => '8004399024632',
			'price'   => 800,
			'name'    => 'Nespresso Vertuo POP, liquorice black',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt og farverig adgang til Vertuo-systemet – til en lavere pris end de større modeller.',
			'why'     => <<<'HTML'
<p>Vertuo POP giver dig det samme kapselsystem som Vertuo Next, men i et mindre og mere legesygt format. Den er lavet til dig, der vil i gang med Vertuo uden at bruge for meget på selve maskinen, og som hellere vil lægge pengene i kaffen.</p>
<p>Designet er friskt, og maskinen fås i en række farver, så den kan matche resten af køkkenet. Den sorte liquorice black er den diskrete af slagsen. Har du ikke meget plads på bordpladen, er en lille maskine som denne et oplagt valg.</p>
HTML,
			'good'    => [ 'Første kapselmaskine', 'Det lille køkken' ],
			'less'    => [ 'Dig, der vil have mælkeskum direkte fra maskinen' ],
		],
		[
			'ean'     => '8004399016774',
			'price'   => 896,
			'name'    => 'Nescafé Dolce Gusto Genio S Plus Automatic, sort',
			'role'    => 'Bedst til variation',
			'reviews' => [],
			'verdict' => 'Dolce Gusto-maskine med Espresso Boost, der forbehandler kaffen for en mere intens smag.',
			'why'     => <<<'HTML'
<p>Dolce Gusto er systemet for dig, der gerne vil have mere end sort kaffe. Ud over espresso og almindelig kaffe findes der kapsler til mælkebaserede drikke og kakao, så både kaffedrikkere og resten af familien kan få noget ud af maskinen.</p>
<p>Genio S Plus har en Espresso Boost-funktion, hvor kaffen forbehandles i maskinen, så aromaerne kan udvikle sig, inden bryggningen går i gang. Det giver en mere intens smag. Vandbeholderen rummer 0,8 liter, og den sorte finish holder sig neutral på bordet.</p>
HTML,
			'good'    => [ 'Familier med forskellige ønsker', 'Dig, der kan lide søde og mælkede kaffedrikke' ],
			'less'    => [ 'Dig, der mest drikker store kopper sort kaffe' ],
		],
		[
			'ean'     => '8004399020399',
			'price'   => 1758,
			'name'    => 'Nespresso Lattissima One, sort',
			'role'    => 'Bedst med mælkeskum',
			'reviews' => [],
			'verdict' => 'Kapselmaskine med indbygget mælkesystem – cappuccino, latte eller espresso på ét tryk.',
			'why'     => <<<'HTML'
<p>Drikker du mest cappuccino og latte, sparer Lattissima One dig for en ekstra mælkeskummer på køkkenbordet. Maskinen laver både mælkeskum og kaffe, og du vælger drikken med et enkelt tryk på en knap.</p>
<p>Den bruger Nespressos Original-kapsler, hvor udvalget er stort – også fra andre producenter end Nespresso selv. Vandbeholderen rummer 1 liter. Husk, at mælkedelen skal skylles efter brug, så den holder sig frisk og fungerer, som den skal.</p>
HTML,
			'good'    => [ 'Dig, der elsker cappuccino og latte', 'Dig, der vil have det hele i én maskine' ],
			'less'    => [ 'Dig, der kun drikker sort kaffe', 'Dig, der ikke gider at rengøre mælkedelen' ],
		],
		[
			'ean'     => '8712836993112',
			'price'   => 1059,
			'name'    => 'Princess Multi Kapselmaskine 4-i-1, rustfrit stål',
			'role'    => 'Mest fleksibel',
			'reviews' => [],
			'verdict' => 'Multikapselmaskine med 19 bar pumpe, der også kan bruge malet kaffe og ESE-kapsler.',
			'why'     => <<<'HTML'
<p>Vil du ikke låse dig fast på ét kapselsystem, er Princess Multi et godt alternativ. Den er bygget til flere slags kaffe, blandt andet ESE-kapsler og almindelig malet kaffe, så du kan skifte, alt efter hvad du har i skabet – og bruge din yndlingskaffe fra risteriet.</p>
<p>Maskinen har en italiensk højtrykspumpe på 19 bar, og kabinettet er i rustfrit stål. Den henvender sig til dig, der sætter frihed og variation over den helt strømlinede betjening, som de store kapselsystemer er kendt for.</p>
HTML,
			'good'    => [ 'Dig, der vil kunne bruge malet kaffe', 'Dig, der vil have frit valg mellem kapsler' ],
			'less'    => [ 'Dig, der vil have mælkeskum direkte fra maskinen' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige kapselmaskine</h2>
<p>Det vigtigste valg er ikke maskinen, men kapselsystemet. Kapslerne passer kun i den type maskine, de er lavet til, og det er dem, du skal købe igen og igen. Tænk derfor over, hvad du drikker mest, før du vælger. Se alle <a href="/kaffemaskiner/kapselmaskine/">kapselmaskiner</a> med aktuelle priser.</p>
<h3>Nespresso Original eller Vertuo</h3>
<p>Nespresso har to systemer, og kapslerne kan ikke bruges på tværs. Original er bygget op omkring espresso og lungo, og her findes der mange kapsler fra andre producenter end Nespresso selv. Vertuo kan også lave store kopper og læser selv kapslen, så kaffen brygges rigtigt. Drikker du mest store kopper sort kaffe, er en kapselmaskine med Vertuo et godt valg. Er det espresso, du er til, giver Original dig flere kapsler at vælge imellem.</p>
<h3>Dolce Gusto og maskiner til flere kapseltyper</h3>
<p>Dolce Gusto har et bredt udvalg af drikke med mælk og kakao, og det gør systemet populært i familier. Vil du slet ikke være bundet, findes der maskiner, der tager flere typer kapsler eller malet kaffe. De giver frihed, men betjeningen er ofte lidt mere manuel.</p>
<h2>Prisen pr. kop</h2>
<p>En kapselmaskine er tit billig at købe, men kapslerne koster mere pr. kop end bønner eller formalet kaffe. Drikker du mange kopper om dagen, kan det betale sig at se på en <a href="/espressomaskine-med-kvaern/">espressomaskine med kværn</a> eller den <a href="/bedste-kaffemaskine/">bedste kaffemaskine</a> til filterkaffe i stedet. Skal du bare have en hurtig kop en gang imellem, er en kapselmaskine svær at slå på bekvemmelighed. Find <a href="/kaffe/kaffekapsler/">kaffekapsler</a> til de forskellige systemer.</p>
<h2>Mælkeskum: indbygget eller separat</h2>
<p>Nogle kapselmaskiner har et indbygget mælkesystem, så du får cappuccino på et tryk. Det er nemt, men kræver, at du skyller mælkedelen efter brug. Alternativet er en enkel kapselmaskine og en separat mælkeskummer – se vores guide til den <a href="/bedste-maelkeskummer/">bedste mælkeskummer</a>.</p>
<h2>Vedligeholdelse</h2>
<p>Alle kapselmaskiner skal afkalkes jævnligt, især hvis du bor et sted med hårdt vand. Kalk kan give kaffe med dårligere smag og på sigt slide på maskinen. Tøm kapselbeholderen og drypbakken ofte, og skift vandet i beholderen, så det ikke står for længe. Se <a href="/baristaudstyr/afkalkning/">afkalkning og rengøring</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvilken kapselmaskine skal jeg vælge?', 'Start med kapselsystemet. Drikker du mest store kopper kaffe, er Nespresso Vertuo et godt bud. Foretrækker du espresso og vil have mange kapsler at vælge imellem, er Nespresso Original stærk. Vil du have kakao og mælkedrikke, passer Dolce Gusto godt. Vil du kunne bruge malet kaffe, så vælg en kapselmaskine til flere kaffetyper.' ],
		[ 'Kan man bruge Nespresso-kapsler i en Vertuo-maskine?', 'Nej. Nespresso Original og Vertuo har hver deres kapsler, og de passer ikke i hinandens maskiner. Tjek altid, hvilket system en kapsel er lavet til.' ],
		[ 'Er en kapselmaskine dyr i brug?', 'Selve maskinen er ofte billig, men prisen pr. kop er højere end med bønner eller formalet kaffe. Kapsler fra andre producenter end mærket selv kan gøre det billigere, hvor systemet tillader det.' ],
		[ 'Hvor tit skal en kapselmaskine afkalkes?', 'Det afhænger af, hvor meget du bruger den, og hvor hårdt vandet er. Mange maskiner har en indikator, der siger til. Følg producentens anvisning, og afkalk hellere for tit end for sjældent.' ],
		[ 'Kan man genbruge kaffekapsler?', 'Mange kapsler er af aluminium eller plast, som kan sorteres til genbrug, når kaffen er tømt ud. Der findes også genopfyldelige kapsler til nogle systemer, hvor du selv fylder malet kaffe i.' ],
	],
];
