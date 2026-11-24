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
            Datenschutz
        </h1>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <h5>Verantwortlicher</h5>
        <?php include 'operator.php'; ?>

        <h5>Kurzfassung</h5>
        <p>Diese Website ist eine Demo (Portfolio-Projekt). Sie verwendet <strong>keine Cookies, kein Tracking, keine Analyse-Tools</strong> und bindet <strong>keine Inhalte von Drittanbietern</strong> ein
        (Schriften, Skripte und Bilder liegen auf demselben Server). Die Formulare sind reine Attrappen: Eingaben werden weder gesendet noch gespeichert.</p>

        <h5>Hosting und Server-Logfiles</h5>
        <p>Beim Aufruf der Seite verarbeitet der Webserver technisch notwendige Daten (IP-Adresse, Datum und Uhrzeit, aufgerufene Seite, Browser-Informationen),
        um die Seite auszuliefern und Missbrauch abzuwehren. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse am sicheren Betrieb der Website).
        Die Logfiles werden nach den Vorgaben des Hosting-Anbieters automatisch gelöscht.</p>

        <h5>Ihre Rechte</h5>
        <p>Sie haben das Recht auf Auskunft, Berichtigung, Löschung, Einschränkung der Verarbeitung, Datenübertragbarkeit sowie Widerspruch gegen die Verarbeitung (Art. 15–21 DSGVO).
        Außerdem können Sie sich bei einer Datenschutz-Aufsichtsbehörde beschweren (Art. 77 DSGVO). Wenden Sie sich dazu an den oben genannten Betreiber.</p>
    </div>
</div>

<?php include 'footer.php'; ?>
