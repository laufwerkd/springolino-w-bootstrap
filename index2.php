<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.min.css" rel="stylesheet">
        <title>Springolino</title>
    </head>

    <style>
        body {
            background-image: url(img/bg2Fullscreen.png);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .start {
            position: relative;
        }

        .start .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <body>
        <header class="container-lg position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 2000;">
            <nav class="navbar d-flex justify-content-between p-0">
                <a class="navbar-brand m-0 p-0" href="#">
                    <img src="img/icons/logoCentered.png" height="75px">
                </a>
                <ul class="navbar-nav d-flex flex-row gap-2">
                    <a class="btn btn-primary px-4 py-2 rounded-pill" href="#">
                        <span class="align-middle text-white fw-bold">Buchen</span>
                    </a>
                    <button class="navbar-toggler p-2 bg-black bg-opacity-50 rounded-circle border-0" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="" aria-expanded="false" style="backdrop-filter: blur(2px);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list text-white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </button>
                </ul>
            </nav>
        </header>

        <main>
            <div class="container-fluid start" style="height: 75vh">
                <div class="title">
                    <h1 class="text-center text-white fw-bold" style="font-size: 4rem;">
                        Spaß.<br>
                        Spielen.<br>
                        Jederzeit.
                    </h1>
                </div>
            </div>
            <div class="container-fluid p-4 bg-white" style="height: 500vh;">
                <div class="container-lg">
                    <h3 class="text-center">Entdecken Sie das Springolino</h3>
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
            </div>
        </main>

        <footer>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>