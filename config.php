<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>TVThing Config</title>


    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/iconified/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/iconified/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/iconified/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/iconified/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/iconified/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/iconified/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/iconified/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/iconified/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/iconified/apple-touch-icon-152x152.png" />

    <script src="js/vendor/custom.modernizr.js"></script>

    <script>
        document.write('<script src=' +
            ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
            '.js><\/script>')
    </script>
	
	<script src="js/tvthing.js"></script>
</head>
<body>

<div class="row">
    <div class="large-12 columns">
        <h2>TVThing Config
            <small>version 1.0</small>
        </h2>
        <hr/>
    </div>
</div>

<div class="row">
    <div class="large-8 columns">
        <div style="width: 100%;" id="channels">
            <div class="lgr off" id="off"><a href="#" title="radio off"><img class="lg" src="img/channels/blank.gif" alt="Turn Off Radio"></a></div>
        </div>

    </div>

    <div class="large-4 columns">
        <h4>Indstillinger</h4>
		
        <div class="row collapse">
            <label>Bottom frame URL

                <input type="text" placeholder="" id="bottomurl">
			</label>
          

            	 <label>
				  	<input type="checkbox" id="updatefreq"> Opdater automatisk
            </div>
        

        <button id="save" class="small button">Gem</button>
        </div>
    </div>
</div>

<script src="js/foundation.min.js"></script>

<script>
    $(document).foundation();
</script>
</body>
</html>
