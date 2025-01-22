<?php
include '../../includes/config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("You must be logged in to take the test.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $score = 0;

    // Assuming the test has 1 question for simplicity
    if ($_POST['question_1'] == 'B') {
        $score++;
    }

    // Store the exam result in the database
    $stmt = $pdo->prepare("INSERT INTO exams (user_id, score) VALUES (?, ?)");
    $stmt->execute([$user_id, $score]);

    echo "Your score is: $score/1";
}
?>
