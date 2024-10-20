<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum and Schedule Builder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require 'database.php';

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if ( isset($_POST["name"]) && (isset($_POST["preclasses"])) ) {

            $name = $_POST['name'];
            $preclasses = $_POST['preclasses'];
            $school = $_SESSION['school'];
            $major = $_SESSION['major'];

            $courseregex = "{(\w)(\d+)\s(\w+)\s(\d+\w+)\s\d+\s((\D+\s)+)(C|P)}";
            $semregex = "{(\w{2})(\d{4})}";

            $classlist = explode('.', $preclasses);
            
            $coursecode = array();
            $coursename = array();
            $courseschool = array();
            $coursedept = array();

            $sems = 1;

            foreach ($classlist as $x){
                if (preg_match($courseregex, $x, $matches)){
                    $courseschool[] = $matches[1];
                    $coursedept[] = $matches[2];
                    $coursecode[] = $matches[4];
                    $coursename[] = $matches[5];
                } 
                if (preg_match($semregex, $x, $matches)){
                    $sems += 1;
                }

            }
            if ($sems % 2 == 1){
                $semester = 'Fall';
            } else {
                $semester = 'Spring';
            }

            $stmt = $mysqli->prepare("SELECT required_courses from majors WHERE major_name= '$major';");
                if(!$stmt){
	                printf("Query Prep Failed: %s\n", $mysqli->error);
	                exit;
                }

                $stmt->execute();

                $stmt->bind_result($reqs);
                while($stmt->fetch()){
                    printf(
                        htmlspecialchars($reqs)
                    );
                }

                $coursearray = explode(',', $reqs);

                foreach ($coursecode as $x){
                    $coderegex = "{$x}";
                    foreach ($coursearray as $y){
                        if (preg_match($coderegex, $y, $matches)){
                            unset($coursearray[$y]);
                        }
                    }
    
                }

                $classespersem = count($coursearray)/(9-$sems);

                $hi = 0;

                $electives = 5-$classespersem;



            
            echo '<div class="schedule">';
            echo "<h1>Hi, $name! Here's a proposed schedule for you:</h1>";
            for ($i = $sems; $i<9; $i++){
                $year = round($i / 2);
                if ($i % 2 == 1){
                    $semester = 'Fall';
                } else {
                    $semester = 'Spring';
                }
                echo "<div class='semester'><h2>Semester $i (Year $year $semester)</h2>
                <table>
                <thread>
                    <tr>
                        <th>Course Code</th>
                        <!--<th>Course Name</th>-->
                        <th>Credits</th>
                    </tr>
                </thread>
                <tbody>";
                for ($j = 0; $j<$classespersem; $j++){
                    echo" <tr>
                        <td>$coursearray[$hi]</td>
                        <!--<td>Introduction to Computer Science</td>-->
                        <td>3</td>
                        
                    </tr>";
                    $hi++;
                }
                for ($k = 0; $k<$electives-1; $k++){
                    echo" <tr>
                        <td>Elective</td>
                        <!--<td>Introduction to Computer Science</td>-->
                        <td>3</td>
                        
                    </tr>";
                }
                echo "</tbody>
            </table>
            <div class='total-units'>
                Total Units: 
            </div></div>";
            }
            
            echo "</div>";
            

        }
    }
    ?>

</body>
</html>