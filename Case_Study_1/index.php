<?php
    //Dynamic Datas
    $profession = "Undergraduate";
    $phoneNumber = "0977-097-3774";
    $email = "valdez.ramoncitojr.071502@gmail.com";
    $linkedIn = "www.linkedin.com/in/ramoncito-valdez-0894ba2b9";
    $gitHub = "https://github.com/Valdez-Ramoncito";
    $address = "Blk #30, Zone 4, Brgy. Barangobong, Tayug, Pangasinan";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Study 1</title>
</head>
<body>
    <!-- Display the pic alongside with the details -->
    <div style="height:15rem; display:flex; background-color:#48AAAD; color:beige">

        <div style="display:flex; margin-left:1rem">
            <img src="Valdez.jpg" alt="Valdez_Pic" width=100%>
        </div>
        
        <div style="display:flex; flex-direction:column; margin-left:1rem;">
            <?php
                echo "<h1>Ramoncito T. Valdez Jr.</h1>";
                echo "<h2 style='margin: 0px; margin-top:-1rem'>{$profession}</h2>";
                echo "<h3 style='line-height: 1.5;'>Phone: {$phoneNumber}<br><hr style='margin:0'>
                        Email: {$email}<br><hr style='margin:0'>
                        LinkedIn: {$linkedIn}<br><hr style='margin:0'>
                        GitHub: {$gitHub}<br>
                </h3>";
            ?>
        </div>
        <div style="border-left:1px solid white; margin-left:1rem; margin-top:7rem; height:10rem; left:50%;"></div>
        <div style="display:flex; flex-direction:column; margin-left:1rem;">
            <?php
                echo "<h1 style='color:#48AAAD'>placeholder</h1>
                    <h2 style='color:#48AAAD; margin: 0px; margin-top:-1rem'>placeholder</h2>
                    <h3 style='line-height: 1.5;'>Address: {$address}<br><hr style='margin:0'>
                        Date of birth: 15 July 2002<br><hr style='margin:0'>
                        Gender: Male<br><hr style='margin:0'>
                        Nationality: Filipino<br>
                </h3>";
            ?>
        </div>
    </div>

    <!-- Introduction about me -->
    <div>
        <?php
            echo "<p style='margin-left:2rem; margin-right:2rem; text-align:justify'>Undergraduate Student of Pangasinan State University under the Course of Bachelor of Science
            in Information Technology - Web and Mobile Applications. Currently studying the ins and outs of Web
            Systems and Technologies, Mobile Application Development, Application and Development Emerging Technologies,
            and other related subjects. Have submitted and passed various projects that consists of consistent coding
            efficiency, practical habits, effective applications of such methods, etc.</p>";
        ?>
    </div>

    <!-- Educational Background -->
    <h2 style="color:#48AAAD; margin-left:1rem">Education</h2>
    <hr style="border-bottom: 2px solid;">
    <div style="display:flex">
        <div style="width:30%">
            <h3 style="margin-left:1rem">2019 - 2021</h3>
        </div>
        <div style="width:70%;">
            <h3>Senior High School Diploma</h3>
            <p style="line-height:0;"><i>Metro Manila College, Quezon City</i></p>
        </div>
    </div>
    <div style="display:flex">
        <div style="width:30%">
            <h3 style="margin-left:1rem">2023 - Present</h3>
        </div>
        <div style="width:70%;">
            <h3>Bachelor of Science in Information Technology (Undergraduate)</h3>
            <p style="line-height:0;"><i>Pangasinan State University, Pangasinan</i></p>
            <p style="margin-top:2rem">Specialization:<br>
                <li style="margin-left:1rem">
                    Mobile and Web Applications
                </li>
            </p>
        </div>
    </div>

    <!-- Work Background -->
    <h2 style="color:#48AAAD; margin-left:1rem">Experience</h2>
    <hr style="border-bottom: 2px solid;">
    <div style="display:flex">
        <div style="width:30%">
            <h3 style="margin-left:1rem">August 2024 - February 2025</h3>
        </div>
        <div style="width:70%;">
            <h3>System Administrator</h3>
            <p style="line-height:0;"><i>Sierra Manila, Quezon City</i></p>
                <li style="margin-left:1rem">
                    Created a system for automatic employee time-in, time-out
                </li>
                <li style="margin-left:1rem">
                    Created a system for inventory list and inventory management
                    for easier readability and more efficiency
                </li>
                <li style="margin-left:1rem">
                    Maintained and improved the system for tracking and storing of orders
                    that serves as a basis for prior customer transactions
                </li>
            </p>
        </div>
    </div>

    <!-- Skills -->
    <h2 style="color:#48AAAD; margin-left:1rem">Skills</h2>
    <hr style="border-bottom: 2px solid;">
    <div style="display:flex">
        <div style="width:30%"></div>
        <div style="width:70%;">
                <li style="margin-left:1rem">
                    C, C++, C#
                </li>
                <li style="margin-left:1rem">
                    Java, Javascript, HTML, CSS
                </li>
                <li style="margin-left:1rem">
                    MS Excel, MS Word, MS PPT
                </li>
                <li style="margin-left:1rem">
                    MySQL, Flutter(Dart)
                </li>
        </div>
    </div>
</body>
</html>
