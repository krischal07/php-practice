<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Calculator</title>
</head>
<body>
    <h1>Marks calculator</h1>
</body>

<?php
    $computer = 20;
    $maths = 20;
    $english = 90;

    $total_marks = $computer+$maths+$english;
    $percentage = ($total_marks/300)*100;

    if($percentage<50){
        echo "<span style='color: red'>You have failed... percentage=$percentage </span>";
    }
    else{
        echo " <span style='color: green'> You have passed... percentage=$percentage </span>";
    }
?>

</html>