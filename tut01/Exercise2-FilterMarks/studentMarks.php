<?php
    $students = array(
        "Samwise Gamgee" => 88,
        "Frodo Baggins" => 56,
        "Elrond Half-Elven" => 92,
        "Gandalf Mithrandir" => 35,
        "Merry Brandybuck" => 41,
        "Pippin Took" => 25,
        "Legolas Greenleaf" => 67
    );

    $mark = $_POST['mark'];

    echo "<p>Students with mark $mark and above:</p>";
    echo "<ul>";

    foreach ($students as $student => $student_mark) {
        if ($student_mark >= $mark) {
            echo "<li>$student - $student_mark</li>";
        }
    }

    echo "</ul>";       
    
?>