<?php
    // Prof. Jake Rodriguez Pomperada, MAED-IT, MIT
    // www.jakerpomperada.blogspot.com and www.jakerpomperada.com
    // jakerpomperada@gmail.com
    // Bacolod City, Negros Occidental
    

    // Enable error reporting for mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Hostname
    $host = "localhost";

    // Username
    $user = "root";

    // Password
    $pass = "";

    // Database Name
    $db   = "bye";

    // Establish database connection
    $con = new mysqli($host, $user, $pass, $db);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
      function imgsrc($scos){
        if($scos<2)
            return 'totallynegative';
        elseif($scos<3.5)
            return 'verynegative';

        elseif($scos<5)
            return 'negative';

        elseif($scos<5.5)
            return 'neutral';

        elseif($scos<7)
            return 'positive';

        elseif($scos<8.5)
            return 'verypositive';

        else
            return 'totallypositive';
    }