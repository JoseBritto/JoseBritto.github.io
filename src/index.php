<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Britto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/hamburger.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <link rel="preload" href="assets/css/about.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/about.css"></noscript>

    <link rel="stylesheet" href="assets/css/projects.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once('header.php'); ?>
    <?php include_once('main.php'); ?>
    <?php include_once('about.php'); ?>
    <section class="projects" id="projects">
        <div class="container">
            <div class="title">
                <h2>Featured Projects</h2>
            </div>
            <div class="tiles">
                <?php for ($i = 0; $i < 10; $i++) { ?>
                <div class="tile">
                    <div class="tile-img">
                        <img height="168.75px" width="300px" src="assets/img/profile.avif" alt="">
                    </div>
                    <div class="tile-content">
                        <p class="project-name">Denaro</p>
                        <p class="summary">A URL shortener with a beautiful UI and a powerful yet simple API</p>
                    </div>
                    <div class="buttons">
                        <button>Download</button>
                        <button>Source Code</button>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
</html>