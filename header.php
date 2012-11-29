<?php

// get language preference
if (isset($_GET["lang"])) {
    $language = substr($_GET["lang"], 0, 2);
}
else {
	$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

$spanish = $language == "es";

if (!$spanish) {
	$language = "en";
}

?>

<head>
	<script type="text/javascript" src="uploadify/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" >
		function redirectWithLang() {
			if (window.location.href.indexOf("lang=") == -1) {
				var separator = "?";
				if (window.location.href.indexOf(separator) != -1) {
					separator = "&";
				}
				window.location.replace(window.location.href + separator + "lang=" + $("#language").val());
			}
			else {
				var langIndex = window.location.href.indexOf("lang=");
				var langTop = langIndex + ("lang=").length;
				var preUrl = "";
				if (langTop < window.location.href.length) {
					preUrl = window.location.href.substring(0, langTop);
				}
				var postUrl = "";
				if (langTop + 2 < window.location.href.length) {
					postUrl = window.location.href.substring(langTop + 2, window.location.href.length);
				}
				window.location.replace(preUrl + $("#language").val() + postUrl);
			}
		}
	</script>
</head>


<div style="margin-left:11px; margin-top:11px; width:307px" class="list">
	<p style="text-align: justify">
		<?php
			if ($spanish) {
				echo "&nbsp;&nbsp;&nbsp;Idioma&nbsp;&nbsp;&nbsp;";
			} else {
				echo "&nbsp;&nbsp;&nbsp;Language&nbsp;&nbsp;&nbsp;";
			}
		?>
		<select id="language" name="language" onchange="redirectWithLang()">
			<option value="en">English</option>
			<option value="es">Español</option>
		</select>
	</p>
</div>

<object
	classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
	width="766" height="330">
	<param name="movie" value="flash/header13_v8.swf">
	<param name=FlashVars value="button=<?echo($boton)?>&lang=<?echo($language)?>">
	<param name="quality" value="high">
	<param name="menu" value="false">
	<!--[if !IE]> <-->
		<object data="flash/header13_v8.swf" width="766" height="330" type="application/x-shockwave-flash">
			<param name="quality" value="high">
			<param name=FlashVars value="button=<?echo($boton)?>&lang=<?echo($language)?>">
			<param name="menu" value="false">
			<param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer">
			FAIL (the browser should render some flash content, not this). 
		</object>
	<!--> <![endif]-->
</object>
<script type="text/javascript" >
	$('option[value=<?php echo $language?>]').attr('selected', 'selected');
</script>