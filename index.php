<?
require_once("process.php");


?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
    <title>Demo 1 - Menucool Image Slider</title>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
    <script src="listmovies.js" type="text/javascript"></script>
    <!--<link href="generic.css" rel="stylesheet" type="text/css" />-->
</head>
<body>
Enter a date in the format of "YYYY-MM-dd"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="startdate"/><br/>

<br>
<div id="result"></div>
</body>
</html>
