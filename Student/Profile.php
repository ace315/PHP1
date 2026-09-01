<?php

$student = [
    "Student ID" => "25204744",
    "Full Name" => "Jeryl Clouie Adlawan",
    "Program" => "BS Information Technology",
    "Section" => "BSIT 3C",
    "Email" => "jeceadlawan@gmail.com",
    "Status" => "Active"
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            width: 30%;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Student Profile</h2>

    <table>
        <?php foreach ($student as $label => $value): ?>
            <tr>
                <th><?= $label ?></th>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
