<?
    include("commons.php");
    dbConnect();
    if(isset($_REQUEST['id'])) {
    $employeeID=$_REQUEST['id'];
    $result=mysql_query("SELECT employeeName, leavehtml, lastupdate FROM myleave WHERE employeeID=$employeeID");
    $n=mysql_num_rows($result);
    if($n>0) {
    while($row = mysql_fetch_array($result)) {
        $name=$row[0];
        $html=$row[1];
        $date=$row[2];
    }
    mysql_free_result($result);
    }
    else {
		echo '<img src="assets/not-autohorized.jpg"/>';
    }
    }
    else {
		echo '<img src="assets/not-autohorized.jpg"/>';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>MyLeave</title>
<style type="text/css">
/*<![CDATA[*/
/*
	Cusco Sky table styles
	written by Braulio Soncco http://www.buayacorp.com
*/
body {
  padding: 0px;
  margin: 0px;
	font-family: "Trebuchet MS", Arial, sans-serif;
	color: #555;
}
table, th, td {
	border: 1px solid #D4E0EE;
	border-collapse: collapse;
}
/*]]>*/
</style>
</head>

<body>
    <img src="assets/logo.jpg" />
<?
    echo "<p>".$name."  :: ".$employeeID."</p>";
    echo $html;
    echo "<p>Last Updated: ".showThiyathi($date). "</p>";
?>
</body>

</html>