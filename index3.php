<?php
//Connection for database
include 'connect.php';
//Select Database
$sql = "SELECT * FROM table_3";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<body>
<h1 align="center">JOB OFFERS</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>DESIGNATION</th>
<th>REF_SITE</th>
<th>LOCATION</th>
<th>EXPERIENCE</th>
<th>DESCRIPTION</th>
<th>FIELDS</th>
<th>POSTED</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<tr>
<td><?php echo $row['COL 1']; ?></td>
<td><?php echo $row['COL 2']; ?></td>
<td><?php echo $row['COL 5']; ?></td>
<td><?php echo $row['COL 6']; ?></td>
<td><?php echo $row['COL 8']; ?></td>
<td><?php echo $row['COL 9']; ?></td>
<td><?php echo $row['COL 11']; ?></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<th colspan="2">There's No data found!!!</th>
</tr>
<?php
}
?>
</table>
</body>
</html>