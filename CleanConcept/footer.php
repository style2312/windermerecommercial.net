
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
</body>
</html>
