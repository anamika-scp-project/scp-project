<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM scp_subjects");
?>

<!DOCTYPE html>
<html>
<head>
<title>SCP Database</title>
<style>
table{
border-collapse:collapse;
width:100%;
}
th,td{
border:1px solid black;
padding:8px;
}
</style>
</head>

<body>

<h1>SCP Database</h1>

<a href="create.php">Add New Record</a>
<br><br>
<table>

<tr>
<th>ID</th>
<th>SCP Number</th>
<th>Object Class</th>
<th>Containment</th>
<th>Description</th>
<th>Actions</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['scp_number']; ?></td>
<td><?php echo $row['object_class']; ?></td>
<td><?php echo $row['containment']; ?></td>
<td><?php echo $row['description']; ?></td>

<td>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php
}
?>

</table>

</body>
</html>