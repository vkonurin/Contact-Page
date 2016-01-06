 ​<?php

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $typerequest = $_POST['typerequest'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $subject_theme = $_POST['subject'];
    $message = $_POST['message'];

    $to = "ckonurin@gmail.com";
    $subject = "From the site visitor";
    $text =  "Written by: $name\n Phone: $tel\nType request: $typerequest\nWebsite: $website\nTheme subject: $subject_theme\nE-mail: $email\nText of the letter: $message\n";

    $header = "Content-type: text/html; charset=utf-8\r\n";
    $header .= "MIME-Version: 1.0\r\n";

    $sending = mail($to, $subject, $text, $headers);

    if($sending) echo "Letter sent! thank you message.";

    $host='localhost';
    $database='contact_us';
    $user='root';
    $pswd='';

    $dbh = mysql_connect($host, $user, $pswd) or die("I can not connect to MySQL.");
    mysql_select_db($database) or die("I could not connect to database.");

    $result = mysql_query("INSERT INTO mew (name, tel, typerequest, email, website, subject, message) VALUES ('$name', '$tel', '$typerequest', '$email', '$website', '$subject_theme', '$message')");

    if($result == 'true')
    {echo "Your data has been successfully added";}
    else
    {echo "Your data will not be added";}

    ?>
