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
    $recipes = $dbh->query('SELECT * from recipe');
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
                    <a class="nav-link" href="recipe.php">Home page<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <main role="main">

        <div class="jumbotron">
            <div class="container">

                <h1 class="display-3">My favourite recipes</h1>
                <p>I present you original recipes, tested and approved by all my circle of acquaintances. There is thus nobody anymore, each having succumbed to atrocious deaths.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                foreach ($recipes as $recipe) {?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php  echo ($recipe['image']);?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php  echo ($recipe['title']);?></h5>
                            <p class="card-text"><?php  echo ($recipe['resum']);?></p>
                            <a class="btn-danger" href="recipe.php?recipe=<?php echo $recipe['id'] ?>">VOIR LA RECETTE</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

            </div>

            <hr>

        </div>
        <!-- /container -->

    </main>

    <footer class="container">
        <p>&copy; Company 2017-2018</p>
    </footer>

    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
</body>

</html>
