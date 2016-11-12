<table>
	<tr style="background: #dddddd; text-transform: uppercase;"><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Miles</td></tr>
	<?php 
	if(!$bestdistanceweeks)		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Week!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestdistanceweeks as $bestdistanceweek)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestdistanceweek->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestdistanceweek->code, $bestdistanceweek->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestdistanceweek->firstname.' '.$bestdistanceweek->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestdistanceweek->distance ;?> NM</td>
			</tr>
	<?php 
				}
		} 
	?>
</table>
