<?php

$host='localhost';
$database='contact_us';
$user='root';
$pswd='';

$dbh = mysql_connect($host, $user, $pswd) or die("I can not connect to MySQL.");
mysql_select_db($database) or die("I could not connect to database.");


$result_parse = mysql_query("SELECT * FROM mew");

 {

    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>name</th>';
    echo '<th>tel</th>';
    echo '<th>typerequest</th>';
    echo '<th>email</th>';
    echo '<th>website</th>';
    echo '<th>subject</th>';
    echo '<th>message</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

     
    while($row = mysql_fetch_array($result_parse)){
      echo '<tr>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['tel'] . '</td>';
      echo '<td>' . $row['typerequest'] . '</td>';
      echo '<td>' . $row['email'] . '</td>';
      echo '<td>' . $row['website'] . '</td>';
      echo '<td>' . $row['subject'] . '</td>';
      echo '<td>' . $row['message'] . '</td>';
      echo '</tr>';
    }

      echo '</tbody>';
    echo '</table>';

  }

 ?>
