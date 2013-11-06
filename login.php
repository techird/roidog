<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>Login - Roidog</title>
    <link rel="stylesheet" href="css/login.css">
    <script>
    $(function() {
        $('label.remember').click(function() {
            if($('input[name=remember]').prop('checked')) {
                $('div.alert').slideDown("fast");
            } else {
                $('div.alert').slideUp("fast");
            }
        });
    });
    </script>
</head>
<body>	
    <h1>Roidog</h1>
    <form class="login">
        <div class="field">
            <label for="username" class="user"></label><input type="text" placeholder="Username / Email" />
        </div>
        <div class="field">
            <label for="password" class="pass"></label><input type="password" placeholder="Password" />
        </div>
        <div class="field remember">
            <label class="remember"><input name="remember" type="checkbox">Remember me next time</label><br>
            <a href="resetpassword.php" class="forgot-link">Lost Password</a>
        </div>
        <div class="alert">
            Remember password in public computers is unsafe.
        </div>
        <button class="login-button">Login</button>
    </form>
</body>
</html>