<?php

function getMovies(): array
{
    return require BASE_PATH . '/staticData/movies.staticdata.php';
}

function getMovieById(string $id): ?array
{
    $movies = getMovies();
    if (isset($movies[$id])) {
        return $movies[$id];
    }
    return null;
}

function formatRating(float $rating, int $maxRating = 5): string
{
    $stars = '';
    for ($i = 1; $i <= $maxRating; $i++) {
        if ($rating >= $i) {
            $stars .= '★';
        } elseif ($rating > ($i - 1) && $rating < $i) {
            $stars .= '☆';
        } else {
            $stars .= '☆';
        }
    }
    return sprintf('%.1f / %d %s', $rating, $maxRating, $stars);
}