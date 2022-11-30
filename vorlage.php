<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bg/bg1.jpg);
    }
</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-black bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Modul Überschrift
        </h1>
    </div>
    <div class="container-lg p-4 bg-white rounded">
        <div class="dropdown mb-3">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">go to</button>
            <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#goto">Link</a></li>
            </ul>
        </div>

        <h5>Willkommenstext</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>
    </div>
</div>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-white bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Bereich
        </h3>
    </div>
    <div class="container-lg p-4 bg-white rounded-top">
        <h5>Text mit Titel</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>

        <h5>Noch ein Titel</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>

        <h5>..und so weiter</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>
    </div>
</div>

<?php include 'footer.php'; ?>