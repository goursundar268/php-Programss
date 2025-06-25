<html>
<head>
<title>PHP and Database Connection</title>
</head>
<body>
<h3>Experiment: PHP and Database Connect</h3>
<form method="POST">
CODE: <input type="text" name="code"><br><br>
NAME: <input type="text" name="name"><br><br>
STREAM: <input type="text" name="stream"><br><br>
SEM: <input type="text" name="sem"><br><br>
ADDRESS: <input type="text" name="address"><br><br>

<input type="submit" name="button" value="Insert Data">
</form>

<?php
// Step 1: Connect to database
$con = mysqli_connect('localhost', 'root', '', 'students');

// Check connection
if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Step 2: Insert data when form is submitted
if (isset($_POST['button'])) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $stream = $_POST['stream'];
    $sem = $_POST['sem'];
    $address = $_POST['address'];

    $takedata = "INSERT INTO sem1(code, name, stream, sem, address) 
                 VALUES ('$code', '$name', '$stream', '$sem', '$address')";
    
    $runcode = mysqli_query($con, $takedata);

    if ($runcode) {
        echo "Data Inserted Successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
</body>
</html>

<!--
CREATE TABLE SEMESTER1 (
    code VARCHAR(20),
    name VARCHAR(50),
    stream VARCHAR(20),
    sem VARCHAR(10),
    address VARCHAR(100)
)
-->