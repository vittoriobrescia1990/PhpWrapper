<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="/favicon.png" type="image/png">
	<title>Create</title>
	<meta name="description" content="PHPWrapper's Create page">
	<link rel="stylesheet" type="text/css" href="/pages/css/modern-normalize.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/global.css">
	<link rel="stylesheet" type="text/css" href="/pages/css/create.css">
	<script>
		function characterThemes() {
			document.getElementById("creation_type").style.display = "none";
			document.getElementById("character_themes").style.display = "block";
			document.getElementById("back").style.display = "block";
		}
		function movieThemes() {
			document.getElementById("creation_type").style.display = "none";
			document.getElementById("movie_themes").style.display = "block";
			document.getElementById("back").style.display = "block";
		}
		function creationType() {
			document.getElementById("creation_type").style.display = "block";
			document.getElementById("character_themes").style.display = "none";
			document.getElementById("movie_themes").style.display = "none";
			document.getElementById("back").style.display = "none";
		}
		function showCredits() {
			document.getElementById("credits").style.display="block";
			document.getElementById("credits_button").style.display="none";
		}
	</script>
</head>
<body>
<header>
	<a href="/">
		<h1 style="margin:0"><img id="logo" src="/pages/img/list_logo.svg" alt="PHPWrapper"/></h1>
	</a>
	<nav id="headbuttons">
		<a class="button_small" id="back" onclick="creationType()" style="display: none">Back</a>
	</nav>
</header>
<main>
	
<div id="creation_type" style="display: unset">
	<h1 id="what-would-you-like-to-create">What would you like to create?</h1>
	<div id="column1">
		<div class="theme pick_creation">
			<div onclick="characterThemes()">
				<img src="/pages/img/themelist/Character.png" alt="Create a character">
				<div>
					<p class="pick_creation_type">Character</p>
					<p class="pick_creation_description">Custom Characters can be a great way to help advance the story you're telling.</p>
				</div>
			</div>
		</div>
		<div class="theme pick_creation">
			<div onclick="movieThemes()">
				<img src="/pages/img/themelist/Movie.png" alt="Create a video">
				<div>
					<p class="pick_creation_type">Video</p>
					<p class="pick_creation_description">Go create a video, movie, short story, tutorial, or whatever. The choice is yours.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="character_themes" style="display: none">
	<h1 id="select-a-theme-for-your-character">Select a theme for your character</h1>
	<h2 id="standard-themes">Standard themes</h2>
	<div id="column1">
		<div class="theme">
			<a href="/characters/browse.php?theme=family">
				<img src="/pages/img/themelist/Comedy_World.jpg" alt="Comedy World">
				<p>Comedy World</p>
			</a>
		</div>
		<div class="theme">
			<a href="/characters/browse.php?theme=cc2">
				<img src="/pages/img/themelist/lil_Peepz.jpg" alt="Lil' Peepz">
				<p>Lil' Peepz</p>
			</a>
		</div>
	</div><br />
</div>
<div id="movie_themes" style="display: none">
	<h1 id="select-a-theme-for-your-video">Select a theme for your video</h1>
	
	<h2 id="standard-themes">Standard themes</h2>
	<div id="column1">
		<div class="theme">
			<a href="/videos/create.php?tray=custom">
				<img src="/pages/img/themelist/Comedy_World.jpg" alt="Comedy World">
				<p>Comedy World</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=action">
				<img src="/pages/img/themelist/lil_Peepz.jpg" alt="Lil' Peepz">
				<p>Lil' Peepz</p>
			</a>
		</div>
		<div class="theme">
			<a href="/videos/create.php?tray=retro">
				<img src="/pages/img/themelist/Cartoon_Classics.jpg" alt="Cartoon Classics">
				<p>Cartoon Classics</p>
			</a>
		</div>
	</div><br />
</div>

</main>

<footer>
	<nav id="foot-left">
		<a>v1.2.3½</a>
		<a href="/videomaker/full/tutorial?">Studio Tutorial</a>
	</nav>
        
	<nav id="foot-middle">
		<a href="https://josephcrosmanplays532.github.io/faq.html">FAQ</a>
		<a href="https://discord.gg/b7YSRkg">Wrapper Hub</a>
	</nav>
	
	<nav id="foot-right">
		<a href="https://josephcrosmanplays532.github.io">Server Page</a>
		<a href="https://josephcrosmanplays532.github.io/caillou.html">Caillou</a>
	</nav>
	<p>PHPWrapper © <?php echo date("Y");?></p>
</footer>


<div id="studio_container" style="display: none;">
    <div id="studio_holder"><!-- Full Screen Studio -->
        <div style="top: 50%; position: relative;">
            You can't use Vyond because flash might be disabled <a href="http://web.archive.org/web/20191130121307/https://get.adobe.com/flashplayer/">Enable Flash</a>.
        </div>
    </div>
</div>



</body>
</html>
