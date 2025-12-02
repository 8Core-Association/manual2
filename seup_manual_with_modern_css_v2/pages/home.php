<?php
if (!defined('APP_INIT')) {
    die('Direct access not allowed.');
}
?>
<div class="home-content">
    <h1>UVOD U SEUP – Sustav elektroničkog uredskog poslovanja</h1>

    <div class="intro-section">
        <p class="lead">
            Dobrodošli u SEUP, sustav koji služi za upravljanje službenim dokumentima, predmetima i uredskim poslovanjem u javnoj upravi.
            SEUP je razvijen kako bi olakšao svakodnevni rad, smanjio papirnatu dokumentaciju, ubrzao protok informacija i omogućio sigurnu razmjenu i čuvanje službenih spisa.
        </p>

        <p>Cilj sustava je da svaki korisnik, bez obzira na razinu informatičkog znanja, može jednostavno:</p>
        <ul>
            <li>zaprimiti dokument,</li>
            <li>otvoriti predmet,</li>
            <li>pridodati dodatne akte,</li>
            <li>pratiti tijek rješavanja,</li>
            <li>pregledati sve dostupne dokumente,</li>
            <li>po potrebi digitalno potpisati određene spise,</li>
            <li>i sigurno ih arhivirati.</li>
        </ul>
    </div>

    <section class="content-section">
        <h2>Predmeti i akti</h2>
        <p>U radu sustava postoje dvije osnovne vrste zapisa:</p>

        <div class="info-card">
            <h3>1. Predmet</h3>
            <p><strong>Predmet</strong> predstavlja glavni službeni zapis.<br>
            Primjer: zahtjev građanina, dopis upravnog tijela, interni postupak, službeni spis i sl.</p>

            <p>Za svaki predmet sustav čuva sve ključne podatke:</p>
            <ul>
                <li>kada je zaprimljen,</li>
                <li>tko ga je zaprimio,</li>
                <li>iz koje ustanove potječe,</li>
                <li>kome je dodijeljen na rješavanje</li>
                <li>i što je urađeno.</li>
            </ul>

            <p>Svaki predmet dobiva jedinstveni urudžbeni broj, kako bi se osiguralo jasno praćenje dokumentacije kroz vrijeme i izbjegla zamjena spisa.</p>
        </div>

        <div class="info-card">
            <h3>2. Akt</h3>
            <p><strong>Akt</strong> predstavlja dodatni dokument koji se dodaje već postojećem predmetu.<br>
            To može biti:</p>
            <ul>
                <li>dopuna,</li>
                <li>odgovor,</li>
                <li>očitovanje,</li>
                <li>aneks ugovora,</li>
                <li>žalba,</li>
                <li>interni zaključak i sl.</li>
            </ul>

            <p>Akt uvijek pripada već otvorenom predmetu i ima svoj jedinstveni broj.<br>
            Tako se održava uredna struktura – glavni predmet na vrhu, a svi dodatni dokumenti koji se odnose na njega uredno poredani ispod.</p>
        </div>
    </section>

    <section class="content-section">
        <h2>Zaprimanje pošte i otvaranje predmeta</h2>
        <p>Sustav omogućava zaprimanje službenih pošiljki na nekoliko načina:</p>
        <ul>
            <li>klasična pošta, koju djelatnik unosi u sustav</li>
            <li>elektronička pošta (e-mail), koja se evidentira kao zaprimljeni dokument</li>
            <li>ručno učitavanje dokumenta skeniranjem</li>
        </ul>

        <p>Pri svakoj zaprimljenoj pošiljci djelatnik može odlučiti:</p>
        <ul>
            <li>otvara li se novi predmet,</li>
            <li>ili se zaprimljeni dokument pridružuje postojećem.</li>
        </ul>

        <p>Cijeli postupak vođen je jasno i jednostavno, tako da se ne može dogoditi da dokument bude "izgubljen" ili pogrešno uparen.</p>
    </section>

    <section class="content-section">
        <h2>Pohrana dokumenata i povezivanje s Nextcloudom</h2>
        <p>Kako bismo osigurali da predmeti i svi pripadajući dokumenti budu trajno čuvani i lako dostupni, SEUP koristi vezani sustav sigurne datoteke kroz Nextcloud.</p>

        <p>Korisnik ne treba znati nikakve tehničke detalje.<br>
        Za njega to znači samo ovo:</p>
        <ul>
            <li>svi dokumenti koji se unesu u SEUP automatski se pohranjuju na zaštićenu lokaciju,</li>
            <li>dokumenti su dostupni samo ovlaštenim djelatnicima,</li>
            <li>sve datoteke se čuvaju u mapi predmeta koja je jedinstvena za svaki predmet.</li>
        </ul>

        <p>Drugim riječima, možete otvoriti predmet i odmah vidjeti sve dokumente koji mu pripadaju, bez potrebe za dodatnim pretraživanjem mapa ili traženjem po serverima.</p>

        <p>Svi predmeti i akti imaju svoj jasno definiran prostor za pohranu i ništa se ne miješa.</p>
    </section>

    <section class="content-section">
        <h2>Digitalno potpisivanje (opcija)</h2>
        <p>U sustavu postoji priprema za digitalno potpisivanje dokumenata putem certificiranih rješenja.<br>
        Kada se ta usluga aktivira, određene osobe (npr. rukovoditelji) moći će elektronički potvrditi dokument, bez potrebe za ispisivanjem.</p>

        <p>Time se skraćuje vrijeme obrade predmeta, uklanjaju troškovi ispisa i smanjuje mogućnost pogreške.</p>
    </section>

    <section class="content-section">
        <h2>Sigurnost i praćenje</h2>
        <p>SEUP bilježi sve ključne radnje unutar sustava:</p>
        <ul>
            <li>tko je zaprimio pošiljku,</li>
            <li>tko je otvorio predmet,</li>
            <li>tko je dodao akt,</li>
            <li>kada je dokument spreman,</li>
            <li>i kada je izvršena određena radnja.</li>
        </ul>

        <p>Ovo osigurava transparentnost rada, mogućnost interne provjere, ali i zaštitu djelatnika jer se točno zna tko je što obradio.</p>
    </section>

    <section class="content-section">
        <h2>Jednostavno korištenje</h2>
        <p>Iako sustav radi uz modernu infrastrukturu i napredne integracije, korisničko sučelje je napravljeno za jednostavan i siguran rad.</p>

        <p>Dovoljne su osnovne radne navike:</p>
        <ul>
            <li>unos podataka,</li>
            <li>odabir vrste dokumenta ili predmeta,</li>
            <li>pregled postojećih zapisa,</li>
            <li>dodavanje novih dokumenata.</li>
        </ul>

        <p>Djelatnik nema potrebu poznavati tehničke izraze, računalne protokole ni administraciju sustava.</p>

        <p>Vaš posao ostaje uredski, a SEUP se brine za pripadnu tehniku u pozadini.</p>
    </section>

    <section class="content-section conclusion">
        <h2>Zaključak</h2>
        <p>SEUP je osmišljen kao moderna zamjena za papirnate protokole, registratore i fizičke arhive.<br>
        S njim je svaka informacija dostupna u nekoliko klikova, dokumenti se čuvaju na sigurnom mjestu, a svaki predmet ima preciznu povijest.</p>

        <p>Sustav omogućava brži i sigurniji rad, urednu komunikaciju, smanjuje rizik od gubitka dokumentacije, te pruža jasnu sliku tijeka rješavanja predmeta.</p>

        <p><strong>U sljedećim poglavljima ovog priručnika prikazat ćemo:</strong></p>
        <ul>
            <li>kako se otvara predmet,</li>
            <li>kako se dodaje akt,</li>
            <li>kako se učitava dokument,</li>
            <li>i kako se pregledava arhiva.</li>
        </ul>

        <p class="highlight">Ako se netko izgubi u koracima — sustav će uvijek pokazati kamo dalje.</p>

        <p class="welcome-message"><strong>Dobrodošli u SEUP.</strong></p>
    </section>
</div>
