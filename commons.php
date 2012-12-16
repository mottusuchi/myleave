<?php
    error_reporting(1);

function dbConnect(){
    $server="mottusuchi.in";
    $dbName="mydatabase";
    $user="root";
    $password="boot";
    $cnn=mysql_connect($server, $user, $password) or die(sql_error());
    $db=mysql_select_db($dbName, $cnn) or die(sql_error());
    mysql_query ('SET CHARACTER SET UTF8');
}


function optimizeHTML($html){
    $html = addslashes($html);		
    $html = str_replace("\\", "\\\\",$html);
//    $html = str_replace("'", '"',$html);
    $html = stripslashes ($html);
    $html = str_replace("<br>", "<br/>",$html);
    $html = str_replace("<br>", "<br/>",$html);
    return $html;
}

function showThiyathi($mydate){
    $dates     = explode("-", $mydate);
    $month     = $dates['1'];
    $day       = $dates['2'];
    $year      = $dates['0'];
    $thiyathi = mktime(0,0,0,$month,$day,$year);
    return date("d M Y", $thiyathi);
}

?>
