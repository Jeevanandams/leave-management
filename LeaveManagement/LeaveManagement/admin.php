<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    
    // Save the leave request data in a database or file for later retrieval.

    // You can also send an email to the admin for notification.

    // Redirect back to the leave request form after processing.
    header('Location: leave_request_form.html');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h1>Leave Requests</h1>
    <table border="1">
        <tr>
            <th>Email</th>
            <th>Reason</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Action</th>
        </tr>
        <!-- Leave requests will be displayed here -->
        <!-- Here, you can retrieve and display leave requests from the database or file -->
    </table>
</body>
</html>
