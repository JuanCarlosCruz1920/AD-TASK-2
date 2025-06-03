<?php

if (!isset($movie) || !is_array($movie)) {
    echo '<div class="movie-card-error">Movie data not available.</div>';
    return;
}

$movieId = isset($movie['id']) ? $movie['id'] : strtolower(str_replace(' ', '-', $movie['title']));
?>

<div class="movie-card">
    <div class="movie-card-header">
        <h2><?php echo htmlspecialchars($movie['title']); ?></h2>
    </div>
    <div class="movie-card-body">
        <p><?php echo htmlspecialchars($movie['description']); ?></p>
        <div class="rating">Rating: <?php echo formatRating($movie['rating']); ?></div>
        <div class="genres">
            <?php
            foreach ($movie['genres'] as $genre) {
                echo '<span>' . htmlspecialchars($genre) . '</span>';
            }
            ?>
        </div>
    </div>
    <div class="movie-card-footer">
        <a href="<?php echo $base_url_path; ?>/movie?id=<?php echo urlencode($movieId); ?>">Read Review</a>
    </div>
</div>