        </main>

        <footer>
            <div class="container-lg p-2 bg-gray">
                <nav class="navbar d-flex flex-row justify-content-center p-0">
                    <ul class="navbar-nav d-flex flex-row gap-4">
                        <li class="nav-item">
                            <a href="impressum.php" class="nav-link p-0">Impressum</a>
                        </li>
                        <li class="nav-item">
                            <a href="agb.php" class="nav-link p-0">AGBs</a>
                        </li>
                        <li class="nav-item">
                            <a href="datenschutz.php" class="nav-link p-0">Datenschutz</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>

        <script>
            window.addEventListener('load', function() {
                setTimeout(function(){
                    fadeOutPreloader();
                }, 250);
            });

            function fadeOutPreloader() {
                var fadeTarget = document.getElementById("preloader");
                var fadeEffect = setInterval(function () {
                    if (!fadeTarget.style.opacity) {
                        fadeTarget.style.opacity = 1;
                    }
                    if (fadeTarget.style.opacity > 0) {
                        fadeTarget.style.opacity -= 0.01;
                    } else {
                        clearInterval(fadeEffect);
                    }
                    if (fadeTarget.style.opacity <= 0.02) {
                        document.getElementById("preloader").style.display = "none";
                    }
                }, 5);
            }
        </script>
        <script>
            // Demo: Formulare senden nichts.
            document.querySelectorAll('#bestellen').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    alert('Dies ist eine Demo-Seite. Es werden keine Daten gesendet oder gespeichert.');
                });
            });
        </script>
        <!-- Lokal gehostet statt CDN, damit keine Daten an Dritte gehen -->
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>