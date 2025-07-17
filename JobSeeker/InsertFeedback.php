<?php
session_start(); // Always start the session first

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['txtFeedback'])) {
    $feedback = $_POST['txtFeedback'];
    $date = date('Y-m-d'); // ISO standard format
    $jobSeekerId = isset($_SESSION['ID']) ? $_SESSION['ID'] : null;

    // Validate inputs
    if (empty($jobSeekerId) || empty($feedback)) {
        echo '<script>alert("Invalid session or empty feedback."); window.location="Feedback.php";</script>';
        exit;
    }

    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "sourcecodester_jobportaldb");

    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO Feedback (JobSeekId, Feedback, FeedbakDate) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $jobSeekerId, $feedback, $date);

    if ($stmt->execute()) {
        echo '<script>alert("Feedback Given Successfully"); window.location="Feedback.php";</script>';
    } else {
        echo '<script>alert("Failed to give feedback."); window.location="Feedback.php";</script>';
    }

    // Close connections
    $stmt->close();
    mysqli_close($con);
} else {
    echo '<script>alert("Invalid request."); window.location="Feedback.php";</script>';
}
?>
