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
        <h2>Here i am</h2>
        <a class="close" href="#">×</a>
        <div class="content">
            Thanks for pop me out of that button, but now i'm done so you can close this window.
        </div>
    </div>
</div>
</body>
</html>