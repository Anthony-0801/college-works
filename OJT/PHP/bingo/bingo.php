<html>
    <head>
        <title>Bingo</title>
        <link rel="stylesheet" href="bingo.css">
        <meta name="author" content="Anthony A. Cabulang">
    </head>
    <body>
        <table>
            <tr class="bold">
                <th>B</th>
                <th>I</th>
                <th>N</th>
                <th>G</th>
                <th>O</th>
            </tr>
<?php
            for ($i = 2; $i <= 6; $i++) {
                echo "<tr class='" . ($i % 2 === 0 ? 'blue' : 'red') . "'>";
                for ($j= 1; $j <= 5; $j++){
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
?>
        </table>
    </body>
</html>
