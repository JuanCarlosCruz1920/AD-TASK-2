<?php

require_once BASE_PATH . '/layout/default.layout.php';

$movieId = isset($_GET['id']) ? $_GET['id'] : null;

$movie = null;
if ($movieId) {
    $movie = getMovieById($movieId);
}

global $base_url_path;
$image_src = $base_url_path . ($movie['poster_url'] ?? '/assets/img/placeholder-movie.png');
?>

<script>
    // CRITICAL DEBUGGING LINE: Log the exact movie ID and image URL to the console
    console.log("Attempting to load movie ID: <?php echo htmlspecialchars($movieId); ?>");
    console.log("Attempting to load movie poster from: <?php echo htmlspecialchars($image_src); ?>");
</script>

<div class="container">
    <?php if ($movie): ?>
        <div class="movie-detail-container">
            <img src="<?php echo htmlspecialchars($image_src); ?>" alt="Poster for <?php echo htmlspecialchars($movie['title']); ?>" class="movie-poster" onerror="this.onerror=null;this.src='<?php echo $base_url_path; ?>/assets/img/placeholder-movie.png';">
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

            <a href="<?php echo $base_url_path; ?>/" class="back-link">Back to Movies</a>
        </div>
    <?php else: ?>
        <div class="movie-detail-container">
            <h1>Movie Not Found</h1>
            <p>The movie you are looking for does not exist or the ID is invalid.</p>
            <a href="<?php echo $base_url_path; ?>/" class="back-link">Back to Movies</a>
        </div>
    <?php endif; ?>
</div>