# Koffee – projektnoter til Claude

Koffee (koffee.dk) er en affiliate-side, der ligner en webshop. Den samler kaffemaskiner, espressomaskiner, kaffekværne, bryggeudstyr, mælkeskummere, kopper og termo, baristaudstyr og kaffe fra de danske shops, vi samarbejder med, via Partner-ads-produktfeeds. Man køber ikke på siden: "Gå til butik" sender brugeren videre til shoppen via et affiliate-link.

Ejer: Frederik Baastrup (Mondae). Al tekst på siden er på dansk.

**Samme kodebase som Kitzhen, Fitbase, Pizzalicious og Outdoorland.** Koffee startede som en kopi af Pizzalicious 9. nov. 2026. Kodenavnene er bevidst de samme: mappenavne `playform`/`playform-feeds`, namespace `Playform\Feeds`, funktioner `playform_*`, metafelter `_pf_*`, shortcodes `[playform_produkter]` og `[fitbase_…]`. Så kan rettelser flyttes mellem sitesne. Omdøb dem ikke.

Alt, der er særligt for nichen, ligger i `wp-content/plugins/playform-feeds/src/Config.php`: navn og kontaktoplysninger (`site()`), shops, kategorier, underkategorier, udelukkelser, mærker (`brand_categories()`), prisintervaller. Temaet læser navn, domæne m.m. via `playform_site()`. Skriv aldrig "Koffee" eller "koffee.dk" direkte i en skabelon.

## Opbygning (det, der er særligt for Koffee)

- `Config.php`
  - Shops (partnerid 14854): Espresso Tools og Kai Berntsen (tilføjet 9. nov. 2026), Køge Kafferisteri, KitchenOne.dk, HvidevareShoppen.dk, Barlife.dk, Kitchen Gadget, Kitchentech.dk, Kirlund, Sumisu og Gourmetshoppen.com. Køkkenbutikkerne er de samme som Kitzhens – kun kaffevarerne kommer med. Freehand Coffee Club (kaffebønner, filterkaffe, kapsler; te, kakao, sirup m.m. kommer ikke med) og KaffeImperiet (kontorkaffe; kun kaffen via `category_map` – erhvervsmaskinerne til 3.000–125.000 kr, Cafitesse-koncentrat, te og vandkølere udelukkes) er tilføjet 10. nov. 2026.
  - `skip_uncategorized()` = true: varer, der ikke rammer en kaffekategori, kommer slet ikke med.
  - Kategorier (rækkefølgen betyder noget – kopper før maskiner, tilbehør før maskiner): `kaffemaskiner` (filter, med kværn, med termokande, Moccamaster, kapsel, til 1 kop), `espressomaskiner` (fuldautomatisk, semiautomatisk, med kværn, manuel, Sage, De'Longhi, med mælkeskummer), `kaffekvaerne` (elektrisk, manuel, espressokværn), `kaffebrygning` (pour over, stempelkande, espressokande, Aeropress, cold brew, kaffefiltre, kedel, kaffekande), `maelkeskummere` (elektrisk, manuel, mælkekande), `kopper-termo` (espresso-, cappuccinokopper, kaffekrus, termokande, termokrus, termoflaske), `baristaudstyr` (tamper, portafilter, kaffevægt, knock box, afkalkning, kaffedåse, WDT og dosering), `kaffe` (hele bønner, espressobønner, formalet, koffeinfri, abonnement, kapsler, økologisk).
  - `brand_categories()`: Espresso Tools → baristaudstyr, Moccamaster → kaffemaskiner, Hario og Bialetti → kaffebrygning.
  - Udelukket: gavekort og kurser, reservedele, bøger, salt- og peberkværne, te-udstyr, cocktailudstyr, tekstiler.
  - `dev/test-classifier.php` tester reglerne uden WordPress (`php dev/test-classifier.php`).
- `inc/navigation.php` – topmenuen med de 8 hovedkategorier (`playform_menu_spec()`), flertalsnavne (`playform_menu_labels()`), søgeforslag og "Populære" i sidefoden.
- `front-page.php` – kategorikort (espressomaskiner stort, kaffemaskiner, kværne, kaffebrygning), forsidens sektioner (fuldautomatiske og semiautomatiske espressomaskiner, filterkaffemaskiner, elektriske kværne, mælkeskummere) og SEO-tekst. Ændres sektionernes slugs, så ret også transient-listerne i `inc/setup.php` og `Admin::clear_front_cache()`.
- `content/category-texts.php` – intro, SEO-tekst og FAQ til hovedkategorier og de vigtigste underkategorier (intro til alle). Kun generel købsrådgivning, ingen tal.
- `content/method.php`, `content/campaign-seo.php`, `inc/campaigns.php` – metode-, Black Friday- og kampagnetekster skrevet til kaffe.
- `content/product-texts.php` er tom (søstersitets produkttekster er fjernet).
- Accentfarve `#754B21` (den brune kaffebønne fra logoet) med hvid tekst (`--on-accent`). Hover `--accent-hover` (#5E3B19), lyse tints `--accent-tint`/`--accent-shadow` – alt i toppen af `main.css`.
- Logo: `assets/img/logo.svg` (bønne + sort ordmærke, 179×39, ca. 4,6:1). `logo-white.svg` har hvid tekst og beholder den brune bønne. `favicon.svg` og PNG'erne (`favicon-32.png`, `favicon-192.png`, `apple-touch-icon.png` på hvid) er kun bønnen. Logoet er bredt og lavt, så højden sættes sidst i `main.css` (32 px desktop, 28/26/23 px på mindre skærme, 34/30 px i sidefoden).
- Kategoribilleder fra Pexels (fri licens, ingen kreditering krævet), `cat-<slug>.jpg` 1600×1100 + `cat-<slug>-800.jpg` + `th-<slug>.jpg` 240×240. Foto-id: kaffemaskiner 3936163 (beskåret til kanden, der hælder), espressomaskiner 31918436, kaffekvaerne 6205579, kaffebrygning 6660543, maelkeskummere 302899, kopper-termo 685527, baristaudstyr 9050554, kaffe 1695052. Underkategorier bruger forælderens billede. Brug aldrig produktbilleder som kategori- eller artikelbilleder.
- `content/best/<slug>.php` – 15 købsguides omskrevet fra det gamle koffee.dk 9. nov. 2026, på de gamle adresser direkte på roden (`/bedste-kaffemaskine/`, `/elektrisk-kaffekvaern/`, `/espressokande/` …; `PLAYFORM_GUIDE_BASE = ''`). `keyword` styrer "Bedste <søgeord>" (bøjes af `playform_best_kw()`), `date` = den oprindelige udgivelsesdato. Højst 5 modeller, valgt via EAN, på lager og med billede. Alle er "vores vurdering" (ingen anmeldelseslinks). Kaffevægt har kun 3 (få kaffevægte med EAN i feedsne).
- `content/legacy-posts.php` + `playform_import_legacy_posts()` (`inc/setup.php`) – de gamle artikler flyttes 1:1 fra arkivet (det gamle site er offline, så HTML ligger i filen og billederne i `assets/img/legacy/`): samme adresse, titel, tekst og dato. **Solgte artikler (`sponsored`): tekst og links må aldrig ændres.** Fire er skjulte (`hidden`: kaffekursus, tandlæge, barista-forretning, kaffehjørne), to vises i lister med mærket "Annonce" (kaffe-julekalender, verdens kaffekulturer). Termokrus/termokander og kaffens verden (solgte linkbuilding-artikler fra 2023) er fjernet 10. nov. 2026 og svarer 410. I egne artikler er døde Partner-ads-links fra 2021 erstattet med interne links.
- `inc/best.php` → `playform_legacy_redirects()` – `/om-os/` → `/saadan-fungerer-det/`, `/annonce/` → `/saadan-tjener-vi-penge/`. Hele URL-planen (alle 33 gamle adresser) ligger i Claudes arbejdsnoter; nye gamle adresser tilføjes her med 301.
- Søgemaskiner er slået fra på det midlertidige domæne (`playform_launch()`) og slås til, når `playform_move_domain()` flytter sitet til koffee.dk.

## Vigtige regler

Samme som Kitzhen og Fitbase: butikkernes egne tilbud (højst 14 dage), AI må aldrig opfinde fakta, affiliate-links med `rel="sponsored nofollow"` gennem `playform_aff_url()`, ingen produkter uden billede, ingen tredjepartskald fra den offentlige side, redaktørens rettelser vinder, guides påstår aldrig egen test. Se Kitzhens CLAUDE.md for detaljer om klasserne.

Tekster: skriv aldrig, at vi dækker alle danske butikker – kun "fra de butikker, vi samarbejder med". Ingen duplicate content med søstersitesne: samme mening, andre ord. Mærkenavne med stort begyndelsesbogstav (medmindre mærket selv skriver sig anderledes).

## Udrulning

Hvert push til `main` udrulles via GitHub Actions (FTPS) til SiteGround: `frederikb13.sg-host.com/public_html`. Kræver secrets `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`. Når domænet skiftes til koffee.dk i SiteGround, finder udrulningen selv den nye mappe og FTP-kontoen (`@koffee.dk`).

Cronjobs på SiteGround:

```
30 5,17 * * *  cd /home/customer/www/frederikb13.sg-host.com/public_html && wp playform import --quiet
*/5 * * * *    cd /home/customer/www/frederikb13.sg-host.com/public_html && wp cron event run --due-now --quiet
```

## Statistik

Matomo via WordPress-pluginnet "Matomo Analytics", hvis det installeres – `inc/consent.php` er klar (cookiefri indtil samtykke).

**SEO i købsguides (som de andre sites):** folk søger "bedste <søgeord>" og "<søgeord> test". `playform_guide_keyword()` giver titlen "Bedste <søgeord>: …", sidetitlen "Bedste <søgeord> <år> → Se vores top N" og nederst et afsnit (`playform_guide_test_note()`), der ærligt siger, at det ikke er en test. Overskrifter har aldrig ordet "test" (efter Forbrugerombudsmandens sag mod Obsidian Media) – kun brødteksten i afsnittet må nævne "<søgeord> test". Artikler med reklamelinks mærkes "Reklamelinks"/"Annonce" i alle lister og i metabeskrivelsen (`playform_post_ad_label()`), og hvert produktvalg siger "ikke testet". Aldrig "testvinder", "bedst i test" som påstand eller lignende.
