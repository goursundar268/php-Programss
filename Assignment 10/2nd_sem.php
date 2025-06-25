<html>
    <body>
        <h2>SEM 2 MARKSHEET</h2>
        Student Code: <?php echo $_POST["std_code"]?><br>
        Student Name: <?php echo $_POST["name"]?><br><br>
        <b>Marks of all Subjects: </b><br>
        Data Structure and Algorithm: <?php echo $_POST["dsa"]?><br>
        Programming in Python: <?php echo $_POST["python"]?><br>
        Communicative English: <?php echo $_POST["communicative_eng"]?><br>
        Environmental Studies: <?php echo $_POST["evs"]?><br>

        <?php
            $total = $_POST["dsa"] + $_POST["python"] + $_POST["communicative_eng"] + $_POST["evs"];
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