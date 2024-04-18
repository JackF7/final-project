<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Explore and learn from sacred texts of various religions and spiritual traditions.">
        <meta name="author" content="Jack Forester">
        <title>Sufism Poetry</title>
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
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <header>
    <div class="text-center my-5">
        <h1 class="text-gray fw-bolder">Sufism Poetry</h1>
        <h5 class="text-gray fw-bolder">Islamic Mysticism & Love</h5>
    </div>
</header>

        <div class="d-flex justify-content-center text-center">
            <div class="poem-container mx-3">
                <h3><em>One Love</em></h3>
                    <p>Soon God will bring forth a people</p>
                    <p>He will love them</p>
                    <p>they will love Him</p>
                    <p>- Qur'an</p>
            </div>
            <div class="poem-container mx-3">
                <h3><em>Wherever</em></h3>
                    <p>God is with you</p>
                    <p>wherever you are</p>
                    <p>- Qur'an</p>
            </div>
            <div class="poem-container mx-3">
                <h3><em>God, Love, and Beauty</em></h3>
                    <p>God is beautiful</p>
                    <p>and loves beauty</p>
                    <p>- Hadith</p>
            </div>
            <div class="poem-container mx-3">
                <h3><em>God Sees Your Hearts</em></h3>
                    <p>God does not look at your external form</p>
                    <p>and not your actions</p>
                    <p>God casts loving glances</p>
                    <p>toward your hearts</p>
                    <p>- Hadith</p>
            </div>
        </div>

        <div class="d-flex justify-content-center text-center">
                <div class="poem-container mx-3">
                <h3><em>A Blazing Lightning</em></h3>
                    <p>The path is:</p>
                    <p>a blazing lightning bolt</p>
                    <p>that burns up</p>
                    <p>everything</p>
                    <p>- Shebli</p>
            </div>
            <div class="poem-container mx-3">
                <h3><em>Be at Ease</em></h3>
                    <p>The Path is</p>
                    <br>
                    <p>To be at ease</p>
                    <p>with God</p>
                    <p>- Sahl Al-Tostari</p>
            </div>
            <div class="poem-container mx-3">
                <h3><em>A Single Breath</em></h3>
                    <p>To take a single breath</p>
                    <p>in the presence of God</p>
                    <p>is greater than all the treasures on Earth</p>
                    <p>or in Heaven</p>
                    <p>- 'Attar</p>
            </div>
            <div class="poem-container mx-3">
                <h3><em>Ocean of Sorrow</em></h3>
                    <p>In the midst</p>
                    <p>of an ocean of sorrow</p>
                    <p>Love</p>
                    <p>is sorrowless</p>
                    <br>
                    <p>- Rumi</p>
            </div>
        </div>

       

        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-8">
            <div class="comments-section rounded p-4">
            <h2 class="section-title">Comments & Interpretations</h2>
            <div class="comment-form">
                <h4 class="form-title">Add a Comment or Your Interpretation!</h4>
                <form method="post" action="submit_comments.php">
                    <div class="mb-3">
                        <input type="hidden" name="section" value="sufism-poetry">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

            <?php

                use app\core\Database;
                class SufismComments 
                {
                    use Database;
                    public function fetchComments()
                    {
                        $sql = "SELECT * FROM sufism_comments";
                        return $this->fetchAll($sql);
                    }
                }

                $sufismComments = new SufismComments();
                $comments = $sufismComments->fetchComments();
                if ($comments) {
                    foreach ($comments as $index => $comment) {
                        echo '<div class="comment">';
                        echo '<h5 class="comment-title">' . $comment["title"] . '</h5>';                                
                        echo '<p class="comment-description">' . $comment["description"] . '</p>';
                        echo '<button onclick="incrementCounter(' . $index . ', true)">Helpful</button>
                            <p id="helpful-counter-' . $index . '">0</p>
                            <button onclick="incrementCounter(' . $index . ', false)">Not Helpful</button>
                            <p id="not-helpful-counter-' . $index . '">0</p>';
                        echo '<!-- Update button -->';
                        echo '<div class="mb-3"><a href="update-comment?id=' . $comment['id'] . '&section=sufism-poetry" class="btn btn-primary">Update</a></div>';
                        echo '<!-- Delete button -->';
                        echo '<a href="delete-comment?id=' . $comment['id'] . '&section=sufism-poetry" class="btn btn-danger">Delete</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<p class="no-comments">No comments yet.</p>';
                }
            ?>
        </div>
    </div>
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
    <!--Helpful Counter -->
    <script src="../../assets/js/helpful.js"></script>

</body>
</html>


