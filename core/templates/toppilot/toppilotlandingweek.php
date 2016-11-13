<table width="100%">
	<tr><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Miles</td></tr>
	<?php 
	if(!$bestlandingweeks)		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Week!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestlandingweeks as $bestlandingweek)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestlandingweek->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestlandingweek->code, $bestlandingweek->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestlandingweek->firstname.' '.$bestlandingweek->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestlandingweek->landingrate ;?> /FPS</td>
			</tr>
	<?php 
				}
		} 
	?>
</table>