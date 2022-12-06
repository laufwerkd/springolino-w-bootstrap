<?php include 'header.php'; ?>

<style>
    body {
        margin-top: 25vh;
        background-image: url(img/bereich/kettenflieger/kettenfliegerDimmed.jpg);
    }
</style>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Entdecken Sie das Springolino
        </h1>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <div class="dropdown mb-3">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">go to</button>
            <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#gotoGrosse">Große Bereiche</a></li>
                <li><a class="dropdown-item" href="#gotoKleine">Kleinere Bereiche</a></li>
            </ul>
        </div>

        <h5>Attraktionen im Springolino</h5>
        <p>Wer kennt es auch? Sie wollen einen schönen Tag mit Ihren Kindern verbringen, dies aber nicht nur zu Hause in den vier Wänden. Alles ist für einen Ausflug geplant, doch plötzlich regnet es. Was nun?</p>
        <p>Springolino! Der Erlebnis Indoor-Spielplatz für groß und klein. Hier kommt wirklich jeder auf seine Kosten.</p>
    </div>
</div>

<div class="modul" id="gotoGrosse">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Große Bereiche
        </h3>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-xl-5 justify-content-center">
            <div class="col card m-2 p-0 bg-secondary bg-opacity-25 border-0 shadow" id="gotoFunhouse">
                <img src="img/bereich/funhouse/funhouse1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-secondary text-start">XXL-Funhouse</span></h4>
                    <p>Das riesengroße Kletterlabyrinth über 3 Etagen mit tollen Geheimnissen!</p>
                    <a href="bereichFunhouse.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-primary bg-opacity-25 border-0 shadow" id="gotoTrampolinpark">
                <img src="img/bereich/trampoline/trampoline1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-primary text-start">Trampolinpark</span></h4>
                    <p>Höher und noch höher geht es auf unserer Trampolinanlage!</p>
                    <a href="bereichTrampoline.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-primary bg-opacity-25 border-0 shadow" id="gotoVulkan">
                <img src="img/bereich/vulkan/vulkan1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-primary text-start">Vulkan<br>Kletterberg</span></h4>
                    <p>Erklimme den Vulkan und rutsche dann superschnell herunter ins Tal zurück!</p>
                    <a href="bereichVulkan.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-info bg-opacity-25 border-0 shadow" id="gotoRollrutsche">
                <img src="img/bereich/rollrutsche/rollrutsche1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-info text-start">Rollrutsche</span></h4>
                    <p>Rutsche auf unserer Rollenrutsche mit deinen Freunden um die Wette!</p>
                    <a href="bereichRollrutsche.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-danger bg-opacity-25 border-0 shadow" id="gotoSpiderTower">
                <img src="img/bereich/spidertower/spidertower1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-danger text-start">Spider Tower</span></h4>
                    <p>Ihr könnt klettern so geschickt wie eine Spinne? Das könnt ihr in unserem großen Kletterturm unter Beweis stellen.</p>
                    <a href="bereichSpidertower.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-secondary bg-opacity-25 border-0 shadow" id="gotoFreifallrutsche">
                <img src="img/bereich/freifallrutsche/freifallrutsche1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-secondary text-start">Freifallrutsche</span></h4>
                    <p>Knapp 90° in die Tiefe, Geschwindigkeit und Adrenalin! Erklimmt den Turm und wählt zwischen zwei Höhen aus.</p>
                    <a href="bereichFreifallrutsche.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-info bg-opacity-25 border-0 shadow" id="gotoWasserspielplatz">
                <img src="img/bereich/wasserspielplatz/wasserspielplatz1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-info text-start">Schönwetterbereich</span></h4>
                    <p>In unserem neuen Wasserpark könnt ihr spritzen, planschen, toben.</p>
                    <a href="bereichWasserspielplatz.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modul" id="gotoKleine">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-secondary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(7.5px);">
            Kleinere Bereiche
        </h3>
    </div>
    <div class="container-lg p-4 bg-white bg-opacity-75 rounded" style="backdrop-filter: blur(15px);">
        <div class="row row-cols-1 row-cols-sm-3 row-cols-xl-5 justify-content-center">
            <div class="col card m-2 p-0 bg-info bg-opacity-25 border-0 shadow" id="gotoKleinkinder">
                <img src="img/bereich/kleinkinder/kleinkinder1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-info text-start">Kleinkinder<br>Spielbereich</span></h4>
                    <p>Alles nur für unsere Kleinsten!</p>
                    <a href="bereichKleinkinder.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-primary bg-opacity-25 border-0 shadow" id="gotoKettenflieger">
                <img src="img/bereich/kettenflieger/kettenflieger1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-primary text-start">Kettenflieger</span></h4>
                    <p>Entdecken Sie das Kind in sich wieder! Leichtigkeit des Fliegens spüren und hoch hinaus wollen.</p>
                    <a href="bereichKettenflieger.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-danger bg-opacity-25 border-0 shadow" id="gotoAutoscooter">
                <img src="img/bereich/autoscooter/autoscooter1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-danger text-start">Autoscooter</span></h4>
                    <p>Entdecke den Driver in Dir und drehe ein Paar wilde Runden!</p>
                    <a href="bereichAutoscooter.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-secondary bg-opacity-25 border-0 shadow" id="gotoRollendeTonne">
                <img src="img/bereich/rollendeTonne/rollendeTonne1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-secondary text-start">Rollende Tonne</span></h4>
                    <p>Beweise deinen Mut und laufe in der rollenden Tonne mit Dir und deinen Freunden um die Wette!</p>
                    <a href="bereichRollendeTonne.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-primary bg-opacity-25 border-0 shadow" id="gotoAirhockey">
                <img src="img/bereich/airhockey/airhockey1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-primary text-start">Airhockey</span></h4>
                    <p>An unseren Airhockey-Tischen könnt ihr euer Geschick unter Beweis stellen und euch ein spannendes Match mit euren Freunden liefern!</p>
                    <a href="bereichAirhockey.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-warning bg-opacity-25 border-0 shadow" id="gotoBallkanonen">
                <img src="img/bereich/ballkanone/ballkanone1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-warning text-start">Ballkanonen</span></h4>
                    <p>An unseren Ballkanonen könnt Ihr Treffsicherheit beweisen!</p>
                    <a href="bereichBallkanone.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-info bg-opacity-25 border-0 shadow" id="gotoTeufelsrad">
                <img src="img/bereich/teufelsrad/teufelsrad1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-info text-start">Teufelsrad</span></h4>
                    <p>Eine turbulente Wahnsinnsfahrt erwartet euch auf unserem Teufelsrad! Teuflisch schnelle Runden und Adrenalin- hier geht es rund!</p>
                    <a href="bereichTeufelsrad.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-primary bg-opacity-25 border-0 shadow" id="gotoGastro">
                <img src="img/bereich/gastro/gastro1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-primary text-start">Gastronomiebereich</span></h4>
                    <p>Bei uns gibt es nicht nur Fast-Food sondern auch einen gesunden und leckeren Snack für zwischendurch!</p>
                    <a href="bereichGastro.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-info bg-opacity-25 border-0 shadow" id="gotoLerncomputer">
                <img src="img/bereich/lerncomputer/lerncomputer1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-info text-start">Spiel- und<br>Lerncomputer</span></h4>
                    <p>An unseren Computern können die Kleinen zeigen was in Ihnen steckt und ihr Können verbessern!</p>
                    <a href="bereichLerncomputer.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col card m-2 p-0 bg-black bg-opacity-25 border-0 shadow" id="gotoVr">
                <img src="img/bereich/vr/vr1.jpg" class="card-img-top">
                <div class="p-3">
                    <h4><span class="badge bg-black text-start">VR 360° Simulator</span></h4>
                    <p>Virtuelle Realität Simulation in 360°! Kein Film sondern ein Erlebnis!</p>
                    <a href="bereichVr.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'standart.php'; ?>

<?php include 'footer.php'; ?>