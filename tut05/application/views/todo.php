<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
</head>
<body>
<h1>To-Do List</h1>
    <form action="<?php echo site_url('todo/add');?>" method="post">
        <label for="action_title">Add New To-Do :</label>
        <input type="text" id="action_title" name="action_title">
        <button type="submit">Add Action</button>
    </form>
</body>
</html>