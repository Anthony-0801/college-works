<?php
// Set auto_detect_line_endings to TRUE
ini_set('auto_detect_line_endings', true);

// Open the CSV file 
$csvFile = fopen('us-500.csv', 'r');

// Initialize row counter
$rowCount = 0;

// Start creating the HTML table
echo '<table border="1">';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Company Name</th>';
echo '<th>Full Address</th>';
echo '<th>Phone 1</th>';
echo '<th>Phone 2</th>';
echo '<th>Email Address</th>';
echo '<th>Website</th>';
echo '</tr>';

// Read data from the CSV file
while (($data = fgetcsv($csvFile)) !== false) {
    $rowCount++;

    // Apply light gray background for every 10th row
    $bgColor = ($rowCount % 10 === 0) ? 'lightgray' : 'white';

    echo '<tr style="background-color: ' . $bgColor . ';">';
    echo '<td>' . $data[0] . '</td>';
    echo '<td>' . $data[1] . '</td>';
    echo '<td>' . $data[2] . '</td>';
    echo '<td>' . $data[3] . '</td>';
    echo '<td>' . $data[4] . '</td>';
    echo '<td>' . $data[5] . '</td>';
    echo '<td>' . $data[6] . '</td>';
    echo '<td>' . $data[7] . '</td>';
    echo '</tr>';
}

fclose($csvFile);

echo '</table>';
?>
