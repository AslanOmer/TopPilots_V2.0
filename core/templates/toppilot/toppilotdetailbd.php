<link type="text/css" rel="stylesheet" href="http://onlinehtmltools.com/tab-generator/skins/skin6/left.css"></script>
<div class="toppilotdetailbd" style="border-radius: 10px;">
 <ul style="height: 170px;">
  <li style="border-radius: 10px;" class="tab_selected"><a href="#pilotdaybd">Today</a></li>
  <li style="border-radius: 10px;"><a href="#pilotweekbd">This Week</a></li>
  <li style="border-radius: 10px;"><a href="#pilotmonthbd">This Month</a></li>
  <li style="border-radius: 10px;"><a href="#pilotyearbd">This Year</a></li>
  <li style="border-radius: 10px;"><a href="#pilotalltimebd">All Time</a></li>
 </ul>
 <div style="height: 500px;" class="content_holder" style="border-radius: 10px;">
  <div id="pilotdaybd"><?php Template::show('toppilot/toppilotdaybd.php');?></div>
  <div id="pilotweekbd"><?php Template::show('toppilot/toppilotweekbd.php');?></div>
  <div id="pilotmonthbd"><?php Template::show('toppilot/toppilotmonthbd.php');?></div>
  <div id="pilotyearbd"><?php Template::show('toppilot/toppilotyearbd.php');?></div>
  <div id="pilotalltimebd"><?php Template::show('toppilot/toppilotalltimebd.php');?></div>
 </div><!-- /.content_holder -->
</div><!-- /.tabs_holder -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://onlinehtmltools.com/tab-generator/skinable_tabs.min.js"></script>
<script type="text/javascript">
  $('.toppilotdetailbd').skinableTabs({
    effect: 'simple_fade',
    skin: 'skin6',
    position: 'left'
  });
</script>