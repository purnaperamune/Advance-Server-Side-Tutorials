<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
</head>
<body>
    <h2>Movie List</h2>
    <?php if (!empty($movies)): ?>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <li>
                    <strong>Title:</strong> <?php echo $movie['title']; ?><br>
                    <strong>Director:</strong> <?php echo $movie['director']; ?><br>
                    <strong>Genre:</strong> <?php echo $movie['genre']; ?><br>
                    <strong>Release Year:</strong> <?php echo $movie['release_year']; ?><br>
                    <strong>IMDB Rating:</strong> <?php echo $movie['imdb_rating']; ?>
                </li>
                <br>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No movies found.</p>
    <?php endif; ?>
</body>
</html>
