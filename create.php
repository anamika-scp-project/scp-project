<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $scp_number = $_POST['scp_number'];
    $object_class = $_POST['object_class'];
    $containment = $_POST['containment'];
    $description = $_POST['description'];

    $sql = "INSERT INTO scp_subjects (scp_number, object_class, containment, description)
            VALUES ('$scp_number', '$object_class', '$containment', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Record created successfully.</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<h1>Add New SCP Record</h1>

<form method="post">
    <label>SCP Number:</label><br>
    <input type="text" name="scp_number" required><br><br>

    <label>Object Class:</label><br>
    <input type="text" name="object_class" required><br><br>

    <label>Containment:</label><br>
    <textarea name="containment" required></textarea><br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea><br><br>

    <button type="submit" name="submit">Add Record</button>
</form>

<br>
<a href="index.php">Back to Home</a>