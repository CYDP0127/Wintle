<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Wintle</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<script language="javascript" type="text/javascript">
    function resizeIframe(obj) {
        obj.style.height = 0;
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    }
</script>


<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<iframe src="topmenu.html" width="100%" frameBorder="0"  scrolling="no" onload="resizeIframe(this)">
</iframe>

<div>
    <iframe src="intro/signup.php" width="100%" frameBorder="0" scrolling="no" onload="resizeIframe(this)"></iframe>
</div>

<div>
    <iframe src="intro/introduction.html" width="100%" frameBorder="0" scrolling="no" onload="resizeIframe(this)"></iframe>
</div>


<div id="popup1" class="overlay">
    <div class="popup">
        <h2>Sign up for Wintle</h2>
        <a class="close" href="#">×</a>
        <div class="content">
            <div class="SignUp">
                <span><img src="img/username.png"></span><input type="text" name="username" required placeholder="User name" autocomplete="off">

                <span><img src="img/email.png"></span><input type="text" name="email_address" required placeholder="Your email address" autocomplete="off">

                <span><img src="img/password.png"></span><input type="password" name="password" required placeholder="Enter a password" autocomplete="off">

                <span><img src="img/password.png"></span><input type="password" name="repassword" required placeholder="Re-enter a password" autocomplete="off">

                <p class="SignUpText">Use at least one letter<br> one numeral, and seven characters.</p>
                <input type="button" value="Sign Up for Wintle">
            </div>
        </div>
    </div>
</div>
</body>
</html>