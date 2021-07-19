<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="/favicon.png" type="image/png">
	<title>Video Browser</title>
	<meta name="description" content="PHPWrapper's Video Browser">
	<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/list.css">
</head>
<body>

<header>
	<a href="/">
		<h1 style="margin:0"><img id="logo" src="/pages/img/list_logo.svg" alt="PHPWrapper"></h1>
	</a>
	<nav id="headbuttons">
		<a class="button_small" id="back" onclick="creationType()" style="display: none">Back</a>
		<a class="button_small" id="ccbrowser" href="/characters/browse.php">Create a Character</a>
		<a class="button_big" id="videomaker" href="/create.php">Create</a>
	</nav>
</header>
<div class="warning">Good news! i am 8 hours closer to having PHPWrapper Complete! the sharing and the embeding functions are working perfectly and the window of watching the demo is also working perfectly! for updates, <a href="https://discord.io/goanimate4schools">Join My Discord Server.</a>
<br><a href="https://github.com/josephcrosmanplays532/PHPWrapper">Link
	to the source code on GitHub</a></br></div>
<main>

<h1 id="video-browser">Video Browser</h1>

<div>
	<?php
		////
		//// This PHP loads all the videos
		////
		
		// Get latest video ID
		include_once("../goapi/function/videoId.php");

		// If the user has created no videos,
		if ($id == 0) {
			echo "
				<div id=\"no-videos\">
					<p>You have not created any videos.</p>
					<a href=\"./create.php\" class=\"button_big\">Create one now!</a>
				</div>
			";
		} else {
			// Loop video div with decreasing ID until it reaches the first ID
			for ($videoId = $id; $videoId >= 1; $videoId-=1) {
				echo "
					<div class=\"theme pick_creation\">
						<div>
							<img src=\"/_user-files/videos/video-thumb-{$videoId}.png\" alt=\Video thumbnail #{$videoId}\" style=\"height:90px\" />
							<p><a href=\"./create.php?video={$videoId}\">Edit</a><br />
								<a href=\"./player.php?video={$videoId}\">Play</a><p>
						</div>
						<p class=\"pick_creation_type\">Video #{$videoId}</p>
						<p class=\"pick_creation_description\">Description placeholder.</p>
					</div>
				";
			}
		}
	?>
</div>

</main>

<footer>
	<nav id="foot-left">
		<a>v1.2.3½</a>
		<a href="https://josephcrosmanplays532.github.io/faq.html">FAQ</a>
		<a href="https://discord.gg/yhGAetN">Wrapper Hub</a>
	</nav>
	<nav id="foot-right">
		<a href="https://josephcrosmanplays532.github.io">Server Page</a>
		<a href="https://josephcrosmanplays532.github.io/caillou.html">Caillou</a>
	</nav>
	<p>PHPWrapper © <?php echo date("Y");?></p>
</footer>


</body></html>
