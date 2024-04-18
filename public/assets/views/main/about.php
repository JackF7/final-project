<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Explore and learn from sacred texts of various religions and spiritual traditions.">
        <meta name="author" content="Jack Forester">
        <title>Transcendental Teachings</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../assets-bootstrap/css-bootstrap/styles.css" rel="stylesheet">
    </head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><b>Transcendental Teachings</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sacred Texts
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="bible">The Bible</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="tanakh">The Hebrew Bible (The Tanakh)</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="quran">The Qur'an</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Selected Passages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="the-book-of-ruth">The Book of Ruth</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="sufism-poetry">Sufism Poetry</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="about">Sources</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Content section-->
    <section>
        <div>
            <div>
                <div>
                    <h1 class="text-center">Sources</h1>
                    <h6 class="text-center">I created this website using many online resources, and it would not have been possible without them.</h6>
                    <h6 class="text-center">You can find them below.</h6>
                    <ul>
                        <li><b>Design:</b> Bootstrap</li>
                        <li><b>Bible/Tanakh API:</b> Biblia.com</li>
                        <li><b>Online Qur'an:</b> Quranonline.net</li>
                        <li><b>Images:</b> Unsplash.com</li>
                        <li><b>Sufism Poems:</b> Safi, Omid. 2018. Radical Love : Teachings From the Islamic Mystical Tradition. New Haven: Yale University Press.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="py-5 bg-image-full" style="background-image: url('https://i.imgur.com/xw67b7X.jpg')">
        <div style="height: 20rem"></div>
    </div>
    
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-white text-center">
                <?php
                date_default_timezone_set('America/New_York');
                echo date("l, F d, Y");
                ?>
            </p>
            <br>
            <p class="m-0 text-white text-center">
                <?php
                    echo "All rights reserved &copy; Jack Forester " . date("Y");
                ?>
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../../assets-bootstrap/js-bootstrap/scripts.js"></script>

</body>
</html>

