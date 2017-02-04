
<ul>
<?php
//print_r( explode(";",$states->country));
$j =0;
$flag = 0;
foreach($states as $state)
{
	
	if($state->country != '')
	{	
		$linearray = explode(";",$state->country);
		for($i = 0; $i < count($linearray); $i++)
		{
			$linearray[$i] = trim($linearray[$i]," ");
			$array[$j] = $linearray[$i];
			$j++;
			
		}
		
		
		
	}
	
}
$j =0;
$flag =0;
for($i = 0; $i<count($array) ;$i++)
{
	if($j == 0)
	{
		$country_array[$j] = $array[$i];
		$j++;
	}
	else
	{
		for($m = 0 ; $m < $j ; $m++)
		{
			
			if(!strcasecmp($country_array[$m],$array[$i]) )
			{
				
				$flag = 1;
				break;
			}
		}
		if($flag == 0)
		{
			$country_array[$j] = $array[$i];
			$j++;
		}
	}
	$flag = 0;
}

for($k = 0; $k < count($country_array); $k++)
{
	?><li><?php
	echo $country_array[$k];
	?></li><?php
}
?>
</ul>
