<!DOCTYPE html>
<html>
<head>
    <title>ES RUKIRA TSS - Level 4 Student</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .clock { color: darkblue; font-weight: bold; margin-top: 10px; }
    </style>
</head>
<body>

<h2 style="color:blue;"><u>ES RUKIRA TSS</u></h2>
<h2 style="color:aqua;"><b>Level 4 Student</b></h2>
<h2 style="color:green;"><i>Created by IT Auberte</i></h2>

<table border="2">
    <tr>
        <td>

            <!-- Form yo kwinjizamo izina -->
            <form method="GET">
                <input type="text" name="name" placeholder="Write your name!" required>
                <input type="submit" value="Check your information">
            </form>

            <?php
            // LIST Y’ABANTU BOSE
            $people = [
                ["short"=>"auberte","full name"=>"CYUBAHIRO HIRWA Auberte","age"=>19],
                ["short"=>"elyse","full name"=>"CYIZUZO Elyse","age"=>18],
                ["short"=>"ezechiel","full name"=>"HIMBAZA Ezechiel","age"=>20],
                ["short"=>"joseph","full name"=>"MANZI Joseph","age"=>17],
                ["short"=>"alice","full name"=>"UWERA Alice","age"=>17],
                ["short"=>"delphine","full name"=>"UKWIBISHAKA Delphine","age"=>18],
                ["short"=>"samuel","full name"=>"ISHIMWE Samuel","age"=>20],
                ["short"=>"janvier","full name"=>"MURISA Janvier","age"=>18],
                ["short"=>"honoline","full name"=>"UWERA Honoline","age"=>18],
                ["short"=>"diane","full name"=>"MUKADUSENGE Diane","age"=>18],
                ["short"=>"claude","full name"=>"NKURUNZIZA Claude","age"=>20],
                ["short"=>"j.claude","full name"=>"TUYIZERE J.claude","age"=>20],
                ["short"=>"immacculee","full name"=>"NIYONIZEYE Immacculee","age"=>18],
                ["short"=>"danick","full name"=>"UWITUZE Danick","age"=>18],
                ["short"=>"chaste","full name"=>"MUHIRWA Chaste","age"=>18],
                ["short"=>"kelly","full name"=>"ISINGIZWE Kelly","age"=>19],
                ["short"=>"nelson","full name"=>"KWIZERA Nelson","age"=>19],
                ["short"=>"valante","full name"=>"TUYISENGE Valante","age"=>18],
                ["short"=>"geofrey","full name"=>"NDACYAYISENGA Geofrey","age"=>21],
                ["short"=>"didiel","full name"=>"MUSAFIRI Didiel","age"=>20],
                ["short"=>"divine","full name"=>"UWAYEZU Divine","age"=>18],
                ["short"=>"francoise","full name"=>"IRADUKUNDA Francoise","age"=>18],
                ["short"=>"marieclaire","full name"=>"NIYIGENA Marieclaire","age"=>19],
                ["short"=>"belyse","full name"=>"IRANKUNDA Belyse","age"=>18],
                ["short"=>"adeline","full name"=>"UMUHOZA Adeline","age"=>19],
                ["short"=>"ruth","full name"=>"INGABIRE Ruth","age"=>18],
                ["short"=>"joice","full name"=>"JOICE","age"=>19]
            ];

            // PHP SEARCH PART – ishakisha iryo ariryo ryose
            if (isset($_GET['name'])) {
                $input = strtolower(trim($_GET['name']));
                $found = false;

                foreach ($people as $person) {
                    if (str_contains(strtolower($person['short']), $input) ||
                        str_contains(strtolower($person['full name']), $input)) {

                        echo "<h3 style='color:orange'><b><u>L4 STUDENT, YOUR INFORMATION</u></b></h3>";
                        echo "<b><u>My NAME is:</u></b> <h3 style='color:darkblue'>" . $person['full name'] . "</h3>";
                        echo "AGE is: <b>" . $person['age'] . "</b><br>";
                        $found = true;
                        break;
                    }
                }

                if (!$found) {
                    echo "<h2 style='color:red;'>Try again! Your name was not found.</h2>";
                }
            }
            ?>

            <br><br>
            <!-- Dynamic Date & Time & Day -->
            <div class="clock" id="datetime"></div>

            <script>
                function updateDateTime() {
               const now = new Date();
                    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                    const dayName = days[now.getDay()];
                    const day = String(now.getDate()).padStart(2, '0');
                    const month = String(now.getMonth() + 1).padStart(2, '0'); // Month 0-11
                    const year = now.getFullYear();
                    const hours = String(now.getHours()).padStart(2, '0');
                    const minutes = String(now.getMinutes()).padStart(2, '0');
                    const seconds = String(now.getSeconds()).padStart(2, '0');

                    const formatted = `${dayName}, ${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;
                    document.getElementById('datetime').textContent = formatted;
                }

                setInterval(updateDateTime, 1000);
                updateDateTime();
            </script>

        </td>
    </tr>
</table>

</body>
</html>
