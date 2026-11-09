<?php
/**
 * Siden "Sådan vælger vi produkter" (metode for købsguides), skrevet til kaffesitet.
 * Formuleringen er bevidst en anden end på søstersitesne.
 */

defined( 'ABSPATH' ) || exit;

return [
	'title'   => 'Sådan vælger vi produkter',
	'excerpt' => 'Sådan finder vi frem til kaffemaskiner, espressomaskiner, kværne og andet kaffeudstyr til vores købsguides – og hvad vi ærligt ikke kan sige noget om uden at have brygget med det.',
	'html'    => <<<'HTML'
<p class="lead">Vi har ikke brygget kaffe på de maskiner, vi peger på i vores guides. Derfor lægger vi kortene på bordet: Her kan du læse, hvordan vi alligevel kommer frem til vores bud på de bedste kaffemaskiner, kværne og bryggeredskaber.</p>

<h2>Krav til et produkt i en guide</h2>
<ul>
<li>Det sælges af en af <a href="/vores-butikker/">de butikker, vi samarbejder med</a>. Vi sammenligner altså det, vores partnerbutikker har – ikke hele markedet.</li>
<li>Det var på lager og havde et produktbillede, da guiden blev skrevet. Derefter opdateres pris og lagerstatus automatisk morgen og aften.</li>
<li>Det hører til emnet. En guide til manuelle kværne viser ikke elektriske, og en guide til filterkaffemaskiner viser ikke kapselmaskiner.</li>
<li>Hver guide har højst fem modeller.</li>
</ul>

<h2>Det lægger vi vægt på</h2>
<p><strong>Det, der påvirker koppen.</strong> For espressomaskiner ser vi på, om der er portafilter eller fuld automatik, om der er indbygget kværn, og hvordan maskinen klarer mælk. For filterkaffemaskiner er det kapacitet, kande (glas eller termo) og om den kan brygge små mængder. For kværne er det formalingstype, hvor fint den kan justeres, og om den er beregnet til filter, espresso eller begge dele. Den model, der dækker de vigtigste behov bedst, bliver vores førstevalg.</p>
<p><strong>Hvad du får for pengene.</strong> Kan en billigere model stort set det samme, bliver den vores bud til den mindre pengepung.</p>
<p><strong>Producent og garanti.</strong> Mærker med et godt ry inden for kaffeudstyr og en lang garanti trækker op, når resten står lige.</p>
<p><strong>Hvem den er til.</strong> Den bedste maskine til en familie, der drikker en hel kande om morgenen, er sjældent den bedste til én, der vil have en enkelt cortado. Derfor skriver vi ved hvert valg, hvem det passer til – og hvem der bør kigge efter noget andet.</p>

<h2>Når andre har anmeldt modellen</h2>
<p>Har et uafhængigt medie anmeldt præcis den samme model, linker vi til anmeldelsen, og den vejer tungt i vores valg. Findes der ingen, står der "Vores vurdering", så du kan se, at valget bygger på produktdata og ikke på en anmeldelse.</p>

<h2>Det kan ikke købes</h2>
<p>Provision, hvilken butik der sælger varen, og betaling for omtale har ingen indflydelse på, hvad der kommer med. Ingen kan betale sig til en plads i vores guides. Læs, <a href="/saadan-tjener-vi-penge/">hvordan vi tjener penge</a>.</p>

<h2>Sådan bruger vi AI</h2>
<p>Guides og produkttekster bliver til med hjælp fra AI. Den gennemgår butikkernes produktdata, søger efter anmeldelser af den konkrete model og skriver et udkast. Den må ikke finde på egenskaber, og inden en tekst udgives, bliver det automatisk kontrolleret, at alle tal findes i butikkens data. Frederik Baastrup er ansvarlig redaktør – sig endelig til, hvis du ser en fejl.</p>

<h2>Det kan vi ikke svare på</h2>
<p>Hvordan espressoen smager efter et halvt år, hvor stabil temperaturen er fra kop til kop, og hvor meget kværnen larmer klokken seks om morgenen – det kræver, at man har haft maskinen i brug. Læs gerne andres erfaringer, og tjek den endelige pris og leveringstid hos butikken.</p>

<p>Har du brygget med en af modellerne og oplevet noget andet, eller savner du en god maskine i en af guiderne? Så hører vi gerne fra dig.</p>
HTML,
];
