<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina2</title>
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