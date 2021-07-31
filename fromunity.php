<?php

        $Timelog1 = $_POST["Timelog1"];
        $date        = $_POST["date"];
        $_date       = $_POST["_date"];
        $id          = $_POST["name"];
        $parameter   = $_POST["parameter"];
        $start       = $_POST["start"];
        $_start      = $_POST["_start"];
        $csvname     = $_POST["csvname"];

        $list = array (
            array($Timelog1,"date",$date),
            array($Timelog1,"start",$start),
            array($Timelog1,"id",$id),
            array($Timelog1,"parameter",$parameter)
            );
        
        $fp = fopen($csvname , 'a');
        foreach ($list as $fields) { fputcsv($fp, $fields);}
        fclose($fp);
                


?>