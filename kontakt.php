<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg/bg1.jpg);
    }
</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-info bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Kontakt
        </h1>
    </div>
    <div class="container-lg p-4 bg-white rounded-top">
        <h5>Unsere Kontaktdaten</h5>
        <form method="post" autocomplete="off">
            <label for="name">Name</label>
            <input id="name" name="name" maxlength="50">
            <label for="mail">E-Mail</label>
            <input id="mail" name="email" maxlength="50">
            <input type="checkbox" name="datenschutz" id="dsgvo">
            <label for="dsgvo">Ich habe die AGBs und die Datenschutzbestimmungen gelesen und akzeptiert!</label>
            <button class="btn btn-primary" type="submit">Senden</button>
            <button class="btn btn-danger" type="reset">Eingaben löschen</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>