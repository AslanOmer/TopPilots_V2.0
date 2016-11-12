<link type="text/css" rel="stylesheet" href="http://onlinehtmltools.com/tab-generator/skins/skin6/left.css"></script>
<div class="toppilotdetailbr" style="border-radius: 10px;">
 <ul style="height: 170px;">
  <li style="border-radius: 10px;" class="tab_selected"><a href="#pilotdaybr">Today</a></li>
  <li style="border-radius: 10px;"><a href="#pilotweekbr">This Week</a></li>
  <li style="border-radius: 10px;"><a href="#pilotmonthbr">This Month</a></li>
  <li style="border-radius: 10px;"><a href="#pilotyearbr">This Year</a></li>
  <li style="border-radius: 10px;"><a href="#pilotalltimebr">All Time</a></li>
 </ul>
 <div style="height: 500px;" class="content_holder" style="border-radius: 10px;">
  <div id="pilotdaybr"><?php Template::show('toppilot/toppilotday.php');?></div>
  <div id="pilotweekbr"><?php Template::show('toppilot/toppilotweek.php');?></div>
  <div id="pilotmonthbr"><?php Template::show('toppilot/toppilotmonth.php');?></div>
  <div id="pilotyearbr"><?php Template::show('toppilot/toppilotyear.php');?></div>
  <div id="pilotalltimebr"><?php Template::show('toppilot/toppilotalltime.php');?></div>
 </div><!-- /.content_holder -->
</div><!-- /.tabs_holder -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://onlinehtmltools.com/tab-generator/skinable_tabs.min.js"></script>
<script type="text/javascript">
  $('.toppilotdetailbr').skinableTabs({
    effect: 'simple_fade',
    skin: 'skin6',
    position: 'left'
  });
</script>