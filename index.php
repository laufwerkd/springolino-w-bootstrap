<?php include 'header.php'; ?>

<main>
    <div id="carousel" class="carousel slide carousel-fade position-relative d-none d-md-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg1.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block p-2 bg-black bg-opacity-50 rounded-4" style="backdrop-filter: blur(2.5px);">
                    <h1>Willkommen im Springolino</h1>
                    <h3>Der größter Indoor- & Outdoor-Spielplatz NRW</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bg2.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block p-2 bg-black bg-opacity-50 rounded-4" style="backdrop-filter: blur(2.5px);">
                    <h1>Willkommen im Springolino</h1>
                    <h3>Der größter Indoor- & Outdoor-Spielplatz NRW</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-md d-md-none my-5 text-center startMobileBackground">
        <h1>Willkommen im Springolino</h1>
        <h3>Der größter Indoor- & Outdoor-Spielplatz NRW</h3>
    </div>

    <div class="container-fluid bg-light shadow"><br></div>

    <div class="container-md my-5 my-md-3">
        <h3 class="d-none d-md-block">Entdecken Sie das Springolino</h3>
        <h1 class="d-md-none text-center">Entdecken Sie das Springolino</h1>
        <div class="row justify-content-center">
            <div class="col-6 col-lg-3 p-2">
                <div class="card border-0 shadow">
                    <img src="img/attraction.jpg" class="card-img">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <small><a class="btn btn-danger fs-5 fw-bold text-white stretched-link" href="entdecken.php">Attraktionen</a></small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 p-2">
                <div class="card border-0 shadow">
                    <img src="img/birthday.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <small><a class="btn btn-secondary fs-5 fw-bold text-white stretched-link" href="buchen.php">Geburtstage</a></small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 p-2">
                <div class="card border-0 shadow">
                    <img src="img/news.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <small><a class="btn btn-primary fs-5 fw-bold text-white stretched-link" href="news.php">Aktuelles</a></small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 p-2">
                <div class="card border-0 shadow">
                    <img src="img/gastro.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <small><a class="btn btn-info fs-5 fw-bold text-white stretched-link" href="gastro.php">Gastronomie</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>