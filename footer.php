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
                fadeOutPreloader();
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>