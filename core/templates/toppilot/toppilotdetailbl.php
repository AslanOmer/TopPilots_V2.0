<link type="text/css" rel="stylesheet" href="http://onlinehtmltools.com/tab-generator/skins/skin6/left.css"></script>
<div class="toppilotdetailbl" style="border-radius: 10px;">
 <ul style="height: 170px;">
  <li style="border-radius: 10px;" class="tab_selected"><a href="#pilotdaybl">Today</a></li>
  <li style="border-radius: 10px;"><a href="#pilotweekbl">This Week</a></li>
  <li style="border-radius: 10px;"><a href="#pilotmonthbl">This Month</a></li>
  <li style="border-radius: 10px;"><a href="#pilotyearbl">This Year</a></li>
  <li style="border-radius: 10px;"><a href="#pilotalltimebl">All Time</a></li>
 </ul>
 <div style="height: 500px;" class="content_holder" style="border-radius: 10px;">
  <div id="pilotdaybl"><?php Template::show('toppilot/toppilotlandingday.php');?></div>
  <div id="pilotweekbl"><?php Template::show('toppilot/toppilotlandingweek.php');?></div>
  <div id="pilotmonthbl"><?php Template::show('toppilot/toppilotlandingmonth.php');?></div>
  <div id="pilotyearbl"><?php Template::show('toppilot/toppilotlandingyear.php');?></div>
  <div id="pilotalltimebl"><?php Template::show('toppilot/toppilotalltimebl.php');?></div>
 </div><!-- /.content_holder -->
</div><!-- /.tabs_holder -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://onlinehtmltools.com/tab-generator/skinable_tabs.min.js"></script>
<script type="text/javascript">
  $('.toppilotdetailbl').skinableTabs({
    effect: 'simple_fade',
    skin: 'skin6',
    position: 'left'
  });
</script>