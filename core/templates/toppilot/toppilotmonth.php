<table width="100%">
	<tr><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Amount</td></tr>
	<?php 
	if(!$bestrevenuemonths)		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Month!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestrevenuemonths as $bestrevenuemonth)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestrevenuemonth->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestrevenuemonth->code, $bestrevenuemonth->pilotid);
	?>
			<tr>
				<td><?php echo $pilotcode ;?></td>
				<td><?php echo $bestrevenuemonth->firstname.' '.$bestrevenuemonth->lastname ;?></td>
				<td><img src="<?php echo $rank ;?>"></td>
				<td><?php echo FinanceData::formatMoney($bestrevenuemonth->revenue) ;?></td>
			</tr>
	<?php 
				}
		} 
			?>
			
		</table>
		
