<?php
if (!defined('APP_INIT')) {
    die('Direct access not allowed.');
}
?>
<div class="home-content">
    <h1>Uvod u SEUP – sustav elektroničkog uredskog poslovanja</h1>

    <div class="intro-section">
        <p class="lead">
            SEUP je sustav za vođenje uredskog poslovanja i dokumentacije u javnoj upravi.
            Namijenjen je službenicima koji svakodnevno rade s poštom, predmetima, dopisima, odlukama i prilozima – bez potrebe za naprednim informatičkim znanjem.
        </p>

        <p>Cilj sustava je da svaka pošiljka, svaki predmet i svaki dokument:</p>
        <ul>
            <li>bude evidentiran,</li>
            <li>ima svoj jasan trag,</li>
            <li>bude dostupan ovlaštenim osobama,</li>
            <li>i da se po potrebi može sigurno poslati ili arhivirati.</li>
        </ul>
    </div>

    <section class="content-section">
        <h2>Predmeti, akti i prilozi</h2>
        <p>U SEUP-u se rad organizira oko tri ključna pojma:</p>

        <div class="info-card">
            <h3>Predmet</h3>
            <p><strong>Predmet</strong> je osnovni spis.<br>
            To može biti, primjerice:</p>
            <ul>
                <li>zahtjev građanina,</li>
                <li>postupak izdavanja dozvole,</li>
                <li>upravni predmet,</li>
                <li>ugovor,</li>
                <li>interni spis ustanove.</li>
            </ul>

            <p>Za svaki predmet SEUP pamti:</p>
            <ul>
                <li>osnovne podatke (naziv, opis, klasifikacijsku oznaku, urudžbeni broj),</li>
                <li>tko je zaprimio predmet,</li>
                <li>kome je dodijeljen,</li>
                <li>u kojoj je fazi,</li>
                <li>koje sve dokumente sadrži.</li>
            </ul>
        </div>

        <div class="info-card">
            <h3>Akt</h3>
            <p><strong>Akt</strong> je svaki pojedini dokument koji nastaje u sklopu predmeta ili se na njega odnosi.<br>
            To mogu biti:</p>
            <ul>
                <li>rješenja,</li>
                <li>zaključci,</li>
                <li>dopune,</li>
                <li>odgovori,</li>
                <li>žalbe,</li>
                <li>aneksi ugovora i sl.</li>
            </ul>

            <p>Jedan predmet može imati više akata.<br>
            Svaki akt ima svoj vlastiti broj unutar predmeta i povezan je s konkretnom datotekom (npr. PDF dokument).</p>
        </div>

        <div class="info-card">
            <h3>Prilozi</h3>
            <p><strong>Prilozi</strong> su dodatni dokumenti koji se vežu uz određeni akt ili predmet.<br>
            Primjerice:</p>
            <ul>
                <li>skenovi osobnih iskaznica,</li>
                <li>potvrde drugih tijela,</li>
                <li>grafičke podloge,</li>
                <li>nacrti, izjave, fotografije i sl.</li>
            </ul>

            <p>Prilozi se u SEUP-u:</p>
            <ul>
                <li>uredno numeriraju,</li>
                <li>vežu uz odgovarajući akt,</li>
                <li>pohranjuju u istu strukturu kao i glavni dokumenti,</li>
                <li>kasnije se lako pronalaze kroz predmet.</li>
            </ul>

            <p>Na taj način predmet čini jasna cjelina:<br>
            predmet → njegovi akti → prilozi vezani uz te akte.</p>
        </div>
    </section>

    <section class="content-section">
        <h2>Zaprimanje pošte (ulazni dio)</h2>
        <p>Zaprimanje je dio sustava u kojem se vodi evidencija sve pristigle pošte – bez obzira dolazi li:</p>
        <ul>
            <li>fizički (poštom ili osobno),</li>
            <li>elektronički (npr. putem e-maila, ali bez automatskog preuzimanja).</li>
        </ul>

        <p><strong>Važno:</strong><br>
        SEUP ne preuzima poštu sam iz e-maila – službenik je taj koji:</p>
        <ul>
            <li>zaprimi pošiljku (na bilo koji način),</li>
            <li>evidentira je u SEUP-u kao zaprimanje,</li>
            <li>po potrebi priloži sken ili dokument u elektroničkom obliku,</li>
            <li>otvori novi predmet ili pošiljku veže na već postojeći.</li>
        </ul>

        <p>Kod zaprimanja se bilježi:</p>
        <ul>
            <li>tko je poslao (pošiljatelj ili suradnik),</li>
            <li>datum i način zaprimanja,</li>
            <li>osnovni opis,</li>
            <li>povezan predmet i dokument.</li>
        </ul>

        <p>Sve zaprimljene pošiljke moguće je naknadno filtrirati i pretraživati po datumu, pošiljatelju, načinu zaprimanja i drugim kriterijima.</p>
    </section>

    <section class="content-section">
        <h2>Otprema pošte (izlazni dio)</h2>
        <p>Otprema je evidencija sve službene pošte koja izlazi iz ustanove, bez obzira šalje li se:</p>
        <ul>
            <li>poštom,</li>
            <li>preporučeno,</li>
            <li>e-mailom,</li>
            <li>osobnom dostavom.</li>
        </ul>

        <p>Ponovno, SEUP ne šalje pošiljke umjesto vas – on vodi službeni upisnik otpreme.<br>
        Službenik u SEUP-u evidentira:</p>
        <ul>
            <li>koji je dokument poslan (kojem predmetu pripada),</li>
            <li>kome je poslan (primatelj, adresa, kontakt),</li>
            <li>na koji način (npr. pošta, elektronička pošta, osobno),</li>
            <li>datum otpreme,</li>
            <li>eventualne napomene.</li>
        </ul>

        <p>Po potrebi se može priložiti i potvrda o otpremi (npr. sken povratnice ili potvrde pošte), kako bi se kasnije mogla dokazati predaja.</p>

        <p>I ulazni (zaprimanje) i izlazni (otprema) dio rade kao elektronički upisnici, s mogućnošću pretraživanja, filtriranja i povezivanja s predmetima.</p>
    </section>

    <section class="content-section">
        <h2>Cloud Hub – sigurna pohrana i rad s dokumentima</h2>
        <p>SEUP je povezan s Cloud Hubom – zaštićenim sustavom za pohranu i rad s dokumentima, koji se nalazi na fizički odvojenoj lokaciji od samog SEUP-a.</p>

        <p>Za službenika to znači sljedeće:</p>
        <ul>
            <li>svi dokumenti (akti, prilozi, skenovi) koji se unesu u SEUP sigurno se spremaju u Cloud Hub,</li>
            <li>predmet ima svoju vlastitu mapu, u kojoj se nalaze svi dokumenti tog predmeta,</li>
            <li>dokumenti su dostupni ovlaštenim korisnicima, ali zaštićeni od neovlaštenog pristupa.</li>
        </ul>

        <p><strong>Cloud Hub omogućava:</strong></p>
        <ul>
            <li>pregled i preuzimanje dokumenata,</li>
            <li>zajednički rad nad mapama (ovisno o ovlastima),</li>
            <li>korištenje kalendarâ i mail sučelja unutar istog okruženja,</li>
            <li>slanje cijelog predmeta iz SEUP-a kao:
                <ul>
                    <li>komprimiranog paketa (privitka),</li>
                    <li>ili sigurnog linka za preuzimanje (primatelj dobije poveznicu umjesto gomile datoteka).</li>
                </ul>
            </li>
        </ul>

        <p>Dokumenti koje dobijemo od suradnika (npr. vanjski izvođači, projektanti, geodeti i sl.) mogu se prvo pohraniti u Cloud Hub, a zatim u SEUP-u postoji funkcionalnost sortiranja:</p>
        <ul>
            <li>sustav prikaže dokumente koji još nisu dodijeljeni,</li>
            <li>službenik ih zatim rasporedi po predmetima kao akt ili prilog,</li>
            <li>tako se "kupovani" ili vanjski materijali uredno vežu uz konkretne predmete.</li>
        </ul>
    </section>

    <section class="content-section">
        <h2>Digitalni potpis i provjera potpisnika</h2>
        <p>SEUP ima ugrađenu funkcionalnost prepoznavanja digitalnog potpisa u PDF dokumentima.</p>

        <p>Kada se u sustav doda dokument (posebno akt):</p>
        <ul>
            <li>sustav automatski provjerava sadrži li PDF digitalni potpis,</li>
            <li>ako je potpis prisutan, SEUP pokušava pročitati osnovne podatke iz certifikata, poput:
                <ul>
                    <li>imena i prezimena potpisnika,</li>
                    <li>izdavatelja certifikata (npr. FINA),</li>
                    <li>serijskog broja certifikata ili sličnih identifikatora.</li>
                </ul>
            </li>
        </ul>

        <p>Na razini korisnika to znači:</p>
        <ul>
            <li>nije potrebno otvarati dodatne programe za provjeru potpisa,</li>
            <li>uz dokument se može vidjeti je li potpisan i tko ga je potpisao,</li>
            <li>lakše je prepoznati je li dokument službeno potpisan ili je samo sken bez pravovaljanog elektroničkog potpisa.</li>
        </ul>

        <p>Digitalni potpis nije "dodatna opcija", nego ugrađeni dio rada s dokumentima u SEUP-u.</p>
    </section>

    <section class="content-section conclusion">
        <h2>Zaključak</h2>
        <p><strong>SEUP objedinjuje:</strong></p>
        <ul>
            <li>predmete, akte i priloge u jednu cjelinu,</li>
            <li>zaprimanje i otpremu u elektroničke upisnike,</li>
            <li>Cloud Hub kao sigurnu, fizički odvojenu lokaciju za pohranu dokumenata i dijeljenje predmeta,</li>
            <li>digitalni potpis kao automatsku provjeru autentičnosti ključnih dokumenata.</li>
        </ul>

        <p class="highlight">Službenik i dalje radi svoj posao kao i do sada – zaprima poštu, otvara predmete, priprema akte i priloge – ali umjesto papirnatih registratora i ručnih evidencija sve vodi kroz jedan sustav, koji čuva trag, olakšava pretragu i smanjuje rizik od gubitka dokumentacije.</p>
    </section>
</div>
