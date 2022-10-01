
<?php
$array = array (25,12,43);
$arrayfrequency = array_fill(0, count($array), 0);
$check = -1;

echo( "number of elements stored in the array :3<br>");
for($i = 0; $i < count($array); $i++)
{
	$key=$array[$i];
	$count = 1;
		for($j = $i+1; $j < count($array); $j++)
		{
			if($array[$i] == $array[$j])
			{
				$count++;	
				$arrayfrequency [$j] = $check;
			}
		}
		if($arrayfrequency [$i] != $check)
		$arrayfrequency [$i] =$count;
   
         echo "element - ".$i.""." : ".$key. "<br>";
       
}


echo ("<br>The frequency of all elements of an array : <br>" );
for( $i = 0; $i < count($arrayfrequency); $i++)
{
	if($arrayfrequency[$i] != $check)
	{
	echo( $array[$i] ." occurs " );
	echo( $arrayfrequency[$i]." times.");
	echo("<br>");
	}
}

?>