<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg/bg1.jpg);
    }
</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-secondary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Anfahrt
        </h1>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <h5>So findet Ihr zu uns ins <?= BRAND ?></h5>
        <!-- Statt Google-Maps-Einbettung (DSGVO): Platzhalter-Karte -->
        <div class="mb-3 rounded-4 shadow d-flex align-items-center justify-content-center text-white text-center bg-secondary bg-opacity-75" style="height: 400px; font-family: marker;">
            <span class="fs-2">Karte (Platzhalter)</span>
        </div>

        <h6>Mit Bus & Bahn</h6>
        <p>Vom Hauptbahnhof Musterstadt mit der Buslinie 123 bis zur Haltestelle „Musterstraße“.</p>

        <h6>Fahrt mit dem eigenen Auto</h6>
        <p>Musterstraße 1<br>
        12345 Musterstadt<br>
        in euer Navigationsgerät eingeben.</p>
        <p class="small text-muted">Adresse und Anfahrt sind fiktiv.</p>
    </div>
</div>

<?php include 'standart.php'; ?>

<?php include 'footer.php'; ?>