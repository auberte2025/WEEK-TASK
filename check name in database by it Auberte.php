<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "l4sod";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ES RUKIRA TSS - Level 4 Student</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .clock { color: darkblue; font-weight: bold; margin-top: 10px; }
        table { border-collapse: collapse; }
        td { padding: 10px; }
        hr { border: 0; border-top: 1px solid #ccc; margin: 10px 0; }
    </style>
</head>
<body>

<h2 style="color:blue;"><u>ES RUKIRA TSS</u></h2>
<h2 style="color:aqua;"><b>Level 4 Student</b></h2>
<h2 style="color:green;"><i>Created by IT Auberte</i></h2>

<table border="2">
    <tr>
        <td>

            
            <form method="GET">
                <input type="text" name="name" placeholder="Write your name!" required>
                <input type="submit" value="Check your information">
            </form>

            <?php
            // 2. PHP SEARCH PART – ishakisha izina muri DB
            if (isset($_GET['name'])) {
                $name_input = $conn->real_escape_string($_GET['name']);
                $sql = "SELECT * FROM students WHERE name LIKE '%$name_input%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<h3 style='color:orange'><b>L4 STUDENT, YOUR INFORMATION</b></h3>";
                        echo "Name: <b>" . $row['name'] . "</b><br>";
                        echo "Age: <b>" . $row['age'] . "</b><br>";
                        $classname = $row['classname'] ?? 'Not assigned';
                        echo "Class: <b>" . $classname . "</b><br>";
                        echo "<hr>";
                    }
                } else {
                    echo "<h2 style='color:red'>Name not found!</h2>";
                }
            }
            ?>

           
            <div class="clock" id="datetime"></div>

            <script>
                function updateDateTime() {
                    const now = new Date();
                    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                    const dayName = days[now.getDay()];
                    const day = String(now.getDate()).padStart(2, '0');
                    const month = String(now.getMonth() + 1).padStart(2, '0'); 
                    const year = now.getFullYear();
                    const hours = String(now.getHours()).padStart(2, '0');
                    const minutes = String(now.getMinutes()).padStart(2, '0');
                    const seconds = String(now.getSeconds()).padStart(2, '0');

                    document.getElementById('datetime').textContent = `${dayName}, ${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;
                }
                setInterval(updateDateTime, 1000);
                updateDateTime();
            </script>

        </td>
    </tr>
</table>

</body>
</html>
