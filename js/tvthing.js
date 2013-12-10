$(function () {
	// Load settings
    (function () {
        $.getJSON("settings.json", function (data) {
            $("#bottomurl").val(data.bottomurl);
			if (data.updatefreq == "true")
				$("#updatefreq").attr("checked", "checked");

            if (data.channel == 0) {
                $(".m3u").addClass("active");
            } else {
                $(".active").removeClass("active");
                $(".lgr#" + data.channel).addClass("active");
            }
        });
    })();

    var save_settings = function (settings) {
        $.ajax({
            url: "tvthing.php?action=settings",
            type: "POST",
            data: settings,
            complete: function (data) {
                console.log("AJAX: " + data.responseText)
            }
        });
    }

	// Save settings
    $("#save").click(function () {
        event.preventDefault();
        save_settings({
            "bottomurl": $("#bottomurl").val(),
			"updatefreq": $("#updatefreq").prop('checked').toString(),
        });
    });
	
	// Change channel
    $(".lgr").click(function () {
        event.preventDefault();
        $(".active").removeClass("active");
        $(this).addClass("active");
        save_settings({
            "channel": $(this).attr("id"),
            "m3uurl": radios[$(this).attr("id")],
            "m3utitle": $(this).children("a").attr("title"),
            "m3uimg": $(this).children().find("img").attr("src")
        });
    });
});