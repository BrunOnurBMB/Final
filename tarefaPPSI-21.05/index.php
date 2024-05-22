<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php 
    require_once('inc/header.php');
    ?>
    <?php 
    require_once('inc/nav.php');
    ?>
    <div class="row">
            <article class="col-12 col-sm-7">
                <h1>Article</h1>
            </article>
            <aside class="col-12 col-sm-5">
                <h2>aside</h2>
            </aside>
        </div>
        <div class="row">
            <section class="col-12 col-sm-6 col-md-3 col-xl-6">
                <h2>Section</h2>
            </section>
            <section class="col-12 col-sm-6 col-md-3 col-xl-6">
                <h2>Section</h2>
            </section>
            <section class="col-12 col-sm-6 col-md-3 col-xl-6">
                <h2>Section</h2>
            </section>
            <section class="col-12 col-sm-6 col-md-3 col-xl-6">
                <h2>Section</h2>
            </section>
        </div>
    <?php 
    require_once('inc/footer.php');
    ?>
</body>
</html>
 <!-- <ul class="nav nav-pills nav-justified">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../tarefaPPSI-21.05/index.php" target="_blank"<?php if ($current_page == 'home.php') { echo 'class="active"'; } ?>home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../tarefaPPSI-21.05/pagina2.php"<?php if ($current_page == 'conteudo2.php') { echo 'class="active"'; } ?>conteudo 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../tarefaPPSI-21.05/pagina3.php"<?php if ($current_page == 'conteudo3.php') { echo 'class="active"'; } ?>conteudo 3</a>
                  </li>
                </ul> -->