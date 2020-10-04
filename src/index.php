<!DOCTYPE html>
<?php
    include_once "data.php";
?>

<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Unihome</title>
    <link rel="stylesheet" href="/static/sass/index.css">
    <script src="https://kit.fontawesome.com/c774cd1c65.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <section class="section mt-4">
        <div class="container">
            <h1 class="title">
                Unihome - trova l'<span class="font-scp">$ago</span> nel <span class="font-scp">$pagliaio</span>
                <span class="tagline is-hidden-mobile">$ago = "materiale"; $pagliaio = "unimi.it";</span>
            </h1>
            <div class="columns">
                <div class="column">
                    <div class="content">
                        <h2 class="title">Link generali</h2>
                        <ul>
                            <?php foreach (LINKS as $title => $href) { ?>
                                <li><a href="<?= $href ?>" target="_blank"><?= $title ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="content">
                        <h2 class="title">Insegnamenti</h2>
                    </div>
                    <?php foreach (COURSES as $_ => $course) { ?>
                    <div class="card mb-2">
                        <header class="card-header">
                            <p class="card-header-title">
                                <?= $course["name"] ?>
                            </p>
                        </header>
                        <div class="card-content">
                            <span class="fa fa-user pr-1"></span>
                            <?php foreach ($course["teachers"] as $teacher_name => $teacher_email) { ?>
                                <?= $teacher_name ?>
                                <a href="mailto:<?= $teacher_email ?>"><span class="fa fa-envelope pr-2"></span></a>
                            <?php } ?> <br />
                            <span class="fa fa-calendar-alt pr-1"></span>
                            <?= $course["period"] ?>

                            <br />
                            <div class="content">
                                <ul>
                                    <?php foreach ($course["links"] as $link_title => $link_href) { ?>
                                        <li><a href="<?= $link_href ?>" target="_blank"><?= $link_title ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="column">
                    <div class="content">
                        <h2 class="title">Ultime news</h2>
                        <code>// TODO</code>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-4" />
    <footer class="section">
        <div class="container pb-3" align="center">
            Creato con <span class="fa fa-heart"></span> da Marco Aceti
            (<a href="https://t.me/acetimarco">Telegram</a>, <a href="mailto:mail@marcoaceti.it">email</a>,
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">cellulare</a>) <br />
            Vuoi personalizzarlo con i tuoi link? Il codice è libero, <a href="https://github.com/MarcoBuster/unihome">giocaci</a>!
        </div>

    </footer>
</body>
</html>
