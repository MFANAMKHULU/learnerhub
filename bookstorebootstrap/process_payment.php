<!-- process_payment.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $cardNumber = $_POST['cardNumber'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];

    // Validate and sanitize form data (you should perform more thorough validation)
    $cardNumber = filter_var($cardNumber, FILTER_SANITIZE_STRING);
    $expiryDate = filter_var($expiryDate, FILTER_SANITIZE_STRING);
    $cvv = filter_var($cvv, FILTER_SANITIZE_STRING);

    echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Payment Successful</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        </head>
        <body class="text-center">
            <div class="container">
                <h1>Payment Successful</h1>
                <p>Thank you for your purchase!</p>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>';
} else {
    // Redirect if accessed directly without submitting the form
    header('Location: index.html');
    exit;
}
?>
