<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TV</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="shortcut icon" href="img/iconified/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/iconified/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/iconified/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/iconified/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/iconified/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/iconified/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/iconified/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/iconified/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/iconified/apple-touch-icon-152x152.png" />
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
