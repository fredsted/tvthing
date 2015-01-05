<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Top</title>
    <script src="js/vendor/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <script>
        settings = "";

        function checksettings_top() {
            $.ajax({
                cache: false,
                url: "settings.json",
                dataType: "json",
                success: function(data) {
                    if (settings !== data.channel) {
                        $(".radioframe").attr("src", data.m3uurl);
                        $(".radioname").text("Now Playing: "+data.m3utitle);
                        $(".radioimg").attr("src", data.m3uimg);
                        settings = data.channel;
                    }
                }
            });
            setTimeout(checksettings_top, 5 * 1000);
        }
        $(function(){
            checksettings_top();
        });
    </script>
</head>
<body>
    <!--<img src="img/channels/drp3.gif" class="fl radioimg" />-->
    <span class="fl radioname">&nbsp; loading...</span> <a id="configlink" href="config.php" target="_top">config</a>
    <iframe class="radioframe" src="about:blank" style="width: 1px; height: 1px;"></iframe>
</body>
</html>