<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg/bg1.gif);
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
            Fromular
        </h3>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded-top" style="backdrop-filter: blur(15px);">
        <!-- bitte mit bs form dem style anpassen -->
        <form method="post" autocomplete="off">
            <label for="name">Name</label>
            <input id="name" name="name" maxlength="50" placeholder="Dein Vor- und Nachname..."><br>
            <label for="mail">E-Mail</label>
            <input id="mail" name="email" maxlength="50" placeholder="z.B. max.mustermann@mustermail.de"><br>
            <label for="msg">Ihre Nachricht:</label>
            <textarea id="msg" name="msg" minlength="10" placeholder="Nachricht..." style="height:200px"></textarea><br>
            <input type="checkbox" name="datenschutz" id="dsgvo" value="akzeptieren">
            <label for="dsgvo">Ich habe die AGBs und die Datenschutzbestimmungen gelesen und akzeptiert!</label><br>
            <button class="btn btn-success" type="submit">Senden</button>
            <button class="btn btn-danger" type="reset">Eingabe löschen</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>