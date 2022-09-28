<?php
 echo "<br> ============== Array Exercise 2================ " . "<br>";
  ?>
 	 <!DOCTYPE html>
	 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<title>Large Cities</title>
	 </head>
	 <body>
	 	<h1 style="color: red; font-weight: bold;">Large Cities</h1><br><!-- page header -->
<?php
		$largecitiesx = array("Tokyo","Mexico City","New York City","Mumbai",
        "Seoul","Shanghai","Lagos","Buenos Aires","Cairo", "London.");
		$counter = count($largecitiesx);
		for($i = 0; $i < $counter; $i++){
            if ($i<9){echo $largecitiesx[$i].', ';}
            else {echo $largecitiesx[$i];}
		}
		echo "<br/>";
		sort($largecitiesx);
		?>

		<ul>
			<?php
			for($i = 0; $i < $counter; $i++){
				echo "<li>$largecitiesx[$i]</li>";
			}
			?>
		</ul>

		<ul>
			<?php
			$largecitiesy = array("Los Angeles", "Calcutta", "Osaka", "Beijing");
			$largecitiesxy = array_merge($largecitiesx, $largecitiesy);
			sort($largecitiesxy);
			$counter2 = count($largecitiesxy);
			for($i = 0; $i < $counter2; $i++){
				echo "<li>$largecitiesxy[$i]</li>";
			}
			?>
            
            </body>
	 </html>