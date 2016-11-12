<link type="text/css" rel="stylesheet" href="http://onlinehtmltools.com/tab-generator/skins/skin6/left.css"></script>
<div class="toppilotdetailbft" style="border-radius: 10px;">
 <ul style="height: 170px;">
  <li style="border-radius: 10px;" class="tab_selected"><a href="#pilotdaybft">Today</a></li>
  <li style="border-radius: 10px;"><a href="#pilotweekbft">This Week</a></li>
  <li style="border-radius: 10px;"><a href="#pilotmonthbft">This Month</a></li>
  <li style="border-radius: 10px;"><a href="#pilotyearbft">This Year</a></li>
  <li style="border-radius: 10px;"><a href="#pilotalltimebft">All Time</a></li>
 </ul>
 <div style="height: 500px;" class="content_holder" style="border-radius: 10px;">
  <div id="pilotdaybft"><?php Template::show('toppilot/toppilotdaybft.php');?></div>
  <div id="pilotweekbft"><?php Template::show('toppilot/toppilotweekbft.php');?></div>
  <div id="pilotmonthbft"><?php Template::show('toppilot/toppilotmonthbft.php');?></div>
  <div id="pilotyearbft"><?php Template::show('toppilot/toppilotyearbft.php');?></div>
  <div id="pilotalltimebft"><?php Template::show('toppilot/toppilotalltimebft.php');?></div>
 </div><!-- /.content_holder -->
</div><!-- /.tabs_holder -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://onlinehtmltools.com/tab-generator/skinable_tabs.min.js"></script>
<script type="text/javascript">
  $('.toppilotdetailbft').skinableTabs({
    effect: 'simple_fade',
    skin: 'skin6',
    position: 'left'
  });
</script>