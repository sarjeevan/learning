<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 25%;
            margin: auto;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>SUBJECTS</th>
            <th>MARKS</th>
        </tr>
        <?php
        $marks = array('100', '90', '80', '100', '100');
        $subjects = array('TAMIL', 'ENGLISH', 'MATHS', 'SCIENCE', 'SOCIAL SCIENCE');
        ?>

        <?php for ($x = 0; $x < count($subjects); $x++) { ?>
            <tr>
                <td><?php echo $subjects[$x]; ?></td>
                <td><?php echo $marks[$x]; ?></td>
            </tr>


        <?php } ?>
    </table>
</body>

</html>