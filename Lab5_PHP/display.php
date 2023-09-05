<!DOCTYPE html>
<html>
<head>
    <title>Event Registration Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Registered Participants</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date of Birth</th>
            <th>Coding Experience</th>
        </tr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];
            $dob = $_GET["dob"];
            $experience = $_GET["experience"];
            
            echo "<tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>$dob</td>
                    <td>$experience</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>
