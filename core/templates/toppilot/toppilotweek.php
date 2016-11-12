<table>
	<tr style="background: #dddddd; text-transform: uppercase;"><td>Pilot ID</td><td>Name</td><td>Rank</td><td>Amount</td></tr>
	<?php 
	if(!$bestrevenueweeks)		
		{
	?>
			<tr><td align="center" colspan="4">No Records This Week!</td></tr>
	<?php
		}
	else
		{
			foreach ($bestrevenueweeks as $bestrevenueweek)
				{
					$rnk = "SELECT * FROM ".TABLE_PREFIX."ranks WHERE rank = '$bestrevenueweek->rank'";
					$rn = DB::get_row($rnk);
					$rank = $rn->rankimage;
					$pilotcode = PilotData::getPilotCode($bestrevenueweek->code, $bestrevenueweek->pilotid);
	?>
					<tr>
						<td><?php echo $pilotcode ;?></td><td><?php echo $bestrevenueweek->firstname.' '.$bestrevenueweek->lastname ;?></td>
						<td><img src="<?php echo $rank ;?>"></td><td><?php echo FinanceData::formatMoney($bestrevenueweek->revenue) ;?></td>
					</tr>
	<?php 
				}
		} 
	?>
</table>
