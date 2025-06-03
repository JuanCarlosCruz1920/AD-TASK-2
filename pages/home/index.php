<?php

require_once BASE_PATH . '/layout/default.layout.php';

$movies = getMovies();
?>

<div class="container">
    <h2>Latest Movie Reviews</h2>
    <div class="movie-list">
        <?php
        if (!empty($movies)) {
            foreach ($movies as $id => $movieData) {
                $movie = array_merge(['id' => $id], $movieData);
                global $base_url_path;
                require BASE_PATH . '/components/templates/movie-card.component.php';
            }
        } else {
            echo '<p>No movies found. Please add some movies to `staticData/movies.staticdata.php`.</p>';
        }
        ?>
    </div>
</div>