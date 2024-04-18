<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Explore and learn from sacred texts of various religions and spiritual traditions.">
        <meta name="author" content="Jack Forester">
        <title>The Hebrew Bible (The Tanakh)</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../assets-bootstrap/css-bootstrap/styles.css" rel="stylesheet">
    </head>
<body>
    <!-- Header -->
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
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <li class="nav-item"><a class="nav-link" href="about">Sources</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="py-5 bg-image-full" style="background-image: url('https://i.imgur.com/zkRaENS.jpg')">
        <div class="text-center my-5">
            <h1 class="text-gray fs-3 fw-bolder">The Hebrew Bible (The Tanakh)</h1>
            <p class="text-gray-50 mb-0">The Primary Sacred Text of Judaism</p>
            <p class="text-gray-50 mb-0">Genesis - 4 Maccabees</p>
        </div>

        <!-- Embedded Bible. https://biblia.com/plugins/embeddedbible -->
        <div class="text-center ">
            <biblia:bible layout="normal" resource="nrsv" width="400" height="600" startingReference="Genesis"></biblia:bible> 
        </div>

    </header>

     <!-- More Tanakh Resources -->
     <section class="py-5">
        <div class="container text-center mt-5">
            <h2>Additional Resources</h2>
            <h5 class="resource-list">
            <a href="https://www.britannica.com/topic/Tanakh class="resource-link" target="_blank">What is the Tanakh? (Britannica.com)</a>
                <br>
                <a href="https://www.sefaria.org/texts/Tanakh/Modern%20Commentary%20on%20Tanakh" class="resource-link" target="_blank">Verse Commentary (Sefaria.org)</a>
                <br>
                <a href="https://torahresource.com/#" class="resource-link" target="_blank">Tanakh Resources (Torahresource.com)</a>
                <br>
                <a href="https://www.chabad.org/holidays/default_cdo/jewish/holidays.htm" class="resource-link" target="_blank">Jewish Holidays (Chabad.org)</a>
            </h5>
        </div>
    </section>


    
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
    <!-- Tanakh JS -->
    <script src="//biblia.com/api/logos.biblia.js"></script>
    <script>logos.biblia.init();</script>

</body>
</html>


