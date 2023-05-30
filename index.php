
<!DOCTYPE html>
<html>
<head>
    <title>Форма</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
    <div id="successMessage" class="mt-3 alert alert-success" style="display: none;">
        <p>Реєстрація пройшла успішно!</p>
    </div>
    <div id="errorMessage" class="mt-3 alert alert-danger" style="display: none;">
        <p></p>
    </div>
    <div id="registrationForm">
        <h1 class="text-center">Форма</h1>
        <form id="myForm">
            <div class="mb-3 form-group">
                <label for="firstName" class="form-label">Ім'я:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="mb-3 form-group">
                <label for="lastName" class="form-label">Прізвище:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3 form-group">
                <label for="password" class="form-label">Пароль:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <small id="passwordHelpBlock" class="form-text text-muted">Password must be 6 or more characters.</small>
            </div>
            <div class="mb-3 form-group">
                <label for="confirmPassword" class="form-label">Повторіть пароль:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                <small id="passwordHelpBlock" class="form-text text-muted">Password must be 6 or more characters.</small>
            </div>
            <button type="submit" class="btn btn-primary">Відправити</button>
        </form>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
