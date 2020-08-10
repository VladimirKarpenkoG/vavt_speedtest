<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" />
<meta charset="UTF-8" />
<link rel="shortcut icon" href="/favicon.ico">

<script type="text/javascript" src="/assets/js/speedtest.js"></script>
<script type="text/javascript" src="/assets/js/ui.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<title>VPN SpeedTest</title>
</head>
<body>
  
<h1>VPN SpeedTest</h1>
<div id="testWrapper">
	<div id="startStopBtn" onclick="startStop()"></div>
	<div id="test">
		<div class="testGroup">
			<div class="testArea2">
				<div class="testName">Ping</div>
				<div id="pingText" class="meterText" style="color:#AA6060"></div>
				<div class="unit">ms</div>
			</div>
			<div class="testArea2">
				<div class="testName">Jitter</div>
				<div id="jitText" class="meterText" style="color:#AA6060"></div>
				<div class="unit">ms</div>
			</div>
		</div>
		<div class="testGroup">
			<div class="testArea">
				<div class="testName">Download</div>
				<canvas id="dlMeter" class="meter"></canvas>
				<div id="dlText" class="meterText"></div>
				<div class="unit">Mbps</div>
			</div>
			<div class="testArea">
				<div class="testName">Upload</div>
				<canvas id="ulMeter" class="meter"></canvas>
				<div id="ulText" class="meterText"></div>
				<div class="unit">Mbps</div>
			</div>
		</div>
		<div id="ipArea">
			<span id="ip"></span>
		</div>
		<div id="shareArea" style="display:none">
			<h3>Share results</h3>
			<p>Test ID: <span id="testId"></span></p>
			<input type="text" value="" id="resultsURL" readonly="readonly" onclick="this.select();this.focus();this.select();document.execCommand('copy');alert('Link copied')"/>
			<img src="" id="resultsImg" />
		</div>
	</div>
</div>
<script type="text/javascript">setTimeout(function(){initUI()},100);</script>
</body>
</html>
