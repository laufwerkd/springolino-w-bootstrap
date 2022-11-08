<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.min.css" rel="stylesheet">
        <title>Springolino</title>
    </head>

    <body>
        <header class="sticky-top">
            <nav class="navbar navbar-expand-md bg-light shadow">
                <div class="container-md">
                    <a href="buchen.php" class="d-md-none btn btn-secondary ms-1 text-white fw-bold">Buchen</a>

                    <a href="index.php" class="navbar-brand m-0"><img src="img/icons/logoCentered.png" height="75" width="auto"></a>

                    <button class="btn d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-expanded="false" aria-label="Toggle offcanvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas-md offcanvas-end" id="offcanvas">
                        <div class="offcanvas-header bg-light shadow">
                            <h5 class="offcanvas-title">Navigation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas"></button>
                        </div>

                        <div class="offcanvas-body">
                            <ul class="navbar-nav gap-2">
                                <li class="navbar-item">
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle fw-bold" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Entdecken
                                        </a>
                                        <ul class="dropdown-menu shadow">
                                            <li><a class="dropdown-item" href="">Innenbereiche</a></li>
                                            <li><a class="dropdown-item" href="">Außenbereiche</a></li>
                                            <li><a class="dropdown-item" href="gastro.php">Gastronomie</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="navbar-item"><a class="btn btn-primary fw-bold" href="preise.php">Preise</a></li>
                                <li class="navbar-item"><a class="btn btn-primary fw-bold" href="zeiten.php">Zeiten</a></li>
                                <li class="navbar-item">
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle fw-bold" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Service
                                        </a>
                                        <ul class="dropdown-menu shadow">
                                            <li><a class="dropdown-item" href="kontakt.php">Kontakt</a></li>
                                            <li><a class="dropdown-item" href="jobs.php">Job Angebot</a></li>
                                            <li><a class="dropdown-item" href="faq.php">häufige Fragen</a></li>
                                            <li><a class="dropdown-item" href="">Gästebuch</a></li>
                                            <li><a class="dropdown-item" href="">Rückblicke</a></li>
                                            <li><a class="dropdown-item" href="">Downloads</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="navbar-item">
                                    <a href="buchen.php" class="d-none d-md-block btn btn-secondary text-white fw-bold">Buchen</a>
                                </li>
                            </ul>

                            <div class="d-md-none">
                                <hr class="my-2">
                                <p class="m-0 text-muted">&copy; Springolino <?php echo date("Y"); ?></p>
                                <ul class="navbar-nav flex-row flex-wrap">
                                    <li class="navbar-item me-3"><a href="impressum.php" class="nav-link p-0">Impressum</a></li>
                                    <li class="navbar-item me-3"><a href="agb.php" class="nav-link p-0">AGBs</a></li>
                                    <li class="navbar-item me-3"><a href="legal.php" class="nav-link p-0">Datenschutz</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>