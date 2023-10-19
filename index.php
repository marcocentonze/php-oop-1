<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->


<?php

class Movie
{
    public $title;
    public $rating;
    // public $image;
    public $genre;
    public $plot;



    function __construct($_title, $_rating, $_genre, $_plot)
    {
        $this->title = $_title;
        $this->rating = $_rating;
        // $this->image = $_image;
        $this->genre = $_genre;
        $this->plot = $_plot;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getRating()
    {
        return $this->rating;
    }

    function getGenre()
    {
        return $this->genre;
    }

    function getPlot()
    {
        return $this->plot;
    }
    // function getImage()
    // {
    //     return 'https://picsum.photos/200/200?random=' ;
    // }
}

$movies = [];
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non pretium libero. Vestibulum auctor vel dui vitae laoreet. Sed in nisl in tortor tristique bibendum. Sed luctus metus ac purus varius.";

array_push(
    $movies,
    new Movie("Avatar: The Way of Water", 9.4, "Action", $loremIpsum),
    new Movie("Matrix", 8.0, "Science Fiction", $loremIpsum),
    new Movie("Interstellar", 8.2, "Sci-Fi", $loremIpsum),
    new Movie("The Avengers", 8.7, "Action", $loremIpsum),
    new Movie("The Shawshank Redemption", 9.3, "Drama", $loremIpsum),
    new Movie("The Godfather", 9.2, "Crime", $loremIpsum),
    new Movie("The Dark Knight", 9.0, "Action", $loremIpsum),
    new Movie("Pulp Fiction", 8.9, "Crime", $loremIpsum)
);


// var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>

<body>

    <header>

        <div class="container-fluid bg-info" style="height: 60px;">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <h1 class="text-black">Movies</h1>

            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-4 g-4 mt-2">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col mb-2">
                        <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200/200?random" class="card-img-top" alt="poster">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie->getTitle(); ?></h5>
                                <p class="card-text"><?php echo $movie->getPlot(); ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Genre: <?php echo $movie->getGenre(); ?></li>
                                <li class="list-group-item">Rating: <?php echo $movie->getRating(); ?>
                                </li>
                        
                            </ul>
                           
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>