<?php
class MyClass {
    public function displayMessage($message) {
        echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    }
}

$message = '';
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['message'])) {
    $message = $_POST['message'];
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат введення повідомлення</title>
</head>
<body>
    <h1>Введене повідомлення:</h1>
    <p>
    <?php 
    if (!empty($message)) {
        $instance = new MyClass();
        $instance->displayMessage($message);
    } else {
        echo "Повідомлення не було введено.";
    }
    ?>
    </p>
    <a href="index4.html">Повернутися до форми</a>
</body>
</html>
