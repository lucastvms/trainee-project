{        <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CRUD PHP com Bootstrap</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
          <!-- Brand -->
          <div class="container">
            <a class="navbar-brand" href="<?php echo BASEURL; ?>index.php" class="navbar-brand">PROJECT-DOITY-TRAINEE</a>

            <!-- Links -->
            <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link 1</a>
          </li> -->

          <!-- Dropdown -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Eventos
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo BASEURL; ?>events">Gerenciar Eventos</a>
                <a class="dropdown-item" href="<?php echo BASEURL; ?>events/add.php">Novo Evento</a>
            </div>
        </li>
    </ul>
    <form class="form-inline" action="/search.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
</div>
</nav>

<main class="container">