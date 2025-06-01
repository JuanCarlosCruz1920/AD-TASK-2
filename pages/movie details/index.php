<?php

require_once __DIR__ . '/../../layout/default.layout.php';

$movieId = isset($_GET['id']) ? $_GET['id'] : null;

$movie = null;
if ($movieId) {
    $movie = getMovieById($movieId);
}
?>

<div class="container">
    <?php if ($movie): ?>
        <div class="movie-detail-container">
            <h1><?php echo htmlspecialchars($movie['title']); ?></h1>
            <div class="detail-rating">Rating: <?php echo formatRating($movie['rating']); ?></div>
            <p><strong>Release Year:</strong> <?php echo htmlspecialchars($movie['year']); ?></p>

            <h2>Synopsis</h2>
            <p><?php echo nl2br(htmlspecialchars($movie['full_description'])); ?></p>

            <h2>Genres</h2>
            <div class="genres-list">
                <?php
                foreach ($movie['genres'] as $genre) {
                    echo '<span>' . htmlspecialchars($genre) . '</span>';
                }
                ?>
            </div>

            <h2>Cast</h2>
            <ul>
                <?php
                foreach ($movie['cast'] as $actor) {
                    echo '<li>' . htmlspecialchars($actor) . '</li>';
                }
                ?>
            </ul>

            <h2>Review</h2>
            <p><?php echo nl2br(htmlspecialchars($movie['review_text'])); ?></p>

            <a href="/AD-MovieReviews/" class="back-link">Back to Movies</a>
        </div>
    <?php else: ?>
        <div class="movie-detail-container">
            <h1>Movie Not Found</h1>
            <p>The movie you are looking for does not exist or the ID is invalid.</p>
            <a href="/AD-MovieReviews/" class="back-link">Back to Movies</a>
        </div>
    <?php endif; ?>
</div>