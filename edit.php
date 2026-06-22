<?php
include 'config.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM scp_subjects WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $scp_number = $_POST['scp_number'];
    $object_class = $_POST['object_class'];
    $containment = $_POST['containment'];
    $description = $_POST['description'];

    $sql = "UPDATE scp_subjects SET 
            scp_number='$scp_number',
            object_class='$object_class',
            containment='$containment',
            description='$description'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Record updated successfully.</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<h1>Edit SCP Record</h1>

<form method="post">
    <label>SCP Number:</label><br>
    <input type="text" name="scp_number" value="<?php echo $row['scp_number']; ?>" required><br><br>

    <label>Object Class:</label><br>
    <input type="text" name="object_class" value="<?php echo $row['object_class']; ?>" required><br><br>

    <label>Containment:</label><br>
    <textarea name="containment" required><?php echo $row['containment']; ?></textarea><br><br>

    <label>Description:</label><br>
    <textarea name="description" required><?php echo $row['description']; ?></textarea><br><br>

    <button type="submit" name="submit">Update Record</button>
</form>

<br>
<a href="index.php">Back to Home</a>