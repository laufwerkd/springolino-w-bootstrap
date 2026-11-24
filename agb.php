<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg/bg1.jpg);
    }
</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-warning bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Hinweise & Regeln
        </h1>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <div class="alert alert-warning">Beispieltext für das Demo-Projekt. Es handelt sich nicht um gültige Geschäftsbedingungen.</div>

        <h5>Hausregeln im <?= BRAND ?></h5>
        <p>Damit alle sicher und mit viel Spaß spielen können, bitten wir Groß und Klein, diese Regeln zu beachten.</p>
        <ul class="list-group list-group-flush" style="--bs-list-group-bg: none;">
            <li class="list-group-item">Auf den Spielgeräten bitte nur mit Socken spielen, Schuhe bleiben im Regal.</li>
            <li class="list-group-item">Eltern und Begleitpersonen sind für ihre Kinder verantwortlich.</li>
            <li class="list-group-item">Jedes Spielgerät nur so benutzen, wie es gedacht ist, und auf Altersangaben achten.</li>
            <li class="list-group-item">Rücksicht nehmen: Kleinere Kinder haben Vorrang in ihren Bereichen.</li>
            <li class="list-group-item">Kein Kaugummi, keine spitzen Gegenstände und keine Speisen auf den Spielgeräten.</li>
            <li class="list-group-item">Unfälle oder Schäden bitte sofort beim Team melden.</li>
        </ul>
        <p class="fst-italic mt-3">Viel Spaß wünscht das <?= BRAND ?>-Team!</p>
    </div>
</div>

<?php include 'footer.php'; ?>
