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
	<script src="slideshow.js" type="text/javascript"></script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<div id="Index">
		<div id="header">
			<div id="header-top"></div>
			<div id="header-middle" style="height:300px;">   
				<div id="header-left" style="height:300px;"> 
					<img id="logo" src="images/logo.jpg"/>
					<div id="contact">
						<h2><span>(509)</span> 747-1051</h2>
						<h3>2829 South Grand Blvd, Suite 101<br />
						Spokane, WA 99223</h3>
					</div>  
				</div>  
				<div id="ShortRightPanel" >
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
					<div id="divOuterStyle" style="position:relative; width:952px; height:350px; line-height:0; overflow: hidden;">
						<div id="dotsWrapper">
							<div id="ytDots" style="position:absolute; z-index:98;">
								<div id="idDot1" class="dot-off" style="top: 290px; left: 24px; cursor: pointer; background: url(&quot;/art/TP/Features/hdrDotOff.png&quot;);" onclick="setPanel(1);"></div>
								<div id="idDot2" class="dot-off" style="top: 290px; left: 62px; cursor: pointer; background: url(&quot;/art/TP/Features/hdrDotOff.png&quot;);" onclick="setPanel(2);"></div>
								<div id="idDot3" class="dot-off" style="top: 290px; left: 100px; cursor: pointer; background: url(&quot;/art/TP/Features/hdrDotOn.png&quot;);" onclick="setPanel(3);"></div>
								<div id="idDot4" class="dot-off" style="top: 290px; left: 138px; cursor: pointer; background: url(&quot;/art/TP/Features/hdrDotOff.png&quot;);" onclick="setPanel(4);"></div>
								<div id="idDot5" class="dot-on" style="top: 290px; left: 176px; cursor: pointer; background: url(&quot;/art/TP/Features/hdrDotOff.png&quot;);" onclick="setPanel(5);"></div>
							</div>
						</div>
						<div id="idPanel1" style="position: absolute; z-index: 5; opacity: 1; display: none;">
							<img src="images/retail.cb.jpg" id="idTitleSlideImage1" width="951" height="536" style="margin-top:-75px;  z-index:95;">
						</div>
						<div id="idPanel2" style="position: absolute; z-index: 5; opacity: 1; display: none;">
							<img src="images/business.cb.jpg" id="idTitleSlideImage2" style="border:0; width:952px; height:536px; margin-top:-75px; z-index:86;">
						</div>
						<div id="idPanel3" style="position: absolute; z-index: 10;">
							<img src="images/hospitality.cb.jpg" id="idTitleSlideImage3" style="border:0; width:952px; height:536px; z-index:76;  margin-top:-70px;">
						</div>
					</div>
				</div>  
				<div id="BottomBorder"></div>
			</div> <!-- /header -->
			
			<div id="LeftPanel" >
				<img src="images/manito.jpg" width="300" height="175"  /><br/>
				
			</div>
			<div id="RightPanel">
				<h1>About Windermere Commercial</h1>
				<div id="contact">
					<p>At Windermere, we understand that businesses need homes too, so our commercial brokers represent everything from retail and office spaces to 
						industrial buildings and multi-family communities. Our extensive knowledge of local markets allows us to offer you a full range of services
						that match your commercial real estate needs. Whether you’re a business looking to buy or lease space, or an investor interested in private
						capital or institutional properties, you'll benefit from our experience in all phases of commercial real estate, including leasing, business
						development, brokerage, property management, and consulting. Windermere Commercial has established connections with highly reputable brokers
						throughout the nation. We also have the benefit of being affiliated with Windermere Real Estate, so you aren’t simply hiring a broker, you’re
						hiring an entire company with an extensive team of dedicated professionals whose highest priority is to help you reach your commercial real
						estate goals.
					</p>
				</div>  	
			</div>
		</div>
		
	</div>
 


<script language="javascript">
	<!--
	var nTotalPanels = 3;
	var nPanel = 3;
	var nOldPanel = 0;
	var nStart = null;
	var nFadeTime = 700;
	var nHangTime = 4000;
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
</body>
</html>