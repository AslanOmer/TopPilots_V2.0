<table width="100%">
	<tr><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Miles</td></tr>
	<?php 
	if(!$bestlandingyears)		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Year!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestlandingyears as $bestlandingyear)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestlandingyear->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestlandingyear->code, $bestlandingyear->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestlandingyear->firstname.' '.$bestlandingyear->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo $bestlandingyear->landingrate ;?> /FPS</td>
			</tr>
	<?php 
				}
		} 
	?>
</table>