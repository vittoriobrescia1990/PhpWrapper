<!-- DOCTYPE html breaks it for some reason -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="/favicon.png" type="image/png">
	<title>Video Player</title>
</head>
	
<body>

<main>

<object data="https://phpwrapper.herokuapp.com/goapi/asset/animation/player.swf" type="application/x-shockwave-flash" id="video_player" width="100%" height="100%">
	<!-- The flashvars are a huge mess, have fun looking at them. :) -->
	<param name="flashvars" value="apiserver=/&storePath=https://phpwrapper.herokuapp.com/goapi/asset/themes/<store>&clientThemePath=https://phpwrapper.herokuapp.com/goapi/asset/static/<client_theme>&movieId=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>&bs=<?php if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "adam"; } ?>&ut=60&presaveId=<?php include_once("../goapi/function/characterId.php"); if (isset($_GET["characterId"])) { echo $_GET["characterId"]; } else { echo $id + 1; } ?>&appCode=go&page=&siteId=go&m_mode=school&isLogin=Y&isEmbed=1&ctc=go&tlang=en_US&nextUrl=%2F/characters/browse.php">
	<param name="allowScriptAccess" value="always">
</object>

</main>

</body></html>
