<?php
    include '../DB/main.php';
?>
<html>
    <head>
        <title>Lidya Nuramo - Exercise 1</title>
        <?xml version="1.0" encoding="utf-8"?>
        <meta http-equiv="refresh" content="10" />
    </head>
    <body bgcolor="lightblue">
        <h1>Exercise 1 - Monitered hosts</h1>
        <body>
            <?php
                $result = get_rows("hosts");
                print "<TABLE CELLPADDING=5 BORDER=1>";
                print "<TR><TD>id</TD><TD>Address</TD><TD>Port</TD><TD>Connection Status</TD><TD>Number of Attempts</TD><TD>Time of connection loss</TD><TD>Duration of connection loss (in minutes)</TD></TR>\n";
                while ($row = mysqli_fetch_array ($result)) {
                    $id = $row[0];
                    $address = $row[1];
                    $port = $row[2];
                    $time = '';
                    $duration = '';
                    $durationmin = 0;
                    $durationsec = 0;
                    {
                        $fp = @fsockopen($address, $port, $errno, $errstr, 30);
                        if ($fp) { $status ='OK'; } 
                        else 
                        { 
                            $status ='Out-of-order';
                            date_default_timezone_set("Europe/Warsaw"); 
                            $time = date("h:i:sa");
                            $duration = ($errno)*10;
                            $durationmin = intdiv($duration, 60);
                            $durationsec = $duration%60;
                            $duration = '';
                        }
                        if (!$fp) { $status ="$errstr ($errno)"; }
                    }
                    print "<TR><TD>$id</TD><TD>$address</TD><TD>$port</TD><TD>$status</TD><TD>$errno</TD><TD>$time</TD><TD>$durationmin min $durationsec sec </TD></TR>\n";
                }
                print "</TABLE>";
            ?>
    </body>
</html>
