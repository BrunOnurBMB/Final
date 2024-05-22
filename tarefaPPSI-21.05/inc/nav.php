<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $current_page = basename($_SERVER['PHP_SELF']);
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav">
        <li class="nav-item <?php if ($current_page == 'index.php') {
                              echo 'active';
                            } ?>">
          <a class="nav-link" href="../tarefaPPSI-21.05/index.php">Home</a>
        </li>
        <li class="nav-item <?php if ($current_page == 'pagina2.php') {
                              echo 'active';
                            } ?>">
          <a class="nav-link" href="../tarefaPPSI-21.05/pagina2.php">pagina 2</a>
        </li>
        <li class="nav-item <?php if ($current_page == 'pagina3.php') {
                              echo 'active';
                            } ?>">
          <a class="nav-link" href="../tarefaPPSI-21.05/pagina3.php">pagina 3</a>
        </li>
      </ul>
    </div>
  </nav>

  <?php
  // echo $current_page;

  ?>
</body>

</html>