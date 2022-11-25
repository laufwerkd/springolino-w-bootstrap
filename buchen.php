<?php include 'header.php'; ?>

<style>
    body {
        background-image: url(img/bg1.jpg);
    }
</style>

<div style="height: 20vh;"></div>

<div class="modul">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h1 class="p-3 px-4 m-0 bg-primary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
          Dein Kindergeburtstag
        </h1>
    </div>
    <div class="container-lg p-5 bg-white rounded">
        <div class="dropdown mb-3">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">go to</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#gotoPakete">Geburtstagspakete</a></li>
                <li><a class="dropdown-item" href="#gotoFormular">Buchungsformular</a></li>
            </ul>
        </div>
		<h5>Dein Kindergeburtstag im Springolino</h5>
		<p>Wir machen Deinen großen Tag zum unvergesslichen Erlebnis! Keinen Stress zu Hause – Super-Spaß für die Kinder und entspannte Eltern. Lass doch einfach deine tolle Geburtstagsparty im Springolino steigen!</p>
	</div>
</div>

<div class="modul" id="gotoPakete">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-secondary bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Geburtstagspakete
        </h3>
    </div>
    <div class="container-lg p-5 bg-white rounded">
		<div class="accordion" id="geburtstagspaket">
            <div class="accordion-item">
                <h2 class="accordion-header" id="paket1Header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paket1" aria-expanded="false" aria-controls="paket1">
                    	<span class="badge bg-primary fs-6">Geburtstagspaket 1</span>
                    </button>
                </h2>
                <div id="paket1" class="accordion-collapse collapse" aria-labelledby="paket1Header" data-bs-parent="geburtstagspaket">
                    <div class="accordion-body">
						<span class="fw-bold">Enthält</span>
						<ul>
							<li>eine <span class="text-primary">Tageseintrittskarte</span></li>
							<li>einen <span class="text-primary">Reserviertern Geburtstags Tisch</span> für den gesamten Aufenthalt</li>
							<li><span class="text-primary">Tischdeko</span> (Teller, Becher, Luftschlangen und Servietten)</li>
							<li>ein <span class="text-primary">Thron</span> für das Geburtstagskind mit Namen</li>
							<li><span class="text-primary">1 Slush-Eisgetränk (0,2l)</span> nach Wahl für alle Kinder</li>
						</ul>
						<span class="fw-bold">Außerdem</span>
						<ul>
							<li>Das Geburtstagskind erhält 1 Eintritts-Gutschein für den nächsten Besuch, wenn der Geburtstag nicht länger als 10 Tage zurück liegt, oder in der Zukunft liegt.</li>
						    <li>2 Erwachsene als Begleitpersonen haben freien Eintritt.</li>
						</ul>
						<span class="fw-bold">Anforderung</span>
                        <ul>
                            <li>
                                (Mindestanzahl 6 Kinder
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people text-info" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                </svg>
                                , nur <span class="text-warning">bis zum 14. Geburtstag</span>)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="paket2Header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paket2" aria-expanded="false" aria-controls="paket2">
                    	<span class="badge bg-secondary fs-6">Geburtstagspaket 2</span>
                    </button>
                </h2>
                <div id="paket2" class="accordion-collapse collapse" aria-labelledby="paket2Header" data-bs-parent="geburtstagspaket">
                    <div class="accordion-body">
                        <span class="fw-bold">Enthält</span>
                        <ul>
                            <li>alles aus <span class="badge bg-primary">Geburtstagspaket 1</span></li>
                            <li>ein <span class="text-secondary">Kindermenü</span> bestehend aus:</li>
                                <ul>
                                    <li>4 Chicken Nuggets mit Pommes (Mayo und Ketchup) <span class="text-warning">oder</span> 1 Kinderpizza Ø18cm (Margherita, Salami oder Schinken)</li>
                                    <li>Chupa Chups Lolly und Capri Sonne nach Wahl</li>
                                </ul>
                            <li>eine <span class="text-secondary">Freifahrt mit den Autoscooter</span> für alle Kinder</li>
                        </ul>
                        <span class="fw-bold">Anforderung</span>
                        <ul>
                            <li>
                                (Mindestanzahl 6 Kinder
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people text-info" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                </svg>
                                , nur <span class="text-warning">bis zum 14. Geburtstag</span>)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<br>
		<h5>Sonstige Informationen</h5>
		<p>Gerne darfst Du Dir Deinen eigenen Geburtstagskuchen mitbringen.<br>
		Thermoskannen mit heißen Getränken oder Kerzen - auch auf dem Kuchen - sind leider nicht erlaubt, denn hier besteht ein erhöhtes Gefahrenpotenzial.<br>
		Hier haben wir ein paar tolle Vorlagen für deine Geburtstagseinladung in unserem <a href="#">Downloadbereich</a>!</p>
		<p>Du hast noch Fragen? Telefonisch sind wir während der Öffnungszeiten für dich erreichbar.</p>
	</div>
</div>

<div class="modul" id="gotoFormular">
    <div class="container-lg d-flex justify-content-center p-0 pt-5">
        <h3 class="p-3 px-4 m-0 bg-info bg-opacity-25 text-center text-white rounded-top" style="max-width: 75%; font-family: marker; backdrop-filter: blur(5px);">
            Buchungsformular
        </h3>
    </div>
    <div class="container-lg p-5 bg-white rounded-top">
        <small class="text-muted">hier entsteht das Buchungsformular..</small>
    </div>
</div>

<?php include 'footer.php'; ?>