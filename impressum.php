<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg/bg1.jpg);
    }
</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Impressum
        </h1>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <h5>Hinweis</h5>
        <p>Diese Website ist ein <strong>Portfolio- bzw. Schulprojekt</strong> und dient ausschließlich der Präsentation von Webdesign- und Programmierkenntnissen.
        „<?= BRAND ?>“ ist ein fiktiver Name. Es handelt sich nicht um ein echtes Unternehmen, es werden keine Waren oder Dienstleistungen angeboten.
        Alle Bilder sind Platzhalter, Preise, Zeiten und Kontaktdaten auf den Unterseiten sind frei erfunden.</p>

        <h5>Angaben gemäß § 5 DDG</h5>
        <p><?= OPERATOR_NAME ?><br>
        <?= OPERATOR_STREET ?><br>
        <?= OPERATOR_CITY ?></p>

        <h5>Kontakt</h5>
        <p>E-Mail: <?= OPERATOR_EMAIL ?></p>

        <h5>Verantwortlich für den Inhalt nach § 18 Abs. 2 MStV</h5>
        <p><?= OPERATOR_NAME ?> (Anschrift wie oben)</p>

        <h5>Webentwicklung und Programmierung</h5>
        <p>Daniel Akinschin<br>
        Fabian Weber<br>
        Luisa Klaschka</p>

        <h5>Verwendete Ressourcen</h5>
        <ul>
            <li><a href="https://getbootstrap.com/" class="text-secondary" target="_blank" rel="noopener">Bootstrap</a> und Bootstrap Icons (MIT-Lizenz)</li>
            <li>Schriftart „Permanent Marker“ von Font Diner (Apache License 2.0)</li>
            <li>Alle Grafiken und Platzhalterbilder wurden selbst erstellt.</li>
        </ul>
    </div>
</div>

<?php include 'footer.php'; ?>
