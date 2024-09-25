<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's name from the POST request
    $name = htmlspecialchars($_POST['name']); // This ensures no HTML tags are injected (basic XSS protection)
    
    // If the name is empty, return an error
    if (empty($name)) {
        $greeting = "Error: Name field cannot be empty!";
    } else {
        $greeting = "Hello, " . $name . "! Welcome to the PHP App.";
    }
} else {
    // If someone tries to access this page directly without submitting the form
    $greeting = "Please submit the form.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <
