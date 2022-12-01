<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg/bg1.jpg);
    }

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid rgb(255, 255, 255);
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}


</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-info bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Kontakt
        </h1>
    </div>
    <div class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
        <h5>Unsere Kontaktdaten</h5>
        <p>Du hast Fragen, Anregungen oder möchtest einfach mit uns in Kontakt treten?
            Kein Problem! Hier findest du alles was du dazu benötigst:</p>
            <p>Springolino GmbH<br>
                Ackerstraße 35<br>
                32051 Herford<br>
                Telefon : 0 52 21 – 69 24 24<br>
                Telefax : 0 52 21 – 69 24 25<br>
                E-Mail : fun@springolino.de</p><br>
    </div>   
</div>
<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <div class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            <form method="post" autocomplete="off">
                <label for="name">Name</label>
                <input id="name" name="name" maxlength="50" placeholder="Dein Vor- und Nachname..."><br>
                <label for="mail">E-Mail</label>
                <input id="mail" name="email" maxlength="50" placeholder="z.B. max.mustermann@mustermail.de"><br>
                <label for="msg">Ihre Nachricht:</label>
                <textarea id="msg" name="msg" minlength="10" placeholder="Nachricht..." style="height:200px"><br>
                <input type="checkbox" name="datenschutz" id="dsgvo" value="akzeptieren">
                <label for="dsgvo">Ich habe die AGBs und die Datenschutzbestimmungen gelesen und akzeptiert!</label><br>
                <button class="btn btn-primary" type="submit">Senden</button>
                <button class="btn btn-danger" type="reset">Eingaben löschen</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>