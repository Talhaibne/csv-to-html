<?php
$filename = "Titanic-Dataset.csv";
if (($handle = fopen($filename, "r")) !== FALSE) {

  echo "<table border='1'>";

  $rowNumber = 0;
  while (($data = fgetcsv($handle, 1000, ",")) !==FALSE) {
    if ($rowNumber == 0) {
      echo "<thead><tr>";
      foreach ($data as $header) {
        echo "<th>" . htmlspecialchars($header) . "</th>";
      }
      echo "</tr></head><tbody>";
    } else {
      echo "<tr>";
      foreach ($data as $column) {
        echo "<td>" . htmlspecialchars($column) . "</th>";
      }
      echo "</tr>;
      }
     
