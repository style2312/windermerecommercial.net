<!-- #include virtual="inc/incStageTop.asp" -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Windermere Commercial </title>
	<meta name="description" content="Windermere Commercial Real Estate" />
	<meta name="keywords" content="commercial real estate, listings, commercial properties, for sale, for lease, spokane, coeur d'alene, eastern washington, inland northwest, north idaho, sds realty, seattle, tacoma, portland, bend, washington state, oregon, idaho, northwest, puget sound" />
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<div id="Index">
			<div id="header">
				<div id="header-top"></div>
				<div id="header-middle">   
					<div id="header-left" style="height:300px;"> 
						<img id="logo" src="images/logo.jpg"/>
						<div id="contact">
							<p>Our goal is to seek and maintain long term client relationships by offering innovative, creative and successful strategies tailored to meet each of our client's goals and objectives.</p>
							<h2><span>(509)</span> 747-1051</h2>
							<h3>2829 South Grand Blvd, Suite 101<br />
							Spokane, WA 99223</h3>
						</div>  
					</div>  
						<div id="middle-home-right" style="z-index:800;">
							<div id="TopNav" style="margin:0 auto; position:relative; background-color:#003e7b;">
								<ul>
									<li><a href="home2.html">Home</a></li>
									<li><a href="agents.html">Our Agents</a></li>
									<li><a href="customSearch.html"  id="CustomSearch">Custom Search</a></li>
									<li><a href="aboutus.html">Our Company</a></li>
									<li><a href="contactus.html">Contact Us</a></li>
								</ul>
							</div>

							<!--<table id="top-nav">
								<tr>
									<td><a href="Index.html"><div class="button">Home</div></a></td>
									<td><a href="agents.html"><div class="button">Our Agents</div></a></td>
									<td><a href="customSearch.html"><div class="button" id="search">Custom Search</div></a></td>
									<td><a href="aboutus.html"><div class="button" id="company">Our Company</div></a></td>
									<td><a href="contactus.html"><div class="button">Contact Us</div></a></td>
								</tr>
							</table>-->
							
						</div>
						<div id="divOuterStyle" style="position:relative; width:755px; height:350px; line-height:0; overflow: hidden;">
							<div id="idPanel1" style="position: absolute; z-index: 5; opacity: 1;">
								<div id="idPlayWrapper1">
								   <img src="images/river.jpg" id="idTitleSlideImage1" width="755" height="350" style="z-index:95;">
								</div>
							</div>
							<div id="idPanel2" style="position: absolute; z-index: 5; opacity: 1;">
								<div id="idPlayWrapper2">
									<img src="images/hospitality.cb.jpg" id="idTitleSlideImage2" style="border:0; width:400px; height:350px; z-index:76;">
								</div>
							</div>
							<div id="idPanel3" style="position: absolute; z-index: 5; opacity: 1;">
								<div id="idPlayWrapper3">
									<img src="images/land.jpg" id="idTitleSlideImage3" style="border:0; width:755px; height:350px; z-index:76;">
								</div>
							</div>
						</div>
				</div>  
			</div> <!-- /header -->
			<div id="header-bottom"></div>
	</div> 	
			
	</body>
</html>




<script language="javascript">
	<!--
	var nTotalPanels = 3;
	var nPanel = 3;
	var nOldPanel = 0;
	var nStart = null;
	var nFadeTime = 700;
	var nHangTime = 7000;
	var nHangTimer = null;

	// check frame depth
	if (window != window.parent) { window.parent.location = window.location; }

	function autoAdvance() {
		showPanel((nPanel % nTotalPanels) + 1);
		nHangTimer = window.setTimeout('autoAdvance()', nHangTime)
	}
	nHangTimer = window.setTimeout('autoAdvance()', nHangTime)

	function fadePanel() {
		var t = getTimer() - nStart;
		if (t < nFadeTime) {
			var p = document.getElementById('idPanel' + nPanel);
			n = Math.round((t / nFadeTime) * 100);
			p.style.opacity = (n / 100);
			p.style.filter = 'alpha(opacity=' + n + ')';
			window.setTimeout('fadePanel()', 20);
		}
		else {
			var p = document.getElementById('idPanel' + nPanel);
			p.style.opacity = '';
			p.style.filter = '';
			var op = document.getElementById('idPanel' + nOldPanel);
			op.style.display = 'none';
		}
		if (t < nFadeTime) {
				
			n = Math.round((t / nFadeTime) * 100);
			window.setTimeout('fadePanel()', 20);
		}
		else {
			var p = document.getElementById('idPanel' + nPanel);
			p.style.opacity = '';
			p.style.filter = '';
			var op = document.getElementById('idPanel' + nOldPanel);
			op.style.display = 'none';
		}
	}

	function setPanel(i) {
		if (nHangTimer != null) {
			window.clearTimeout(nHangTimer);
			nHangTimer = null;
		}
		showPanel(i);
		return false;
	}

	function showPanel(i) {
		if (i != nPanel) {
			nStart = getTimer();
			nOldPanel = nPanel;
			nPanel = i;
			for (a = 1; a <= nTotalPanels; a++) {
				var p = document.getElementById('idPanel' + a);
				if (a == nPanel) {
					p.style.opacity = '0.01';
					p.style.filter = 'alpha(opacity=01)';
					p.style.zIndex = 10;
					p.style.display = '';
				}
				else {
					if (a == nOldPanel) {
						p.style.opacity = '1';
						p.style.filter = 'alpha(opacity=100)';
						p.style.zIndex = 5;
						p.style.display = '';
					}
					else {
						p.style.display = 'none';
					}
				}
			}
			fadePanel();
			showDots(i);
		}
	}

	function showDots(i) {
		for (a = 1; a <= nTotalPanels; a++) {

			var d = document.getElementById('idDot' + a);
			if (a == i) {
	
				d.style.background = "url(/art/TP/Features/hdrDotOn.png)";
			}
			else {
				d.style.background = "url(/art/TP/Features/hdrDotOff.png)";
			}
		}
	}
	

	function getTimer() {
		return (new Date()).getTime();
	}

	
	
	// -->
</script>