<?php
    $movies = [
        [ 
            'title' => 'The Godfather',
            'year' => 1972,
        ],
        [
            'title' => 'Marvel\'s The Avengers',
            'year' => 2012,
        ],
        [
            'title' => 'Spider-Man: No Way Home',
            'year' => 2021,
        ],
        [
            'title' => 'The Pursuit of Happyness',
            'year' => 2006,
        ],
        [
            'title' => 'The Shawshank Redemption',
            'year' => 1994,
        ]
        ];

        function movieFilter($movies) {
            $filtered = [];
            foreach ($movies as $movie) {
                if ($movie['year'] < 2000) {
                    $filtered[] = $movie;
                }
            }
            return $filtered;
        }

?>

<ul>
    <?php foreach (movieFilter($movies) as $movie) : ?>
        <li>
            <?= $movie['title'] ?> (<?= $movie['year'] ?>)
        </li>
    <?php endforeach; ?>