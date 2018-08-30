<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
    $dbh = new PDO('mysql:host=localhost;dbname=english_recipes', 'admin', 'plop');
    $recipe = $dbh->query('SELECT * from recipe WHERE id = 1')->fetch();
    ?>


    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Favourite Recipes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Recipe<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <img class="card-img-top" src="https://images.media-allrecipes.com/userphotos/720x405/586409.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h1 class="card-title"><?php  echo ($recipe['title']);?></h1>
                        <p class="card-text"><?php  echo ($recipe['resum']);?></p>
                        <h2>Ingredients :</h2>
                        <p><?php  echo ($recipe['ingredients']);?></p>
                        <p><?php  echo ($recipe['directions']);?></p>
                    </div>
                    <!-- card body -->
                </div>
                <!-- card -->
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
        <!-- /container -->
    <footer class="container">
        <p>&copy; Company 2017-2018</p>
    </footer>

    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
</body>

</html>
