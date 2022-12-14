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
            Kontaktdaten
        </h1>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <h5>Unsere Kontaktdaten</h5>
        <p>Du hast Fragen, Anregungen oder möchtest einfach mit uns in Kontakt treten?<br>
        Kein Problem! Hier findest du alles was du dazu benötigst:</p>
        <p>Springolino GmbH<br>
        Ackerstraße 35<br>
        32051 Herford<br>
        Telefon: 05221 – 692424<br>
        Telefax: 05221 – 692425<br>
        E-Mail: fun@springolino.de
        </p>
    </div>
</div>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-info bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Kontakt Fromular
        </h3>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded-top" style="backdrop-filter: blur(15px);">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 mb-3">
            <div class="col">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-primary">Name</span>
                    <input type="text" class="form-control" id="nameInput" placeholder="Name">
                </div>
            </div>
            <div class="col">
                <div class="input-group mb-2">
                    <span class="input-group-text bg-primary">@</span>
                    <input type="mail" class="form-control" id="emailInput" placeholder="E-Mail">
                </div>
            </div>
        </div>

        <div class="mb-2">
            <label for="nachrichtInput" class="form-label">Deine Nachricht</label>
            <textarea class="form-control" id="nachrichtInput" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="checkmark form-check-input" type="checkbox" id="agb">
                <label class="form-check-label" for="agb">
                    Ich habe die <a href="agb.php" class="text-secondary">allgmeinen Geschäfts-Bedingungen (AGB)</a> gelesen und verstanden und bin damit einverstanden.
                </label>
            </div>
        </div>

        <a href="#" class="btn btn-success" id="bestellen">Nachricht Senden</a>
    </div>
</div>

<?php include 'footer.php'; ?>