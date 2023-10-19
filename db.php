<?php 
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