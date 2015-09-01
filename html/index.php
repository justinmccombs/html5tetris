<html>
<head>
	<title>TwitchTetris</title>
	<link href="http://fonts.googleapis.com/css?family=VT323" rel="stylesheet" type="text/css" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link href="css/styles.css" rel="stylesheet" type="text/css" />

	<script>
		window.gameGlobals = {
			level: <?= (empty($_GET['level'])) ? 1 : $_GET['level']; ?>
		}
	</script>

	<script src="js/soundmanager/script/soundmanager2-jsmin.js"></script>
	<script src="game/Sounds.js"></script>
	<script src="js/cookie.js"></script>
	<script src="game/gameControls.js"></script>
	<script src="game/jawsjs.js"></script>
	<script src="game/Block.js"></script>
	<script src="game/Shapes.js"></script>
	<script src="game/WallKicks.js"></script>
	<script src="game/ControlGroup.js"></script>
	<script src="game/Background.js"></script>
	<script src="game/RandomBag.js"></script>
	<script src="game/PreviewGroup.js"></script>
	<script src="game/ScoreTracker.js"></script>
	<script src="game/TtyBlock.js"></script>
	<script src="game/Game.js"></script>
	<script src="game/Game_Logic.js"></script>
	<script src="game/Button.js"></script>
	<script src="game/tetris.js"></script>


	<script>
		function onClickEvent(event){
			if (Tetris.currentInstance) {
				Tetris.currentInstance.mouseClicked(event.layerX, event.layerY);
			}
		}
	</script>

</head>
<body>

<div class="container contentCell">
	<div class="col-xs-7">
		<div class="gamePanel">

			<div class="gameElements">
				<div class="ttyOutput scoreOutput" id="scoreDiv"></div>
				<div class="ttyOutput linesOutput" id="linesDiv"></div>
				<div class="ttyOutput levelOutput" id="levelDiv"></div>
				<div class="ttyOutput tickerOutput" id="tickerDiv"></div>

				<div class="gameEndOutputHidden" id="gameEndContainer">
					<div style="padding:5px;" id="gameEndDiv"></div>
				</div>

				<canvas class="gameCanvas" id="gameCanvas" width="600" height="500" onclick="onClickEvent(event)" class="gameCanvas">Your browser does not natively support Html5, or the Canvas Tag. Using this browser is slowing the progress of the web. Please get a modern browser, such as Google Chrome or Mozzila FireFox</canvas>
			</div>
		</div>
	</div>
	<div class="col-xs-4">
		<div class="controlsTitle">
			<br/>
			<b>Controls:</b><br/>
			<table border="1" cellpadding="3" class="controlsTable">
				<tr>
					<td colspan="2">
						<button class="btn" id="upLevelButton">Level Up</button>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button class="btn" id="downLevelButton">Level Down</button>
					</td>
				</tr>
				<tr class="controlsTableHeader">
					<td>Move Block</td>
					<td><span id="shiftLeft">Left</span>, <span id="shiftRight">Right</span></td>
				</tr>
				<tr class="controlsTableHeader">
					<td>Soft Drop</td>
					<td><span id="softDrop">Down</span></td>
				</tr>
				<tr class="controlsTableHeader">
					<td>Rotate</td>
					<td><span id="rotateLeft">Z</span>, <span id="rotateRight">X, Up</span></td>
				</tr>
				<tr class="controlsTableHeader">
					<td>Save Piece</td>
					<td><span id="swap">C, Shift</span></td>
				</tr>
				<tr class="controlsTableHeader">
					<td>Hard Drop</td>
					<td><span id="hardDrop">Space</span></td>
				</tr>
				<tr class="controlsTableHeader">
					<td>Pause</td>
					<td>Esc</td>
				</tr>

			</table>
		</div>
	</div>
</div>

</body>
</html>