<?php include 'header.php'; ?>

<style>
    .titel {
        position: absolute;
        top: 60%;
        left: 33%;
        transform: translate(-50%, -50%);
    }
</style>

<script>
    scrollen = setTimeout(scrollDown, 5000);
    window.onscroll = function(e) {
        clearTimeout(scrollen);
    }
    function scrollDown() {
        window.scrollBy(0, window.innerHeight);
    }
</script>

<div class="position-relative bg1" style="height: 100vh">
    <h1 class="titel d-none d-sm-block text-center text-light fw-bold" style="font-family: marker; font-size: 5rem;">
        <span class="text-warning">ACTION</span><br>
        <span class="text-light">AND</span> <span class="text-primary">FUN</span><br>
        <span class="text-light">FOR</span> <span class="text-info">KIDS</span><br>
        <a href="#scrollen">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-arrow-down-circle-fill text-primary mt-2" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
            </svg>
        </a>
    </h1>
    <h1 class="titel d-sm-none start-50 text-center text-light fw-bold" style="font-family: marker; font-size: 3rem;">
        <span class="text-warning">ACTION</span><br>
        <span class="text-light">AND</span> <span class="text-primary">FUN</span><br>
        <span class="text-light">FOR</span> <span class="text-info">KIDS</span><br>
        <a href="#scrollen">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-arrow-down-circle-fill text-primary mt-2" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
            </svg>
        </a>
    </h1>
</div>

<div class="container-fluid bg-gray" id="scrollen" style="height: 10px"></div>

<div class="container-lg p-5 bg-white rounded-bottom text-center">
    <h1 class="fw-bold">Willkommen im Springolino</h1>
    <h4>Springolino ist <span class="text-decoration-underline">DAS</span> In- & Outdoor-Spieleparadies für Groß und Klein in Herford</h4>
</div>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5 bg2">
        <h1 class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Entdecken Sie das Springolino
        </h1>
    </div>
    <div class="container-lg p-5 bg-white rounded">
        <h3>Unsere Attraktionen</h3>
        <div class="row row-cols-1 row-cols-sm-3 row-cols-xl-5 justify-content-center">
            <div class="col card m-2 p-0 bg-secondary bg-opacity-25 border-0 shadow">
                <img src="img/funhouse.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-secondary">XXL-Funhouse</span></h4>
                    <p>Das riesengroße Kletterlabyrinth über 3 Etagen mit tollen Geheimnissen!</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-primary bg-opacity-25 border-0 shadow">
                <img src="img/trampoline.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-primary">Trampolinpark</span></h4>
                    <p>Höher und noch höher geht es auf unserer Trampolinanlage!</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-info bg-opacity-25 border-0 shadow">
                <img src="img/wasserspielplatz.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-info">Wasserspielplatz</span></h4>
                    <p>In unserem neuen Wasserpark könnt ihr spritzen, planschen, toben.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-primary bg-opacity-25 border-0 shadow">
                <img src="img/vulkan.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-primary">Vulkan-Kletterberg</span></h4>
                    <p>Erklimme den Vulkan und rutsche dann superschnell herunter ins Tal zurück!</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="mt-2 text-center">
            <a href="entdecken.php" class="btn px-4 py-2 h-100 bg-danger rounded-pill shadow">
                <span class="text-white fw-bold">Alle Bereiche ansehen</span>
            </a>
        </div>
    </div>
</div>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5 bg2">
        <h1 class="p-3 px-4 m-0 bg-info bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Aktuelles
        </h1>
    </div>
    <div class="container-lg p-5 bg-white rounded-top">
        <h5>Text mit Titel</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>

        <h5>Noch ein Titel</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>

        <h5>..und so weiter</h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo, laboriosam eligendi! Recusandae incidunt illum nisi dolor quasi, ab ea cum repudiandae facilis beatae, explicabo amet. Corrupti nemo quae saepe tempore?</p>
    </div>
</div>

<?php include 'footer.php'; ?>