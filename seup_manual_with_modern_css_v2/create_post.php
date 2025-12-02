<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/class/Database.php';

$db = new Database($pdo);
$prefix = 'cms_';

// Sadržaj objave
$title = 'Početna provjera sustava (Setup prozor)';
$content = '<section class="card">
    <h2 class="card-title">Početna provjera sustava (Setup prozor)</h2>
    <p>
        Kod ulaska u SEUP, sustav automatski provjerava jesu li postavljene osnovne postavke
        potrebne za rad. Ako nešto nedostaje, pojavit će se prozor s upozorenjem i popisom
        što treba podesiti prije normalnog rada.
    </p>

    <p>Provjeravaju se sljedeće stavke:</p>
    <ul>
        <li><strong>Podaci o ustanovi</strong> (naziv, adresa, poštanski broj, mjesto, država, e-mail)</li>
        <li><strong>Barem jedan zaposlenik</strong> (korisnik označen kao djelatnik u sustavu)</li>
        <li><strong>Oznaka ustanove</strong> (šifra / oznaka za vašu ustanovu u SEUP postavkama)</li>
        <li><strong>Interna oznaka korisnika</strong> (unutarnja šifra djelatnika za rad u SEUP-u)</li>
        <li><strong>Barem jedna klasifikacijska oznaka</strong> (osnovni plan klasifikacije predmeta)</li>
    </ul>

    <p>
        Ako neka od stavki nije podešena, uz nju će biti prikazano upozorenje i gumb koji vodi
        direktno na ekran gdje se ta postavka unosi ili uređuje.
    </p>

    <div class="card" style="margin-top: 1.5rem;">
        <h3 class="card-title">Video: Početna provjera sustava</h3>
        <div style="position: relative; width: 100%; border-radius: 16px; overflow: hidden; background: #000;">
            <video controls style="width: 100%; display: block;">
                <source src="./media/video/modla1.mp4" type="video/mp4">
                Vaš preglednik ne podržava video element.
            </video>
        </div>
    </div>
</section>';

$category_id = 1; // User Manual kategorija
$published = 1; // Odmah objavljeno

try {
    $db->execute(
        "INSERT INTO {$prefix}posts (title, content, category_id, published) VALUES (?, ?, ?, ?)",
        [$title, $content, $category_id, $published]
    );

    echo "✅ Objava uspješno kreirana!<br>";
    echo "📝 Naslov: " . htmlspecialchars($title) . "<br>";
    echo "📂 Kategorija: User Manual<br>";
    echo "✅ Status: Objavljeno<br>";
    echo "<br><a href='administrator/dashboard.php'>← Povratak na dashboard</a>";
} catch (PDOException $e) {
    echo "❌ Greška: " . $e->getMessage();
}
