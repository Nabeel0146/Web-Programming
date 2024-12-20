
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Indian Team</title>
    <style>
        body {
            background-color: whitesmoke;
            font-family: Arial, sans-serif;
            color: #333;
            padding: 30px;
        }

        h4 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .center {
            text-align: center;
        }

        .title {
            color: #333;
            font-size: 30px;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="center">
        <h4 class="title">INDIAN TEAM</h4>

        <?php
        $name = ["Dhawan", "Kohli", "Sachin", "Shami", "Pandey", "Bumrah", "Agarwal", "Shreyas", "Rahul", "Ashwin"];
        $role = ["Batsman", "Batsman", "Allrounder", "Bowler", "Batsman", "Bowler", "Batsman", "Batsman", "Wicket-keeper", "Bowler"];

        echo "<table>
                <tr>
                    <th>SL.NO</th>
                    <th>PLAYERS</th>
                    <th>ROLE</th>
                </tr>";

        for ($i = 0; $i < count($name); $i++) {
            $sl = $i + 1;
            echo "<tr>
                    <td>$sl</td>
                    <td>$name[$i]</td>
                    <td>$role[$i]</td>
                  </tr>";
        }

        echo "</table>";
        ?>
    </div>

</body>
</html>
