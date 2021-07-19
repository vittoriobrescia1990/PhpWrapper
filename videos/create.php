<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<title>Video Studio | PHPWrapper</title>
<link href="/pages/css/modern-normalize.css" rel="stylesheet" type="text/css">
<link href="/pages/css/global.css" rel="stylesheet" type="text/css">
<link href="/pages/css/swf.css" rel="stylesheet" type="text/css">
<meta name="title" content="Video Studio"/>
<meta name="description" content="The Video Maker lets You make a video for YouTube for free! Drag &amp; drop or type &amp; go.  It's Fast, Fun, Easy and Free -  PHPWrapper!"/>

<meta name="robots" content="noindex, nofollow"/>
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI"/>

<style>
html, body, #studio-container {margin:0;padding:0;width:100%;height:100%;overflow:hidden;}
</style>

<script src="https://phpwrapper.herokuapp.com/static/go/js/swfobject.js"></script>
</head>
<body>
<iframe style="display:none" name="dummy"></iframe>

<script>
	////
	//// This JS contains important Video Studio stuff
	////
	
	///
	/// Variables
	///
	var previewPlayerTempData = "";
	const fu = document.getElementById('fileupload'),
		sub = document.getElementById('submit');

	///
	/// Previewer
	///
	function initPreviewPlayer(dataXmlStr, startFrame, containsChapter, themeList) {
		// New variable to be used by loadPreviewer()
		movieDataXmlStr = dataXmlStr;
		// Movie XML
		filmXmlStr = dataXmlStr.split("<filmxml>")[1].split("</filmxml>")[0];
		// Show preview popup
		document.getElementById("preview_popup_container").style.display = "block";
		// Load the Video Previewer
		loadPreviewer();
	}
	function loadPreviewer() {
		// I think this is in case of an error??
		if (movieDataXmlStr === null) {
			return;
		}
		// I don't know
		savePreviewData(movieDataXmlStr);
	}
	function savePreviewData(a) {
		// Set temp data variable
		previewPlayerTempData = a
	}
	function retrievePreviewPlayerData() {
		// Store in separate variable
		var recentPreviewPlayerTempData = previewPlayerTempData;
		// Clear original variable
		previewPlayerTempData = "";
		// Return recent temp data
		return recentPreviewPlayerTempData;
	}

	///
	/// Importing
	///
	// Show upload window
	function showImporter() {
		document.getElementById("import_popup_container").style.display = "block";
	};

	///
	/// Other stuff
	///
	// Redirect to Video Browser on Video Studio exit
	function exitStudio() {
		window.location = "/videos/browse.php";
	}
	// Hide interactive tutorial
	interactiveTutorial = {
		neverDisplay: function() {
			return true
		}
	};
	// Hide Video Previewer popup
	function hidePreviewer() {
		document.getElementById("preview_popup_container").style.display = "none";
	}
	// Save your video with the preview window
        function saveVideo() {
		document.getElementById("preview_popup_container").style.display = "none";
		document.getElementById("Studio").onExternalPreviewPlayerPublish();
	}
	// Hide Asset Importer popup
	function hideImporter() {
		document.getElementById("import_popup_container").style.display = "none";
	}
</script>
<!-- Video Studio -->
<div id="studio-container">
	<object data="https://phpwrapper.herokuapp.com/goapi/asset/animation/go_full.swf" type="application/x-shockwave-flash" id="Studio" width="100%" height="100%">
	<!-- The flashvars are a huge mess, have fun looking at them. :) -->
	<param name="flashvars" value="apiserver=/&movieId=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } ?>&storePath=https://phpwrapper.herokuapp.com/goapi/asset/themes/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=https://phpwrapper.herokuapp.com/goapi/asset/static/<client_theme>&themeId=custom&tlang=en_US&presaveId=<?php include_once("../goapi/function/videoId.php"); if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo $id + 1; } ?><?php if (isset($_GET["video"])) { echo "&movieId={$_GET["video"]}"; } ?>&goteam_draft_only=1&isWide=1&collab=0&nextUrl=./browse.php&tray=custom">
	<param name="allowScriptAccess" value="always">
	<param name="allowFullScreen" value="true">
        </object>
</div>
<div id="import_popup_container" style="display:none">
	<div id="import_popup">
		<h2 id="import-an-asset">Import an Asset</h2>
		<p class="close-button" onclick="hideImporter()">X</p>
		<!-- Import form -->
		<div id="import_image">
			<form id="uploadbanner" enctype="multipart/form-data" method="post" action="/goapi/uploadAsset" target="dummy">
				<input id="fileupload" name="import" type="file" accept=".mp3,.wav,.png,.jpg">
				<h3 id="import-as">Import As:</h3>
				<input type="radio" value="prop" name="subtype"> Prop</input>
				<br />
				<input type="radio" value="background" name="subtype"> Background</input>
				<br />
				<input type="submit" value="Import" onclick='document.getElementById("Studio").importerUploadComplete("importerUploadComplete"); document.getElementById("import_popup_container").style.display = "none";' id="submit" class="button_import" />
			</form>
		</div>
	</div>
</div>
<div id="preview_popup_container" style="display:none">
	<div id="preview_popup">
		<h2 id="preview-video">Preview Video</h2>
		<p class="close-button" onclick="hidePreviewer()">X</p>
		<object data="https://phpwrapper.herokuapp.com/goapi/asset/animation/player.swf" type="application/x-shockwave-flash" id="preview_player">
			<!-- The flashvars are a huge mess, have fun looking at them. :) -->
			<param name="flashvars" value="apiserver=/&storePath=https://phpwrapper.herokuapp.com/goapi/asset/themes/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=https://phpwrapper.herokuapp.com/goapi/asset/static/<client_theme>&themeId=custom&tlang=en_US&isInitFromExternal=1&goteam_draft_only=1&isWide=1&collab=0&startFrame=previewStartFrame&autostart=1&nextUrl=../pages/html/list.html&tray=custom">
			<param name="allowScriptAccess" value="always">
			<param name="allowFullScreen" value="true">
		</object>
                <a class="button_big" href="#" onclick="hidePreviewer()">Back to editing</a>
		<a class="button_big" href="#" onclick="saveVideo()">Save now</a>
	</div>
</div>
<script>
var so = new SWFObject("/goapi/asset/animation/go_full.swf", "Studio", "100%", "100%", "10.0.12");
so.useExpressInstall('/static/libs/expressInstall.swf');
so.addParam("AllowScriptAccess", "always");
so.addParam("wmode", "transparent");
so.addParam("scale", "exactfit");
so.addParam("allowFullScreen","true");

so.addVariable("apiserver", "/");
so.addVariable("storePath", "https://phpwrapper.herokuapp.com/goapi/asset/themes/<store>");
so.addVariable("isEmbed", "<?php if (isset($_GET["isEmbed"])) { echo $_GET["isEmbed"]; } else { echo "1"; } ?>");
so.addVariable("ctc", "go");
so.addVariable("ut", "<?php if (isset($_GET["ut"])) { echo $_GET["ut"]; } else { echo "60"; } ?>");
so.addVariable("bs", "<?php if (isset($_GET["bs"])) { echo $_GET["bs"]; } else { echo "default"; } ?>");
so.addVariable("appCode", "go");
so.addVariable("page", "<?php if (isset($_GET["page"])) { echo $_GET["page"]; } ?>");
so.addVariable("siteId", "<?php if (isset($_GET["id"])) { echo $_GET["id"]; } else { echo "go"; } ?>");
so.addVariable("lid", "<?php if (isset($_GET["lid"])) { echo $_GET["lid"]; } else { echo "13"; } ?>");
so.addVariable("isLogin", "Y");
so.addVariable("retut", "<?php if (isset($_GET["retut"])) { echo $_GET["retut"]; } else { echo "1"; } ?>");
so.addVariable("clientThemePath", "https://phpwrapper.herokuapp.com/goapi/asset/static/<client_theme>");
so.addVariable("themeId", "<?php if (isset($_GET["theme"])) { echo $_GET["theme"]; } else { echo "custom"; } ?>");
so.addVariable("presaveId", "<?php include_once("../goapi/function/videoId.php"); if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo $id + 1; } ?><?php if (isset($_GET["video"])) { echo "&movieId={$_GET["video"]}"; } ?>");
so.addVariable("movieId", "<?php if (isset($_GET["video"])) { echo $_GET["video"]; } ?>");
so.addVariable("goteam_draft_only", "<?php if (isset($_GET["draftonly"])) { echo $_GET["draftonly"]; } else { echo "1"; } ?>");
so.addVariable("isWide", "<?php if (isset($_GET["studiowidth"])) { echo $_GET["studiowidth"]; } else { echo "1"; } ?>");
so.addVariable("collab", "0");
so.addVariable("nextUrl", "<?php if (isset($_GET["nextlink"])) { echo $_GET["nextlink"]; } else { echo "./browse.php"; } ?>");
so.addVariable("tray", "<?php if (isset($_GET["tray"])) { echo $_GET["tray"]; } else { echo "custom"; } ?>");




so.write("studio-container");
</script>
</body>
</html>
