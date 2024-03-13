<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Movies</title>
</head>
<body>
    <h2>Search for Movies</h2>
    <form action="<?php echo base_url('movie/search'); ?>" method="post">
        <label for="genre">Search by Genre:</label>
        <input type="text" id="genre" name="genre" placeholder="Enter genre...">
        <button type="submit">Search</button>
    </form>

    <h2>Search by Title</h2>
    <form action="<?php echo base_url('movie/search-by-title'); ?>" method="post">
        <label for="title">Search by Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter title...">
        <button type="submit">Search</button>
    </form>

    <br>

    <br>
    <a href="<?php echo base_url('movie/all'); ?>">View All Movies</a>
</body>
</html>