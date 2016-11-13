<table width="100%">
	<tr><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Miles</td></tr>
	<?php 			
	if(!$bestdistancedays)		
		{
	?>
			<tr><td align="center" colspan="4">No Records Today!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestdistancedays as $bestdistanceday)
				{
					$rnk = "SELECT * FROM phpvms_ranks WHERE rank = '$bestdistanceday->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestdistanceday->code, $bestdistanceday->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td>
						<td><?php echo $bestdistanceday->firstname.' '.$bestdistanceday->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td>
						<td><?php echo $bestdistanceday->distance ;?> NM</td>
					</tr>
	<?php 
				}
		} 
	?>
</table>
