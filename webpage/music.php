<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="./webpage/viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>


		<div id="listarea">
			<ul id="musiclist">
                <?php foreach(glob("./webpage./songs/*.mp3") as $music){?>
				<li class="mp3item">
					<a href="<?= $music?>"> <?= basename($music)?> </a>
				</li>
                <?php }?>
<!---->
<!--				<li class="mp3item">-->
<!--					<a href="./webpage/songs/Drift Away.mp3">Drift Away.mp3</a>-->
<!--					(5724612 b)-->
<!--				</li>-->
<!---->
<!--				<li class="mp3item">-->
<!--					<a href="./webpage/songs/Hello.mp3">Hello.mp3</a>-->
<!---->
<!--					(1871110 b)-->
<!--				</li>-->
<!---->
<!--				<li class="mp3item">-->
<!--					<a href="./webpage/songs/Panda Sneeze.mp3">Panda Sneeze.mp3</a>-->
<!--					(58 b)-->
<!--				</li>-->
                <?php foreach (glob("./webpage/songs/*.txt") as $text) {?>
				<li class="playlistitem">
					<a href="<?=$text?>"><?=basename($text)?></a>
				</li>
                <?php }?>

<!--				<li class="playlistitem">-->
<!--					<a href="music.php?playlist=playlist.txt">playlist.txt</a>-->
<!--				</li>-->
			</ul>
		</div>
	</body>
</html>
