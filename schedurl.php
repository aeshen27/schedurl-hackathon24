<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum and Schedule Builder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Curriculum and Schedule Builder</h1>
        <form action = "plan.php" method = "POST">
            <!-- School Selection -->
            <label for="school">Select Your School:</label>
            <select id="school" name="school">
                <option value="mckelvey">McKelvey Engineering</option>
                <!--<option value="artsSciences">Arts and Sciences</option>
                <option value="samFox">Sam Fox Art</option>
                <option value="olinBusiness">Olin Business</option> -->
            </select>

            <label for="major1">Select Your Major:</label>
            <select id="major1" name="major1">
                <!-- McKelvey Majors -->
                <optgroup label="McKelvey Engineering">
                    <option value="Computer Science">Computer Science</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Biomedical Engineering">Biomedical Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Computer Engineering">Computer Engineering</option>
                    <option value="Data Science">Data Science</option>
                    <option value="Environmental Engineering">Environmental Engineering</option>
                    <option value="Chemical Engineering">Chemical Engineering</option>
                </optgroup>

                <!-- Arts and Sciences Majors -->
                <!--
                <optgroup label="Arts and Sciences">
                    <option value="economics">Economics</option>
                    <option value="psychology">Psychology</option>
                    <option value="biology">Biology</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="physics">Physics</option>
                    <option value="history">History</option>
                    <option value="english">English</option>
                </optgroup>-->

                <!-- Sam Fox Majors -->
                <!--
                <optgroup label="Sam Fox Art">
                    <option value="design">Design</option>
                    <option value="drawing">Drawing</option>
                    <option value="architecture">Architecture</option>
                    <option value="communicationsDesign">Communications Design</option>
                    <option value="ceramics">Ceramics</option>
                </optgroup> -->

                <!-- Olin Business Majors -->
                <!--
                <optgroup label="Olin Business">
                    <option value="finance">Finance</option>
                    <option value="economics">Economics</option>
                    <option value="accounting">Accounting</option>
                    <option value="econStrat">Econ Strat</option>
                    <option value="osm">Operations and Supply Management (OSM)</option>
                </optgroup> -->
            </select>

            <!-- Optional Second Major -->
            <label for="major2">Select Second Major (Optional):</label>
            <select id="major2" name="major2">
                <option value="">-- Select Second Major --
                <optgroup label="McKelvey Engineering">
                    <option value="computerScience">Computer Science</option>
                    <option value="csMath">Computer Science + Math</option>
                    <option value="dataScience">Data Science</option>
                    <option value="finEng">Financial Engineering</option>
                    <option value="sysSci">Systems Science</option>
                    <option value="eeScience">Electrical Engineering Science</option>
                </optgroup>
                </option>
                
            </select>

            <!-- Optional Minor -->
            <label for="minor">Select Minor (Optional):</label>
            <select id="minor" name="minor">
                <option value="">-- Select Minor --</option>
                <optgroup label="McKelvey Engineering">
                    <option value="">-- None --</option>
                    <option value="aerospaceEngineering">Aerospace Engineering</option>
                    <option value="bioinformatics">Bioinformatics</option>
                    <option value="biomedicalDataScience">Biomedical Data Science</option>
                    <option value="computerScience">Computer Science</option>
                    <option value="electricalEngineering">Electrical Engineering</option>
                    <option value="energyEngineering">Energy Engineering</option>
                    <option value="environmentalEngineeringScience">Environmental Engineering Science</option>
                    <option value="humanComputerInteraction">Human Computer Interaction</option>
                    <option value="materialsScienceEngineering">Materials Science Engineering</option>
                    <option value="mechanicalEngineering">Mechanical Engineering</option>
                    <option value="mechatronics">Mechatronics</option>
                    <option value="nanoscaleScienceEngineering">Nanoscale Science Engineering</option>
                    <option value="quantumEngineering">Quantum Engineering</option>
                    <option value="robotics">Robotics</option>
                    <option value="systemsScienceEngineering">Systems Science Engineering</option>
                </optgroup>
            </select>

            <!-- Year Selection 
            <label for="year">Select Your Year:</label>
            <select id="year" name="year">
                <option value="freshman">Freshman</option>
                <option value="sophomore">Sophomore</option>
                <option value="junior">Junior</option>
                <option value="senior">Senior</option>
            </select>-->

            <input type="submit" class="btn" value="Next">
        </form>
    </div>
</body>
</html>
