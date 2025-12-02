<?php
if (!defined('APP_INIT')) {
    die('Direct access not allowed.');
}
?>
<div class="home-content">
    <h1>Uvod u informacijski sustav uredskog poslovanja</h1>

    <div class="intro-section">
        <p class="lead">
            Ovaj informacijski sustav nastao je radi modernizacije uredskog poslovanja u javnim ustanovama.
            Glavna ideja je jednostavna: svi službeni dokumenti, predmeti, akti i evidencije vode se digitalno, uredno i sigurno, umjesto kroz papirnate mape, fascikle i registratore.
        </p>

        <p>Sustav se sastoji od više međusobno povezanih dijelova, ali najvažnije je znati da se sve pokreće iz Dolibarr platforme.</p>
    </div>

    <section class="content-section">
        <h2>Dolibarr – osnovna platforma sustava</h2>
        <p>Dolibarr je temeljni programski sustav u kojem se korisnici prijavljuju i rade.<br>
        On osigurava:</p>
        <ul>
            <li>korisnička imena i lozinke</li>
            <li>prava i ovlasti</li>
            <li>organizaciju odjela, službi i radnih mjesta</li>
            <li>zajedničko sučelje</li>
            <li>prikaz modula i funkcija dostupnih korisniku</li>
        </ul>

        <p>U Dolibarru su aktivni samo oni moduli koji su potrebni ustanovi.<br>
        Jedan od modula koji se priključuje na Dolibarr je SEUP.</p>

        <p class="highlight">Drugim riječima:<br>
        Dolibarr je "kuća", a SEUP je "uređeni ured" u toj kući.</p>

        <p>Svi djelatnici se prijavljuju u Dolibarr, a nakon prijave koriste funkcije SEUP-a unutar istog sustava, bez dodatnih prijava i bez prebacivanja između aplikacija.</p>
    </section>

    <section class="content-section">
        <h2>SEUP – modul za uredsko poslovanje</h2>
        <p>SEUP (Sustav Elektroničkog Uredskog Poslovanja) je specijalizirani modul koji radi unutar Dolibarra.<br>
        Namijenjen je svim službenicima koji vode predmete, zaprimanja, otpreme i službene spise.</p>

        <p>U njemu se evidentira sve što inače vodimo kroz:</p>
        <ul>
            <li>urudžbeni zapisnik,</li>
            <li>knjigu primljene pošte,</li>
            <li>knjigu otpremljene pošte,</li>
            <li>fascikle predmeta,</li>
            <li>akte i priloge,</li>
            <li>arhivske spisovne jedinice.</li>
        </ul>

        <p><strong>SEUP zamjenjuje sve to u digitalnom obliku.</strong></p>
    </section>

    <section class="content-section">
        <h2>Ostale komponente sustava</h2>
        <p>Kako bi rad bio potpun, sustav koristi nekoliko tehničkih sastavnica, ali sve one rade u pozadini.<br>
        Za korisnika je važno samo razumjeti osnovnu svrhu:</p>

        <div class="info-card">
            <h3>1. Cloud Hub (sigurno spremište dokumenata)</h3>
            <p>Cloud Hub je posebno odvojeni sustav na zasebnom serveru.<br>
            U njemu se fizički nalaze svi dokumenti koji pripadaju predmetima, aktima i prilozima.</p>

            <p>Za službenika to izgleda ovako:</p>
            <ul>
                <li>svaki predmet ima svoju mapu</li>
                <li>svi dokumenti su uredno raspoređeni</li>
                <li>samo ovlaštene osobe mogu pristupiti</li>
                <li>dokumenti se ne gube i uvijek se mogu pregledati</li>
            </ul>

            <p>Cloud Hub također sadrži:</p>
            <ul>
                <li>kalendare,</li>
                <li>okruženje za mail,</li>
                <li>mogućnost dijeljenja mapa,</li>
                <li>te mogućnost slanja cijelog predmeta kao datoteke ili sigurne poveznice za preuzimanje.</li>
            </ul>

            <p>Dokumenti koje dostavljaju suradnici mogu se najprije smjestiti u Cloud Hub, zatim unutar SEUP-a razvrstati i upariti s točnim predmetom kao akt ili prilog.</p>
        </div>

        <div class="info-card">
            <h3>2. OnlyOffice</h3>
            <p>OnlyOffice je program za izradu i uređivanje dokumenata poput:</p>
            <ul>
                <li>akata,</li>
                <li>odluka,</li>
                <li>dopisa,</li>
                <li>obrazaca.</li>
            </ul>

            <p>Radi kao poseban servis, ali je povezan s ostatkom sustava i omogućuje izradu dokumenata bez potrebe za preuzimanjem na računalo.</p>
        </div>

        <div class="info-card">
            <h3>3. Lokalne kopije (Windows klijent)</h3>
            <p>Za one koji rade na terenu ili žele imati pristup dokumentima i kada nemaju internet, postoji mogućnost sinkroniziranih kopija na službenim računalima.</p>

            <p>Određene mape s dokumentima mogu se automatski održavati i lokalno, a sustav se pobrine da sve ostane usklađeno.</p>
        </div>

        <div class="info-card">
            <h3>4. Obavijesti o promjenama</h3>
            <p>Korisnici mogu primati obavijesti o izmjenama predmeta i dokumentacije, uključujući:</p>
            <ul>
                <li>dodane akte,</li>
                <li>nove priloge,</li>
                <li>pristigla zaprimanja,</li>
                <li>otpreme,</li>
                <li>izmjene u predmetu.</li>
            </ul>

            <p>Obavijesti je moguće primati i na mobilne uređaje.</p>
        </div>
    </section>

    <section class="content-section">
        <h2>Glavne funkcije SEUP-a</h2>
        <p>Rad u SEUP-u vodi se oko nekoliko ključnih dijelova, koje djelatnici koriste u svom svakodnevnom poslu:</p>

        <div class="info-card">
            <h3>1. Predmeti</h3>
            <p>Predmet predstavlja glavni službeni spis.<br>
            U njemu se čuvaju:</p>
            <ul>
                <li>osnovni podaci,</li>
                <li>urudžbeni broj,</li>
                <li>klasifikacijska oznaka,</li>
                <li>zadužena osoba,</li>
                <li>akta i prilozi,</li>
                <li>povijest radnji,</li>
                <li>povezani dokumenti.</li>
            </ul>

            <p><strong>Predmet čini središte svih radnji u sustavu.</strong></p>
        </div>

        <div class="info-card">
            <h3>2. Arhiva predmeta</h3>
            <p>Predmeti koji su završeni mogu se arhivirati.<br>
            Takvi predmeti ostaju dostupni za pregled, ali se više ne vode kao aktivni.</p>

            <p>Arhiva omogućuje:</p>
            <ul>
                <li>jednostavno pretraživanje,</li>
                <li>pripremu dokumentacije za uvid,</li>
                <li>revizijske provjere,</li>
                <li>izradu izvješća.</li>
            </ul>
        </div>

        <div class="info-card">
            <h3>3. Zaprimanje (ulazna pošta)</h3>
            <p>Zaprimanje je evidencija svih pošiljki koje ulaze u ustanovu.</p>

            <p>Kod zaprimanja se upisuje:</p>
            <ul>
                <li>pošiljatelj,</li>
                <li>datum,</li>
                <li>način zaprimanja,</li>
                <li>opis i napomena,</li>
                <li>pripada li dokument postojećem predmetu ili se otvara novi.</li>
            </ul>

            <p>Skenirani dokument može se odmah spremiti, a službenik bira što se dalje radi s njim.</p>

            <p><strong>Zaprimanje je digitalna knjiga ulaznih pošiljki.</strong></p>
        </div>

        <div class="info-card">
            <h3>4. Otprema (izlazna pošta)</h3>
            <p>Otprema je evidencija sve pošte koja izlazi iz ustanove:</p>
            <ul>
                <li>rješenja,</li>
                <li>dopisi,</li>
                <li>zaključci,</li>
                <li>službene obavijesti.</li>
            </ul>

            <p>Upisuju se:</p>
            <ul>
                <li>primatelj,</li>
                <li>datum slanja,</li>
                <li>način slanja,</li>
                <li>predmet ili akt kojem pripada.</li>
            </ul>

            <p>Potvrde slanja (npr. povratnice) mogu se pohraniti kao prilozi.</p>
        </div>

        <div class="info-card">
            <h3>5. Funkcije unutar predmeta</h3>
            <p>Kod svakog predmeta postoje dodatne radnje:</p>

            <p><strong>Akti</strong><br>
            Službeni dokumenti koji pripadaju predmetu:</p>
            <ul>
                <li>rješenja,</li>
                <li>zaključci,</li>
                <li>dopisi,</li>
                <li>žalbe i drugo.</li>
            </ul>

            <p><strong>Prilozi</strong><br>
            Skenovi, podloge, izjave, nacrti, fotografije i ostali materijali vezani uz akt ili predmet.</p>

            <p><strong>Omot spisa</strong><br>
            Prikaz osnovnih podataka:</p>
            <ul>
                <li>naziv,</li>
                <li>urudžbeni broj,</li>
                <li>klasifikacijska oznaka,</li>
                <li>popis akata,</li>
                <li>popis priloga,</li>
                <li>povijest rada.</li>
            </ul>

            <p>Može se pregledati i ispisati.</p>

            <p><strong>Predpregled i ispis dokumentacije</strong><br>
            Sustav priprema predmet u urednom, preglednom obliku za ispis ili arhiviranje.</p>

            <p><strong>Otprema iz predmeta</strong><br>
            Ako se dokument šalje kao službena isprava, korisnik može odmah iz predmeta pripremiti podatke za otpremu.</p>

            <p><strong>Zaprimanje u predmet</strong><br>
            Ako se naknadno zaprimi dokument koji se odnosi na postojeći predmet, on se može upisati kao akt ili prilog.</p>
        </div>

        <div class="info-card">
            <h3>6. Suradnici</h3>
            <p>Vanjske pravne ili fizičke osobe mogu biti evidentirane kao suradnici.<br>
            Njihovi dokumenti mogu se:</p>
            <ul>
                <li>sortirati,</li>
                <li>prepoznati kao ulazni materijal,</li>
                <li>i upariti sa stvarnim predmetom.</li>
            </ul>
        </div>

        <div class="info-card">
            <h3>7. Arhivska građa</h3>
            <p>Predmeti koji su trajno riješeni mogu se odvojiti kao arhivska jedinica, ali ostaju dostupni za pregled i eventualni uvid.</p>
        </div>
    </section>

    <section class="content-section conclusion">
        <h2>Za kraj</h2>
        <p>Cijeli sustav je zamišljen tako da službenik radi jednako kao i do sada, ali s manje papira i više reda.<br>
        Ne traži informatičko znanje — samo uobičajenu uredsku praksu.</p>

        <ul>
            <li><strong>Dolibarr</strong> pruža okruženje, pristup i organizaciju.</li>
            <li><strong>SEUP</strong> vodi službene postupke, dokumente i spisovnu evidenciju.</li>
            <li><strong>Cloud Hub</strong> čuva sve dokumente na odvojenoj, sigurnoj lokaciji.</li>
            <li><strong>OnlyOffice</strong> služi za izradu i uređivanje akata.</li>
        </ul>

        <p class="welcome-message">Sve zajedno čini jedinstven, moderan i siguran sustav uredskog poslovanja.</p>
    </section>
</div>
