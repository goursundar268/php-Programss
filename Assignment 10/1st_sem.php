<html>
    <body>
        <h2>SEM 1 MARKSHEET</h2>
        Student Code: <?php echo $_POST["std_code"]?><br>
        Student Name: <?php echo $_POST["name"]?><br><br>
        <b>Marks of all Subjects: </b><br>
        Digital Logic: <?php echo $_POST["dl"]?><br>
        Programming in C: <?php echo $_POST["C"]?><br>
        Funational English: <?php echo $_POST["func_eng"]?><br>
        Human Value and Ethics: <?php echo $_POST["human_value"]?><br>

        <?php
            $total = $_POST["dl"] + $_POST["C"] + $_POST["func_eng"] + $_POST["human_value"];
            echo "<b> Total Marks </b> : ". $total . "<br>";
            $percentage = ($total / 400) * 100;
            echo "<b> Percentage : </b> ". $percentage . "<br>";
            echo "<b>Grade: </b>";
            if ($percentage >= 90 && $percentage <= 100) {
                echo "A+";
            } elseif ($percentage >= 80 && $percentage <= 89) {
                echo "A";
            } elseif ($percentage >= 70 && $percentage <= 79) {
                echo "B";
            } elseif ($percentage >= 60 && $percentage <= 69) {
                echo "C";
            } elseif ($percentage >= 50 && $percentage <= 59) {
                echo "D";
            } else {
                echo "F (Fail)";
            }
        ?>
    </body>
</html>