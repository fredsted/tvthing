<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TV</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<script src="js/vendor/jquery.js"></script>
<script>
	var first = true;
	var oldUrl = '';
    function checksettings() {
        $.getJSON("settings.json", function(data) {
			if (data.updatefreq == "true" || first == true || oldUrl != data.bottomurl) {
            	$("#frame-bottom").attr("src", data.bottomurl);
			}
			first = false;
			oldUrl = data.bottomurl;
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
