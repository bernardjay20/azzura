<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/0b41ca1493.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <title>Log-In</title>
</head>
<body>
    <div class="loginContainer">
        <div class="loginLogo">
            <img src="../image/azzuralogo.png" alt="">
        </div>
        <hr class="divider">
        <div class="username">
            <label for="username" class="username" name="username">Username</label>
            <input type="text" name="username" class="login">
        </div>
        <div class="password">
            <label for="password" class="password" name="password">Password</label>
            <input type="password" name="password" class="login">
        </div>
        <div class="loginButton">
            <input type="submit" value="Login" name="submit" class="loginbutton">
        </div>
    </div>
</body>
</html>

<script>
    const togglePasswordEye = '<i class="fa fa-eye toggle-password-eye"></i>';
const togglePasswordEyeSlash = '<i class="fa fa-eye-slash toggle-password-eye"></i>';

$(togglePasswordEyeSlash).insertAfter('input[type=password]');
$('input[type=password]').addClass('hidden-pass-input')

$('body').on('click', '.toggle-password-eye', function (e) {
    let password = $(this).prev('.hidden-pass-input');

    if (password.attr('type') === 'password') {
        password.attr('type', 'text');
        $(this).addClass('fa-eye').removeClass('fa-eye-slash');
    } else {
        password.attr('type', 'password');
        $(this).addClass('fa-eye-slash').removeClass('fa-eye');
    }
})
</script>