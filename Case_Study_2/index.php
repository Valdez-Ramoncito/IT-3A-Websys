<?php
    //variables
    $score = $_GET["score"];
    $grade = "";
    $remark = "";
    $name = $_GET["name"];

    //Grade and remarks will be set depending on the score
    if($score >= 95){
        $grade = "A";
        $remark = "Outstanding Performance!";
    }
    else if($score >= 86 && $score < 95 ){
        $grade = "B";
        $remark = "Great Job!";
    }
    else if($score >= 80 && $score < 86 ){
        $grade = "C";
        $remark = "Good Effort, keep it up!";
    }
    else if($score > 74 && $score < 80 ){
        $grade = "D";
        $remark = "Work harder next time.";
    }
    else{
        $grade = "F";
        $remark = "You need to improve.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Study 2</title>
</head>
<body style="margin:0">
    <!--Title and Instructions-->
    <div style="display:flex; justify-content:space-around; background-color:#48AAAD; height:5rem">
            <h1 style="color:beige">Case Study 2: Student Grading System (URL Input)</h1>
    </div>
    <div style="margin-left:1rem">
        <h2 style="text-align:center;">Instructions:</h2>
        <h3 style="text-align:center;">Enter in the URL: ?name=(value here. add %20 for spaces) followed by &score=(value) to see the result.<br>
            Example: ?name=Ramoncito%20Valdez&score=80
        </h3>
    </div>
    <!--Display the results-->
    <hr style="border-bottom:2px solid;">
    <div style="display:flex; justify-content:space-evenly">
        <?php
            echo "<h1>Student's name: </h1> <h1><u>{$name}</u></h1><br>";
        ?>
    </div>
    <div style="display:flex; justify-content:space-evenly">
        <?php
             echo "<h1>Student's Score: </h1> <h1><u>{$score}</u></h1><br>";
        ?>
    </div>
    <div style="display:flex; justify-content:space-evenly">
        <?php
            echo "<h1>Student's Grade: </h1> <h1><u>{$grade}</u></h1><br>";
        ?>
    </div>
    <div style="display:flex; justify-content:space-evenly">
        <?php
            echo "<h1>Remarks: </h1> <h1><u>{$remark}</u></h1><br>";
        ?>
    </div>        
</body>
</html>