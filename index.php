<?php include 'header.php'; ?>

<main>
    <div id="carousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg1.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/bg2.png" class="d-block w-100">
            </div>
        </div>
    </div>

    <div class="container-fluid m-0 p-0 bg-light shadow"><br></div>

    <div class="container-md my-3">
        <h2>Erkunden Sie das Springolino</h2>
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
                        <small><a class="btn btn-secondary fs-5 fw-bold text-white stretched-link" href="buchen.php">Geburtstag</a></small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 p-2">
                <div class="card border-0 shadow">
                    <img src="img/news.png" class="card-img">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <small><a class="btn btn-primary fs-5 fw-bold text-white stretched-link" href="news.php">Neues</a></small>
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