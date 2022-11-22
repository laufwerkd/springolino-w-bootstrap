<?php include 'header.php'; ?>

<style>
    .titel {
        position: absolute;
        top: 60%;
        left: 33%;
        transform: translate(-50%, -50%);
    }

    .scrollen {
        position: absolute;
        bottom: 48px;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<script>
    scrollen = setTimeout(scrollDown, 3000);
    window.onscroll = function(e) {
        clearTimeout(scrollen);
    }
    function scrollDown() {
        window.scrollBy(0, window.innerHeight);
    }
</script>

<div class="position-relative bg1" style="height: 100vh">
    <h1 class="titel d-none d-sm-block text-center text-light fw-bold" style="font-family: marker; font-size: 5rem;">
        ACTION<br>
        AND FUN<br>
        FOR KIDS
    </h1>
    <h1 class="titel d-sm-none start-50 text-center text-light fw-bold" style="font-family: marker; font-size: 3rem;">
        ACTION<br>
        AND FUN<br>
        FOR KIDS
    </h1>
    <a href="#scrollen" class="scrollen">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-arrow-down-circle-fill text-info" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
        </svg>
    </a>
</div>

<div class="container-lg py-5 px-4 text-center" id="scrollen">
    <h3 class="fw-bold">Willkommen im Springolino</h3>
    <h5>Springolino ist <span class="text-decoration-underline">DAS</span> Indoor- & Outdoor-Spieleparadies für Groß und Klein in Herford</h5>
</div>

<div class="position-relative bg2" style="height: 20vh">
    <h1 class="position-absolute top-50 start-50 translate-middle text-center text-white" style="font-family: marker;">Entdecken Sie das Springolino</h1>
</div>
<div class="container-lg py-5 px-4">
    <h3>Unsere Attraktionen</h3>
    <div class="row row-cols-1 row-cols-sm-3 row-cols-xl-5 justify-content-center">
        <div class="col card m-2 p-0">
            <img src="img/ballkanone.jpg" class="card-img-top">
            <div class="container p-3">
                <h3><span class="badge bg-secondary">XXL-Funhouse</span></h3>
                <p>Das riesengroße Kletterlabyrinth über 3 Etagen mit tollen Geheimnissen!</p>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
        <div class="col card m-2 p-0">
            <img src="img/trampoline.jpg" class="card-img-top">
            <div class="container p-3">
                <h3><span class="badge bg-primary">Trampolinpark</span></h3>
                <p>Höher und noch höher geht es auf unserer Trampolinanlage!</p>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
        <div class="col card m-2 p-0">
            <img src="img/wasserspielplatz.jpg" class="card-img-top">
            <div class="container p-3">
                <h3><span class="badge bg-info">Wasserspielplatz</span></h3>
                <p>In unserem neuen Wasserpark könnt ihr spritzen, planschen, toben.</p>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
        <div class="col card m-2 p-0">
            <img src="img/vulkan.jpg" class="card-img-top">
            <div class="container p-3">
                <h3><span class="badge bg-primary">Vulkan-Kletterberg</span></h3>
                <p>Erklimme den Vulkan und rutsche dann superschnell herunter ins Tal zurück!</p>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
        <a href="#" class="btn btn-primary">Alle Attraktionen ansehen</a>
    </div>
</div>

<div class="position-relative bg2" style="height: 15vh">
    <h1 class="position-absolute top-50 start-50 translate-middle text-center text-white" style="font-family: marker;">Wir suchen Mitarbeiter</h1>
</div>
<div class="container-lg py-5 px-4">
    <h3>Text mit Titel</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>

    <h3>Noch ein Titel</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>

    <h3>..und so weiter</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>
</div>

<?php include 'footer.php'; ?>