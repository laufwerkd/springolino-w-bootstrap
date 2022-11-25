<?php include 'header.php'; ?>
<div style="height: 20vh;"></div>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-black bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Kontakt
        </h1>
    </div>
    <div class="container-lg p-5 bg-white rounded">
        <h5>Sie können uns hiermit eine Nachricht schicken:</h5>
        <form method="post" autocomplete="off">
            <label for="name">Name</label>
            <input id="name" name="name" maxlength="50">
            <label for="mail">E-Mail</label>
            <input id="mail" name="email" maxlength="50">
            <button type="submit">Senden</button>
            <button type="reset">Eingaben löschen</button>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>