<html>
    <body>
        <h2>SEM 3 MARKSHEET</h2>
        Student Code: <?php echo $_POST["std_code"]?><br>
        Student Name: <?php echo $_POST["name"]?><br><br>
        <b>Marks of all Subjects: </b><br>
        Database Management System: <?php echo $_POST["dbms"]?><br>
        Operating System: <?php echo $_POST["os"]?><br>
        Object Oriented Programming in JAVA: <?php echo $_POST["java"]?><br>
        Communicative English Lab: <?php echo $_POST["eng_lab"]?><br><br>
        <?php
            $total = $_POST["dbms"] + $_POST["os"] + $_POST["java"] + $_POST["eng_lab"];
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