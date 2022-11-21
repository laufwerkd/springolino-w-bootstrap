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

<div class="container-lg py-2 py-sm-5 px-4">
    <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-4 justify-content-center">
        <div class="col position-relative m-2 p-0">
            <img src="img/attraction.jpg" class="rounded-4" width="100%" height="auto">
            <a href="#" class="btn position-absolute bottom-0 end-0 m-2 px-3 py-2 bg-secondary bg-opacity-75 rounded-pill" style="backdrop-filter: blur(2px);">
                <span class="align-middle text-white fw-bold">Attraktionen</span>
            </a>
        </div>
        <div class="col position-relative m-2 p-0">
            <img src="img/birthday.jpg" class="rounded-4" width="100%" height="auto">
            <a href="#" class="btn position-absolute bottom-0 end-0 m-2 px-3 py-2 bg-primary bg-opacity-75 rounded-pill" style="backdrop-filter: blur(2px);">
                <span class="align-middle text-white fw-bold">Geburtstag</span>
            </a>
        </div>
        <div class="col position-relative m-2 p-0">
            <img src="img/news.jpg" class="rounded-4" width="100%" height="auto">
            <a href="#" class="btn position-absolute bottom-0 end-0 m-2 px-3 py-2 bg-info bg-opacity-75 rounded-pill" style="backdrop-filter: blur(2px);">
                <span class="align-middle text-white fw-bold">Preise & Zeiten</span>
            </a>
        </div>
    </div>
</div>

<div style="height: 100vh;"></div>

<?php include 'footer.php'; ?>