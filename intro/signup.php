<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/intro_signup.css">
</head>
<body>
<form action="signupinfo.php" method="post">
    <div class="IntroWrapper">
        <div class="IntroText">
            <p class="IntoTextStyle">모두가 "Win-Win" 할 수 있는세상<br> 세상의 "틀"을 넘어서는 플랫폼</p>
        </div>
        <div class="IntroSignUp">

            <div class="SignUp">
                <span><img src="../img/username.png"></span><input type="text" name="username" required placeholder="User name" autocomplete="off">

                <span><img src="../img/email.png"></span><input type="text" name="email_address" required placeholder="Your email address" autocomplete="off">

                <span><img src="../img/password.png"></span><input type="password" name="password" required placeholder="Create a password" autocomplete="off">
                <p class="SignUpText">Use at least one letter<br> one numeral, and seven characters.</p>
                <input type="submit" value="Sign Up for Wintle" title="Sign Up for Wintle">
            </div>
        </div>
    </div>
</form>
</body>
</html>