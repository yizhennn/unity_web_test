<?php

        $csvname     = $_POST["csvname"];
        $Timelog5 = $_POST["Timelog5"];
        $timer_f= $_POST["timer_f"];
        
        $list = array ( array($Timelog5,"SubID_Over",$timer_f));
        $fp = fopen($csvname, 'a');
        foreach ($list as $fields) {fputcsv($fp, $fields);}
        fclose($fp);
            
    
                   




?>