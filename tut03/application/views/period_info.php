<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Period Information</title>
</head>
<body>
    <h2><?php echo $period_info['period']; ?></h2>
    <h3>Land Animals:</h3>
    <p><?php echo $period_info['land_animals']; ?></p>
    <h3>Marine Animals:</h3>
    <p><?php echo $period_info['marine_animals']; ?></p>
    <h3>Avian Animals:</h3>
    <p><?php echo $period_info['avian_animals']; ?></p>
    <h3>Plant Life:</h3>
    <p><?php echo $period_info['plant_life']; ?></p>
    
    <a href="<?php echo base_url('Dinosaurs/periods'); ?>">Back to Periods</a>
</body>
</html>
