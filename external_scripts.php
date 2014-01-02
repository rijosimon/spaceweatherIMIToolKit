<?php
#Contains all the external scripts that the main imi.php call upon.

#function for printing current conditions

function printConditions($post, $date_cond, $location_list)
{
	echo 'For Conditions: <br><br>';
		$date='';   //holds condition for date
		if($post[0]==1)
		{
			$date='between '.substr($date_cond, 17);
		}
		else if($post[0]==2)
		{
			if($post[1]==0)
			$date='Winter';
			else if($post[1]==1)
			$date='Equinox';
			else if($post[1]==2)
			$date='Summer';
			else if($post[1]==3)
			$date='Fall';
			else if($post[1]==4)
			$date='Spring';
			
			$date=$date.'s of '.$post[2].' to '.$post[3];
		}
		echo 'In Time Period '.$date.'<br>';   //printing condition for date
		$location='';   //holds condition for location
		if($location_list)
		{
			for($i=0; $i<sizeof($location_list); $i++)
			{
				$location=$location.', '.$location_list[$i].' ';
			}
		}
		echo 'From Location(s)'.$location.'<br>';  //print condition for location
		$dayoftime='';   //placeholder for time of day
		if($post[4]==1)
		{
			$dayoftime='All Day Long';
		}
		else if($post[4]==2)
		{
			if($post[7]==1)
			{
				$dayoftime='Day';
			}
			else if($post[7]==2)
			{
				$dayoftime='Night';
			}
			else if($post[7]==3)
			{
				$dayoftime='Twilight';
			}
		}

		else if($post[4]==3)
		{
			$dayoftime='za value range between '.$_POST[5].' and '.$_POST[6];
		}
		echo 'During '.$dayoftime.'<br>';  //Printing condition for Time of Day
		
		//Print condition for kpvalue
		
		if(isset($post[8]))
		{
			$kp='between '.$post[9].' and '.$post[10];
			echo 'For Kp ranging '.$kp.'<br>';
		}
		
		//Printing condition for bzvalue
		
		if(isset($post[11]))
		{
			$bz='between '.$post[14].' and '.$post[15];
			echo 'and IMF Bz ranging '.$bz.'<br><br>';
		}	
		$model='';     //Model being analyzed
		if($post[12]==0)
			{$model='EPPIM/SEC';}
		else if($post[12]==1)
			{$model='PIM/SEC';}
		else if($post[12]==2)
			{$model='EPPIM/PIM';}
			
			//Printing the Name of Model being analyzed
			
		echo 'For Model '.$model.'<br>';     // 0 -> EPPIM/SEC  1->PIM/SEC   2-> EPPIM/PIM
		$fdata='';    //Placeholder for name of focus data being analyzed
		if($post[13]==1)
			{$fdata='f0F2';}
		else if($post[13]==2)
			{$fdata='hmf2';}
		else if($post[13]==3)
			{$fdata='TEC';}
		echo 'For Data '.$fdata.'<br>';  //Focus Data Printed
}

?>