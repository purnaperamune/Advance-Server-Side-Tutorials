<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Mark Calculator</title>
</head>
<body>
    <h2>Module Mark Calculator</h2>

    <form method="post">
        <label for="cw1">Enter Coursework 1 Mark:</label>
        <input id="cw1" name="cw1" required>
        <br>
        <label for="cw2">Enter Coursework 2 Mark:</label>
        <!-- We can also give a type as number and min max values. With that, we do not need to manually validate inputs. -->
        <input id="cw2" name="cw2" required> 
        <br>
        <input type="submit" value="Calculate Module Mark">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cw1 = $_POST['cw1'];
        $cw2 = $_POST['cw2'];

    
        if(is_numeric($cw1) && is_numeric($cw2)){
            if($cw1>100 || $cw1<0 || $cw2>100 || $cw2<0){
                echo "<p>Invalid Marks!</p>";
                return;
            };
        } else {
            echo "<p>Marks should be a number!</p>";
                return;
        }
        

        $final_mark = ($cw1 * 0.4) + ($cw2 * 0.6);
        echo "<p>Your Module Mark: $final_mark</p>";
    }
    ?>

</body>
</html>