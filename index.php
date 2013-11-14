<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TV</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<script src="js/vendor/jquery.js"></script>
<script>
    function checksettings() {
        $.getJSON("settings.json", function(data) {
            $("#frame-bottom").attr("src", data.bottomurl);
        });
        setTimeout(checksettings, 30 * 1000);
    }
    $(function(){
        checksettings();
    });
</script>
<body>
    <div class="top">
        <iframe src="top.php" id="frame-top" name="top"></iframe>
    </div>
    <div class="bottom">
        <iframe src="about:blank" id="frame-bottom" name="bottom"></iframe>
    </div>
</body>
</html>
