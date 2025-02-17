
<?php

$students = [
    ['SN' => 1, 'Name' => 'Rajesh', 'Roll' => 25, 'Web_Tech_II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 64, 'Account' => 98],
    ['SN' => 2, 'Name' => 'Hari', 'Roll' => 5, 'Web_Tech_II' => 56, 'DBMS' => 89, 'Economics' => 57, 'DSA' => 64, 'Account' => 98],
    ['SN' => 3, 'Name' => 'Shyam', 'Roll' => 6, 'Web_Tech_II' => 54, 'DBMS' => 79, 'Economics' => 57, 'DSA' => 69, 'Account' => 98],
    ['SN' => 4, 'Name' => 'Rita', 'Roll' => 10, 'Web_Tech_II' => 16, 'DBMS' => 89, 'Economics' => 56, 'DSA' => 64, 'Account' => 98],
    ['SN' => 5, 'Name' => 'Gita', 'Roll' => 4, 'Web_Tech_II' => 56, 'DBMS' => 99, 'Economics' => 57, 'DSA' => 69, 'Account' => 98],
    ['SN' => 6, 'Name' => 'Sita', 'Roll' => 24, 'Web_Tech_II' => 56, 'DBMS' => 99, 'Economics' => 57, 'DSA' => 24, 'Account' => 98],
];


function calculateResult(&$student)
{
    $student['Total'] = $student['Web_Tech_II'] + $student['DBMS'] + $student['Economics'] + $student['DSA'] + $student['Account'];
    $student['Result'] = ($student['Web_Tech_II'] < 40 || $student['DBMS'] < 40 || $student['Economics'] < 40 || $student['DSA'] < 40 || $student['Account'] < 40) ? 'fail' : 'pass';
}


array_walk($students, 'calculateResult');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .pass {
            background-color: #8df08d; /* Green */
        }
        .fail {
            background-color: #f08d8d; /* Red */
        }
        .alternate tr:nth-child(even) {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Mark Ledger</h2>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Web Tech II</th>
                <th>DBMS</th>
                <th>Economics</th>
                <th>DSA</th>
                <th>Account</th>
                <th>Total</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr class="<?= $student['Result'] ?>">
                <td><?= $student['SN'] ?></td>
                <td><?= $student['Name'] ?></td>
                <td><?= $student['Roll'] ?></td>
                <td><?= $student['Web_Tech_II'] ?></td>
                <td><?= $student['DBMS'] ?></td>
                <td><?= $student['Economics'] ?></td>
                <td><?= $student['DSA'] ?></td>
                <td><?= $student['Account'] ?></td>
                <td><?= $student['Total'] ?></td>
                <td><?= ucfirst($student['Result']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2 style="text-align:center;">Alternate Color</h2>
    <table class="alternate">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Web Tech II</th>
                <th>DBMS</th>
                <th>Economics</th>
                <th>DSA</th>
                <th>Account</th>
                <th>Total</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['SN'] ?></td>
                <td><?= $student['Name'] ?></td>
                <td><?= $student['Roll'] ?></td>
                <td><?= $student['Web_Tech_II'] ?></td>
                <td><?= $student['DBMS'] ?></td>
                <td><?= $student['Economics'] ?></td>
                <td><?= $student['DSA'] ?></td>
                <td><?= $student['Account'] ?></td>
                <td><?= $student['Total'] ?></td>
                <td><?= ucfirst($student['Result']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
