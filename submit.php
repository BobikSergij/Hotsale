<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'error';
        exit;
    }

    if ($password !== $confirmPassword) {
        echo 'Паролі не співпадають.';
        exit;
    }

    $existingUsers = array(
        array('id' => 1, 'email' => 'test@example.com', 'name' => 'John Doe', 'password' => 'password123'),
        array('id' => 2, 'email' => 'another@example.com', 'name' => 'Jane Smith', 'password' => 'password456'),
        array('id' => 3, 'email' => 'bobiksergij232@gmail.com', 'name' => 'Serhii Bobuk', 'password' => '123')
    );

    foreach ($existingUsers as $user) {
        if ($user['email'] === $email) {
            echo 'Користувач з таким email вже існує!';
            exit;
        }
    }

    $newUser = array(
        'id' => count($existingUsers) + 1,
        'email' => $email,
        'name' => $firstName . ' ' . $lastName,
        'password' => $password
    );
    $existingUsers[] = $newUser;

    $logMessage = date('Y-m-d H:i:s') . ' - Реєстрація нового користувача: ' . $newUser['email'] . PHP_EOL;
    file_put_contents('log.txt', $logMessage, FILE_APPEND);

    echo 'success';
}
?>