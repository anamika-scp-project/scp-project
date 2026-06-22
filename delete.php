<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM scp_subjects WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<p>Record deleted successfully.</p>";
} else {
    echo "<p>Error: " . mysqli_error($conn) . "</p>";
}
?>

<br>
<a href="index.php">Back to Home</a>