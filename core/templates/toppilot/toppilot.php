<h3 style="margin-left: 80px; margin-top: 75px;">Top Pilots</h3>
<div style="border: solid 3px; margin-bottom: 5px; padding: 25px; border-radius: 5px;" class="container">
	<ul class="toppilot">
		<li><a id="defaultOpen" href="javascript:void(0)" class="toppilotdet" onclick="toppilottabs(event, 'br')">Best Revenues</a></li>
		<li><a href="javascript:void(0)" class="toppilotdet"onclick="toppilottabs(event, 'bd')">Best Distance</a></li>
		<li><a href="javascript:void(0)" class="toppilotdet" onclick="toppilottabs(event, 'bft')">Best Flight Time</a></li>
		<li><a href="javascript:void(0)" class="toppilotdet" onclick="toppilottabs(event, 'bl')">Best Landing Rate</a></li>
	</ul>
	<div id="br" class="toppilotcon"><?php Template::show('toppilot/toppilotdetailbr.php');?></div>
	<div id="bd" class="toppilotcon"><?php Template::show('toppilot/toppilotdetailbd.php');?></div>
	<div id="bft" class="toppilotcon"><?php Template::show('toppilot/toppilotdetailbft.php');?></div>
	<div id="bl" class="toppilotcon"><?php Template::show('toppilot/toppilotdetailbl.php');?></div>
</div>
<script>
document.getElementById("defaultOpen").click();
</script>