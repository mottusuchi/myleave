<?php
    include("commons.php");

    $today=gmstrftime("%Y-%m-%d", mktime() + 19800);
    $objDOM = new DOMDocument();
    $objDOM->load("php://input");

    $note = $objDOM->getElementsByTagName("leave_table");

    foreach( $note as $value )
    {
        $employeeID = $value->getElementsByTagName("employeeID");
        $employeeID  = $employeeID->item(0)->nodeValue;
        $leave = $value->getElementsByTagName("leave");
        $leave  = $leave->item(0)->nodeValue;
    }

    $leave=optimizeHTML($leave);

    dbConnect();

    $result=mysql_query("SELECT COUNT(*) FROM myleave WHERE employeeID=$employeeID");
    $count = mysql_fetch_row($result);
    echo $count[0]."testing ";
    if ($count[0]<1) {
        $result=mysql_query("INSERT INTO myleave (leavehtml, lastupdate) VALUES ('$leave', '$today')");
        echo "INSERT INTO myleave (leavehtml, lastupdate) VALUES ('$leave', '$today')";
    }
    else {

        $result=mysql_query("UPDATE myleave SET leavehtml='$leave', lastupdate='$today' WHERE employeeID=$employeeID");
        echo "UPDATE myleave SET leavehtml='$leave' WHERE employeeID=$employeeID";
    }
    mysql_free_result($result);
    echo $employeeID;

?>

