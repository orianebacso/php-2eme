<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    <body>

		<?php
			$tobase = "";
			echo "<table>";

			for($i=0; $i<=$base; $i++) {
				
				echo "<tr>";
				for($j=0; $j<=$base; $j++) {

					echo"<th>";
					if($i>=1) && ($j>=1) {

						$nombre = ($i-1)*($j-1);
					}	if($nombre<=$base){

							echo $nombre;
					}	else {

							$nombre = base_convert($nombre, '0123456789',$tobase);
							echo $nombre;
						}
						elseif($j=0) {

							} if($i=0) {

								echo"x";
                            } 	else {

								echo($j-1);
								}
						}
						else {

							echo($j-1);
							$tobase=tobase.($j-1);
						
					echo"</th>";
				} 
				echo"</tr>";
            }
			echo"</table>";
		?>

	</body>
</html>
