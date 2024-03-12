<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <h2>Enter Your Date of Birth?</h2>

    <form action="<?php echo base_url('age'); ?>" method="post">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <br>
        <input type="submit" value="Calculate Age">
    </form> 
</body>
</html>