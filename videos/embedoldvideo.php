<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<title>Video Player | PHPWrapper</title>
<meta name="title" content="test"/>
<meta name="description" content="testing this old embed ga4s player"/>

<meta name="robots" content="noindex, nofollow"/>
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI"/>

<style>
html, body, #player-container {margin:0;padding:0;width:100%;height:100%;overflow:hidden;}
</style>

<script src="https://phpwrapper.herokuapp.com/static/go/js/swfobject.js"></script>
</head>
<body>
<div id="player-container">
	You must have reloaded this page way too fast that it broke randomly. you can wait for a few seconds and then you can reload this page. or you can just exit this tab and then reopen it.
	<noscript>
	<object width="100%" height="100%"><param name="movie" value="https://josephcrosmanplays532.github.io/animation/877/player.swf?movieId=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>&autostart=0"></param><param name="bgcolor" value="#000000"><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://josephcrosmanplays532.github.io/animation/877/player.swf?movieId=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>&autostart=0" " type="application/x-shockwave-flash" width="100%" height="100%" bgcolor="#ffffff" allowscriptaccess="always" allowfullscreen="true"></embed></object>
	</noscript>
</div>
<script>
var so = new SWFObject("https://josephcrosmanplays532.github.io/animation/877/player.swf?movieId=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>&autostart=0", "Player", "100%", "100%", "10.0.12", "#464646");
so.useExpressInstall('/static/libs/expressInstall.swf');
so.addParam("AllowScriptAccess", "always");
so.addParam("wmode", "transparent");
so.addParam("scale", "exactfit");
so.addParam("allowFullScreen","true");

so.addVariable("movieOwner", "<?php if (isset($_GET["owner"])) { echo $_GET["owner"]; } else { echo "Andrise DHaiti"; } ?>");
so.addVariable("movieOwnerId", "<?php if (isset($_GET["ownerid"])) { echo $_GET["ownerid"]; } else { echo "0MjL40chqqm0"; } ?>");
so.addVariable("movieId", "<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>");
so.addVariable("movieLid", "<?php if (isset($_GET["lid"])) { echo $_GET["lid"]; } else { echo "11"; } ?>");
so.addVariable("movieTitle", "<?php if (isset($_GET["videotitle"])) { echo $_GET["videotitle"]; } else { echo "the+wonderfull+planet+of+neptune"; } ?>");
so.addVariable("movieDesc", "<?php if (isset($_GET["videodescription"])) { echo $_GET["videodescription"]; } else { echo "Facts+about+Neptune"; } ?>");
so.addVariable("userId", "<?php if (isset($_GET["userId"])) { echo $_GET["userId"]; } ?>");
so.addVariable("username", "<?php if (isset($_GET["username"])) { echo $_GET["username"]; } ?>");
so.addVariable("uemail", "<?php if (isset($_GET["emailaddress"])) { echo $_GET["emailaddress"]; } ?>");
so.addVariable("ut", "<?php if (isset($_GET["ut"])) { echo $_GET["ut"]; } else { echo "-1"; } ?>");
so.addVariable("numContact", "<?php if (isset($_GET["numContact"])) { echo $_GET["numContact"]; } ?>");
so.addVariable("apiserver", "<?php if (isset($_GET["goapi"])) { echo $_GET["goapi"]; } else { echo "/"; } ?>");
so.addVariable("duration", "<?php if (isset($_GET["duration"])) { echo $_GET["duration"]; } else { echo "154"; } ?>");
so.addVariable("playcount", "<?php if (isset($_GET["count"])) { echo $_GET["count"]; } else { echo "0"; } ?>");
so.addVariable("thumbnailURL", "<?php if (isset($_GET["videothumburl"])) { echo $_GET["videothumburl"]; } else { echo "https://josephcrosmanplays532.github.io/s3base/files/thumbnails/movie/1662/379662/567892L.jpg"; } ?>");
so.addVariable("copyable", "<?php if (isset($_GET["copy"])) { echo $_GET["copy"]; } else { echo "0"; } ?>");
so.addVariable("isPublished", "<?php if (isset($_GET["published"])) { echo $_GET["published"]; } else { echo "0"; } ?>");
so.addVariable("ctc", "<?php if (isset($_GET["ctc"])) { echo $_GET["ctc"]; } else { echo "go"; } ?>");
so.addVariable("tlang", "<?php if (isset($_GET["tlang"])) { echo $_GET["tlang"]; } else { echo "en_US"; } ?>");
so.addVariable("is_private_shared", "<?php if (isset($_GET["privateshared"])) { echo $_GET["privateshared"]; } else { echo "1"; } ?>");
so.addVariable("autostart", "<?php if (isset($_GET["autostart"])) { echo $_GET["autostart"]; } else { echo "0"; } ?>");
so.addVariable("appCode", "<?php if (isset($_GET["code"])) { echo $_GET["code"]; } else { echo "go"; } ?>");
so.addVariable("is_slideshow", "<?php if (isset($_GET["slideshow"])) { echo $_GET["slideshow"]; } else { echo "0"; } ?>");
so.addVariable("originalId", "<?php if (isset($_GET["id"])) { echo $_GET["id"]; } else { echo "0zEt_fo4L-5k"; } ?>");
so.addVariable("is_emessage", "<?php if (isset($_GET["emessage"])) { echo $_GET["emessage"]; } else { echo "0"; } ?>");
so.addVariable("storePath", "https://josephcrosmanplays532.github.io/store/50/<store>");
so.addVariable("clientThemePath", "https://josephcrosmanplays532.github.io/static/477/<client_theme>");
so.addVariable("animationPath", "https://josephcrosmanplays532.github.io/animation/462/");
so.addVariable("isEmbed", "<?php if (isset($_GET["isEmbed"])) { echo $_GET["isEmbed"]; } else { echo "1"; } ?>");
so.addVariable("refuser", "<?php if (isset($_GET["refuser"])) { echo $_GET["refuser"]; } ?>");
so.addVariable("utm_source", "<?php if (isset($_GET["utm_source"])) { echo $_GET["utm_source"]; } ?>");
so.addVariable("uid", "<?php if (isset($_GET["uid"])) { echo $_GET["uid"]; } ?>");
so.addVariable("isTemplate", "<?php if (isset($_GET["template"])) { echo $_GET["template"]; } else { echo "0"; } ?>");
so.addVariable("showButtons", "<?php if (isset($_GET["buttons"])) { echo $_GET["buttons"]; } else { echo "1"; } ?>");
so.addVariable("chain_mids", "<?php if (isset($_GET["chain_mids"])) { echo $_GET["chain_mids"]; } ?>");
so.addVariable("averageRating", "<?php if (isset($_GET["terriblerating"])) { echo $_GET["terriblerating"]; } else { echo "0"; } ?>");
so.addVariable("ratingCount", "<?php if (isset($_GET["awsomerating"])) { echo $_GET["awsomerating"]; } else { echo "0"; } ?>");
so.addVariable("fb_app_url", "<?php if (isset($_GET["appurl"])) { echo $_GET["appurl"]; } else { echo "/"; } ?>");
so.addVariable("ad", "<?php if (isset($_GET["ad"])) { echo $_GET["ad"]; } else { echo "0"; } ?>");
so.addVariable("endStyle", "<?php if (isset($_GET["endStyle"])) { echo $_GET["endStyle"]; } else { echo "0"; } ?>");
so.addVariable("isWide", "<?php if (isset($_GET["videowidth"])) { echo $_GET["videowidth"]; } else { echo "0"; } ?>");
so.addVariable("pwm", "<?php if (isset($_GET["pwm"])) { echo $_GET["pwm"]; } else { echo "1"; } ?>");
so.addVariable("s3base", "<?php if (isset($_GET["s3base"])) { echo $_GET["s3base"]; } else { echo "https://josephcrosmanplays532.github.io/s3base"; } ?>");

so.write("player-container");
</script>
</body>
</html>
