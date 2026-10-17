<?php
// The dropdown allows users to select existing members from the database.
// This prevents users from entering invalid member IDs, such as 13,
// which could cause a foreign key constraint error.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Tennis Booking</title>
</head>
<body>
    <h2>New Tennis Court Booking</h2>

    <form method="POST" action="createNewBooking.php">
        <label for="memberID">Member:</label>
<?php include("createMemberDropdown.php"); ?>
        <br><br>

        <label for="courtID">Court ID:</label>
        <input type="number" id="courtID" name="courtID" required>
        <br><br>

        <label for="bookingDate">Booking Date:</label>
        <input type="date" id="bookingDate" name="bookingDate" required>
        <br><br>

        <label for="startTime">Start Time:</label>
        <input type="time" id="startTime" name="startTime" required>
        <br><br>

        <label for="endTime">End Time:</label>
        <input type="time" id="endTime" name="endTime" required>
        <br><br>

        <input type="submit" value="Submit Booking">
    </form>
</body>
</html>
