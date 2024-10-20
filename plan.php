<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Classes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_destroy();
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( isset($_POST["school"]) && (isset($_POST["major1"])) ){
        $school = $_POST['school'];
        $_SESSION['school'] = $school;
        $major = $_POST['major1'];
        $_SESSION['major'] = $major;
        if ($_POST['major2'] != null){
            $major2 = $_POST['major2'];
            $_SESSION['major2'] = $major2;
        }
        if ($_POST['minor'] != null){
            $minor = $_POST['minor'];
            $_SESSION['minor'] = $minor;
        }
    }
} else {
    header("Location: schedurl.php");
    exit;
}


?>
<div class="container">
        <h1>User Information</h1>

        <!--Instructions Section -->
        <div class="instructions">
            <p><strong>Instructions:</strong> Please follow the instructions below to input your information into the the box.</p>

            <!-- <img src="instructions1.png" alt="Step 1: Go to WebStac and click on 'Grades w/GPA'">
            <img src="intructions2.png" alt="Step 2: Select 'All Semesters' from the drop down menu. Copy and paste your classes."> -->

            <div class="instructions-step">
            <p>Step 1: Go to WebStac and click on 'Grades w/GPA'.</p>
            <img src="dougiewuggie.jpg" alt="Grades w/GPA">
        </div>

        <div class="instructions-step">
            <p>Step 2: Select 'All Semesters' from the drop down menu. Copy and paste your classes.</p>
            <img src="instructions2.jpeg" alt="All Semesters">
        </div>
        </div>

        <form action = "output.php" method = "POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">

            <label for="preclasses">Previously Taken Classes</label>
            <input type="text" id="preclasses" name="preclasses" placeholder="Paste in from WebStac your previously taken clases">

            <button type="submit" class="btn">Generate Schedule</button>
        </form>
        
    </div>

</body>
</html>

