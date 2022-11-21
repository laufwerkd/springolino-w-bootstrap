<?php include 'header.php'; ?>

<div class="position-relative bg1" style="height: 50vh">
    <h1 class="position-absolute top-50 start-50 translate-middle text-center text-light fw-bold" style="font-family: marker;">FAQ</h1>
</div>

<div class="container-lg py-5 px-4">
    <div class="dropdown mb-3">
        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">go to</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#gotoBesucherverhalten">Besucherverhalten</a></li>
            <li><a class="dropdown-item" href="#gotoEintritt">Eintritt</a></li>
        </ul>
    </div>
    <h3>Häufig gestellte Fragen im Springolino</h3>
    <h5>Noch Fragen?</h5>
</div>

<div class="position-relative bg2" style="height: 15vh" id="gotoBesucherverhalten">
    <h1 class="position-absolute top-50 start-50 translate-middle text-center text-white" style="font-family: marker;">Besucherverhalten</h1>
</div>
<div class="container-lg py-5 px-4">
    <div class="accordion accordion-flush" id="besucherverhalten">
        <div class="accordion-item">
            <h2 class="accordion-header" id="schuheHeader">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#schuhe" aria-expanded="false" aria-controls="schuhe">
                    Dürfen die Spielgeräte mit Schuhen betreten werden?
                </button>
            </h2>
            <div id="schuhe" class="accordion-collapse collapse" aria-labelledby="schuheHeader" data-bs-parent="besucherverhalten">
                <div class="accordion-body">
                    Nein, ausschließlich auf Strümpfen. Wir empfehlen Rutschesocken. Im Springolino können Rutschesocken außerdem für 3€ pro Paar erworben werden.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="alleineHeader">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#alleine" aria-expanded="false" aria-controls="alleine">
                    Dürfen Kinder alleine im Springolino bleiben?
                </button>
            </h2>
            <div id="alleine" class="accordion-collapse collapse" aria-labelledby="alleineHeader" data-bs-parent="besucherverhalten">
                <div class="accordion-body">
                    Ja, allerdings erst ab 12 Jahren, mit einer schriftlichen Erlaubnis eines Erziehungsberechtigten und unter Vorlage eines gültigen Lichtbildausweises / Schülerausweises, (siehe <a href="#">Downloads</a>).
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="schuheErwachseneHeader">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#schuheErwachsene" aria-expanded="false" aria-controls="schuheErwachsene">
                    Müssen Erwachsene auch die Schuhe ausziehen?
                </button>
            </h2>
            <div id="schuheErwachsene" class="accordion-collapse collapse" aria-labelledby="schuheErwachseneHeader" data-bs-parent="besucherverhalten">
                <div class="accordion-body">
                    Generell nein, nur wenn Sie die Spielgeräte betreten.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="schuheErwachseneHeader">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#schuheErwachsene" aria-expanded="false" aria-controls="schuheErwachsene">
                    Müssen Erwachsene auch die Schuhe ausziehen?
                </button>
            </h2>
            <div id="schuheErwachsene" class="accordion-collapse collapse" aria-labelledby="schuheErwachseneHeader" data-bs-parent="besucherverhalten">
                <div class="accordion-body">
                    Generell nein, nur wenn Sie die Spielgeräte betreten.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative bg2" style="height: 15vh" id="gotoEintritt">
    <h1 class="position-absolute top-50 start-50 translate-middle text-center text-white" style="font-family: marker;">Eintritt</h1>
</div>
<div class="container-lg py-5 px-4">
    <h3>Wird erweitert</h3>
    <p>Hier steht dann der rest..</p>
</div>

<?php include 'footer.php'; ?>