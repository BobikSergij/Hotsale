$(document).ready(function() {
    $('#myForm').submit(function(e) {
        e.preventDefault();

        if (!validateForm()) {
            return;
        }

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: formData,
            success: function(response) {
                if (response === 'success') {
                    $('#registrationForm').hide();
                    $('#successMessage').show();
                } else {
                    $('#errorMessage p').text('Сталася помилка реєстрації! Такий email вже існує.');
                    $('#errorMessage').show();
                    setTimeout(function() {
                        $('#errorMessage').hide();
                    }, 5000);
                }
                $('#myForm')[0].reset();
            }
        });
    });
});

function validateForm() {
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();

    if (!validateEmail(email)) {
        $('#errorMessage').text('Будь ласка, введіть дійсну електронну адресу.');
        $('#errorMessage').show();
        return false;
    }

    if (password !== confirmPassword) {
        $('#errorMessage p').text('Паролі не співпадають.');
        $('#errorMessage').show();
        setTimeout(function() {
            $('#errorMessage').hide();
        }, 5000);
        return false;
    }

    if (password.length < 6) {
        $('#errorMessage p').text('Пароль повинен містити не менше 6 символів.');
        $('#errorMessage').show();
        setTimeout(function() {
            $('#errorMessage').hide();
        }, 5000);
        return false;
    }

    return true;
}

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
